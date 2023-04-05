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
     * @param  string[]|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                switch (true) {
                    case Auth::user()->user_type_id == 1:
                        return redirect()->intended(RouteServiceProvider::HOME);
                    case Auth::user()->user_type_id == 2:
                        return redirect('/admin/dashboard');
                    case Auth::user()->user_type_id == 3:
                        return redirect('/blogger/dashboard');
                    case Auth::user()->user_type_id == 4:
                        return redirect('/user/dashboard');
                    default:
                        return '/';
                }
            }
        }

        return $next($request);
    }
}
