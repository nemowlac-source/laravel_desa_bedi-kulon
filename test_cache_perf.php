<?php
echo "================================================================" . PHP_EOL;
echo "  CACHE PERFORMANCE TEST - Before & After" . PHP_EOL;
echo "================================================================" . PHP_EOL . PHP_EOL;

$baseUrl = 'http://localhost/laravel_desa_bedi-kulon/public';

$routes = [
    'Homepage'             => '/',
    'APBDes'               => '/apbdes',
    'Infografis'           => '/infografis/penduduk',
    'PPID'                 => '/ppid',
    'PPID Dasar Hukum'     => '/ppid/dasar-hukum',
];

echo "WARMING UP CACHE (First Request - No Cache)..." . PHP_EOL;
echo str_repeat("-", 70) . PHP_EOL;

$firstTimes = [];
foreach ($routes as $name => $path) {
    $url = $baseUrl . $path;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $start = microtime(true);
    curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $time = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
    curl_close($ch);

    $firstTimes[$name] = $time;
    $status = $httpCode == 200 ? '✅' : '❌';
    echo sprintf(
        "%s %-20s | HTTP: %3d | Time: %6.3fs (FIRST - No Cache)" . PHP_EOL,
        $status,
        $name,
        $httpCode,
        $time
    );
}

echo PHP_EOL . "SECOND REQUEST (With Cache)..." . PHP_EOL;
echo str_repeat("-", 70) . PHP_EOL;

$secondTimes = [];
foreach ($routes as $name => $path) {
    $url = $baseUrl . $path;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $start = microtime(true);
    curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $time = curl_getinfo($ch, CURLINFO_TOTAL_TIME);
    curl_close($ch);

    $secondTimes[$name] = $time;
    $status = $httpCode == 200 ? '✅' : '❌';
    echo sprintf(
        "%s %-20s | HTTP: %3d | Time: %6.3fs (CACHED)" . PHP_EOL,
        $status,
        $name,
        $httpCode,
        $time
    );
}

echo PHP_EOL . "================================================================" . PHP_EOL;
echo "  CACHE IMPACT COMPARISON" . PHP_EOL;
echo "================================================================" . PHP_EOL;
echo sprintf(
    "%-20s | %10s | %10s | %10s | %8s" . PHP_EOL,
    "Route",
    "No Cache",
    "Cached",
    "Diff",
    "Improvement"
);
echo str_repeat("-", 70) . PHP_EOL;

$totalBefore = 0;
$totalAfter = 0;

foreach ($routes as $name => $path) {
    $before = $firstTimes[$name];
    $after = $secondTimes[$name];
    $diff = $before - $after;
    $improvement = $before > 0 ? round(($diff / $before) * 100, 1) : 0;
    $totalBefore += $before;
    $totalAfter += $after;

    echo sprintf(
        "%-20s | %8.3fs | %8.3fs | %8.3fs | %6.1f%%" . PHP_EOL,
        $name,
        $before,
        $after,
        $diff,
        $improvement
    );
}

echo str_repeat("-", 70) . PHP_EOL;
$totalDiff = $totalBefore - $totalAfter;
$totalImprovement = $totalBefore > 0 ? round(($totalDiff / $totalBefore) * 100, 1) : 0;
echo sprintf(
    "%-20s | %8.3fs | %8.3fs | %8.3fs | %6.1f%%" . PHP_EOL,
    "TOTAL",
    $totalBefore,
    $totalAfter,
    $totalDiff,
    $totalImprovement
);

echo PHP_EOL . "================================================================" . PHP_EOL;
echo "Test completed at: " . date('Y-m-d H:i:s') . PHP_EOL;
