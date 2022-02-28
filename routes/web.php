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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/service/{slug}", [\App\Http\Controllers\HomeController::class, 'serviceDetail'])->name('service.detail');

/* admin auth routes */
Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/login',  [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get("/settings", [\App\Http\Controllers\Admin\SettingsController::class, 'edit'])->name('settings');
    Route::post("/settings", [\App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('update.settings');

    Route::resource("regions", \App\Http\Controllers\Admin\RegionController::class);
    Route::resource("operating-systems", \App\Http\Controllers\Admin\OperatingSystemController::class);
    Route::resource("storages", \App\Http\Controllers\Admin\StorageController::class);
    Route::resource("services", \App\Http\Controllers\Admin\ServiceController::class);
    Route::resource("faqs", \App\Http\Controllers\Admin\FaqController::class);

    Route::get('/customers', [\App\Http\Controllers\Admin\CustomerController::class, 'getCustomers'])->name('customers.list');
    Route::get('/customers/detail/{customer_id}', [\App\Http\Controllers\Admin\CustomerController::class, 'getCustomerDetail'])->name('customer.detail');
    Route::get('/customers/detail/{customer_id}/services', [\App\Http\Controllers\Admin\CustomerController::class, 'getCustomerServices'])->name('customer.services');
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
    Route::post('/login', [UserController::class, 'login'])->name('post.login');
    Route::get('account/verify/{token}', [UserController::class, 'verifyAccount'])->name('verify'); 
    Route::get('logout', [UserController::class, 'logout'])->name('logout');

    // forgot password
    Route::get('/forgotpassword',[\App\Http\Controllers\Auth\ForgotPasswordController::class,'forgotPassword'])->name('forgotpassword');
    Route::post('/submitforgotpassword',[\App\Http\Controllers\Auth\ForgotPasswordController::class,'submitForgotPassword'])->name('submitforgotpassword');
    Route::get('/forgotpasswordlink/{token}',[\App\Http\Controllers\Auth\ForgotPasswordController::class,'forgotPasswordLink'])->name('forgotpasswordlink');
    Route::post('resetpassword',[\App\Http\Controllers\Auth\ForgotPasswordController::class,'resetPassword'])->name('resetpassword');

    // Socialite OAuth Login and register
    Route::get('/{social}',[\App\Http\Controllers\Auth\UserController::class, 'socialLogin'])->where('social', 'google')->name('socialite');
    Route::get('/{social}/callback',[\App\Http\Controllers\Auth\UserController::class, 'handleProviderCallback'])->name('socialite.callback')->where('social', 'google');
});

Route::group(['middleware'=>'auth','is_verify_email'], function(){

    Route::get('/user/dashboard', function(){
        return view('user.dashboard.index');
    })->name('user.dashboard');

    Route::post('/payments/connectips', [\App\Http\Controllers\User\PaymentController::class, 'connectIps'])->name('payment.connectips');
    // IME Payment
    Route::post('/payment/ime-pay', [\App\Http\Controllers\User\PaymentController::class, 'imePayPayment'])->name('payment.imepay');

    Route::post("/payment/ime-pay/confirmation", [App\Http\Controllers\User\PaymentController::class], 'imePayConfirmation')->name('imepay.confirmation');
    Route::get('/my-services', [\App\Http\Controllers\User\UserController::class, 'getServices'])->name('my.services');

    // setting
    Route::get('/user/setting',[\App\Http\Controllers\User\SettingController::class,'userSetting'])->name('user.setting');
    Route::post('/update/user/{id}',[\App\Http\Controllers\User\SettingController::class,'updateSetting'])->name('user.update');

    // change password
    Route::post('/change/password',[\App\Http\Controllers\User\SettingController::class,'changePassword'])->name('user.changepassword');
});




