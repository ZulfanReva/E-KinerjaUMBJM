<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Cek apakah user sudah login dan memiliki role yang sesuai
        if ($user && in_array($user->role, $roles)) {
            return $next($request);
        }

        // Jika tidak sesuai, redirect atau return 403
        return abort(403, 'Unauthorized access');
    }
}