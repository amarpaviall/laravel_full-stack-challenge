<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,  string $role): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role === $role) {
            return $next($request);
            }
        }
          // If the user does not have the required role, redirect or abort.
            Auth::logout();
            return redirect('/')->with('error', 'Access Denied');
    }
}
