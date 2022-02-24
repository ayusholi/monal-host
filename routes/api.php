<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/payment/ime-pay/success', [\App\Http\Controllers\User\PaymentController::class, 'imePaySuccess'])->name('imepay.success');
Route::post('/payment/ime-pay/failed', [\App\Http\Controllers\User\PaymentController::class, 'imePayFailed'])->name('imepay.failed');
