<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
{

    public function handle($request, Closure $next, $guard = "web")
    {
        if (Auth::guard($guard)->check()) {   
            $user = Auth::guard($guard)->user();          
            if(in_array($user->roles_id, [2]))
            {
                return $next($request);
                         
            }  
        }

        return redirect('login');
    }
}
