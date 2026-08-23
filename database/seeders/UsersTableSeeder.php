<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$AriMwQNcpysDJlOaBiZcfeLEWAHcWFSktLdm9NunZTGzVxMoa8Ufe',
                'role' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2026-08-09 00:24:27',
                'updated_at' => '2026-08-21 06:12:22',
                'status' => 'aktif',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Hari Advent Kristian, S.Pd.',
                'username' => 'hari',
                'email' => 'tentor@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$Ki0ix0Ky06doj6./BMcb9uxTct9Rc3hQ7/6phpDwnnHBnWAeMslda',
                'role' => 'tentor',
                'remember_token' => NULL,
                'created_at' => '2026-08-09 00:24:27',
                'updated_at' => '2026-08-09 00:25:45',
                'status' => 'aktif',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Natasya Raufanaya',
                'username' => 'nata',
                'email' => 'nata@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$hfdtVKRQq4/XCafK6WxfNOvUs6KSpYiQiQ5cBINtJPkyLlf369CGq',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-09 00:28:20',
                'updated_at' => '2026-08-09 00:28:20',
                'status' => 'aktif',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Erwan, S.Pd',
                'username' => 'erwan',
                'email' => 'erwan@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$HjWNXxSWLgZcGXtuUxGC.OV7jBEJVe8R0n/pNsmn7ZMtWw1lL8Q1K',
                'role' => 'tentor',
                'remember_token' => NULL,
                'created_at' => '2026-08-09 00:29:00',
                'updated_at' => '2026-08-09 00:29:00',
                'status' => 'aktif',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Greicia Dwi Ayu',
                'username' => 'Greicia',
                'email' => 'grecia@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$./wSB.4J8KoIP4ltM/zJSOF3IQMtWf6EghiQkk4F2nNlsh.Uj4dCi',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:13:39',
                'updated_at' => '2026-08-21 06:13:39',
                'status' => 'aktif',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Frederick Ferdinand',
                'username' => 'ucok',
                'email' => 'ucok@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$M/oIRs.WAdB56JcrrqrcOeb.e8DJrWqxreuWGvST89SZcFENymkuK',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:13:57',
                'updated_at' => '2026-08-21 06:13:57',
                'status' => 'aktif',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Bastian Fernandes',
                'username' => 'bastian',
                'email' => 'bastian@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$GjZUWxmNcvrkan0LrUpCw.GebQPvbuf4XIJax1pSudwDYuiOv8Wmm',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:14:19',
                'updated_at' => '2026-08-21 06:14:19',
                'status' => 'aktif',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Afifah Dwi Pasaribu',
                'username' => 'afifah',
                'email' => 'afifah@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$3dK97UOHN482SiclkSnBy.jtDn52M9XcpWSog6dKB3gxr2bfpdJSe',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:14:53',
                'updated_at' => '2026-08-21 06:14:53',
                'status' => 'aktif',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'M. Rifaldo Irfansyah',
                'username' => 'Rifaldo',
                'email' => 'Rifaldo@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$vOy8LDyebECQ2rqXFIGCmuuAcWpJZA/nqXzdSf5xXTGZ5jo/0CFcy',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:15:22',
                'updated_at' => '2026-08-21 06:15:22',
                'status' => 'aktif',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Ridho Maulana',
                'username' => 'ridho',
                'email' => 'ridho@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$VmS.AEfOCNsWWe6GcD8OmuqZM4nFZFCe6aLAYYTEul4N9ilwscapW',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:15:43',
                'updated_at' => '2026-08-21 06:15:43',
                'status' => 'aktif',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Anggie Sekar Andini',
                'username' => 'anggie',
                'email' => 'anggie@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$kTBS8bL07hFo2s/5dCQTjue40YThZYAkfEoS7th4NynA6vn8pA0/C',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:16:03',
                'updated_at' => '2026-08-21 06:16:03',
                'status' => 'aktif',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Putri Aninditha',
                'username' => 'putri',
                'email' => 'putri@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$iIUc1Ix/da6pI7TxUU/cd.e92W.9Xq398w9KIvY8hsUdAuFAng1zK',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:16:25',
                'updated_at' => '2026-08-21 06:16:25',
                'status' => 'aktif',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Carisa salsabila',
                'username' => 'Carisa',
                'email' => 'carisa@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$hL1fToS7nLwUpL/ck6hb1uyCVQj9dGZoC7ubujt9uVOdLIdEdS28m',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:16:46',
                'updated_at' => '2026-08-21 06:16:46',
                'status' => 'aktif',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Zaki Silo Utomo',
                'username' => 'zaki',
                'email' => 'zaki@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$hn.HxwRn/LAzExeEMrrjuOArw5Xi9XceRr4YyVaNTcWqy75atDzaG',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:17:13',
                'updated_at' => '2026-08-21 06:17:13',
                'status' => 'aktif',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'Genta Surya Dika',
                'username' => 'genta',
                'email' => 'genta@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$RnYX5NBvML2iMr6j2G5tE.XPZQcns6kKgbY1nBdy2otpKadJabWcq',
                'role' => 'siswa',
                'remember_token' => '0TurP6Qy5UmfeG6e7q8B3wUDObsNEAhVlJLgwTFxYgNfAeJ7ZfBBshXLJ6o9',
                'created_at' => '2026-08-21 06:17:42',
                'updated_at' => '2026-08-21 06:17:42',
                'status' => 'aktif',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'Garneta Zahirah',
                'username' => 'garneta',
                'email' => 'garneta@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$E5PJpgfUKou/BeflTWSWq.R2r137SbPLMRMyDIZGgepNK7NMKjJ8O',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:18:23',
                'updated_at' => '2026-08-21 06:18:23',
                'status' => 'aktif',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'Darel Alteza',
                'username' => 'darel',
                'email' => 'darel@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$AtYq2oPQBcQl4g59b1BBBeFmdSrBBK6oMSIIZ2ohanX6px3DQYME.',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:18:46',
                'updated_at' => '2026-08-21 06:18:46',
                'status' => 'aktif',
            ),
            17 => 
            array (
                'id' => 19,
                'name' => 'Alaric Rangga Wijaya',
                'username' => 'rangga',
                'email' => 'rangga@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$CHM2bD5YiObjxhe.C5TpV.8YDvffddtW7sSRuoorlYnl6yU67R6Sm',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:19:08',
                'updated_at' => '2026-08-21 06:19:08',
                'status' => 'aktif',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'Renty Aprillyzia',
                'username' => 'renty',
                'email' => 'renty@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$k5tZV7WC7husN7Lpuf8s5O5rueBzWhFBJJERZzq7Q6C3Xf2WhICu.',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:19:35',
                'updated_at' => '2026-08-21 06:19:35',
                'status' => 'aktif',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'M. Naufal Farhan',
                'username' => 'naufal',
                'email' => 'naufal@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$AWpZK.hMLf1NLgZzzE9uuuhIAWxp6V6VmQWCqA8roG.WWaX7G2sxq',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:20:05',
                'updated_at' => '2026-08-21 06:20:05',
                'status' => 'aktif',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'M .Zain Al Fatih',
                'username' => 'zain',
                'email' => 'zain@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$MENbHGnHXVB43rEXX2D08Oib0S9.ypFSACidKDZ3AVmco/AF.AFEe',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:20:30',
                'updated_at' => '2026-08-21 06:20:30',
                'status' => 'aktif',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'Saki Pradifta Ananta',
                'username' => 'saki',
                'email' => 'saki@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$ZbnQ0lI0h.H9SQEr2tBBMeVBfuWr/aqwDp2dbYD.zguedpHG.PVsy',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 06:20:56',
                'updated_at' => '2026-08-21 06:20:56',
                'status' => 'aktif',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'Navika',
                'username' => 'navika',
                'email' => 'navika@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$PcpRKGTpKNTE9AE7E7b60et0X/wEMrFhMn7mFix4YNmjA6nhCj962',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 08:18:13',
                'updated_at' => '2026-08-21 08:18:13',
                'status' => 'aktif',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'viona',
                'username' => 'viona',
                'email' => 'viona@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$mYDFiTEJZ/6faKiyuopFcOce1vl8a9JwWAYKqfKvQGGAq8aU0ukZi',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-21 08:18:53',
                'updated_at' => '2026-08-21 08:18:53',
                'status' => 'aktif',
            ),
            24 => 
            array (
                'id' => 26,
                'name' => 'Peserta',
                'username' => 'peserta',
                'email' => 'peserta@bimbel.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$h/4s.8ViP0AldsU536gEO.pv.FRldl68wZgjOlRqqIOJsVvn.B51O',
                'role' => 'siswa',
                'remember_token' => NULL,
                'created_at' => '2026-08-22 04:22:35',
                'updated_at' => '2026-08-22 08:56:50',
                'status' => 'aktif',
            ),
        ));
        
        
    }
}