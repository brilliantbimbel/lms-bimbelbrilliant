<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\Guru\NilaiController;
use App\Http\Controllers\Guru\MateriController;
use App\Http\Controllers\Siswa\KuisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Halaman Utama Langsung Redirect ke Login
Route::get('/', function () {
    return redirect()->route('login');
});

// Halaman Pengarah Otomatis setelah Login (Pengalihan Berdasarkan Role)
Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($user->role === 'tentor') {
        return redirect()->route('guru.dashboard');
    }

    return redirect()->route('siswa.dashboard');
})->middleware(['auth'])->name('dashboard');

// --- RUTE PROFILE (Dibutuhkan Navigasi Breeze) ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- AREA KHUSUS ADMIN ---
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Rute Manajemen Siswa
    Route::get('/siswa', [AdminController::class, 'siswa'])->name('siswa.index');
    Route::post('/siswa', [AdminController::class, 'storeSiswa'])->name('siswa.store');
    Route::put('/siswa/{id}', [AdminController::class, 'updateSiswa'])->name('siswa.update');
    Route::patch('/siswa/{id}/status', [AdminController::class, 'toggleStatusSiswa'])->name('siswa.toggle-status');
    Route::patch('/siswa/{id}/reset-password', [AdminController::class, 'resetPasswordSiswa'])->name('siswa.reset-password');
    Route::delete('/siswa/{id}', [AdminController::class, 'destroySiswa'])->name('siswa.destroy');

    // Rute Manajemen Tentor
    Route::get('/tentor', [AdminController::class, 'tentor'])->name('tentor.index');
    Route::post('/tentor', [AdminController::class, 'storeTentor'])->name('tentor.store');
    Route::put('/tentor/{id}', [AdminController::class, 'updateTentor'])->name('tentor.update');
    Route::patch('/tentor/{id}/status', [AdminController::class, 'toggleStatusTentor'])->name('tentor.toggle-status');
    Route::patch('/tentor/{id}/reset-password', [AdminController::class, 'resetPasswordTentor'])->name('tentor.reset-password');
    Route::delete('/tentor/{id}', [AdminController::class, 'destroyTentor'])->name('tentor.destroy');

    // Route Kelas & Sesi
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
    Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
    Route::post('/kelas/{id}/siswa', [KelasController::class, 'assignSiswa'])->name('kelas.assign-siswa');
    Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

    // Monitoring Modul & Materi
    Route::get('/materi', [App\Http\Controllers\Admin\MateriController::class, 'index'])->name('materi.index');
    Route::delete('/materi/{id}', [App\Http\Controllers\Admin\MateriController::class, 'destroy'])->name('materi.destroy');

    // Monitoring Kuis & Tryout
    Route::get('/tryout', [App\Http\Controllers\Admin\TryoutController::class, 'index'])->name('tryout.index');
    Route::delete('/tryout/{id}', [App\Http\Controllers\Admin\TryoutController::class, 'destroy'])->name('tryout.destroy');
    Route::get('/tryout/{id}/pdf', [App\Http\Controllers\Admin\TryoutController::class, 'downloadPdf'])->name('tryout.pdf');

    // Rekap Nilai
    Route::get('/rekap-nilai', [App\Http\Controllers\Admin\RekapNilaiController::class, 'index'])->name('rekap-nilai.index');

    // Pengaturan App
    Route::get('/setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('setting.index');
    Route::put('/setting', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('setting.update');
    Route::put('/setting/password', [App\Http\Controllers\Admin\SettingController::class, 'updatePassword'])->name('setting.password');
});

// --- AREA KHUSUS GURU / TENTOR ---
Route::middleware(['auth', 'role:tentor'])->prefix('tentor')->name('guru.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Guru\DashboardController::class, 'index'])->name('dashboard');

    // RUTE MODUL & MATERI GURU
    Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
    Route::post('/materi', [MateriController::class, 'store'])->name('materi.store');
    Route::put('/materi/{id}', [MateriController::class, 'update'])->name('materi.update');
    Route::delete('/materi/{id}', [MateriController::class, 'destroy'])->name('materi.destroy');

    // RUTE KUIS & TRYOUT GURU
    Route::get('/tryout', [App\Http\Controllers\Guru\TryoutController::class, 'index'])->name('tryout.index');
    Route::post('/tryout', [App\Http\Controllers\Guru\TryoutController::class, 'store'])->name('tryout.store');
    Route::put('/tryout/{id}', [App\Http\Controllers\Guru\TryoutController::class, 'update'])->name('tryout.update');
    Route::delete('/tryout/{id}', [App\Http\Controllers\Guru\TryoutController::class, 'destroy'])->name('tryout.destroy');

    // RUTE KELOLA SOAL GURU
    Route::get('/tryout/{tryout_id}/soal', [App\Http\Controllers\Guru\SoalController::class, 'index'])->name('soal.index');
    Route::post('/tryout/{tryout_id}/soal', [App\Http\Controllers\Guru\SoalController::class, 'store'])->name('soal.store');
    Route::put('/soal/{id}', [App\Http\Controllers\Guru\SoalController::class, 'update'])->name('soal.update');
    Route::delete('/soal/{id}', [App\Http\Controllers\Guru\SoalController::class, 'destroy'])->name('soal.destroy');

    // Fitur Nilai Siswa
    Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
    Route::get('/nilai/{id}', [NilaiController::class, 'show'])->name('nilai.show');
    Route::get('/nilai/koreksi/{ujian_id}', [NilaiController::class, 'koreksi'])->name('nilai.koreksi');
    Route::post('/nilai/koreksi/{ujian_id}', [NilaiController::class, 'simpanKoreksi'])->name('nilai.simpan-koreksi');
    Route::delete('/nilai/reset/{ujian_id}', [NilaiController::class, 'resetUjian'])->name('nilai.reset');
});

// --- AREA KHUSUS SISWA ---
Route::middleware(['auth', 'role:siswa'])->prefix('siswa')->name('siswa.')->group(function () {
    // Dashboard & Daftar Kuis Siswa
    Route::get('/dashboard', [KuisController::class, 'index'])->name('dashboard');

    // Halaman Mengerjakan Ujian
    Route::get('/kuis/{tryout_id}', [KuisController::class, 'mulai'])->name('kuis.mulai');
    // Baca Modul / Materi
    Route::get('/materi/{id}', [KuisController::class, 'bacaMateri'])->name('materi.baca');
    // Menerima & Menyimpan Jawaban Kuis (Form POST)
    Route::post('/kuis/{id}/simpan', [KuisController::class, 'simpan'])->name('kuis.simpan');

    // RUTE REVIEW SOAL (Hapus 'siswa.' dan '/siswa/' yang berlebih)
    Route::get('/tryout/{id}/review', [KuisController::class, 'review'])->name('tryout.review');
});

require __DIR__.'/auth.php';
