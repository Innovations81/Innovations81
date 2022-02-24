<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Session;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();
        if($user == null){
           return redirect()->to('/');
        }

        if(Auth::user()->role->name === $role)
        {
            return $next($request);
        } else{
            Session::flash('error', "Permission Denied.");
            return redirect()->back()->withInput();
        }

        return $next($request);
    }
}
