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
        $date = Carbon::today();

        // Cek apakah IP ini sudah berkunjung hari ini? Jika belum, simpan.
        $visitor = Visitor::where('ip_address', $ip)->where('date', $date)->first();

        if (!$visitor) {
            Visitor::create([
                'ip_address' => $ip,
                'user_agent' => $request->userAgent(),
                'date' => $date
            ]);
        }

        return $next($request);
    }
}
