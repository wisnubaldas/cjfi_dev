<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\ViewTrait;
use Illuminate\Support\Facades\View;

class MenuData
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
        if (\Auth::check()) {
            // define('PREFIX', \Auth::user()->uuid);
            define('MENU',ViewTrait::data_menu(\Auth::user()->uuid));
        }else{
            ViewTrait::cargo();
        }
        
        $response = $next($request);
        
        return $response;

        // return $next($request);
    }
}
