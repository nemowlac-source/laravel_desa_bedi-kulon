<?php

namespace App\Providers;

use App\Models\Visitor;
use Illuminate\Support\Facades\View; // Tambahkan ini
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;


class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Biarkan kosong jika tidak ada binding container khusus
    }

    public function boot(): void
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
        // Gunakan View Composer agar query HANYA jalan saat file layout frontend dipanggil ⏺️
        View::composer('components.frontend', function ($view) {
            $visitor_stats = [
                'hari_ini'    => Visitor::whereDate('date', today())->count(),
                'kemarin'     => Visitor::whereDate('date', today()->subDay())->count(),
                'minggu_ini'  => Visitor::whereBetween('date', [now()->startOfWeek(), now()->endOfWeek()])->count(),
                'bulan_ini'   => Visitor::whereMonth('date', now()->month)->whereYear('date', now()->year)->count(),
                'total'       => Visitor::count(),
            ];

            // Kirim variabel ke view
            $view->with('visitor_stats', $visitor_stats);
        });
    }
}
