<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\BdhProductController;

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

// Route::get('/test', function () {
//   return view('test');
// });


Route::get('/test', [BdhProductController::class,'bdhIndex']);

#views
Route::get('/view-1',function(){
    return view('bdh-view1',['name'=>'K23CNT4 -  project 1 - Bui Duc Huy']);
});

Route::get('/view-2',function(){
    return view('bdh-view2',[
                'name'=>'K23CNT4 -  project 1 - Bui Duc Huy',
                'array'=>[1,3,2,6,9],
            ]);
});

Route::get('/view-3',function(){
    return view('bdh-view3',[
                'name' =>["Bùi","Đức","Huy"],
                'arr' =>[12,22,31,35,57,45],
                'users'=>[],
            ]);
});