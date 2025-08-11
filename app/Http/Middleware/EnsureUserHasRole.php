<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    //todo uncomment the first comment and delete the last handle fuction
    // public function handle(Request $request, Closure $next, string $role): Response
    // {
    //     // \Log::debug('role variable: ', [$role]);
    //     if ($request->user() && $request->user()->role === $role) {
    //         return $next($request);
    //     }

    //     abort(403, 'Unauthorized');
    // }
    public function handle(Request $request, Closure $next): Response
    {
        // debug console log
        // \Log::debug('User role:', [$request->user()->role]);
        if ($request->user()) {
            return $next($request);
        }

        abort(403, 'Unauthorized');
    }
    
}
