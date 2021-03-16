<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Driver
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && isDriver()) {
            return $next($request);
        }
        if (!Auth::check())
        {
            return redirect('login');
        }
        /*session()->flash('message', 'You Do Not Have Permission To View This.');
        Session::flash('type', 'error');
        Session::flash('title', 'Permission Not Granted');*/
        return redirect()->route('denied');
    }
}
