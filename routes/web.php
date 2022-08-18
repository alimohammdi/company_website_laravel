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

Route::get('/',[\App\Http\Controllers\front\IndexController::class,'index'])->name('show-website');

Auth::routes();
Route::middleware('auth')->prefix('/dashboard')->group(function(){
    // admin and seo
    Route::get('/admin',[\App\Http\Controllers\admin\AdminController::class,'index'])->name('admin.IndexPage');
    Route::post('/admin/store',[\App\Http\Controllers\admin\AdminController::class,'storeSeo'])->name('admin.store.seo');
    Route::get('/seo',function(){
       return view('dashbord.admin.seo');
    })->name('admin.seo');
    Route::get('/admin/showSeo',[App\Http\Controllers\Admin\AdminController::class,'showDetails'])->name('admin.show.seo');
    Route::delete('admin/delete/{id}',[\App\Http\Controllers\admin\AdminController::class,'deleteSeo'])->name('admin.delete.seo');
    // admin and seo
    // slider crud
      Route::resource('/slider',\App\Http\Controllers\admin\SliderController::class)->parameters(['slider'=>'id']);
      
    // end slider crud

});
Route::get('/login',function(){
   return abort(404);
});


