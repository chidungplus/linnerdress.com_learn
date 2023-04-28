<?php

namespace App\Http\Middleware;

use Closure;

use App\User;

use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        if(!Auth::user()->hasPermission('admin')){
            return abort(401, 'You are not authorized to perform this action.');
        }
        return $next($request);
    }
}
