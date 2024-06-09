<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function myDashboard(){
        //return "Welcome to My Dashboard";
        $name = "Luke Sarker";
        $email= "dhrubo.luke@gmail.com";
        return view('dashboard', ['myName'=> $name,'myEmail'=>$email]); // 'dashboard' is the blade view file name
    }
    function myProfile(Request $request){ // Request means any GET, POST, PUT, etc request values.
        $name = $request->name;
        $email = $request->email;
        return view('profile',['myName'=> $name,'myEmail'=>$email]);
    }
    function myCourses(Request $request){ 
        $name = $request->input(key:'name');
        $course = $request->input(key:'course');
        return view('courses',['myName'=>$name,'myCourse'=>$course]);
        //return $request->input();
    }
}
