<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards): Response
    {
        if (!auth()->guard($guards[0])->check()) {
            Log::info('Redirecting to login because user is not authenticated.');
            return redirect()->route('login'); // Adjust to your login route
        }
        
        return $next($request);
    }
}
