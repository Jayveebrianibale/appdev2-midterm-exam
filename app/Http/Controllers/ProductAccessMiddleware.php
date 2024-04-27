<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProductAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $validToken = env('MY_SECRET_TOKEN');

        $providedToken = $request->input('token');
        if (!$providedToken) {
            return response()->json(['message' => 'Token is missing'], 401);
        }

        if ($providedToken !== $validToken) {
            return response()->json(['message' => 'Token is invalid'], 401);
        }
        return $next($request);
    }
}

