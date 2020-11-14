<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    // public function handle($request, Closure $next, ...$guards)
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     // foreach ($guards as $guard) {
    //     //     if (Auth::guard($guard)->check()) {
    //     //         return redirect(RouteServiceProvider::HOME);
    //     //     }
    //     // }

    //     // return $next($request);

    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {
    //             switch($guard) {
    //             case 'admins':
    //                 return redirect(RouteServiceProvider::ADMINLOGIN);
    //                 // return redirect()->route('admin.login');
        
    //             default:
    //                 return redirect(RouteServiceProvider::HOME);
    //             }
    //         }
    //     }

    //     return $next($request);
    // }

    //MASIH SALAH, AUTO REDIRECT NYA BLOM PISAH
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            switch($guard) {
            case 'admins':
                return redirect(RouteServiceProvider::DASHADMIN);

            default:
                return redirect(RouteServiceProvider::DASHPESERTA);
            }
        }

        return $next($request);
    }
}
