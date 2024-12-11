<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BdhKhoaController extends Controller
{
    //Đọc dữ liệu từ bảng khoa
    public function bdhGetAllKhoa()
    {
        //truy vấn đọc dữ liệu từ bảng khoa
        $bdhKhoas = DB::select("Select * from bdhkhoa");
        //chuyển dữ liệu lên view để hiển thị
        return view('/bdhkhoa.bdhList',['bdhKhoas' => $bdhKhoas]);
    }

    #chi tiết khoa
    public function bdhGetKhoa($makh)
    {
        $khoa = DB::select("Select * from bdhkhoa where bdhmakh=?",[$makh])[0];
        return view('bdhKhoa.bdhDetail',['khoa'=>$khoa]);
    }

    #edit - get
    public function bdhEdit($makh)
    {
        $khoa = DB::select("Select * from bdhkhoa where bdhmakh=?",[$makh])[0];
        return view('bdhKhoa.bdhEdit',['khoa'=>$khoa]);
    }
    
    #edit - submit
    public function bdhEditSubmit(Request $request)
    {
        //lấy dữ liệu mới trên form sửa
        $makh = $request->input('BDHMAKH');
        $tenkh = $request->input('BDHTENKH');
        DB::update("UPDATE bdhkhoa SET BDHTENKH = ? WHERE BDHMAKH=?",[$tenkh,$makh]);
        return redirect('/khoas');
    }

    #xoa
    public function delete($makh)
    {
        $khoa = DB::delete('delete from bdhkhoa where BDHMAKH =?',[$makh]);
        return redirect('/khoas');
    }
}
