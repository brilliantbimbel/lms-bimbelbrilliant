<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin
        User::create([
            'name'     => 'Administrator',
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role'     => 'admin',
        ]);

        // 2. Akun Tentor (Guru)
        User::create([
            'name'     => 'Tentor Pengajar',
            'username' => 'tentor',
            'email'    => 'tentor@gmail.com',
            'password' => Hash::make('password'),
            'role'     => 'tentor',
        ]);

        // 3. Akun Siswa
        User::create([
            'name'     => 'Siswa Utama',
            'username' => 'siswa',
            'email'    => 'siswa@gmail.com',
            'password' => Hash::make('password'),
            'role'     => 'siswa',
        ]);

        // 4. Sample Data Kelas
        Kelas::create(['nama_kelas' => 'Kelas 10 SMA']);
        Kelas::create(['nama_kelas' => 'Kelas 11 SMA']);
        Kelas::create(['nama_kelas' => 'Kelas 12 SMA']);
        $this->call(UsersTableSeeder::class);
        $this->call(KelasTableSeeder::class);
        $this->call(MaterisTableSeeder::class);
        $this->call(TryoutsTableSeeder::class);
        $this->call(SoalsTableSeeder::class);
        $this->call(HasilTryoutsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(KelasSiswaTableSeeder::class);
        $this->call(KelasesTableSeeder::class);
        $this->call(UjiansTableSeeder::class);
        $this->call(JawabanSiswasTableSeeder::class);
        $this->call(MateriSiswaSelesaiTableSeeder::class);
    }
}
