<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bdhSinhVien;
class BdhSinhVienController extends Controller
{   
    //list / insert / update / delete
    public function bdhList()
    {
        // Lấy toàn bộ dữ liệu trong bảng sinh viên
        $bdhSinhViens = bdhSinhVien::all();
        return view('bdhSinhVien.bdh-list', ['bdhSinhViens'=>$bdhSinhViens]);
    }

    //create (insert)
    public function bdhCreate()
    {
    return view('bdhSinhVien.bdh-create');
    }

    //bdhcreatesubmit
    public function bdhCreateSubmit(Request $request)
    {
        //lấy giữ liệu submit lên form, gán hco các thuộc tính của đối tượng sinh viên
        $bdhSinhVien = new BdhSinhVien;
    $bdhSinhVien->bdhMaSV=$request->bdhMaSV;
    $bdhSinhVien->bdhHoSV=$request->bdhHoSV;
    $bdhSinhVien->bdhTenSV=$request->bdhTenSV;
    $bdhSinhVien->bdhPhai=$request->bdhPhai;
    $bdhSinhVien->bdhNgaySinh=$request->bdhNgaySinh;
    $bdhSinhVien->bdhMaKH=$request->bdhMaKH;
    $bdhSinhVien->save(); // Ghi lại
    return back()->with('bdhSinhVien_created','Đã thêm mới một sinh viên thành công!');
    }
}
