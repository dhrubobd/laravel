<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    //Function for request without Paramenter
    function sayWelcome(){
        return "Welcome!";
    }

    // Function for request with Paramenter
    function sayWelcomeWithName(Request $request){
        return "Welcome ".$request->name."!";
    }

    //JSON body request
    function getJSON(Request $request){
        $yourName = $request->input('name');
        $yourAge = $request->input('age');
        return "Your Name is ".$yourName." and Your Age is ".$yourAge;
    }

    //Header request
    function getHeader(Request $request):string{
        $host = $request->header('Host');
        $userAgent = $request->header('User-Agent');
        return "Host is ".$host." and the user agent is ".$userAgent ;
    }

    //File Request through Form-Data of PostMan

    /*  NOTE
    Disable CSRF Laravel from the App/Http/Kernel. php file 
    by removing App\Http\Middleware\VerifyCsrfToken 
    from the $middleware array  */

    function saveTheFile(Request $request){
        if($request->has('imagefile')) {
            $theFile = $request->file('imagefile');
            // Storage folder e 'App' folder er moddhe 'uploads' naame ekta folder e upload hobe
            $theFile->storeAs('uploads',$theFile->getClientOriginalName());  
            // Public foler er moddhe 'uploads' naame ekta folder e upload hobe
            $theFile->move(public_path('uploads'),$theFile->getClientOriginalName());

            return "Uploaded Successfully!";
        }else{
            return "No file Found!";
        }
    }

    // Cookie Request

    function getCookie(Request $request){
        return $request->cookie('laravel_session');
    }
}
