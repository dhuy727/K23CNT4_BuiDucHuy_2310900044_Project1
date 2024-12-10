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
}
