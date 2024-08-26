<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

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

/*
    Page Routes
*/
Route::get('/', function () {
    return view('page.home');
});
Route::get('/login', function(){
    return view('page.user.login');
});

Route::get('/dashboard', function(){
    return view('page.dashboard.index');
});
/*
    User Authentication Routes
*/
Route::post('/user-reg',[UserController::class,'userRegistration']);
Route::post('/user-login',[UserController::class,'userLogin']);
Route::post('/send-otp',[UserController::class,'sendOTPCode']);
Route::post('/verify-otp',[UserController::class,'verifyOTP']);
Route::post('/reset-password',[UserController::class,'resetPassword'])->middleware(TokenVerificationMiddleware::class);