<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BdhSinhVienController;
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

#bdhSinhVien - Model
Route::get('/bdh-sinhviens',[BdhSinhVienController::class,'bdhList'])->name('bdhSinhSien.bdhList');
Route::get('/bdh-sinhviens/create',[BdhSinhVienController::class,'bdhCreate'])->name('bdhSinhSien.bdhCreate');
Route::post('/bdh-sinhviens/create',[BdhSinhVienController::class,'bdhCreateSubmit'])->name('bdhSinhSien.bdhCreateSubmit');