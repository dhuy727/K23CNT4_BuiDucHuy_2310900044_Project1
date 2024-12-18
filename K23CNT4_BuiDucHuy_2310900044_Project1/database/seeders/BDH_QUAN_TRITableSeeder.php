<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BDH_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bdhMatKhau =md5("123456a@");
        DB::table('BDH_QUAN_TRI')->insert([
            'bdhTaiKhoan' => 'duchuy@gmail.com',
            'bdhMatKhau' => $bdhMatKhau,
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_QUAN_TRI')->insert([
            'bdhTaiKhoan' => '0973378242',
            'bdhMatKhau' => $bdhMatKhau,
            'bdhTrangThai' => 0
        ]);
    }
}
