<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next, string $guard = 'admin')
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/web/admin/dashboard'); // Halaman tujuan jika sudah login
        }

        return $next($request);
    }
}
