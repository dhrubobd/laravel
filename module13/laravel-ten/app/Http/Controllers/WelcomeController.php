<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function welcomeViewer(){
        return "Wecome to My Website";
    }
}
