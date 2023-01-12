<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\UserController;

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
        Route::post('add_new_article',[UserController::class,'add_new_article'])->name('add_new_article');
        Route::post('add_comment/{id}',[UserController::class,'add_comment'])->name('add_comment');

});


Route::get('photography',[ViewsController::class,'photography'])->name('photography');
Route::get('travel',[ViewsController::class,'travel'])->name('travel');
Route::get('fashion',[ViewsController::class,'fashion'])->name('fashion');
Route::get('about',[ViewsController::class,'about'])->name('about');
Route::get('contact',[ViewsController::class,'contact'])->name('contact');
Route::get('readmore/{id}', [ViewsController::class, 'readmore'])->name('readmore');
Route::get('categoryindex/{id}', [ViewsController::class, 'categoryindex'])->name('categoryindex');
Route::get('aboutauther/{id}', [ViewsController::class, 'aboutauther'])->name('aboutauther');

