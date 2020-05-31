<?php

/**
 * Created by PhpStorm.
 * User: Tabares
 * Date: 25/05/2020
 * Time: 3:54
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param string|null guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admins')
    {

        if (!Auth::guard($guard)->check()) {
            return redirect()->route("admin.login");
        }

        return $next($request);
    }
}
