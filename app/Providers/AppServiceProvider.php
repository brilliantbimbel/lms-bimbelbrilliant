<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Bagikan data jumlah siswa & tentor ke semua tampilan admin
        View::composer('layouts.admin', function ($view) {
            $countSiswa = User::where('role', 'siswa')->count();
            $countTentor = User::where('role', 'tentor')->count();

            $view->with([
                'globalCountSiswa' => $countSiswa,
                'globalCountTentor' => $countTentor,
            ]);
        });
    }
}
