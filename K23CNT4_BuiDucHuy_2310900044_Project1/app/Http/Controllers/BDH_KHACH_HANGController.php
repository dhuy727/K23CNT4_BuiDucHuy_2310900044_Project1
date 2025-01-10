<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BDH_KHACH_HANG;
use Illuminate\Support\Facades\DB;

class BDH_KHACH_HANGController extends Controller
{
    public function bdhList()
    {
        $bdhkhachhangs = BDH_KHACH_HANG::all();
        return view('bdhAdmins.bdhkhachhang.bdh-list', ['bdhkhachhangs'=>$bdhkhachhangs]);
    }
}
