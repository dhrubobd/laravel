<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Tasks
Route::get('/tasks',[TasksController::class,'index'])->middleware(['auth', 'verified'])->name('tasks');
Route::post('/tasks',[TasksController::class,'store'])->middleware(['auth', 'verified'])->name('tasks.store');
Route::delete('/tasks/{task}',[TasksController::class,'destroy'])->middleware(['auth', 'verified'])->name('task.destroy');

require __DIR__.'/auth.php';
