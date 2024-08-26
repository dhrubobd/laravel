<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    function userRegistration (Request $request){
        
        try {
            User::create([
                'firstName'  => $request->input('firstName'),
                'lastName'   => $request->input('lastName'),
                'email'     => $request->input('email'),
                'mobile'    => $request->input('mobile'),
                'password'  => $request->input('password')
            ]);
    
            return response()->json(
                [
                    'status'=>'Success!',
                    'message'=>'User Registered Successfully!'
                ], 200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status'=>'Failed!',
                    //'message'=>'User Registration Failed!'
                    'message'=>$th->getMessage()
                ], 400
            );
        }
    }

    function userLogin(Request $request){
        $count=User::where('email','=',$request->input('email'))
             ->where('password','=',$request->input('password'))
             ->select('id')->first();
 
        if($count!==null){
            // User Login-> JWT Token Issue
            $token=JWTToken::CreateToken($request->input('email'),$count->id);
            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successful',
                'token'=>$token
            ],200)->cookie('token',$token,time()+60*24*30);
        }
        else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ],200);
 
        }
 
     }

    function sendOTPCode(Request $request){
        $email = $request->input('email');
        $otp = rand(1000,9999);
        $count = User::where('email','=',$email)->count();
        if($count==1){
            // OTP code save into Database Table
            User::where('email','=',$email)->update(['otp'=>$otp]);
            
            // Send OTP to User Email Address
            try {
                Mail::to($email)->send(new OTPMail($otp));
                return response()->json(
                    [
                        'status'=>'Email Success!',
                        'message'=>'Email Sent Successfully!',
                    ]
                );
            } catch (\Throwable $th) {
                return response()->json(
                    [
                        'status'=>'Email Failed!',
                        'message'=>'Email was not sent!'
                    ], 400
                );
            }
            
                
        }else{
            return response()->json(
                [
                    'status'=>'Failed!',
                    'message'=>'Unauthorized User!'
                ], 400
            );
        }
    }

    function verifyOTP(Request $request){
        $email= $request->input('email');
        $otp = $request->input('otp');
        $count =User::where('email','=',$email)
                ->where('otp','=',$otp)->count();
        if($count==1){
            //Generate JWT token
            $jwtToken = JWTToken::createTokenForOTP($email);
            //OTP reset
            $newOTP = rand(1000,9999);
            User::where('email','=',$email)->update(['otp'=>$newOTP]);
            return response()->json(
                [
                    'status'=>'OTP Verification Success!',
                    'message'=>'OTP Verified Successfully!',
                    'token'=>$jwtToken
                ], 200
            );

        }else{
            return response()->json(
                [
                    'status'=>'OTP Failed!',
                    'message'=>'OTP verification failed or OTP Missmatched!'
                ], 400
            );
        }
    }

    function resetPassword(Request $request){
        $email = $request->header('email');
        $password = $request->input('password');
        try {
            User::where('email','=',$email)->update(['password'=>$password]);
            return response()->json(
                [
                    'status'=>'Password Reset Success!',
                    'message'=>'Password Reset Successfully!',
                ], 200
            );
        } catch (\Throwable $th) {
            return response()->json(
                [
                    'status'=>'Password Reset Failed!',
                    'message'=>'Unauthorized Password Reset!'
                ], 401
            );
        }
    }
}
