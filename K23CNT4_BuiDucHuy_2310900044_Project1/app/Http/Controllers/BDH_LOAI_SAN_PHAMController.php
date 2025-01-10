<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponde;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BDH_LOAI_SAN_PHAM;
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
        $bdhLoaiSanPham = BDH_LOAI_SAN_PHAM::find($request->id);
        $bdhLoaiSanPham->bdhMaLoai = $request->bdhMaLoai;
        $bdhLoaiSanPham->bdhTenLoai = $request->bdhTenLoai;
        $bdhLoaiSanPham->bdhTrangThai = $request->bdhTrangThai;

        $bdhLoaiSanPham->save();

        return redirect()->route('bdhadmins.bdhloaisanpham');
    }
    // get xóa
    public function bdhDelete($id)
    {
        $bdhLoaiSanPham = BDH_LOAI_SAN_PHAM::find($id);
        $bdhLoaiSanPham->delete();
        return redirect()->route('bdhadmins.bdhloaisanpham');
    }
    //detail
    public function bdhDetail($id)
    {
        $bdhloaisanpham = BDH_LOAI_SAN_PHAM::where('id', $id)->first();
        return view('bdhAdmins.bdhloaisanpham.bdh-detail',['bdhloaisanpham'=>$bdhloaisanpham]);
    }
}
