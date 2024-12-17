<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BdhVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('bdhvattu')->insert([
        //     'bdhMaVTu'=>'DD01',
        //     'bdhTenVTu'=>'Đầu DVD Hitachi 1 cửa',
        //     'bdhDvTinh'=>'Bộ',
        //     'bdhPhanTram'=>40,
        // ]);
        // DB::table('bdhvattu')->insert([
        //     'bdhMaVTu'=>'DD02',
        //     'bdhTenVTu'=>'Đầu DVD Hitachi 2 cửa',
        //     'bdhDvTinh'=>'Bộ',
        //     'bdhPhanTram'=>50,
        // ]);
        $faker = Faker::create();
        foreach(range(1,50) as $index){
            DB::table('bdhvattu')->insert([
                'bdhMaVTu'=>$faker->uuid(),
                // 'bdhMaNCC'=>$faker->word(15),
                'bdhTenVTu'=>$faker->sentence(5),
                'bdhDvTinh'=>$faker->word(3),
                'bdhPhanTram'=>$faker->randomFloat('2',0,100)
            ]);
        }
    }
}
