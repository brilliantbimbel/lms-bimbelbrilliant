<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MateriSiswaSelesaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('materi_siswa_selesai')->delete();
        
        \DB::table('materi_siswa_selesai')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 4,
                'materi_id' => 1,
                'created_at' => '2026-08-09 04:21:54',
                'updated_at' => '2026-08-09 04:21:54',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'materi_id' => 6,
                'created_at' => '2026-08-22 01:47:54',
                'updated_at' => '2026-08-22 01:47:54',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 4,
                'materi_id' => 7,
                'created_at' => '2026-08-22 02:55:47',
                'updated_at' => '2026-08-22 02:55:47',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 26,
                'materi_id' => 9,
                'created_at' => '2026-08-22 10:18:35',
                'updated_at' => '2026-08-22 10:18:35',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 26,
                'materi_id' => 10,
                'created_at' => '2026-08-22 04:27:21',
                'updated_at' => '2026-08-22 04:27:21',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 26,
                'materi_id' => 11,
                'created_at' => '2026-08-22 07:49:36',
                'updated_at' => '2026-08-22 07:49:36',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 8,
                'materi_id' => 12,
                'created_at' => '2026-08-22 08:22:41',
                'updated_at' => '2026-08-22 08:22:41',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 10,
                'materi_id' => 7,
                'created_at' => '2026-08-22 08:26:27',
                'updated_at' => '2026-08-22 08:26:27',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 9,
                'materi_id' => 7,
                'created_at' => '2026-08-22 07:12:07',
                'updated_at' => '2026-08-22 07:12:07',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 24,
                'materi_id' => 7,
                'created_at' => '2026-08-22 08:36:51',
                'updated_at' => '2026-08-22 08:36:51',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 25,
                'materi_id' => 11,
                'created_at' => '2026-08-22 08:14:53',
                'updated_at' => '2026-08-22 08:14:53',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 26,
                'materi_id' => 7,
                'created_at' => '2026-08-22 08:36:50',
                'updated_at' => '2026-08-22 08:36:50',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 7,
                'materi_id' => 7,
                'created_at' => '2026-08-22 08:46:22',
                'updated_at' => '2026-08-22 08:46:22',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 16,
                'materi_id' => 7,
                'created_at' => '2026-08-22 07:12:49',
                'updated_at' => '2026-08-22 07:12:49',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 25,
                'materi_id' => 7,
                'created_at' => '2026-08-22 08:36:51',
                'updated_at' => '2026-08-22 08:36:51',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 24,
                'materi_id' => 11,
                'created_at' => '2026-08-22 07:41:01',
                'updated_at' => '2026-08-22 07:41:01',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 26,
                'materi_id' => 12,
                'created_at' => '2026-08-22 08:18:23',
                'updated_at' => '2026-08-22 08:18:23',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 9,
                'materi_id' => 11,
                'created_at' => '2026-08-22 07:40:14',
                'updated_at' => '2026-08-22 07:40:14',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 10,
                'materi_id' => 11,
                'created_at' => '2026-08-22 07:40:15',
                'updated_at' => '2026-08-22 07:40:15',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 8,
                'materi_id' => 13,
                'created_at' => '2026-08-22 07:48:45',
                'updated_at' => '2026-08-22 07:48:45',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 7,
                'materi_id' => 11,
                'created_at' => '2026-08-22 08:35:01',
                'updated_at' => '2026-08-22 08:35:01',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 16,
                'materi_id' => 11,
                'created_at' => '2026-08-22 07:48:35',
                'updated_at' => '2026-08-22 07:48:35',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 19,
                'materi_id' => 9,
                'created_at' => '2026-08-22 09:03:12',
                'updated_at' => '2026-08-22 09:03:12',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 26,
                'materi_id' => 14,
                'created_at' => '2026-08-22 10:03:38',
                'updated_at' => '2026-08-22 10:03:38',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 19,
                'materi_id' => 14,
                'created_at' => '2026-08-22 09:32:50',
                'updated_at' => '2026-08-22 09:32:50',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 26,
                'materi_id' => 15,
                'created_at' => '2026-08-23 13:49:12',
                'updated_at' => '2026-08-23 13:49:12',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 26,
                'materi_id' => 16,
                'created_at' => '2026-08-23 15:06:06',
                'updated_at' => '2026-08-23 15:06:06',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 26,
                'materi_id' => 18,
                'created_at' => '2026-08-23 15:10:31',
                'updated_at' => '2026-08-23 15:10:31',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 26,
                'materi_id' => 19,
                'created_at' => '2026-08-23 15:53:01',
                'updated_at' => '2026-08-23 15:53:01',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 26,
                'materi_id' => 20,
                'created_at' => '2026-08-23 15:57:19',
                'updated_at' => '2026-08-23 15:57:19',
            ),
        ));
        
        
    }
}