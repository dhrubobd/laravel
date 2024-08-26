<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QueryController extends Controller
{
    function showBooks(){
        $books= DB::table('books')->get();
        return $books;
        //return response()->json($books);
    }

    function countAuthors(){
        $authors = DB::table('authors')->count();
        return $authors;
    }
    function get2Authors(){
        $authors = DB::table('authors')->limit(2)->get();
        return $authors;
    }
    function get2After3(){
        $authors = DB::table('authors')->limit(2)->offset(3)->get();
        return $authors;
    }
    function getaBook(){
        $theBook = DB::table('books')->where('id','=',5)->get();
        return $theBook;
    }
    function getFirst5Books(){
        $theBooks = DB::table('books')->where('id','<=',5)->get();
        return $theBooks;
    }
}
