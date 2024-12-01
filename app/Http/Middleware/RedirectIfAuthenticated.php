<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
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
        if (Auth::check()) {
            $user = Auth::user();
            // Arahkan pengguna yang sudah login sesuai role
            if ($user->role === 'admin') {
                return redirect()->route('pageadmin.berandaadmin');
            } elseif ($user->role === 'pengawas') {
                return redirect()->route('pagepengawas.berandapengawas');
            } else {
                return redirect()->route('index');
            }
        }

        return $next($request); // Lanjutkan jika user belum login
    }
}
