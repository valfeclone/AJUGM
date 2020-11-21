<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route as Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

    //redirect kalo blom login
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            
            $routeName = Route::current()->getName();
            if(preg_match('/admin\.*/i', $routeName)){
                return route('admin.login');
            }
        }
        else {
            return route('login');
        }
    }
}