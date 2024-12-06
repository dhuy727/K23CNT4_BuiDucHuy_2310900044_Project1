<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/greeting', function () {
    return "<h1>Hello,Bui Duc Huy<h1>";
});
Route::get("/bdh-account",[BdhAccountController::class,'BdhIndex'])->name('bdhAccount.bdhIndex');
Route::get("/bdh-account-create",[BdhAccountController::class,'BdhCreate'])->name('bdhAccount.bdhCreate');
Route::get("/bdh-account-showData",[BdhAccountController::class,'BbdhShowData'])->name('bdhAccount.bdhShowData');
Route::get("/bdh-account-list-data",[BdhAccountController::class,'BbdhShowData'])->name('bdhAccount.bdhShowData');