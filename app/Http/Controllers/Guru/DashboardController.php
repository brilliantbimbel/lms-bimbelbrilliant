<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\User;
use App\Models\Materi;
use App\Models\Tryout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function index()
    {
        $guruId = Auth::id();
        $totalSiswa = 0;

        // Cek apakah tabel kelas dan kelas_siswa sudah ada di database
        if (Schema::hasTable('kelas') && Schema::hasTable('kelas_siswa')) {
            $kelasIds = Kelas::where('tentor_id', $guruId)->pluck('id');

            if ($kelasIds->isNotEmpty()) {
                $totalSiswa = User::where('role', 'siswa')
                    ->whereHas('kelas', function ($query) use ($kelasIds) { // <-- UBAH KELASES MENJADI KELAS
                        $query->whereIn('kelas_id', $kelasIds);
                    })->count();
            }
        }

        // Hitung Modul, Kuis/Tryout, dan Simulasi TKA
        $totalModul = (Schema::hasTable('materis') && class_exists(Materi::class))
            ? Materi::where('user_id', $guruId)->count() // Menggunakan user_id
            : 0;

        $totalTryout = (Schema::hasTable('tryouts') && class_exists(Tryout::class))
            ? Tryout::where('tentor_id', $guruId)->where(function($q) {
                $q->where('tipe', '!=', 'simulasi_tka')->orWhereNull('tipe');
            })->count()
            : 0;

        $totalSimulasiTka = (Schema::hasTable('tryouts') && class_exists(Tryout::class))
            ? Tryout::where('tentor_id', $guruId)->where('tipe', 'simulasi_tka')->count()
            : 0;

        return view('guru.dashboard', compact('totalSiswa', 'totalModul', 'totalTryout', 'totalSimulasiTka'));
    }
}
