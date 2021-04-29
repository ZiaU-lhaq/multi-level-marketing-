<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class is_approved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->status=='approved') {
               return $next($request);
        }else {
            return redirect('home')->with('error','you can not access to this page');
        }
    }
}
