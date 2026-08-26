<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Kelas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
public function index()
{
    $guruId = Auth::id();

    // Mengambil daftar master mapel dari config
    $mapels = config('mapel.list');

    $kelases = Kelas::where('tentor_id', $guruId)->get();

    // PERBAIKAN QUERY: Memeriksa user_id maupun tentor_id
    $materis = Materi::with('kelas')
        ->where(function($q) use ($guruId) {
            $q->where('user_id', $guruId)
              ->orWhere('tentor_id', $guruId);
        })
        ->latest()
        ->get();

    return view('guru.materi.index', compact('materis', 'kelases', 'mapels'));
}

public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'judul'     => 'required|string|max:255',
            'kelas_id'  => 'required|exists:kelas,id',
            'mapel'     => 'required|string', // <-- Ditambahkan
            'tipe'      => 'required|in:pdf,video,html',
            'kategori_modul' => 'required|in:modul,latihan',
            'file'      => 'nullable|file|mimes:pdf|max:10240',
            'url_video' => 'nullable|url',
            'file_html' => 'nullable|file|mimes:html,htm|max:2048',
        ], [
            'judul.required'    => 'Judul materi wajib diisi.',
            'kelas_id.required' => 'Silakan pilih kelas terlebih dahulu.',
            'kelas_id.exists'   => 'Kelas yang dipilih tidak ditemukan di database.',
            'mapel.required'    => 'Mata pelajaran wajib dipilih/diisi.',
            'file.mimes'        => 'File materi harus berformat PDF.',
            'file.max'          => 'Ukuran file PDF maksimal 10 MB.',
        ]);

        $user = Auth::user();
        if (!$user) {
            return back()->with('error', 'Sesi Anda telah berakhir, silakan login kembali.')->withInput();
        }

        try {
            $materi = new Materi();
            $materi->judul     = $request->judul;
            $materi->kelas_id  = $request->kelas_id;
            $materi->mapel     = $request->mapel; // <-- Ditambahkan
            $materi->kategori_modul = $request->kategori_modul ?? 'modul';
            $materi->tipe      = $request->tipe;
            $materi->deskripsi = $request->deskripsi;
            $materi->user_id   = $user->id;

            // Olah data sesuai tipe
            if ($request->tipe === 'pdf') {
                if (!$request->hasFile('file')) {
                    return back()->with('error', 'Gagal: File PDF wajib diunggah untuk tipe PDF!')->withInput();
                }
                $path = $request->file('file')->store('materi_pdf', 'public');
                $materi->file_path = $path;
            }
            elseif ($request->tipe === 'video') {
                if (!$request->url_video) {
                    return back()->with('error', 'Gagal: Link Video wajib diisi!')->withInput();
                }
                $materi->url_video = $request->url_video;
            }
            elseif ($request->tipe === 'html') {
                if ($request->html_input_type === 'file' && $request->hasFile('file_html')) {
                    $materi->konten_html = file_get_contents($request->file('file_html')->getRealPath());
                } else {
                    $materi->konten_html = $request->konten_html;
                }

                if (empty($materi->konten_html)) {
                    return back()->with('error', 'Gagal: Konten HTML tidak boleh kosong!')->withInput();
                }
            }

            $materi->save();

           return redirect()->back()
    ->with('success', 'Materi "' . $materi->judul . '" berhasil diunggah!');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Gagal menyimpan materi: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function destroy($id)
    {
        $materi = Materi::where('user_id', Auth::id())->findOrFail($id);

        if ($materi->tipe === 'pdf' && $materi->file_path && Storage::disk('public')->exists($materi->file_path)) {
            Storage::disk('public')->delete($materi->file_path);
        }

        $materi->delete();

        return redirect()->back()->with('success', 'Materi berhasil dihapus!');
    }

    public function edit($id)
    {
        $materi = Materi::findOrFail($id);
        return response()->json($materi);
    }

    public function update(Request $request, $id)
    {
        $materi = Materi::findOrFail($id);

        $request->validate([
            'judul'    => 'required|string|max:255',
            'kelas_id' => 'required',
            'mapel'    => 'required|string',
            'tipe'     => 'required',
        ]);

        $data = [
            'judul'     => $request->judul,
            'kelas_id'  => $request->kelas_id,
            'mapel'     => $request->mapel, // <-- Diperbaiki (sebelumnya bernilai 'required|string')
            'kategori_modul' => $request->kategori_modul ?? 'modul',
            'tipe'      => $request->tipe,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->tipe === 'html') {
            $data['konten_html'] = $request->konten_html;
        } elseif ($request->tipe === 'video') {
            $data['url_video'] = $request->url_video;
        } elseif ($request->tipe === 'pdf' && $request->hasFile('file_path')) {
            $data['file_path'] = $request->file('file_path')->store('materi_pdf', 'public');
        }

        $materi->update($data);

        return redirect()->back()->with('success', 'Materi berhasil diperbarui!');
    }
}
