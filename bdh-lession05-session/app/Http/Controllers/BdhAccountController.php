<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BdhAccountController extends Controller
{
    //form login -get
    public function bdhLogin()
    {
        return view('bdh-login');
    }

    //form login - post (Khi đăng nhập)
    public function bdhLoginSubmit(Request $request)
    {
        //validiation
        $validation = $request->validate([
            'bdhEmail' => 'required|email',
            'bdhPass' => 'required|min:6'
        ]);
        //check login -> store session -> redirect home
        $bdhEmail = $request->input('bdhEmail');
        $bdhPass= $request->input('bdhPass');

        $bdhLoginSession = [
            'bdhEmail'=> $bdhEmail,
            'bdhPass' => $bdhPass
        ];

        $bdh_json = json_encode($bdhLoginSession);

        if($bdhEmail == "bdh@gmail.com" && $bdhPass=="123456a@")
        {
            //lưu session
            $request->session()->put('K23CNT4-BuiDucHuy',$bdhEmail);
            return redirect('/');
        }
        return redirect()->back()->with('bdh-error', 'Lỗi đăng nhập');
    }
}
