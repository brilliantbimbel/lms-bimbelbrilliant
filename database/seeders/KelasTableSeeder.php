<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kelas')->delete();
        
        \DB::table('kelas')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nama_kelas' => 'IX',
                'jenjang' => 'SMP',
                'tahun_ajaran' => '2026/2027',
                'tentor_id' => 2,
                'created_at' => '2026-08-09 01:06:25',
                'updated_at' => '2026-08-09 01:06:25',
            ),
            1 => 
            array (
                'id' => 3,
                'nama_kelas' => 'Kelas 7',
                'jenjang' => 'SMP',
                'tahun_ajaran' => '2026/2027',
                'tentor_id' => 2,
                'created_at' => '2026-08-22 02:50:40',
                'updated_at' => '2026-08-22 02:50:40',
            ),
            2 => 
            array (
                'id' => 4,
                'nama_kelas' => 'Kelas VIII',
                'jenjang' => 'SMP',
                'tahun_ajaran' => '2026/2027',
                'tentor_id' => 2,
                'created_at' => '2026-08-22 02:51:36',
                'updated_at' => '2026-08-22 02:51:36',
            ),
            3 => 
            array (
                'id' => 5,
                'nama_kelas' => 'Kelas 5',
                'jenjang' => 'SD',
                'tahun_ajaran' => '2026/2027',
                'tentor_id' => 5,
                'created_at' => '2026-08-22 08:49:44',
                'updated_at' => '2026-08-22 08:49:44',
            ),
        ));
        
        
    }
}