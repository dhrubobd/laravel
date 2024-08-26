<?php

use App\Http\Controllers\AloquentController;
use App\Http\Controllers\QueryController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/show-books',[QueryController::class,'showBooks']);
Route::get('/count-authors',[QueryController::class,'countAuthors']);
Route::get('/get-2-authors',[QueryController::class,'get2Authors']);
Route::get('/get-2-after3',[QueryController::class,'get2After3']);
Route::get('/get-a-book',[QueryController::class,'getaBook']);
Route::get('/get-first-5-books',[QueryController::class,'getFirst5Books']);

/*Aloquent ORM */

Route::get('/orm/add-author',[AloquentController::class,'addAuthor']);
Route::get('/orm/update-book',[AloquentController::class,'updateBook']);
Route::get('/orm/update-create-book',[AloquentController::class,'updateOrcreateBook']);
Route::get('/orm/delete-book',[AloquentController::class,'deleteBook']);
Route::get('/orm/increase-book-price',[AloquentController::class,'increaseBookPrice']);
Route::get('/orm/decrese-book-price',[AloquentController::class,'decreaseBookPrice']);
Route::get('/orm/count-book-price',[AloquentController::class,'countBookPrice']);
Route::get('/orm/total-book-price',[AloquentController::class,'totalBookPrice']);
Route::get('/orm/avg-book-price',[AloquentController::class,'avgBookPrice']);
Route::get('/orm/max-book-price',[AloquentController::class,'maxBookPrice']);
Route::get('/orm/min-book-price',[AloquentController::class,'minBookPrice']);
Route::get('/orm/show-book-titlenprice',[AloquentController::class,'showBookTitlePrice']);
Route::get('/orm/authors-with-books',[AloquentController::class,'authorsWithBooks']);