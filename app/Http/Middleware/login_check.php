<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class login_check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        if(!Auth::check()){
            return redirect('login');
        }
        // save user data to $user variable
        $user = Auth::user();
        //if user has role as admin, will go to dashboard page
        if($user->level == $roles) {
            return $next($request);
        }
        //if don't have access, will return to login page
        return redirect('login')->with('error', 'Maaf anda tidak memiliki akses');
    }
}
