<?php

namespace App\Http\Middleware;

use App\Helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('token');
        $result = JWTToken::verifyToken($token); // Here we get email address as result if success else we will get unauthorized
        if($result=="unauthorized"){
            return response()->json(
                [
                    'status'=>'Token Verification',
                    'message'=>'The Token is Unauthorized!'
                ], 401
            );
        }else{
            $request->headers->set('email',$result);
            return $next($request);
        }
    }
}
