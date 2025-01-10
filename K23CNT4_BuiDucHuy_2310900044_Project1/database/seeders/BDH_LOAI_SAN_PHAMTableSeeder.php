<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BDH_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('BDH_LOAI_SAN_PHAM')->insert([
            [
                'bdhMaLoai' => 'L001',
                'bdhTenLoai' => 'Chuột',
                'bdhTrangThai' => 1,
            ],
            [
                'bdhMaLoai' => 'L002',
                'bdhTenLoai' => 'Bàn phím',
                'bdhTrangThai' => 1,
            ],
            [
                'bdhMaLoai' => 'L003',
                'bdhTenLoai' => 'Tai nghe',
                'bdhTrangThai' => 1,
            ],
            [
                'bdhMaLoai' => 'L004',
                'bdhTenLoai' => 'Màn hình',
                'bdhTrangThai' => 1,
            ],

        ]);
    }
}
