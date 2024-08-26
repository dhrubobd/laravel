<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\author;
use App\Models\Book;

class AloquentController extends Controller
{
    function addAuthor(Request $request){
        return author::create([
            'name'=>'Luke K B Sarker',
            'bio'=>'This is Luke'
        ]);
    }
    function updateBook(){
        return Book::where('id',8)->update([
            'title'=>'A long time ago it was'
        ]);
    }
    function updateOrcreateBook(){
        return Book::updateorcreate(['id'=>30],['title'=>'Hello Hello','author_id'=>4,'price'=>40]);
    }
    function deleteBook(){
        return Book::where('title','Hello Hello')->delete();
    }
    function increaseBookPrice(){
        return Book::where('price','<',15)->increment('price',10); // Increase those book price which prices are less than 15
    }
    function decreaseBookPrice(){
        return Book::where('price','>',20)->decrement('price',4);// Give $4 discount to those book which price are greater than $20
    }
    function countBookPrice(){
        return Book::count('price');
    }
    function totalBookPrice(){
        return Book::sum('price');
    }
    function avgBookPrice(){
        return Book::avg('price');
    }
    function maxBookPrice(){
        return Book::max('price');
    }
    function minBookPrice(){
        return Book::min('price');
    }
    function showBookTitlePrice(){
        return Book::select('title','price')->get();
    }
    function authorsWithBooks(){
        return Author::with('book')->get();
    }
}
