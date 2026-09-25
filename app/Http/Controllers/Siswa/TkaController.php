<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\TkaPaket;
use App\Models\TkaSesi;
use App\Models\TkaJawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TkaController extends Controller
{
    public function login(Request $request)
    {
        $paketId = $request->query('paket_id', 1);
        return view('siswa.tka.login', compact('paketId'));
    }

    public function postLogin(Request $request)
    {
        $paketId = $request->input('paket_id', 1);
        return redirect()->route('siswa.konfirmasi_data', ['paket_id' => $paketId]);
    }

    public function konfirmasiData(Request $request)
    {
        $paketId = $request->query('paket_id', 1);
        $paket = TkaPaket::find($paketId) ?? TkaPaket::first();

        if (!$paket) {
            return redirect()->route('siswa.dashboard')->with('error', 'Paket soal tidak ditemukan.');
        }

        // --- PENGECEKAN HAK AKSES KELAS/JENJANG ---
        $user = Auth::user();
        $userJenjang = $user->kelas->pluck('jenjang')->toArray();
        $userNamaKelas = $user->kelas->pluck('nama_kelas')->toArray();

        $aksesDiizinkan = in_array($paket->kelas, $userJenjang) || in_array($paket->kelas, $userNamaKelas);

        if (!$aksesDiizinkan) {
            return redirect()->route('siswa.dashboard')
                ->with('error', 'Anda tidak memiliki akses ke paket tes kelas/jenjang ' . $paket->kelas);
        }

        // Generate Token Ujian (6 karakter acak huruf kapital) jika belum ada di session
        if (!session()->has('tka_token')) {
            session(['tka_token' => strtoupper(Str::random(6))]);
        }
        $token = session('tka_token');

        return view('siswa.tka.login', compact('paketId', 'paket', 'token'));
    }

    public function postKonfirmasiData(Request $request)
    {
        // 1. Validasi Input Formulir
        $request->validate([
            'nama'     => 'required|string',
            'hari'     => 'required',
            'bulan'    => 'required',
            'tahun'    => 'required',
            'token'    => 'required|string',
            'paket_id' => 'required',
        ], [
            'nama.required'  => 'Ketikkan nama peserta terlebih dahulu.',
            'hari.required'  => 'Pilih tanggal lahir lengkap.',
            'bulan.required' => 'Pilih bulan lahir.',
            'tahun.required' => 'Pilih tahun lahir.',
            'token.required' => 'Masukkan token ujian.',
        ]);

        // 2. Cocokkan Token dengan Token Session
        $inputToken = strtoupper(trim($request->input('token')));
        $validToken = session('tka_token');

        if ($inputToken !== $validToken) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Token yang Anda masukkan salah / tidak sesuai!');
        }

        // 3. Simpan data konfirmasi siswa sementara jika diperlukan
        session([
            'tka_konfirmasi' => [
                'nama' => $request->nama,
                'tgl_lahir' => $request->tahun . '-' . $request->bulan . '-' . $request->hari,
            ]
        ]);

        return redirect()->route('siswa.konfirmasi_tes', ['paket_id' => $request->input('paket_id', 1)]);
    }

    public function konfirmasiTes(Request $request)
{
    $paketId = $request->query('paket_id', 1);

    // Alihkan langsung ke prosesTes agar tidak duplikasi logika
    return redirect()->route('siswa.proses_tes', ['paket_id' => $paketId]);
}

    public function startTes(Request $request)
    {
        $paketId = $request->input('paket_id') ?? $request->query('paket_id') ?? 1;
        return redirect()->route('siswa.proses_tes', ['paket_id' => $paketId]);
    }

 public function prosesTes(Request $request)
    {
        $paketId = $request->query('paket_id', 1);
        $paket = TkaPaket::with('soals')->find($paketId);

        if (!$paket) {
            return redirect()->route('siswa.dashboard')->with('error', 'Paket soal tidak ditemukan.');
        }

        // --- PENGECEKAN HAK AKSES KELAS/JENJANG ---
        $user = Auth::user();
        $userJenjang = $user->kelas->pluck('jenjang')->toArray();
        $userNamaKelas = $user->kelas->pluck('nama_kelas')->toArray();

        $aksesDiizinkan = in_array($paket->kelas, $userJenjang) || in_array($paket->kelas, $userNamaKelas);

        if (!$aksesDiizinkan) {
            return redirect()->route('siswa.dashboard')
                ->with('error', 'Anda tidak memiliki akses ke paket tes kelas/jenjang ' . $paket->kelas);
        }

        return view('siswa.tka.proses_tes', compact('paket'));
    }

    // --- METHOD PENYIMPANAN & KALKULASI NILAI ---
    public function simpanJawaban(Request $request, $paket_id)
    {
        $paket = TkaPaket::with('soals')->findOrFail($paket_id);
        $inputJawaban = $request->input('jawaban', []);

        // 1. Dapatkan atau buat Sesi Ujian siswa
        $sesi = TkaSesi::firstOrCreate(
            [
                'user_id' => Auth::id(),
                'tka_paket_id' => $paket->id,
            ],
            [
                'waktu_mulai' => now(),
                'status' => 'mengerjakan'
            ]
        );

        $totalSkorSiswa = 0;
        $totalBobotMaksimal = 0;

        // 2. Loop & Hitung Skor Tiap Soal
        foreach ($paket->soals as $soal) {
            $jawabanUser = $inputJawaban[$soal->id] ?? null;

            // Parse Kunci Jawaban
            $kunci = $soal->kunci_json;
            if (is_string($kunci)) {
                $kunci = json_decode($kunci, true) ?? $kunci;
            }

            $skorSoal = 0;
            $bobotSoal = 0;

            // --- A. PILIHAN GANDA (PG BIASA) ---
            if ($soal->tipe_soal === 'pg') {
                $bobotSoal = 1;
                $kunciVal = is_array($kunci) ? ($kunci[0] ?? '') : $kunci;

                if (!empty($jawabanUser) && strtoupper(trim((string)$jawabanUser)) === strtoupper(trim((string)$kunciVal))) {
                    $skorSoal = 1;
                }
            }
            // --- B. PILIHAN GANDA KOMPLEKS (MULTI CHECKBOX) ---
            elseif ($soal->tipe_soal === 'pg_kompleks') {
                $kunciArray = is_array($kunci) ? $kunci : [$kunci];
                $userArray = is_array($jawabanUser) ? $jawabanUser : [];

                // Bobot maksimal = Jumlah opsi kunci yang benar
                $bobotSoal = count($kunciArray);

                $skorBenar = 0;
                $jumlahSalah = 0;

                foreach ($userArray as $ans) {
                    if (in_array($ans, $kunciArray)) {
                        $skorBenar += 1; // +1 per jawaban benar
                    } else {
                        $jumlahSalah += 1; // Deteksi jawaban salah
                    }
                }

                // Hitung penalti (-0.5 per salah) & pastikan tidak negatif
                $skorSoal = max(0, $skorBenar - ($jumlahSalah * 0.5));
            }
            // --- C. BENAR / SALAH (PERNYATAAN) ---
            elseif ($soal->tipe_soal === 'benar_salah') {
                $kunciArray = is_array($kunci) ? $kunci : [];
                $userArray = is_array($jawabanUser) ? $jawabanUser : [];

                // Bobot maksimal = Jumlah baris pernyataan
                $bobotSoal = count($kunciArray) > 0 ? count($kunciArray) : 1;

                foreach ($kunciArray as $pKey => $kunciVal) {
                    $userVal = $userArray[$pKey] ?? null;
                    if (!is_null($userVal) && strtoupper(trim((string)$userVal)) === strtoupper(trim((string)$kunciVal))) {
                        $skorSoal += 1; // +1 per baris benar
                    }
                }
            }
            // --- D. ISIAN / ESSAY ---
            else {
                $bobotSoal = $soal->bobot_nilai ?? 1;
                $skorSoal = 0; // Menunggu koreksi manual dari guru
            }

            $totalSkorSiswa += $skorSoal;
            $totalBobotMaksimal += $bobotSoal;

            // Simpan riwayat jawaban per-soal
            TkaJawaban::updateOrCreate(
                [
                    'tka_sesi_id' => $sesi->id,
                    'tka_soal_id' => $soal->id,
                ],
                [
                    'jawaban_siswa' => is_array($jawabanUser) ? json_encode($jawabanUser) : $jawabanUser,
                    'skor_otomatis' => round($skorSoal, 2),
                ]
            );
        }

        // 3. Kalkulasi Nilai Akhir Skala 0 - 100
        $nilaiAkhir = $totalBobotMaksimal > 0 ? ($totalSkorSiswa / $totalBobotMaksimal) * 100 : 0;

        $sesi->update([
            'waktu_selesai' => now(),
            'status' => 'selesai',
            'nilai_akhir' => round($nilaiAkhir, 2),
        ]);

        // Hapus token session setelah ujian selesai
        session()->forget(['tka_token', 'tka_konfirmasi']);

        return redirect()->route('siswa.dashboard')->with('success', 'Ujian Selesai! Nilai Anda: ' . round($nilaiAkhir, 2));
    }

    // --- METHOD PEMBAHASAN ---
    public function pembahasan($paket_id)
    {
        $paket = TkaPaket::with('soals')->find($paket_id);

        if (!$paket) {
            return redirect()->route('siswa.dashboard')->with('error', 'Paket soal tidak ditemukan.');
        }

        $sesi = TkaSesi::where('tka_paket_id', $paket_id)
                       ->where('user_id', Auth::id())
                       ->first();

        if (!$sesi) {
            return redirect()->route('siswa.dashboard')->with('error', 'Kamu belum mengerjakan simulasi ini.');
        }

        $jawabanSiswa = TkaJawaban::where('tka_sesi_id', $sesi->id)
                                 ->pluck('jawaban_siswa', 'tka_soal_id')
                                 ->toArray();

        return view('siswa.tka.pembahasan', compact('paket', 'sesi', 'jawabanSiswa'));
    }
}
