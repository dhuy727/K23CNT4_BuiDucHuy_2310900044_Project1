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

        $bdhSanPham = new BDH_SAN_PHAM;
        $bdhSanPham->bdhMaSanPham = $request->bdhMaSanPham;
        $bdhSanPham->bdhTenSanPham = $request->bdhTenSanPham;
        $bdhSanPham->bdhHinhAnh = $request->bdhHinhAnh;
        $bdhSanPham->bdhSoLuong = $request->bdhSoLuong;
        $bdhSanPham->bdhDonGia = $request->bdhDonGia;
        $bdhSanPham->bdhMaLoai = $request->bdhMaLoai;
        $bdhSanPham->bdhTrangThai = $request->bdhTrangThai;
        
        $bdhSanPham->save();

        return redirect()->route('bdhadmins.bdhsanpham');
    }

    //edit
    public function bdhEdit($id)
    {
        $bdhSanPham = BDH_SAN_PHAM::find($id);
        return view('bdhAdmins.bdhSanPham.bdh-edit',['bdhSanPham'=>$bdhSanPham]);
    }
    public function bdhEditSubmit(request $request)
    {
        $bdhSanPham = BDH_SAN_PHAM::find($request->id);
        $bdhSanPham->bdhMaSanPham = $request->bdhMaSanPham;
        $bdhSanPham->bdhTenSanPham = $request->bdhTenSanPham;
        $bdhSanPham->bdhHinhAnh = $request->bdhHinhAnh;
        $bdhSanPham->bdhSoLuong = $request->bdhSoLuong;
        $bdhSanPham->bdhDonGia = $request->bdhDonGia;
        $bdhSanPham->bdhMaLoai = $request->bdhMaLoai;
        $bdhSanPham->bdhTrangThai = $request->bdhTrangThai;

        $bdhSanPham->save();

        return redirect()->route('bdhadmins.bdhsanpham');
    }

    // get xóa
    public function bdhDelete($id)
    {
        $bdhSanPham = BDH_SAN_PHAM::find($id);
        $bdhSanPham->delete();
        return redirect()->route('bdhadmins.bdhsanpham');
    }

    //detail
    public function bdhDetail($id)
    {
        $bdhsanpham = BDH_SAN_PHAM::find($id);
        return view('bdhAdmins.bdhsanpham.bdh-detail', ['bdhsanpham' => $bdhsanpham]);
    }
}
