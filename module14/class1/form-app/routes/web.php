<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::view("/","forms.login")->name("login");
Route::post("/login-check",[FormController::class,"loginCheck"]);

