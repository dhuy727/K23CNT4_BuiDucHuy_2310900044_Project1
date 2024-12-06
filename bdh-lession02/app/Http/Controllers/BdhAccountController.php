<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BdhAccountController extends Controller
{
    //action
    public  function BdhIndex(){
        return "<h1> BdhAccount Controller; BdhIndex - Action; return tring </h1>";
    }
    //action return về view -> form thêm mới
    public function bdhCreate(){
        //
        return view('bdh-account-create');
    }

    //action return data to view 
    public function bdhShowData(){
        //tạo mốc dâta
        $data = array('2310900044','Bùi Đức Huy'); 
        return view('bdh-account-showData',['bdhData'=>$data]);
    }

    //action: return list data to view
    public function bdhList(){
        $data = array(
            ["id"=>1,"UserName"=>"ChungTrinh","Password"=>"123456a@","FullName"=>"Trịnh Văn Chung"],
            
            ["id"=>2,"UserName"=>"Devmaster","Password"=>"123456a@","FullName"=>"Devmaster Academy"]
            );
    return view('bdh-account-list',['list'=>$data]);
    }

    //action connect db, get data to view
    public function bdhGetAll(){
        // đọc dữ liệu từ bảng trong mysql
        $model = DB::table('bdhaccount')->get();

        return view('bdh-account-all',['model'=>$model]);
    }
}
