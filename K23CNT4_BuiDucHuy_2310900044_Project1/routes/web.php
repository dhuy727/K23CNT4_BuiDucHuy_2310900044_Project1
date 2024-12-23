<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BDH_QUAN_TRIController;
use App\Http\Controllers\BDH_LOAI_SAN_PHAMController;
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

Route::get('/bdhAdmins/bdh-loai-san-pham',[BDH_LOAI_SAN_PHAMController::class,'bdhList'])->name('bdhadmins.bdhloaisanpham');
Route::get('/bdhAdmins/bdh-loai-san-pham/bdh-create',[BDH_LOAI_SAN_PHAMController::class,'bdhCreate'])->name('bdhadmins.bdhLoaiSanPham.bdhcreate');
Route::get('/bdhAdmins/bdh-loai-san-pham/bdh-create',[BDH_LOAI_SAN_PHAMController::class,'bdhCreateSubmit'])->name('bdhadmins.bdhLoaiSanPham.bdhcreatesubmit');