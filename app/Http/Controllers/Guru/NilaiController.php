<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Tryout;
use App\Models\Ujian;
use App\Models\JawabanSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function index()
    {
        $guruId = Auth::id();

        $tryouts = Tryout::where('tentor_id', $guruId)
            ->with(['kelas'])
            ->withCount(['soals'])
            ->latest()
            ->get();

        return view('guru.nilai.index', compact('tryouts'));
    }

    public function show($id)
    {
        $tryout = Tryout::with('kelas')->findOrFail($id);

        $ujians = Ujian::where('tryout_id', $id)
            ->with('siswa')
            ->latest()
            ->get();

        return view('guru.nilai.show', compact('tryout', 'ujians'));
    }

    public function koreksi($ujian_id)
    {
        $ujian = Ujian::with(['siswa', 'tryout.soals', 'jawabanSiswas'])->findOrFail($ujian_id);

        return view('guru.nilai.koreksi', compact('ujian'));
    }

    public function simpanKoreksi(Request $request, $ujian_id)
{
    $ujian = Ujian::findOrFail($ujian_id);

    // 1. Hitung total nilai / ambil dari request
    $nilaiAkhir = $request->input('nilai_akhir');

    // 2. Wajib update 'status' menjadi 'selesai' dan simpan 'nilai'
    $ujian->update([
        'status' => 'selesai', // <-- INI YANG MEMBUAT TAMPILAN BERUBAH
        'nilai'  => $nilaiAkhir,
    ]);

    return redirect()->route('guru.nilai.show', $ujian->tryout_id)
        ->with('success', "Penilaian berhasil disimpan! Nilai akhir siswa: {$nilaiAkhir}");
}
    public function resetUjian($ujian_id)
    {
        $ujian = Ujian::findOrFail($ujian_id);
        $tryoutId = $ujian->tryout_id;

        JawabanSiswa::where('ujian_id', $ujian->id)->delete();
        $ujian->delete();

        return redirect()->route('guru.nilai.show', $tryoutId)
            ->with('success', 'Pengerjaan kuis siswa berhasil di-reset! Siswa kini dapat mengerjakan ulang.');
    }
}
