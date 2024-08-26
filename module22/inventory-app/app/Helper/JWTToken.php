<?php

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken{
    public static function createToken($userEmail):string{
       try {
            $key = env('JWT_KEY'); // Taking key from .env file
            $payload = [
                'iss'=>'inventory-app-token', //Token Name
                'iat'=>time(), //Token creation time
                'exp'=>time()+60*60, //Token expiary time 1 hour after creation time
                'userEmail'=>$userEmail,
            ];
            return JWT::encode($payload,$key,'HS256'); // Returning after encoding using data ($payload), key and the encoding method
       } catch (\Throwable $th) {
        //throw $th;
        return $th;
       }
    }

    public static function createTokenForOTP($userEmail):string{
        try {
             $key = env('JWT_KEY'); // Taking key from .env file
             $payload = [
                 'iss'=>'inventory-app-token', //Token Name
                 'iat'=>time(), //Token creation time
                 'exp'=>time()+60*10, //Token expiary time 10 minute after creation time
                 'userEmail'=>$userEmail,
             ];
             return JWT::encode($payload,$key,'HS256'); // Returning after encoding using data ($payload), key and the encoding method
        } catch (\Throwable $th) {
         //throw $th;
         return $th;
        }
     }

    public static function verifyToken($token):string{
        
        try {
            $key = env('JWT_KEY'); // Taking key from .env file
            $decode = JWT::decode($token,new Key($key,'HS256'));// Decoding the token using key and decoding method
            $userEmail = $decode->userEmail;
            return $userEmail;
        } catch (Exception $e) {
            return "unauthorized";
        }
    }
}