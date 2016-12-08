<?php

namespace App\Http\Middleware;

use Closure;
use App\Admin;
use Illuminate\Support\Facades\Redirect;

class AdminMiddleware
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
        if (!Admin::guest()) {
            return Redirect::route('admin.login');
        }
        
        return $next($request);
    }
}
