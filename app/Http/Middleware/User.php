<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && isUser()) {
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
