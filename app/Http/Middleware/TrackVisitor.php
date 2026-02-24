<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $date = now()->toDateString();

        // Cek apakah IP ini sudah ada di tanggal hari ini ⏺️
        $visitor = Visitor::where('ip_address', $ip)
            ->where('date', $date)
            ->first();

        // Jika belum ada (sesuai kode lamamu), maka buat baru 🛠️
        if (!$visitor) {
            Visitor::create([
                'ip_address' => $ip,
                'user_agent' => $request->userAgent(), // Menggunakan userAgent() kamu ⏺️
                'date'       => $date
            ]);
        }

        return $next($request);
    }
}
