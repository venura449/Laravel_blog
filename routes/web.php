<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\Dashboardcontroller;
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



Route::get('/add', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[WelcomeController::class,'index'])->name('welcome');


Route::group(['middleware'=>['auth']],function(){
    Route::Post('/addpost',[PostController::class,'store'])->name('addpost');
    Route::get('/show/{postId}/post',[PostController::class,'show'])->name('showpost');
    Route::get('/View',[PostController::class,'viewspec'])->name('viewspec');
    Route::get('/edit/{id}',[PostController::class,'edit'])->name('edit');
    Route::Post('/update/{id}',[PostController::class,'update'])->name('update');
    Route::get('/delete/{id}',[PostController::class,'destroy'])->name('delete');
});



Route::group(['middleware'=>['admin','auth']],function(){
    Route::get('/dashboard',[Dashboardcontroller::class,'index'])->middleware('admin')->name('admin.dashboard');

});

