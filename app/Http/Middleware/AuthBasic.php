<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthBasic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::onceBasic())
        {
            $token          =   $request->header('APP_KEY');
            if ($token != 'ABCDEFGHIJK'){
                return response()->json(['message' => 'Auth failed', 401]);
            }
        } else {
            return $next($request);
        }
    }
}
