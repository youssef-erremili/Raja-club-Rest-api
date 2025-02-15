<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apikey = $request->route('apikey');
        if (!$apikey || strlen($apikey) !== 40) {
            return response()->json(['error' => 'Invalid API Key length'], 400);
        }
        
        return $next($request);
    }
}
