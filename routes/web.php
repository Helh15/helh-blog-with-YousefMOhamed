<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewsController;

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
    return view('index');
});

Route::group(['middleware'=>'guest'],function(){
        Route::get('login',[AuthController::class,'index'])->name('login');
        Route::post('login',[AuthController::class,'login'])->name('login');

        Route::get('register',[AuthController::class,'register_view'])->name('register');
        Route::post('register',[AuthController::class,'register'])->name('register');
});

Route::group(['middleware'=>'auth'],function(){
        Route::get('home',[AuthController::class,'home'])->name('home');
        Route::get('logout',[AuthController::class,'logout'])->name('logout');
});


Route::get('photography',[ViewsController::class,'photography'])->name('photography');
Route::get('travel',[ViewsController::class,'travel'])->name('travel');
Route::get('fashion',[ViewsController::class,'fashion'])->name('fashion');
Route::get('about',[ViewsController::class,'about'])->name('about');
Route::get('contact',[ViewsController::class,'contact'])->name('contact');

