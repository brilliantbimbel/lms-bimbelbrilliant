<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TryoutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tryouts')->delete();
        
        \DB::table('tryouts')->insert(array (
            0 => 
            array (
                'id' => 4,
                'kelas_id' => 2,
                'user_id' => NULL,
            'judul' => 'b.indo (Kohesi dan Koherensi)',
                'deskripsi' => NULL,
                'durasi_menit' => 60,
                'status' => 'terbit',
                'created_at' => '2026-08-21 06:27:47',
                'updated_at' => '2026-08-22 23:46:27',
                'durasi' => 60,
                'tentor_id' => 2,
                'tipe' => 'kuis',
                'mapel' => 'Bahasa Indonesia',
            ),
            1 => 
            array (
                'id' => 5,
                'kelas_id' => 2,
                'user_id' => NULL,
                'judul' => 'Sistem Kordinasi',
                'deskripsi' => NULL,
                'durasi_menit' => 60,
                'status' => 'terbit',
                'created_at' => '2026-08-22 07:51:32',
                'updated_at' => '2026-08-22 23:49:00',
                'durasi' => 60,
                'tentor_id' => 2,
                'tipe' => 'kuis',
                'mapel' => 'IPA',
            ),
            2 => 
            array (
                'id' => 6,
                'kelas_id' => 4,
                'user_id' => NULL,
                'judul' => 'Sistem Pencernaan',
                'deskripsi' => NULL,
                'durasi_menit' => 60,
                'status' => 'terbit',
                'created_at' => '2026-08-22 08:05:31',
                'updated_at' => '2026-08-22 23:49:00',
                'durasi' => 60,
                'tentor_id' => 2,
                'tipe' => 'kuis',
                'mapel' => 'IPA',
            ),
            3 => 
            array (
                'id' => 7,
                'kelas_id' => 3,
                'user_id' => NULL,
                'judul' => 'Hakikat Sains dan Metode Ilmiah',
                'deskripsi' => NULL,
                'durasi_menit' => 60,
                'status' => 'terbit',
                'created_at' => '2026-08-22 09:21:15',
                'updated_at' => '2026-08-22 23:49:00',
                'durasi' => 60,
                'tentor_id' => 2,
                'tipe' => 'kuis',
                'mapel' => 'IPA',
            ),
        ));
        
        
    }
}