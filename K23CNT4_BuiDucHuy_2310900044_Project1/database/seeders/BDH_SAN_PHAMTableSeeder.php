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
            'bdhMaSanPham' => 'VP001',
            'bdhTenSanPham' => 'Cây phú quý',
            'bdhHinhAnh' => 'images/san-pham/VP001.jpg',
            'bdhSoLuong' => 100,
            'bdhDonGia' => 699000,
            'bdhMaLoai' => 1,
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_SAN_PHAM')->insert([
            'bdhMaSanPham' => 'VP002',
            'bdhTenSanPham' => 'Cây đại phú gia',
            'bdhHinhAnh' => 'images/san-pham/VP002.jpg',
            'bdhSoLuong' => 200,
            'bdhDonGia' => 550000,
            'bdhMaLoai' => 1,
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_SAN_PHAM')->insert([
            'bdhMaSanPham' => 'VP003',
            'bdhTenSanPham' => 'Cây hạnh phúc',
            'bdhHinhAnh' => 'images/san-pham/VP003.jpg',
            'bdhSoLuong' => 150,
            'bdhDonGia' => 250000,
            'bdhMaLoai' => 1,
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_SAN_PHAM')->insert([
            'bdhMaSanPham' => 'VP004',
            'bdhTenSanPham' => 'Cây vạn lộc',
            'bdhHinhAnh' => 'images/san-pham/VP004.jpg',
            'bdhSoLuong' => 300,
            'bdhDonGia' => 799000,
            'bdhMaLoai' => 1,
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_SAN_PHAM')->insert([
            'bdhMaSanPham' => 'PT001',
            'bdhTenSanPham' => 'Cây thiết mộc lan',
            'bdhHinhAnh' => 'images/san-pham/PT001.jpg',
            'bdhSoLuong' => 150,
            'bdhDonGia' => 590000,
            'bdhMaLoai' => 3,
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_SAN_PHAM')->insert([
            'bdhMaSanPham' => 'PT002',
            'bdhTenSanPham' => 'Cây trường sinh',
            'bdhHinhAnh' => 'images/san-pham/PT002.jpg',
            'bdhSoLuong' => 100,
            'bdhDonGia' => 150000,
            'bdhMaLoai' => 3,
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_SAN_PHAM')->insert([
            'bdhMaSanPham' => 'PT003',
            'bdhTenSanPham' => 'Cây hạnh phúc',
            'bdhHinhAnh' => 'images/san-pham/PT003.jpg',
            'bdhSoLuong' => 200,
            'bdhDonGia' => 299000,
            'bdhMaLoai' => 3,
            'bdhTrangThai' => 0
        ]);
        DB::table('BDH_SAN_PHAM')->insert([
            'bdhMaSanPham' => 'PT004',
            'bdhTenSanPham' => 'Cây hoa nhài',
            'bdhHinhAnh' => 'images/san-pham/PT004.jpg',
            'bdhSoLuong' => 300,
            'bdhDonGia' => 199000,
            'bdhMaLoai' => 3,
            'bdhTrangThai' => 0
        ]);
    }
}
