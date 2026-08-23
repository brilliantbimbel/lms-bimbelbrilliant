<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HasilTryout;
use App\Models\Kelas;
use App\Models\Tryout;
use Illuminate\Http\Request;

class RekapNilaiController extends Controller
{
    public function index(Request $request)
    {
        $kelases = Kelas::all();
        $tryouts = Tryout::all();

        // Query Rekap Nilai
        $query = HasilTryout::with(['siswa', 'tryout.kelas'])->latest();

        // Filter berdasarkan Kelas
        if ($request->filled('kelas_id')) {
            $query->whereHas('tryout', function ($q) use ($request) {
                $q->where('kelas_id', $request->kelas_id);
            });
        }

        // Filter berdasarkan Tryout
        if ($request->filled('tryout_id')) {
            $query->where('tryout_id', $request->tryout_id);
        }

        $recaps = $query->get();

        return view('admin.rekap.index', compact('recaps', 'kelases', 'tryouts'));
    }
}
