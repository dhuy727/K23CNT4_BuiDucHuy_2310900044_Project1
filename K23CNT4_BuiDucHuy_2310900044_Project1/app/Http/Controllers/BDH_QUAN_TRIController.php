<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BDH_QUAN_TRI;
class BDH_QUAN_TRIController extends Controller
{
    // get login (authentication)
    public function bdhLogin(){
        return view('BdhLogin.bdh-login');
    }

        // post login (authentication)
    public function bdhLoginSubmit(Request $request){
        return view('BdhLogin.bdh-login');
    }
}
