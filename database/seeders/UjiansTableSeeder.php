<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UjiansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ujians')->delete();
        
        \DB::table('ujians')->insert(array (
            0 => 
            array (
                'id' => 7,
                'user_id' => 6,
                'tryout_id' => 3,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'sedang_mengerjakan',
                'created_at' => '2026-08-21 06:26:21',
                'updated_at' => '2026-08-21 06:26:21',
                'nilai' => 0.0,
            ),
            1 => 
            array (
                'id' => 17,
                'user_id' => 9,
                'tryout_id' => 4,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-21 08:17:07',
                'updated_at' => '2026-08-21 08:21:47',
                'nilai' => 70.0,
            ),
            2 => 
            array (
                'id' => 18,
                'user_id' => 6,
                'tryout_id' => 4,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-21 08:17:13',
                'updated_at' => '2026-08-21 08:25:01',
                'nilai' => 90.0,
            ),
            3 => 
            array (
                'id' => 19,
                'user_id' => 4,
                'tryout_id' => 4,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-21 08:17:14',
                'updated_at' => '2026-08-21 08:25:06',
                'nilai' => 90.0,
            ),
            4 => 
            array (
                'id' => 20,
                'user_id' => 10,
                'tryout_id' => 4,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-21 08:18:51',
                'updated_at' => '2026-08-21 08:18:51',
                'nilai' => 90.0,
            ),
            5 => 
            array (
                'id' => 21,
                'user_id' => 24,
                'tryout_id' => 4,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-21 08:19:32',
                'updated_at' => '2026-08-21 08:25:52',
                'nilai' => 60.0,
            ),
            6 => 
            array (
                'id' => 22,
                'user_id' => 12,
                'tryout_id' => 4,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-21 08:19:50',
                'updated_at' => '2026-08-21 08:25:39',
                'nilai' => 70.0,
            ),
            7 => 
            array (
                'id' => 23,
                'user_id' => 25,
                'tryout_id' => 4,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-21 08:20:12',
                'updated_at' => '2026-08-21 08:25:38',
                'nilai' => 70.0,
            ),
            8 => 
            array (
                'id' => 24,
                'user_id' => 7,
                'tryout_id' => 4,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'sedang_mengerjakan',
                'created_at' => '2026-08-22 07:23:58',
                'updated_at' => '2026-08-22 07:23:58',
                'nilai' => 0.0,
            ),
            9 => 
            array (
                'id' => 25,
                'user_id' => 7,
                'tryout_id' => 5,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-22 08:14:13',
                'updated_at' => '2026-08-22 08:19:46',
                'nilai' => 100.0,
            ),
            10 => 
            array (
                'id' => 26,
                'user_id' => 8,
                'tryout_id' => 6,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-22 08:25:07',
                'updated_at' => '2026-08-22 08:29:55',
                'nilai' => 100.0,
            ),
            11 => 
            array (
                'id' => 27,
                'user_id' => 24,
                'tryout_id' => 5,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-22 08:25:53',
                'updated_at' => '2026-08-22 08:35:06',
                'nilai' => 100.0,
            ),
            12 => 
            array (
                'id' => 28,
                'user_id' => 9,
                'tryout_id' => 5,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-22 08:25:55',
                'updated_at' => '2026-08-22 08:35:34',
                'nilai' => 100.0,
            ),
            13 => 
            array (
                'id' => 29,
                'user_id' => 16,
                'tryout_id' => 5,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-22 08:26:01',
                'updated_at' => '2026-08-22 08:34:16',
                'nilai' => 80.0,
            ),
            14 => 
            array (
                'id' => 30,
                'user_id' => 25,
                'tryout_id' => 5,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-22 08:26:16',
                'updated_at' => '2026-08-22 08:35:00',
                'nilai' => 100.0,
            ),
            15 => 
            array (
                'id' => 31,
                'user_id' => 10,
                'tryout_id' => 5,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-22 08:27:41',
                'updated_at' => '2026-08-22 08:35:46',
                'nilai' => 80.0,
            ),
            16 => 
            array (
                'id' => 33,
                'user_id' => 19,
                'tryout_id' => 7,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-22 10:15:36',
                'updated_at' => '2026-08-22 10:17:15',
                'nilai' => 80.0,
            ),
            17 => 
            array (
                'id' => 34,
                'user_id' => 26,
                'tryout_id' => 7,
                'waktu_mulai' => NULL,
                'waktu_selesai' => NULL,
                'nilai_akhir' => 0,
                'status' => 'selesai',
                'created_at' => '2026-08-23 14:44:07',
                'updated_at' => '2026-08-23 14:44:32',
                'nilai' => 30.0,
            ),
        ));
        
        
    }
}