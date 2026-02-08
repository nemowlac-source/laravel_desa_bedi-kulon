<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // 1. Validasi email & password (bawaan Laravel)
        $request->authenticate();

        // 2. Buat ulang session (keamanan)
        $request->session()->regenerate();

        // 3. LOGIKA BARU: Cek Role & Arahkan
        // Ambil role user yang sedang login
        $role = $request->user()->role;

        if ($role === 'admin') {
            // Jika Admin, kirim ke dashboard admin
            return redirect()->intended(route('admin.dashboard'));
        } elseif ($role === 'anggota') {
            // Jika Anggota, kirim ke halaman anggota (misal: daftar buku)
            return redirect()->intended(route('anggota.dashboard'));
        }

        // 4. Default: Jika Pengunjung biasa, kirim ke halaman utama/dashboard umum
        return redirect()->intended(route('dashboard'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
