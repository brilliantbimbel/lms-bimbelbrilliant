<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    public function index()
    {
        // Admin mengambil semua materi dari seluruh tentor & kelas
        $materis = Materi::with(['kelas', 'pembuat'])->latest()->get();

        return view('admin.materi.index', compact('materis'));
    }

    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);

        if ($materi->file_path && Storage::disk('public')->exists($materi->file_path)) {
            Storage::disk('public')->delete($materi->file_path);
        }

        $materi->delete();

        return redirect()->back()->with('success', 'Modul/Materi berhasil dihapus oleh Admin!');
    }
    public function previewHtml($id)
{
    $materi = Materi::findOrFail($id);

    // Tampilkan langsung konten HTML-nya secara full-screen
    return response($materi->konten_html, 200)
        ->header('Content-Type', 'text/html');
}
}
