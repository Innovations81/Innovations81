<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth; 

class checkDocumentVerified
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
        $user = Auth::user();

        if ( $user->is_doc_verified != 1 && $user->isAdmin() != 'Admin') {
            return redirect()->back();
        }

        return $next($request);
    }
}
