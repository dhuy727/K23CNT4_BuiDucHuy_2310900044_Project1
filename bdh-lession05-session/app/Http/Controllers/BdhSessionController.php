<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BdhSessionController extends Controller
{
    //Đọc dữ liệu từ session
    public function bdhGetSessionData(Request $request)
    {
        if($request->session()->has("K23CNT4_BuiDucHuy"))
        {
            echo "<h2> Session Data:". $request->session()->get("K23CNT4_BuiDucHuy");
        }
        else
        {
            echo "<h2> Không có dữ liệu trong session </h2>";
        }
    }

    //Ghi dữ liệu vào session
    public function bdhStoreSessionData(Request $request)
    {
        $request->session()->put('K23CNT4_BuiDucHuy','K23CNT4 - Bùi Đức Huy - 2310900044');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";
    }

    //Xóa dữ liệu trong session
    public function bdhDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT4_BuiDucHuy');
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    }
}
