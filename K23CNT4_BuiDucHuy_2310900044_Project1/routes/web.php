<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BDH_QUAN_TRIController;
use App\Http\Controllers\BDH_LOAI_SAN_PHAMController;
use App\Http\Controllers\BDH_SAN_PHAMController;
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

Route::get('/bdh-admins/bdh-loai-san-pham',[BDH_LOAI_SAN_PHAMController::class,'bdhList'])->name('bdhadmins.bdhloaisanpham');
Route::get('/bdh-admins/bdh-loai-san-pham/bdh-create',[BDH_LOAI_SAN_PHAMController::class,'bdhCreate'])->name('bdhadmins.bdhLoaiSanPham.bdhcreate');
Route::post('/bdh-admins/bdh-loai-san-pham/bdh-create',[BDH_LOAI_SAN_PHAMController::class,'bdhCreateSubmit'])->name('bdhadmins.bdhLoaiSanPham.bdhcreatesubmit');
#Edit loai san pham
Route::get('/bdh-admins/bdh-loai-san-pham/bdh-edit/{id}',[BDH_LOAI_SAN_PHAMController::class,'bdhEdit'])->name('bdhadmins.bdhloaisanpham.bdhedit');
Route::post('/bdh-admins/bdh-loai-san-pham/bdh-edit',[BDH_LOAI_SAN_PHAMController::class,'bdhEditSubmit'])->name('bdhadmins.bdhloaisanpham.bdheditsubmit');
# delete loại sản phẩm
Route::get('/bdh-admins/bdh-loai-san-pham/bdh-delete/{id}',[BDH_LOAI_SAN_PHAMController::class,'bdhDelete'])->name('bdhadmins.bdhloaisanpham.bdhdelete');
#SanPham
Route::get('/bdh-admins/bdh-san-pham',[BDH_SAN_PHAMController::class,'bdhList'])->name('bdhadmins.bdhsanpham');
Route::get('/bdh-admins/bdh-san-pham/bdh-create',[BDH_SAN_PHAMController::class,'bdhCreate'])->name('bdhadmins.bdhsanpham.bdhcreate');
Route::post('/bdh-admins/bdh-san-pham/bdh-create',[BDH_SAN_PHAMController::class,'bdhCreateSubmit'])->name('bdhadmins.bdhsanpham.bdhcreatesubmit');