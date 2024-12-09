<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\RegistrationController;

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

Route::get('/login', [LoginController::class, 'index'])->name('bdhLogin.Inđex');
Route::post('/login-submit', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'submitForm'])->name('register.submit');