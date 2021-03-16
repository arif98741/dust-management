<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Auth;

class Admin
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::check() && isAdmin()) {
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
