<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        switch ($guard) {
            case 'admin':

                if (Auth::guard('admin')->check()) {
                    return redirect('/a_dashboard');
                }
                break;
            
            default:
                if (Auth::guard('student')->check()) {
                    return redirect('/student_dashboard');
                }
                break;
        }


        // if (Auth::guard($guard)->check()) {
        //     return redirect('/student_dashboard');
        // }

        return $next($request);
    }
}
