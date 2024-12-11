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

    #insert - get
    public function bhdInsert()
    {
        return view('bdhkhoa.bhdInsert');
    }
    #insert post
    public function bdhInsertSubmit(Request $request)
    {
        //kiểm tra dữ liệu
        $validate = $request->validate([
                'BDHMAKH' => 'required|max:2',
                'BDHTENKH' =>'required|max:50'
            ],
            [
                'BDHMAKH.required' => 'Vui lòng nhập mã khoa',
                'BDHMAKH.max' => 'Mã khoa tối đa 2 kí tự',
                'BDHTENKH.required' => 'Vui lòng nhập tên khoa',
                'BDHTENKH.max' => 'Tên khoa tối đa 50 kí tự',
            ]
    );
        //lấy dữ liệu lên form
        $makh = $request->input('BDHMAKH');
        $tenkh = $request->input('BDHTENKH');
        //ghi dữ liệu lên database
        DB::insert("INSERT INTO bdhkhoa(BDHMAKH,BDHTENKH) VALUES (?,?) ", [$makh,$tenkh]);
        //chuyển sang trang danh sách
        return redirect('/khoas');
    }

    #delete
    public function delete($makh)
    {
        $khoa = DB::delete('DELETE FROM bdhkhoa where BDHMAKH =?',[$makh]);
        return redirect('/khoas');
    }
}
