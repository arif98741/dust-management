<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
