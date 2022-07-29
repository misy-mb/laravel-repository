<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()){
            if(!auth()->user()->email=="admin@admin.com"){
               return redirect()->route('login')->with('error','Sorry you are not admin');
            }
        }
        else{
            return redirect()->route('login')->with('sucess','Login success');

        }
        return $next($request);
    }
}
