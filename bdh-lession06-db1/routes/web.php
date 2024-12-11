<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BdhKhoaController;
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

#Khoa
Route::get('/khoas',[BdhKhoaController::class,'bdhGetAllKhoa'])->name('bdhkhoa.bdhgetallkhoa');
#Khoa detail
Route::get('/khoas/detail/{makh}',[BdhKhoaController::class,'bdhGetKhoa'])->name('bdhkhoa.bdhgetkhoa');
#khoa edit
Route::get('/khoas/edit/{makh}',[BdhKhoaController::class,'bdhEdit'])->name('bdhkhoa.bdhEdit');
Route::post('/khoas/edit',[BdhKhoaController::class,'bdhEditSubmit'])->name('bdhkhoa.bdhEditSubmit');
#xóa
Route::get('/khoas/delete/{makh}',[BdhKhoaController::class,'bdhDelete'])->name('dbhkhoa.bdhDelete');