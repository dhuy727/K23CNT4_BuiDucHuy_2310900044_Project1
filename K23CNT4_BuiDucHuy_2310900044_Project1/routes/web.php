<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BDH_QUAN_TRIController;

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
