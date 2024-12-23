<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BDH_LOAI_SAN_PHAMController extends Controller
{
    //admin CRUD

    //list 
    public function bdhList()
    {
        $bdhLoaiSanPhams = BDH_LOAI_SAN_PHAM::all();
        return view('bdhAdmins.bdhLoaiSanPham.bdh-list',['bdhLoaiSanPham'=>$bdhLoaiSanPhams]);
    }

    //create
    public function bdhCreate()
    {
        return view('bdhAdmins.bdhLoaiSanPham.bdh-create');
    }
    //create - submit
    public function bdhCreateSubmit(request $request)
    {
        //ghi dữ liệu xuống db

        $bdhLoaiSanPham = new BDH_LOAI_SAN_PHAM;
        $bdhLoaiSanPham->bdhMaLoai = $request->bdhMaLoai;
        $bdhLoaiSanPham->bdhTenLoai = $request->bdhTenLoai;
        $bdhLoaiSanPham->bdhTrangThai = $request->bdhTrangThai;
        
        $bdhLoaiSanPham->save();

        return redirect()->route('bdhadmins.bdhloaisanpham');
    }

    //edit
    public function bdhEdit($id)
    {
        $bdhLoaiSanPham = BDH_LOAI_SAN_PHAM::find($id);
        return view('bdhAdmins.bdhLoaiSanPham.bdh-edit',['bdhLoaiSanPham'=>$bdhLoaiSanPham]);
    }

    //edit - submit
    public function bdhEditSubmit(request $request)
    {
        $maloai = $request->bdhMaLoai;
        $tenloai = $request->bdhTenLoai;
        DB::update("UPDATE bdh_loai_san_pham set bdhTenLoai = ? where bdhMaLoai = ?",[$maloai,$tenloai]);
        return redirect('/bdh-admins/bdh-loai-san-pham');
    }

}
