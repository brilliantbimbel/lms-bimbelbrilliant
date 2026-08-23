<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelases = Kelas::with(['tentor', 'siswas'])->get();
        $tentors = User::where('role', 'tentor')->get();
        $siswas = User::where('role', 'siswa')->get();

        return view('admin.kelas.index', compact('kelases', 'tentors', 'siswas'));
    }

    public function store(Request $request)
{
    // 1. Validasi Input
    $request->validate([
        'nama_kelas'   => 'required|string|max:255',
        'jenjang'      => 'required|string',
        'tahun_ajaran' => 'required|string',
        'tentor_id'    => 'required|exists:users,id',
    ]);

    // 2. Simpan Data Kelas (Pastikan jenjang & tahun_ajaran ikut disimpan!)
    Kelas::create([
        'nama_kelas'   => $request->nama_kelas,
        'jenjang'      => $request->jenjang,       // <-- INI YANG TADI KETINGGALAN
        'tahun_ajaran' => $request->tahun_ajaran, // <-- INI YANG TADI KETINGGALAN
        'tentor_id'    => $request->tentor_id,
    ]);

    return redirect()->back()->with('success', 'Kelas berhasil dibuat!');
}
    public function assignSiswa(Request $request, $id)
    {
        $request->validate([
            'siswa_ids' => 'required|array',
            'siswa_ids.*' => 'exists:users,id',
        ]);

        $kelas = Kelas::findOrFail($id);

        // Sync atau attach siswa ke tabel pivot kelas_siswa
        $kelas->siswas()->sync($request->siswa_ids);

        return redirect()->back()->with('success', 'Siswa berhasil dimasukkan ke dalam kelas!');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        return redirect()->back()->with('success', 'Kelas berhasil dihapus!');
    }
}
