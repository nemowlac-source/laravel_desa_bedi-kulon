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
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // 1. Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect('login');
        }

        // 2. Cek apakah role user ada dalam daftar yang diizinkan
        // $roles adalah array role yang kita kirim dari Route (misal: admin, anggota)
        if (in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        // 3. Jika tidak punya akses, lempar error 403 (Forbidden)
        abort(403, 'Maaf, Anda tidak punya akses ke halaman ini.');
    }
}
