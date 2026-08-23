<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelasSiswaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kelas_siswa')->delete();
        
        \DB::table('kelas_siswa')->insert(array (
            0 => 
            array (
                'id' => 2,
                'kelas_id' => 2,
                'siswa_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'kelas_id' => 2,
                'siswa_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'kelas_id' => 2,
                'siswa_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'kelas_id' => 2,
                'siswa_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'kelas_id' => 2,
                'siswa_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'kelas_id' => 2,
                'siswa_id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'kelas_id' => 2,
                'siswa_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'kelas_id' => 2,
                'siswa_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'kelas_id' => 2,
                'siswa_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'kelas_id' => 2,
                'siswa_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'kelas_id' => 2,
                'siswa_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'kelas_id' => 2,
                'siswa_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'kelas_id' => 3,
                'siswa_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'kelas_id' => 3,
                'siswa_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'kelas_id' => 3,
                'siswa_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'kelas_id' => 4,
                'siswa_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'kelas_id' => 4,
                'siswa_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'kelas_id' => 4,
                'siswa_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'kelas_id' => 4,
                'siswa_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'kelas_id' => 2,
                'siswa_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'kelas_id' => 3,
                'siswa_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'kelas_id' => 4,
                'siswa_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}