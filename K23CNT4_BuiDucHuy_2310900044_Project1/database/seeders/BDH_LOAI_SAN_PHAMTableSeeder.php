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
            'bdhMaLoai' => 'L001',
            'bdhTenLoai' => 'Cây cảnh văn phòng',
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_LOAI_SAN_PHAM')->insert([
            'bdhMaLoai' => 'L002',
            'bdhTenLoai' => 'Cây để bàn',
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_LOAI_SAN_PHAM')->insert([
            'bdhMaLoai' => 'L003',
            'bdhTenLoai' => 'Cây cảnh phong thủy',
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_LOAI_SAN_PHAM')->insert([
            'bdhMaLoai' => 'L004',
            'bdhTenLoai' => 'Cây thủy canh',
            'bdhTrangThai' => 0
        ]);
    }
}
