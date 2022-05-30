<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPermission
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
        $this->checkPermission($request);
        return $next($request);
    }

    public function checkPermission(Request $request){
        $user = auth()->user();
        if(!$user->role){
            abort(403,'you must have permission to access');
        } else{
            $permissions = $user->role->rolepermission->pluck('slug')->toArray();
            $current_route_name= $request->route()->action['as'];

            if(!in_array($current_route_name,$permissions)){
                abort(403,'you must have permission to access');   
            }
        }
    }
}
