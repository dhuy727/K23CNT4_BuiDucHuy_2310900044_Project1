<?php

namespace App\Http\Controllers;
use App\Models\BDH_HOA_DON;
use Illuminate\Http\Request;

class BDH_HOA_DONController extends Controller
{

    public function bdhList()
    {
        $bdhhoadons = BDH_HOA_DON::all();
        return view('bdhAdmins.bdhhoadon.bdh-list', ['bdhhoadons'=>$bdhhoadons]);
    }

    //create
    public function bdhCreate()
    {
        return view('bdhAdmins.bdhhoadon.bdh-create');
    }
    public function bdhCreateSubmit(Request $request)
    {
        $validated = $request->validate([
            'bdhMaHoaDon' => 'required|unique:bdh_hoa_don,bdhMaHoaDon',
            'bdhMaKhachHang' => 'required|exists:bdh_khach_hang,id',
            'bdhNgayHoaDon' => 'required|date',
            'bdhHoTenKhachHang' => 'required|string',
            'bdhTongGiaTri' => 'required|numeric',
            'bdhTrangThai' => 'required|in:0,1',
        ]);

        $bdhhoadon = new BDH_HOA_DON;
        $bdhhoadon->bdhMaHoaDon = $request->bdhMaHoaDon;
        $bdhhoadon->bdhMaKhachHang = $request->bdhMaKhachHang;
        $bdhhoadon->bdhHoTenKhachHang = $request->bdhHoTenKhachHang;
        $bdhhoadon->bdhTongGiaTri = (double) $request->bdhTongGiaTri;
        $bdhhoadon->bdhTrangThai = $request->bdhTrangThai;
        $bdhhoadon->bdhNgayHoaDon = $request->bdhNgayHoaDon;
        $bdhhoadon->save();

        return redirect()->route('bdhadmins.bdhhoadon');
    }
}
