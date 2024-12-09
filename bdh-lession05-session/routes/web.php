<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BdhSessionController;

use App\Http\Controllers\BdhAccountController;
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

#test session
Route::get('/bdh-session/get', [BdhSessionController::class,'bdhGetSessionData'])->name('bdhsession.get');
Route::get('/bdh-session/set', [BdhSessionController::class,'bdhStoreSessionData'])->name('bdhsession.set');
Route::get('/bdh-session/delete', [BdhSessionController::class,'bdhDeleteSessionData'])->name('bdhsession.del');

#account
Route::get('/bdh-login',[BdhAccountController::class,'bdhLogin'])->name('bdhaccount.bdhlogin');
Route::post('/bdh-login',[BdhAccountController::class,'bdhLoginSubmit'])->name('bdhaccount.bdhloginsubmit');