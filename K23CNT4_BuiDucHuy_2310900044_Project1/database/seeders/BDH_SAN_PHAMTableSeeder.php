<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BDH_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('BDH_SAN_PHAM')->insert([
            [
                'bdhMaSanPham' => 'SP001',
                'bdhTenSanPham' => 'Chuột Logitech G502',
                'bdhSoLuong' => 20,
                'bdhDonGia' => 1250000,
                'bdhMaLoai' => 'L001',
                'bdhTrangThai' => 1,
            ],
            [
                'bdhMaSanPham' => 'SP002',
                'bdhTenSanPham' => 'Chuột Razer DeathAdder V2',
                'bdhSoLuong' => 15,
                'bdhDonGia' => 1499000,
                'bdhMaLoai' => 'L001',
                'bdhTrangThai' => 0,
            ],
            [
                'bdhMaSanPham' => 'SP003',
                'bdhTenSanPham' => 'Bàn phím cơ Razer BlackWidow',
                'bdhSoLuong' => 10,
                'bdhDonGia' => 2599000,
                'bdhMaLoai' => 'L002',
                'bdhTrangThai' => 1,
            ],
            [
                'bdhMaSanPham' => 'SP004',
                'bdhTenSanPham' => 'Bàn phím Logitech K120',
                'bdhSoLuong' => 30,
                'bdhDonGia' => 499000,
                'bdhMaLoai' => 'L002',
                'bdhTrangThai' => 1,
            ],
            [
                'bdhMaSanPham' => 'SP005',
                'bdhTenSanPham' => 'Tai nghe HyperX Cloud II',
                'bdhSoLuong' => 25,
                'bdhDonGia' => 2499000,
                'bdhMaLoai' => 'L003',
                'bdhTrangThai' => 0,
            ],
            [
                'bdhMaSanPham' => 'SP006',
                'bdhTenSanPham' => 'Màn hình Dell UltraSharp',
                'bdhSoLuong' => 5,
                'bdhDonGia' => 7699000,
                'bdhMaLoai' => 'L004',
                'bdhTrangThai' => 1,
            ],
            [
                'bdhMaSanPham' => 'SP007',
                'bdhTenSanPham' => 'Chuột Microsoft Basic Optical',
                'bdhSoLuong' => 50,
                'bdhDonGia' => 2999000,
                'bdhMaLoai' => 'L001',
                'bdhTrangThai' => 1,
            ],
            [
                'bdhMaSanPham' => 'SP008',
                'bdhTenSanPham' => 'Bàn phím cơ Corsair K95',
                'bdhSoLuong' => 8,
                'bdhDonGia' => 4599000,
                'bdhMaLoai' => 'L002',
                'bdhTrangThai' => 0,
            ],
            [
                'bdhMaSanPham' => 'SP009',
                'bdhTenSanPham' => 'Tai nghe SteelSeries Arctis 7',
                'bdhSoLuong' => 12,
                'bdhDonGia' => 4399000,
                'bdhMaLoai' => 'L003',
                'bdhTrangThai' => 1,
            ],
            [
                'bdhMaSanPham' => 'SP010',
                'bdhTenSanPham' => 'Màn hình Samsung Odyssey G7',
                'bdhSoLuong' => 7,
                'bdhDonGia' => 13999000,
                'bdhMaLoai' => 'L003',
                'bdhTrangThai' => 1,
            ],
        ]);
    }
}
