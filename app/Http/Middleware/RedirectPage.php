<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectPage
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
        //$user = \App\User::where('email', $request->email)->first();
        $user = Auth::user();
        
        if ($user->id_roles == '1') {
            return redirect()->route('home.admin');
        } elseif ($user->id_roles == '2') {
            return redirect()->route('home.user');
        }        
        return $next($request);
    }
}
