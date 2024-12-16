<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BdhNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('bdhnhacc')->insert([
                'bdhMaNCC'=>$faker->uuid(),
                // 'bdhMaNCC'=>$faker->word(15),
                'bdhTenNCC'=>$faker->sentence(5),
                'bdhDiachi'=>$faker->address(),
                'bdhDienthoai'=>$faker->phoneNumber(10),
                'bdhemail'=>$faker->email(),
                'bdhstatus'=>$faker->boolean()
            ]);
        }
    }
}
