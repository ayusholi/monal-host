<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\AdminController;

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
    return view('admin.dashboard.index');
});

/* admin auth routes */
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/login',  [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

Route::group(['middleware'=>'auth:admin'], function(){

    Route::get('/admin/dashboard', function(){
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

});

/* user auth routes */
Route::group(['prefix'=>'auth','as'=>'auth.'], function(){
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/login',  [UserController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});

Route::group(['middleware'=>'auth'], function(){

    Route::get('/user/dashboard', function(){
        return view('user.dashboard.index');
    })->name('user.dashboard');

});




