<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Visitor extends Model
{
    protected $fillable = ['ip_address', 'user_agent', 'date'];
    protected $casts = ['date' => 'date'];

    public static function recordVisit()
    {
        try {
            self::create([
                'ip_address' => request()->ip(),
                'user_agent' => request()->header('User-Agent'),
                'date' => Carbon::today(),
            ]);
        } catch (\Exception $e) {
            \Log::error('Error recording visit: ' . $e->getMessage());
        }
    }

    public static function getStats()
    {
        try {
            $today = Carbon::today();
            $yesterday = $today->copy()->subDay();
            $weekStart = $today->copy()->startOfWeek();
            $weekStartLast = $weekStart->copy()->subWeek();
            $weekEndLast = $weekStartLast->copy()->endOfWeek();
            $monthStart = $today->copy()->startOfMonth();
            $monthStartLast = $monthStart->copy()->subMonth();
            $monthEndLast = $monthStartLast->copy()->endOfMonth();

            return [
                'hari_ini' => self::whereDate('date', $today)->count() ?? 0,
                'kemarin' => self::whereDate('date', $yesterday)->count() ?? 0,
                'minggu_ini' => self::whereBetween('date', [$weekStart, $today])->count() ?? 0,
                'minggu_lalu' => self::whereBetween('date', [$weekStartLast, $weekEndLast])->count() ?? 0,
                'bulan_ini' => self::whereBetween('date', [$monthStart, $today])->count() ?? 0,
                'bulan_lalu' => self::whereBetween('date', [$monthStartLast, $monthEndLast])->count() ?? 0,
                'total' => self::count() ?? 0,
            ];
        } catch (\Exception $e) {
            \Log::error('Error getting stats: ' . $e->getMessage());

            return [
                'hari_ini' => 0,
                'kemarin' => 0,
                'minggu_ini' => 0,
                'minggu_lalu' => 0,
                'bulan_ini' => 0,
                'bulan_lalu' => 0,
                'total' => 0,
            ];
        }
    }
}
