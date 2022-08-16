<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Auth::routes();
Route::middleware('auth')->prefix('/dashboard')->group(function(){
    Route::get('/admin',[\App\Http\Controllers\admin\AdminController::class,'index']);
});
Route::get('/login',function(){
   return abort(404);
});


