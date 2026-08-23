<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tryout;
use Illuminate\Http\Request;

class TryoutController extends Controller
{
    public function index()
    {
        // Ambil semua tryout/kuis yang dibuat oleh para tentor
        $tryouts = Tryout::with(['kelas', 'pembuat', 'soals'])->latest()->get();

        return view('admin.tryout.index', compact('tryouts'));
    }

    public function destroy($id)
    {
        $tryout = Tryout::findOrFail($id);
        $tryout->delete();

        return redirect()->back()->with('success', 'Kuis/Tryout berhasil dihapus dari sistem!');
    }

    // Fungsi Cetak / Download PDF Soal dari HTML Interaktif
    public function downloadPdf($id)
    {
        $tryout = Tryout::with('soals')->findOrFail($id);

        // Nanti bisa menggunakan library DOMPDF / Browsershot
        // Untuk sementara kita sediakan tampilan versi Cetak Browser (Printable HTML)
        return view('admin.tryout.pdf', compact('tryout'));
    }
}
