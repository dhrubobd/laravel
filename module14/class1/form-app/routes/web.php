<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::view("/","forms.login")->name("login");
Route::post("/login-check",[FormController::class,"loginCheck"]);
Route::post('/profile',[FormController::class,'viewProfile'])->name("profile");
Route::post('/profile/upload',[FormController::class,'uploadProfilePicture'])->name("ppUpload");

