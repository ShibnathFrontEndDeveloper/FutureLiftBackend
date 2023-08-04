<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Helpers;

class AdminUrlCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {       $route = Route::getRoutes()->match($request);
            $currentroute = $route->getName();
            $check = Helpers::roleWiseRouteChecking($currentroute);
            if($check){
                return $next($request);
            }else{
                return Redirect('/admin/404');;
            }
    }
}
