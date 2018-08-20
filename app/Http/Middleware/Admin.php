<?php

namespace App\Http\Middleware;

use Session;
use Auth;
use Closure;

class Admin
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

        if(!Auth::user()->admin)
        {
            Session::flash('success', 'You dont have permissions to perform this aaction');

            return redirect()->back();
        }

        return $next($request);
    }
}
