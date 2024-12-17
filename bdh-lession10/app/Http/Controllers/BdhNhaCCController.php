<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BdhNhaCC;
class BdhNhaCCController extends Controller
{
    // list / create / edit / delete
    public function List(){

        //lấy dữ liệu từ db thông qua ORM
        $bdhNhaCCs = BdhNhaCC::all();
        return view('BdhNhaCC.List',['bdhNhaCCs'=>$bdhNhaCCs]);
    }
}
