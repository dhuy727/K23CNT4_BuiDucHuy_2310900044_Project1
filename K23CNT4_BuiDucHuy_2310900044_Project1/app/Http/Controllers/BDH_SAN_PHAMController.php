<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BDH_SAN_PHAM;
class BDH_SAN_PHAMController extends Controller
{
    public function bdhList()
    {
        $bdhSanPhams = BDH_SAN_PHAM::all();

        return view('bdhAdmins.bdhSanPham.bdh-list',['bdhSanPham'=>$bdhSanPhams]);
    }

    public function bdhCreate()
    {
        return view('bdhAdmins.bdhSanPham.bdh-create');
    }

    public function bdhCreateSubmit(request $request)
    {
        //ghi dữ liệu xuống db

        $bdhLoaiSanPham = new BDH_SAN_PHAM;
        $bdhLoaiSanPham->bdhMaSanPham = $request->bdhMaSanPham;
        $bdhLoaiSanPham->bdhTenSanPham = $request->bdhTenSanPham;
        $bdhLoaiSanPham->bdhHinhAnh = $request->bdhHinhAnh;
        $bdhLoaiSanPham->bdhSoLuong = $request->bdhSoLuong;
        $bdhLoaiSanPham->bdhDonGia = $request->bdhDonGia;
        $bdhLoaiSanPham->bdhMaLoai = $request->bdhMaLoai;
        $bdhLoaiSanPham->bdhTrangThai = $request->bdhTrangThai;
        
        $bdhLoaiSanPham->save();

        return redirect()->route('bdhadmins.bdhsanpham');
    }
}
