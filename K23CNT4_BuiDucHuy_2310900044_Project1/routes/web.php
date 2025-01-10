<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BDH_QUAN_TRIController;
use App\Http\Controllers\BDH_LOAI_SAN_PHAMController;
use App\Http\Controllers\BDH_SAN_PHAMController;
use App\Http\Controllers\BDH_Hoa_DONController;
use App\Http\Controllers\BDH_KHACH_HANGController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admins/bdh-login', [BDH_QUAN_TRIController::class, 'bdhLogin'])->name('admins.bdhLogin');
Route::post('/admins/bdh-login', [BDH_QUAN_TRIController::class, 'bdhLoginSubmit'])->name('admins.bdhLoginSubmit');

#Admins - route
Route::get('/bdh-admins',function(){
    return view('bdhAdmins.index');
}); 
#loai san pham
Route::get('/bdh-admins/bdh-loai-san-pham',[BDH_LOAI_SAN_PHAMController::class,'bdhList'])->name('bdhadmins.bdhloaisanpham');
Route::get('/bdh-admins/bdh-loai-san-pham/bdh-create',[BDH_LOAI_SAN_PHAMController::class,'bdhCreate'])->name('bdhadmins.bdhLoaiSanPham.bdhcreate');
Route::post('/bdh-admins/bdh-loai-san-pham/bdh-create',[BDH_LOAI_SAN_PHAMController::class,'bdhCreateSubmit'])->name('bdhadmins.bdhLoaiSanPham.bdhcreatesubmit');
#Edit loai san pham
Route::get('/bdh-admins/bdh-loai-san-pham/bdh-edit/{id}',[BDH_LOAI_SAN_PHAMController::class,'bdhEdit'])->name('bdhadmins.bdhloaisanpham.bdhedit');
Route::post('/bdh-admins/bdh-loai-san-pham/bdh-edit',[BDH_LOAI_SAN_PHAMController::class,'bdhEditSubmit'])->name('bdhadmins.bdhloaisanpham.bdheditsubmit');
#detail
Route::get('/bdh-admins/bdh-loai-san-pham/bdh-detail/{id}', [BDH_LOAI_SAN_PHAMController::class,'bdhDetail'])->name('bdhadmin.bdhloaisanpham.bdhDetail');
# delete loại sản phẩm
Route::get('/bdh-admins/bdh-loai-san-pham/bdh-delete/{id}',[BDH_LOAI_SAN_PHAMController::class,'bdhDelete'])->name('bdhadmins.bdhloaisanpham.bdhdelete');
#SanPham
Route::get('/bdh-admins/bdh-san-pham',[BDH_SAN_PHAMController::class,'bdhList'])->name('bdhadmins.bdhsanpham');
Route::get('/bdh-admins/bdh-san-pham/bdh-create',[BDH_SAN_PHAMController::class,'bdhCreate'])->name('bdhadmins.bdhsanpham.bdhcreate');
Route::post('/bdh-admins/bdh-san-pham/bdh-create',[BDH_SAN_PHAMController::class,'bdhCreateSubmit'])->name('bdhadmins.bdhsanpham.bdhcreatesubmit');
#Edit san pham
Route::get('/bdh-admins/bdh-san-pham/bdh-edit/{id}',[BDH_SAN_PHAMController::class,'bdhEdit'])->name('bdhadmins.bdhsanpham.bdhedit');
Route::post('/bdh-admins/bdh-san-pham/bdh-edit',[BDH_SAN_PHAMController::class,'bdhEditSubmit'])->name('bdhadmins.bdhsanpham.bdheditsubmit');
#delete san pham
Route::get('/bdh-admins/bdh-san-pham/bdh-delete/{id}',[BDH_SAN_PHAMController::class,'bdhDelete'])->name('bdhadmins.bdhsanpham.bdhdelete');
#detail san pham
Route::get('/bdh-admins/bdh-san-pham/bdh-detail/{id}', [BDH_SAN_PHAMController::class,'bdhDetail'])->name('bdhadmin.bdhsanpham.bdhDetail');

#hoa don
Route::get('/bdh-admins/bdh-hoa-don',[BDH_HOA_DONController::class,'bdhList'])->name('bdhadmins.bdhhoadon');
#create hoa don
Route::get('/bdh-admins/bdh-hoa-don/bdh-create',[BDH_HOA_DONController::class,'bdhCreate'])->name('bdhadmin.bdhhoadon.bdhcreate');
Route::post('/bdh-admins/ndbdhk-hoa-don/bdh-create',[BDH_HOA_DONController::class,'bdhCreateSubmit'])->name('bdhadmin.bdhhoadon.bdhCreateSubmit');

#khach hang
Route::get('/bdh-admins/bdh-khach-hang',[BDH_KHACH_HANGController::class,'bdhList'])->name('bdhadmins.bdhkhachhang');