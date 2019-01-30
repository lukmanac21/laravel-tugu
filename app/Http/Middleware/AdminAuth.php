<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::guard('api')->user();
        if (!$user){
            $response = ['status' => false, 'message' => 'Not Authorized'];    
            return response()->json($response);
        }    
        if ($user->id_roles != '1'){
            $response = ['status' => false, 'message' => 'Bukan Admin'];      
            return response()->json($response);    
        }
        return $next($request);
    }
}
