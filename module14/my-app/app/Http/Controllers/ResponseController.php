<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ResponseController extends Controller
{
    //JSON Response
    function responseJson():JsonResponse{
        $content = array("name"=>"Luke","Age"=>40);
        $status_code = 201;
        return response()->json($content,$status_code);
    }

    //Redirect Response
    function responseRedirect(){
        return redirect('/response/hello2');
    }
    function hello2(){
        return "This is Hello2 Page";
    }

    //Binary File Response 
    function showFile(){
        $file_path = 'uploads/image.png'; //Uploads folder is under public folder
        return response()->file($file_path);
    }

    //Download File Response
    function downloadFile(){
        $file_path = 'uploads/image.png'; //Uploads folder is under public folder
        return response()->download($file_path);
    }

    //Cookie response
    function setCookie(){
        $name="Cookie_Name";
        $value="This is a Cookie";
        $minutes=60;
        $path="/";
        $domain=$_SERVER['SERVER_NAME'];
        $secure=false;
        $httponly=true;
        return response("Cookie is set",201)->cookie($name,$value,$minutes,$path,$domain,$secure,$httponly);
    }
    //Header Response
    function headerResponse(){
        return response("Header Value is set")
                        ->header('name','Luke')
                        ->header('age',40);
    }

    //View Response
    function viewResponse(){
        return view('page.home');
    }
}
