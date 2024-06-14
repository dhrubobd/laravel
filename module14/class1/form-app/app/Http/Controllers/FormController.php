<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function loginCheck(Request $request){
        if(($request->username == "luke")&&($request->password=="123")){
            return "Login Success!";
        }else{
            return view('forms.login');
        }
    }
}
