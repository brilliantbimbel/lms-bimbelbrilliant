<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Tryout;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TryoutController extends Controller
{
    public function index()
{
    $guruId = Auth::id();

    // Mengambil daftar master mapel dari config
    $mapels = config('mapel.list');

    $kelases = Kelas::where('tentor_id', $guruId)->get();

    $tryouts = Tryout::with('kelas')
        ->where('tentor_id', $guruId)
        ->latest()
        ->get();

    return view('guru.tryout.index', compact('tryouts', 'kelases', 'mapels'));
}

    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required|string|max:255',
            'mapel'    => 'nullable|string|max:100',
            'kelas_id'  => 'required|exists:kelas,id',
            'durasi'    => 'required|integer|min:1',
            'tipe'      => 'required|in:kuis,tryout,simulasi_tka',
        ]);

        try {
            Tryout::create([
                'judul'     => $request->judul,
                'mapel'    => $request->mapel,
                'kelas_id'  => $request->kelas_id,
                'durasi'    => $request->durasi,
                'tipe'      => $request->tipe,
                'tentor_id' => Auth::id(),
            ]);

            return redirect()->route('guru.tryout.index')
                ->with('success', 'Paket ' . ucfirst($request->tipe) . ' berhasil dibuat!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal membuat tryout: ' . $e->getMessage())->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'     => 'required|string|max:255',
            'mapel'    => 'nullable|string|max:100',
            'kelas_id'  => 'required|exists:kelas,id',
            'durasi'    => 'required|integer|min:1',
            'tipe'      => 'required|in:kuis,tryout,simulasi_tka',
        ]);

        try {
            $tryout = Tryout::where('tentor_id', Auth::id())->findOrFail($id);
            $tryout->update([
                'judul'    => $request->judul,
                'mapel'    => $request->mapel,
                'kelas_id' => $request->kelas_id,
                'durasi'   => $request->durasi,
                'tipe'     => $request->tipe,
            ]);

            return redirect()->route('guru.tryout.index')
                ->with('success', 'Paket Tryout/Kuis berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui tryout: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $tryout = Tryout::where('tentor_id', Auth::id())->findOrFail($id);
        $tryout->delete();

        return redirect()->route('guru.tryout.index')
            ->with('success', 'Paket Tryout/Kuis berhasil dihapus!');
    }
}
