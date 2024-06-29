<?php

use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResponseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


/* Route::get('/', function () {
    return view('welcome');
}); */
// Requesting without paramenter
Route::get('/',[RequestController::class,'sayWelcome']);
// Requesting with paramenter 
Route::get('/{name}',[RequestController::class,'sayWelcomeWithName']);
//Data Pass using JSON body Request
/* PostMan e nicher json body hishebe pathate hobe
{
    "name":"Luke K B Sarker",
    "age":"24"
} */
Route::get('/request/json',[RequestController::class,'getJSON']);
//Data Pass using Header Request
Route::get('/request/header',[RequestController::class,'getHeader']);
//File upload using Form-Data Request
Route::post('/request/savefile',[RequestController::class,'saveTheFile']);
//Cookie Request
Route::post('/request/cookie',[RequestController::class,'getCookie']);

//JSON Response
Route::post('/response/json',[ResponseController::class,'responseJson']);

//Redirect Response
Route::get('/response/redirect',[ResponseController::class,'responseRedirect']);
Route::get('/response/hello2',[ResponseController::class,'hello2']);

//Binary File Response 
Route::get('/response/showfile',[ResponseController::class,'showFile']);

//Download File Response
Route::get('/response/downloadfile',[ResponseController::class,'downloadFile']);

//Cookie Response
Route::post('/response/cookie',[ResponseController::class,'setCookie']);

//Header Response
Route::post('/response/header',[ResponseController::class,'headerResponse']);

//View Response
Route::get('/response/home',[ResponseController::class,'viewResponse']);


/*
    Task 1
*/
Route::post('/form-submit', function (Request $request) {

// Retrieve the 'email' input parameter from the request

$email = $request->email;

 

// Check if the email exists in the request

if($email!=null){
    $content = array("status"=>"success","message"=>"Form submitted successfully.","email"=>$email);
    $status_code = 200;
     // Return a successful JSON response
     return response()->json($content,$status_code);;

}else{
    $content = array("status"=>"failed","message"=>"Form submission failed.");
    $status_code = 404;
     // Return a failed JSON response
     return response()->json($content,$status_code);;
}

});

/*
    Task 2
*/
Route::get('/user-agent', function(Request $request):array{

    // Retrieve the 'User-Agent' header from the request
    
    $userAgent = $request->header("User-Agent");
    
    
    // Return the $userAgent in the response
    
    return $userAgent;
    
    });