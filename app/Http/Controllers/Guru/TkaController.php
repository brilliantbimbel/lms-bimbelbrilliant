<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\TkaPaket;
use App\Models\TkaSoal;
use App\Models\TkaSesi;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TkaController extends Controller
{
    public function index()
    {
        $pakets = TkaPaket::withCount('soals')
            ->latest()
            ->paginate(10);

        return view('guru.tka.index', compact('pakets'));
    }

    public function create()
    {
        $kelases = Kelas::all();
        $listMapel = config('mapel.list', []);

        return view('guru.tka.create', compact('kelases', 'listMapel'));
    }

    public function storePaket(Request $request)
    {
        $request->validate([
            'judul'        => 'required|string|max:255',
            'mapel'        => 'required|string',
            'kelas'        => 'nullable|string',
            'durasi_menit' => 'required|integer|min:1',
        ]);

        TkaPaket::create([
            'guru_id'      => Auth::id() ?? 1,
            'judul'        => $request->judul,
            'mapel'        => $request->mapel,
            'kelas'        => $request->kelas,
            'durasi_menit' => $request->durasi_menit,
            'is_active'    => $request->has('is_active'),
        ]);

        return redirect()->route('guru.tka.index')->with('success', 'Paket Simulasi TKA berhasil ditambahkan!');
    }

    public function store(Request $request)
    {
        return $this->storePaket($request);
    }

    public function showSoal($id)
    {
        $paket = TkaPaket::findOrFail($id);
        $soals = TkaSoal::where('tka_paket_id', $id)->get();

        return view('guru.tka.soal', compact('paket', 'soals'));
    }

    /**
     * SIMPAN SOAL BARU - DIPERBAIKI
     */
    public function storeSoal(Request $request, $paketId)
    {
        $request->validate([
            'tipe_soal'       => 'required|string',
            'pertanyaan'      => 'required|string',
            'bobot_nilai'     => 'required|numeric|min:1',
            'stimulus_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        // 1. Upload Gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('stimulus_gambar')) {
            $gambarPath = $request->file('stimulus_gambar')->store('tka_stimulus', 'public');
        }

        // 2. Olah Opsi & Kunci Jawaban
        $opsiJson = null;
        $kunciJson = null;

        if ($request->tipe_soal === 'pg') {
            $opsiJson = $request->input('opsi_pg', []);
            $kunciJson = $request->input('kunci_pg');
        } elseif ($request->tipe_soal === 'pg_kompleks') {
            $opsiJson = $request->input('opsi_kompleks', []);
            $kunciJson = $request->input('kunci_kompleks', []);
        } elseif ($request->tipe_soal === 'benar_salah') {
            $opsiJson = $request->input('pernyataan_bs', []);
            $kunciJson = $request->input('kunci_bs', []);
        } elseif ($request->tipe_soal === 'isian') {
            $kunciJson = $request->input('kunci_isian');
        }

        // 3. Simpan Ke Database
        TkaSoal::create([
            'tka_paket_id'    => $paketId,
            'tipe_soal'       => $request->tipe_soal,
            'stimulus'        => $request->stimulus,
            'stimulus_gambar' => $gambarPath,
            'pertanyaan'      => $request->pertanyaan,
            'opsi_json'       => $opsiJson,
            'kunci_json'      => $kunciJson,
            'bobot_nilai'     => $request->bobot_nilai,
        ]);

        return redirect()->back()->with('success', 'Soal berhasil ditambahkan!');
    }

    public function updateSoal(Request $request, $id)
    {
        $soal = TkaSoal::findOrFail($id);

        $request->validate([
            'pertanyaan'      => 'required|string',
            'bobot_nilai'     => 'required|numeric|min:1',
            'stimulus_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        if ($request->hasFile('stimulus_gambar')) {
            if ($soal->stimulus_gambar) {
                Storage::disk('public')->delete($soal->stimulus_gambar);
            }
            $soal->stimulus_gambar = $request->file('stimulus_gambar')->store('tka_stimulus', 'public');
        }

        if ($soal->tipe_soal === 'pg' && $request->has('opsi_pg')) {
            $soal->opsi_json = $request->input('opsi_pg');
            $soal->kunci_json = $request->input('kunci_pg');
        } elseif ($soal->tipe_soal === 'pg_kompleks' && $request->has('opsi_kompleks')) {
            $soal->opsi_json = $request->input('opsi_kompleks');
            $soal->kunci_json = $request->input('kunci_kompleks');
        } elseif ($soal->tipe_soal === 'benar_salah' && $request->has('pernyataan_bs')) {
            $soal->opsi_json = $request->input('pernyataan_bs');
            $soal->kunci_json = $request->input('kunci_bs');
        } elseif ($soal->tipe_soal === 'isian' && $request->has('kunci_isian')) {
            $soal->kunci_json = $request->input('kunci_isian');
        }

        $soal->stimulus = $request->stimulus;
        $soal->pertanyaan = $request->pertanyaan;
        $soal->bobot_nilai = $request->bobot_nilai;
        $soal->save();

        return redirect()->back()->with('success', 'Soal berhasil diperbarui!');
    }

    public function destroySoal($id)
    {
        $soal = TkaSoal::findOrFail($id);

        if ($soal->stimulus_gambar) {
            Storage::disk('public')->delete($soal->stimulus_gambar);
        }

        $soal->delete();

        return redirect()->back()->with('success', 'Soal berhasil dihapus!');
    }

    public function rekapNilai($id)
    {
        $paket = TkaPaket::findOrFail($id);
        $sesis = class_exists(TkaSesi::class)
            ? TkaSesi::with('user')->where('tka_paket_id', $id)->get()
            : collect();

        return view('guru.tka.nilai', compact('paket', 'sesis'));
    }

    public function edit($id)
    {
        $paket = TkaPaket::findOrFail($id);
        $kelases = Kelas::all();
        $listMapel = config('mapel.list', []);

        return view('guru.tka.edit', compact('paket', 'kelases', 'listMapel'));
    }

    public function updatePaket(Request $request, $id)
    {
        $paket = TkaPaket::findOrFail($id);

        $request->validate([
            'judul'        => 'required|string|max:255',
            'mapel'        => 'required|string',
            'kelas'        => 'nullable|string',
            'durasi_menit' => 'required|integer|min:1',
        ]);

        $paket->update([
            'judul'        => $request->judul,
            'mapel'        => $request->mapel,
            'kelas'        => $request->kelas,
            'durasi_menit' => $request->durasi_menit,
            'is_active'    => $request->has('is_active'),
        ]);

        return redirect()->route('guru.tka.index')->with('success', 'Paket Simulasi TKA berhasil diperbarui!');
    }

    public function update(Request $request, $id)
    {
        return $this->updatePaket($request, $id);
    }

    public function destroy($id)
    {
        $paket = TkaPaket::findOrFail($id);
        $paket->delete();

        return redirect()->route('guru.tka.index')->with('success', 'Paket Simulasi TKA berhasil dihapus!');
    }
    public function resetSesi($sesiId)
{
    // Cari sesi pengerjaan siswa
    $sesi = \App\Models\TkaSesi::findOrFail($sesiId);

    // Hapus semua riwayat jawaban siswa pada sesi ini terlebih dahulu
    \App\Models\TkaJawaban::where('tka_sesi_id', $sesi->id)->delete();

    // Hapus data sesi pengerjaan
    $sesi->delete();

    return redirect()->back()->with('success', 'Pengerjaan siswa berhasil direset. Siswa dapat mengerjakan ulang.');
}
public function destroyPaket($id)
{
    $paket = TkaPaket::findOrFail($id);

    DB::transaction(function () use ($paket) {
        $sesiIds = $paket->sesis()->pluck('id');
        $soalIds = $paket->soals()->pluck('id');

        // Hapus jawaban siswa yang terkait sesi atau soal paket ini
        DB::table('tka_jawabans')
            ->whereIn('tka_sesi_id', $sesiIds)
            ->orWhereIn('tka_soal_id', $soalIds)
            ->delete();

        $paket->sesis()->delete();
        $paket->soals()->delete();
        $paket->delete();
    });

    return redirect()->back()->with('success', 'Paket simulasi berhasil dihapus.');
}
}
