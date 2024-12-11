<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BdhMonHocController extends Controller
{
    //list môn học
    public function bdhList()
    {
        $bdhMonHocs = DB::table('bdhmonhoc')->get();
        return view('bdhMonHoc.bdhList',['bdhMonHocs'=>$bdhMonHocs]);
    }
}
