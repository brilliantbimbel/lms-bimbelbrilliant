<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Tryout;
use App\Models\Ujian;        // Model ini yang digunakan untuk data ujian
use App\Models\Materi;
use App\Models\JawabanSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class KuisController extends Controller
{
    public function index()
    {
        $siswa = Auth::user();
        $siswa->load('kelas');
        $kelasIds = $siswa->kelas->pluck('id')->toArray();
        $listMapel = config('mapel.list');

        $tryouts = Tryout::where(function ($query) use ($kelasIds) {
                if (!empty($kelasIds)) {
                    $query->whereIn('kelas_id', $kelasIds)->orWhereNull('kelas_id');
                } else {
                    $query->whereNull('kelas_id');
                }
            })
            ->withCount('soals')
            ->latest()
            ->get();

        $riwayatUjian = Ujian::where('user_id', $siswa->id)
            ->get()
            ->keyBy('tryout_id');

        $materis = Materi::where(function ($query) use ($kelasIds) {
                if (!empty($kelasIds)) {
                    $query->whereIn('kelas_id', $kelasIds)->orWhereNull('kelas_id');
                } else {
                    $query->whereNull('kelas_id');
                }
            })
            ->latest()
            ->get();

        $materiSelesaiIds = [];
        if (Schema::hasTable('materi_siswa_selesai')) {
            $materiSelesaiIds = DB::table('materi_siswa_selesai')
                ->where('user_id', $siswa->id)
                ->pluck('materi_id')
                ->toArray();
        }

        // Variabel $siswa ditambahkan ke dalam compact
        return view('siswa.dashboard', compact('siswa', 'tryouts', 'riwayatUjian', 'materis', 'materiSelesaiIds'));
    }

    public function mulai($id)
    {
        $tryout = Tryout::with('soals')->findOrFail($id);
        $siswa = Auth::user();

        $ujian = Ujian::firstOrCreate(
            [
                'user_id'   => $siswa->id,
                'tryout_id' => $tryout->id,
            ],
            [
                'status'    => 'sedang_mengerjakan',
                'nilai'     => 0,
            ]
        );

        if (in_array($ujian->status, ['selesai', 'perlu_pemeriksaan', 'menunggu_koreksi'])) {
            return redirect()->route('siswa.dashboard')->with('info', 'Kamu sudah mengirimkan jawaban kuis ini.');
        }

        return view('siswa.kuis.mulai', compact('tryout', 'ujian'));
    }

    public function simpan(Request $request, $tryout_id)
    {
        $tryout = Tryout::with('soals')->findOrFail($tryout_id);
        $siswa = Auth::user();
        $jawabanSiswaInput = $request->input('jawaban', []);

        $ujian = Ujian::firstOrCreate(
            [
                'user_id'   => $siswa->id,
                'tryout_id' => $tryout->id,
            ],
            [
                'status' => 'sedang_mengerjakan',
            ]
        );

        $totalBobotSoal = (float) $tryout->soals->sum('bobot');
        $totalSkorPG = 0;
        $adaSoalIsian = false;

        foreach ($tryout->soals as $soal) {
            $tipeSoal = strtolower($soal->tipe_soal ?? '');
            $jawabanUser = $jawabanSiswaInput[$soal->id] ?? null;

            // CEK APAKAH SOAL ISIAN / URAIAN
            if (str_contains($tipeSoal, 'isian') || str_contains($tipeSoal, 'essay') || str_contains($tipeSoal, 'uraian')) {
                $adaSoalIsian = true;

                JawabanSiswa::updateOrCreate(
                    [
                        'ujian_id' => $ujian->id,
                        'soal_id'  => $soal->id,
                    ],
                    [
                        'jawaban'  => is_array($jawabanUser) ? implode(',', $jawabanUser) : $jawabanUser,
                        'is_benar' => null,
                        'nilai'    => 0,
                    ]
                );
            } else {
                // SOAL PG / PG KOMPLEKS
                $isBenar = false;

                if (str_contains($tipeSoal, 'kompleks') || str_contains($tipeSoal, 'checkbox')) {
                    $isBenar = $this->cekJawabanPGKompleks($jawabanUser, $soal->kunci_jawaban);
                } else {
                    $jawabanStr = is_array($jawabanUser) ? implode('', $jawabanUser) : (string)$jawabanUser;
                    $isBenar = (strtolower(trim($jawabanStr)) === strtolower(trim((string)$soal->kunci_jawaban)));
                }

                $nilaiSoal = $isBenar ? (float) ($soal->bobot ?? 1) : 0;
                $totalSkorPG += $nilaiSoal;

                JawabanSiswa::updateOrCreate(
                    [
                        'ujian_id' => $ujian->id,
                        'soal_id'  => $soal->id,
                    ],
                    [
                        'jawaban'  => is_array($jawabanUser) ? implode(',', $jawabanUser) : $jawabanUser,
                        'is_benar' => $isBenar ? 1 : 0,
                        'nilai'    => $nilaiSoal,
                    ]
                );
            }
        }

        if ($adaSoalIsian) {
            $ujian->update([
                'status' => 'perlu_pemeriksaan',
            ]);
            $pesan = 'Jawaban berhasil dikirim! Menunggu pemeriksaan dari guru untuk soal isian.';
        } else {
            $nilaiAkhir = $totalBobotSoal > 0 ? round(($totalSkorPG / $totalBobotSoal) * 100, 1) : 0;

            $ujian->update([
                'status' => 'selesai',
                'nilai'  => $nilaiAkhir,
            ]);
            $pesan = 'Kuis selesai! Nilai kamu: ' . $nilaiAkhir;
        }

        return redirect()->route('siswa.dashboard')->with('success', $pesan);
    }

    /**
     * Helper fungsi untuk memeriksa kecocokan jawaban PG Kompleks secara fleksibel
     */
    private function cekJawabanPGKompleks($jawabanUser, $kunciJawaban)
    {
        if (empty($jawabanUser) || empty($kunciJawaban)) {
            return false;
        }

        // Normalisasi Jawaban User
        if (is_array($jawabanUser)) {
            $arrUser = array_map(fn($v) => strtoupper(trim($v)), $jawabanUser);
        } else {
            $arrUser = array_map(fn($v) => strtoupper(trim($v)), explode(',', (string)$jawabanUser));
        }

        // Normalisasi Kunci Jawaban
        $jsonKey = json_decode($kunciJawaban, true);
        if (is_array($jsonKey)) {
            $arrKunci = array_map(fn($v) => strtoupper(trim($v)), $jsonKey);
        } else {
            $arrKunci = array_map(fn($v) => strtoupper(trim($v)), explode(',', (string)$kunciJawaban));
        }

        // Filter elemen kosong & urutkan
        $arrUser = array_values(array_filter($arrUser));
        $arrKunci = array_values(array_filter($arrKunci));

        sort($arrUser);
        sort($arrKunci);

        return $arrUser === $arrKunci;
    }

    /**
     * Menampilkan halaman isi materi / modul
     */
    public function bacaMateri($id)
    {
        $materi = Materi::findOrFail($id);
        $siswa = Auth::user();

        // Tandai otomatis bahwa siswa sudah membaca/menyelesaikan materi ini
        if (Schema::hasTable('materi_siswa_selesai')) {
            DB::table('materi_siswa_selesai')->updateOrInsert(
                [
                    'user_id'   => $siswa->id,
                    'materi_id' => $materi->id,
                ],
                [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }

        return view('siswa.materi.baca', compact('materi'));
    }
    public function review($id)
    {
        $tryout = Tryout::with('soals')->findOrFail($id);

        // Menggunakan model Ujian (bukan UjianSiswa)
        $ujian = Ujian::where('user_id', auth()->id())
            ->where('tryout_id', $id)
            ->firstOrFail();

        // Mengambil jawaban siswa berdasarkan ujian_id
        $jawabanSiswa = JawabanSiswa::where('ujian_id', $ujian->id)
            ->get();

        return view('siswa.kuis.review', compact('tryout', 'ujian', 'jawabanSiswa'));
    }
}
