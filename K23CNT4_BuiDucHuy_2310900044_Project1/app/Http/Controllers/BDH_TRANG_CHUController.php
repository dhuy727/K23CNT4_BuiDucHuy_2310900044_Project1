<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BDH_SAN_PHAM;
use App\Models\BDH_HOA_DON;
use App\Models\BDH_CT_HOA_DON;
class BDH_TRANG_CHUController extends Controller
{
    public function bdhIndex()
    {
        $bdhsanphams = BDH_SAN_PHAM::paginate(6);
        return view('bdhuser.bdhtrangchu', compact('bdhsanphams'));
    }
    // public function show($id)
    // {
    //     $bdhsanphams = BDH_SAN_PHAM::find($id); 
        
    //     return view('bdhuser.bdhshow', compact('bdhsanphams')); 
    // }
}
