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

    function viewProfile(Request $request){
        if(($request->username == "luke")&&($request->password=="123")){
            return view('forms.profile')->with([
                                                'name'=> $request->username,
                                                'age'=> 40
                                                ]);
        }else{
            //return view('forms.login');
            return redirect(route('login'))->withError("Wrong Submission");
        }
    }

    function uploadProfilePicture(Request $request){
        if($request->has('profile_picture')){
            $file = $request->file('profile_picture');
            $file->store('uploads','public'); // storage/app/public/uploads folder
            return view('forms.profile')->with([
                'username'=> 'luke',
                'password'=> 123,
                'upload_status'=> 'File Uploaded'
                ]);
        }else{
            return view('forms.profile')->with([
                'username'=> 'luke',
                'password'=> 123,
                'upload_status'=> 'No file Uploaded'
                ]);
        }
    }
}
