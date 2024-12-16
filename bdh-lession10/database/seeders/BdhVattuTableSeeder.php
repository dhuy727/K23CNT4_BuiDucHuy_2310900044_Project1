<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BdhVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bdhvattu')->insert([
            'bdhMaVTu'=>'DD01',
            'bdhTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'bdhDvTinh'=>'Bộ',
            'bdhPhanTram'=>40,
        ]);
        DB::table('bdhvattu')->insert([
            'bdhMaVTu'=>'DD02',
            'bdhTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            'bdhDvTinh'=>'Bộ',
            'bdhPhanTram'=>50,
        ]);
    }
}
