<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_bimbel' => 'Bimbel Brilliant',
                'slogan' => 'Portal Pembelajaran & Tryout Interaktif',
                'logo_path' => NULL,
                'no_wa_admin' => '081234567890',
                'email_admin' => 'admin@brilliant.com',
                'tahun_ajaran' => '2026/2027',
                'semester' => 'Ganjil',
                'created_at' => '2026-08-21 06:11:45',
                'updated_at' => '2026-08-21 06:11:45',
            ),
        ));
        
        
    }
}