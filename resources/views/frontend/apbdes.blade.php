<x-frontend>
    @php
    $total_biaya_all = $pembiayaan_penerimaan + $pembiayaan_pengeluaran;
    // Hindari bagi nol
    $total_biaya_all = $total_biaya_all == 0 ? 1 : $total_biaya_all;

    $persen_terima = ($pembiayaan_penerimaan / $total_biaya_all) * 100;
    $persen_keluar = ($pembiayaan_pengeluaran / $total_biaya_all) * 100;
    $grand_total = ($total_pad ?? 0) + ($total_transfer ?? 0) + ($total_lain ?? 0);
    $pembagi = $grand_total == 0 ? 1 : $grand_total;

    $p_pad = (($total_pad ?? 0) / $pembagi) * 100;
    $p_transfer = (($total_transfer ?? 0) / $pembagi) * 100;
    $p_lain = (($total_lain ?? 0) / $pembagi) * 100;

    // Gunakan grand_total_belanja dari Controller
    $pembagi_belanja = ($grand_total_belanja ?? 0) == 0 ? 1 : $grand_total_belanja;

    // Hitung persentase untuk bar akordion
    $p_pem = (($total_pemerintahan ?? 0) / $pembagi_belanja) * 100;
    $p_pamb = (($total_pembangunan ?? 0) / $pembagi_belanja) * 100;
    $p_pemb = (($total_pembinaan ?? 0) / $pembagi_belanja) * 100;
    $p_pembd = (($total_pemberdayaan ?? 0) / $pembagi_belanja) * 100;
    $p_benc = (($total_bencana ?? 0) / $pembagi_belanja) * 100;

    // Hitung total pembiayaan untuk pembagi persentase
    $total_pembiayaan_all = ($pembiayaan_penerimaan ?? 0) + ($pembiayaan_pengeluaran ?? 0);
    $pembagi_fin = $total_pembiayaan_all == 0 ? 1 : $total_pembiayaan_all;

    $persen_terima = (($pembiayaan_penerimaan ?? 0) / $pembagi_fin) * 100;
    $persen_keluar = (($pembiayaan_pengeluaran ?? 0) / $pembagi_fin) * 100;



    @endphp
    <section class="infografis-page">
        {{-- ========================================== --}}
        {{-- 1. VERSI MOBILE & DESKTOP (Header)         --}}
        {{-- ========================================== --}}
        <div class="w-full max-w-7xl mx-auto mt-12 mb-8">

            {{-- KODE ASLI KAMU DIMULAI DARI SINI (Tidak ada yang diubah) --}}
            <div class="header-infografis">

                <div class="hidden md:block brand-title">
                    <h1>INFOGRAFIS<br>DESA Bedi Kulon</h1>
                </div>

                <div class="nav-menu flex overflow-x-auto flex-nowrap gap-2 pb-2 hide-scroll">

                    <a href="{{ route('frontend.infografis') }}" class="nav-item flex-none {{ Route::is('frontend.infografis') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-users" style="overflow: visible;">
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                        </div>
                        <span class="nav-text">Penduduk</span>
                    </a>

                    <a href="{{ route('frontend.apbdes') }}" class="nav-item flex-none {{ Route::is('frontend.apbdes') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-cash" style="overflow: visible;">
                                <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                                <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"></path>
                            </svg>
                        </div>
                        <span class="nav-text">APBDes</span>
                    </a>

                    <a href="{{ route('frontend.stunting') }}" class="nav-item flex-none {{ Route::is('frontend.stunting') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-chart-bar" style="overflow: visible;">
                                <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M4 20l14 0"></path>
                            </svg>
                        </div>
                        <span class="nav-text">Stunting</span>
                    </a>

                    <a href="{{ route('frontend.bansos') }}" class="nav-item flex-none {{ Route::is('frontend.bansos') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-package" style="overflow: visible;">
                                <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5"></path>
                                <path d="M12 12l8 -4.5"></path>
                                <path d="M12 12v9"></path>
                                <path d="M12 12l-8 -4.5"></path>
                                <path d="M16 5.25l-8 4.5"></path>
                            </svg>
                        </div>
                        <span class="nav-text">Bansos</span>
                    </a>

                    <a href="{{ route('frontend.idm') }}" class="nav-item flex-none {{ Route::is('frontend.idm') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-crown">
                                <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z"></path>
                            </svg>
                        </div>
                        <span class="nav-text">IDM</span>
                    </a>

                    <a href="{{ route('frontend.sdgs') }}" class="nav-item flex-none {{ Route::is('frontend.sdgs') ? 'active' : '' }}">
                        <div class="icon-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-numbers" style="overflow: visible;">
                                <path d="M8 10v-7l-2 2"></path>
                                <path d="M6 16a2 2 0 1 1 4 0c0 .591 -.601 1.46 -1 2l-3 3h4"></path>
                                <path d="M15 14a2 2 0 1 0 2 -2a2 2 0 1 0 -2 -2"></path>
                                <path d="M6.5 10h3"></path>
                            </svg>
                        </div>
                        <span class="nav-text">SDGs</span>
                    </a>

                </div>

            </div>
            {{-- KODE ASLI KAMU BERAKHIR DI SINI --}}




            {{-- ========================================== --}}
            {{-- VERSI DESKTOP (Muncul di PC/Laptop)        --}}
            {{-- ========================================== --}}
            <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-10">
                {{-- KODE ASLI KAMU UNTUK DESKTOP (TIDAK DIRUBAH) --}}
                <div class="apbdes-layout">
                    <div class="apbdes-info">
                        <h2 class="title-green-big">APB Desa Bedi Kulon Tahun {{ $tahun_pilih ?? date('Y') }}</h2>
                        <p class="apbdes-location">Desa Bedi Kulon, Kecamatan Marang Kayu, Kabupaten Kutai Kartanegara, Provinsi Kalimantan Timur</p>
                    </div>
                    <div class="apbdes-stats">
                        <div class="year-selector">
                            <form action="{{ url()->current() }}" method="GET" id="formTahunStatsDesktop">
                                <select class="form-select" name="tahun" onchange="document.getElementById('formTahunStatsDesktop').submit()">
                                    @forelse($list_tahun as $thn)
                                    <option value="{{ $thn }}" {{ $tahun_pilih == $thn ? 'selected' : '' }}>
                                        {{ $thn }}
                                    </option>
                                    @empty
                                    <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                                    @endforelse
                                </select>
                            </form>
                        </div>

                        <div class="stats-row-top">
                            <div class="stat-card">
                                <span class="stat-label"><i class="arrow-up">▲</i> Pendapatan</span>
                                <span class="stat-value color-green-money">
                                    Rp{{ number_format($pendapatan, 2, ',', '.') }}
                                </span>
                            </div>
                            <div class="stat-card">
                                <span class="stat-label"><i class="heart-icon">♥</i> Belanja</span>
                                <span class="stat-value color-red-money">
                                    Rp{{ number_format($belanja, 2, ',', '.') }}
                                </span>
                            </div>
                        </div>

                        <div class="pembiayaan-wrapper">
                            <div class="pembiayaan-header">Pembiayaan</div>
                            <div class="stats-row-inner">
                                <div class="stat-card-inner">
                                    <span class="stat-label"><i class="arrow-up">▲</i> Penerimaan</span>
                                    <span class="stat-value color-green-money">
                                        Rp{{ number_format($pembiayaan_penerimaan, 2, ',', '.') }}
                                    </span>
                                </div>
                                <div class="stat-card-inner">
                                    <span class="stat-label"><i class="heart-icon">♥</i> Pengeluaran</span>
                                    <span class="stat-value color-red-money">
                                        Rp{{ number_format($pembiayaan_pengeluaran, 2, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="stat-card-total">
                            <span class="stat-label-total">Surplus/Defisit</span>
                            <span class="stat-value-total" style="{{ $surplus_defisit < 0 ? 'color: #dc2626;' : '' }}">
                                Rp{{ number_format($surplus_defisit, 2, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ========================================== --}}
            {{-- VERSI MOBILE (Muncul di HP)                --}}
            {{-- ========================================== --}}
            <div class="block md:hidden w-full px-3 mt-6 mb-12">

                {{-- Info Header --}}
                {{-- PERBAIKAN: px-2 ditambahkan untuk header agar text tidak menempel pinggir --}}
                <div class="mb-6">
                    <h2 class="text-[#2ac0b4] font-black text-[28px] mb-3 leading-tight tracking-tight">
                        APB Desa Bedi Kulon Tahun {{ $tahun_pilih ?? date('Y') }}
                    </h2>
                    <p class="text-sm text-gray-600 leading-relaxed font-medium">
                        Desa Bedi Kulon, Kecamatan Marang Kayu, Kabupaten Kutai Kartanegara, Provinsi Kalimantan Timur
                    </p>
                </div>

                {{-- Year Selector (Pilih Tahun) --}}
                <div class="mb-4">
                    <form action="{{ url()->current() }}" method="GET" id="formTahunStatsMobile">
                        <div class="relative">
                            <select class="w-full bg-white border border-gray-200 text-gray-800 text-sm font-bold rounded-xl px-4 py-3.5 focus:ring-[#2ac0b4] focus:border-[#2ac0b4] shadow-sm appearance-none outline-none transition-all" name="tahun" onchange="document.getElementById('formTahunStatsMobile').submit()">
                                @forelse($list_tahun as $thn)
                                <option value="{{ $thn }}" {{ $tahun_pilih == $thn ? 'selected' : '' }}>
                                    {{ $thn }}
                                </option>
                                @empty
                                <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                                @endforelse
                            </select>
                            {{-- Panah Dropdown --}}
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Kotak Pendapatan & Belanja --}}
                <div class="flex flex-col gap-3 mb-3">
                    {{-- Pendapatan --}}
                    {{-- PERBAIKAN: p-5 diganti p-4 agar lebih rapat ke pinggir --}}
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4">
                        <div class="flex items-center gap-1.5 text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1.5">
                            <span class="text-emerald-500 text-[10px]">▲</span> Pendapatan
                        </div>
                        <div class="text-emerald-600 font-black text-2xl tracking-tight">
                            Rp{{ number_format($pendapatan, 2, ',', '.') }}
                        </div>
                    </div>

                    {{-- Belanja --}}
                    {{-- PERBAIKAN: p-5 diganti p-4 agar lebih rapat ke pinggir --}}
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4">
                        <div class="flex items-center gap-1.5 text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1.5">
                            <span class="text-red-500 text-[10px]">♥</span> Belanja
                        </div>
                        <div class="text-red-600 font-black text-2xl tracking-tight">
                            Rp{{ number_format($belanja, 2, ',', '.') }}
                        </div>
                    </div>
                </div>

                {{-- Kotak Pembiayaan (Digabung dalam 1 frame) --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-3">
                    <div class="bg-gray-50 px-5 py-3 border-b border-gray-100 text-[11px] font-bold text-gray-500 uppercase tracking-wider">
                        Pembiayaan
                    </div>
                    {{-- PERBAIKAN: p-5 diganti p-4 agar lebih rapat ke pinggir --}}
                    <div class="p-4 flex flex-col gap-5">
                        {{-- Penerimaan --}}
                        <div>
                            <div class="flex items-center gap-1.5 text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1.5">
                                <span class="text-emerald-500 text-[10px]">▲</span> Penerimaan
                            </div>
                            <div class="text-emerald-600 font-black text-[22px] tracking-tight">
                                Rp{{ number_format($pembiayaan_penerimaan, 2, ',', '.') }}
                            </div>
                        </div>

                        {{-- Garis Pemisah --}}
                        <div class="h-px w-full bg-gray-100"></div>

                        {{-- Pengeluaran --}}
                        <div>
                            <div class="flex items-center gap-1.5 text-[11px] font-bold text-gray-500 uppercase tracking-wider mb-1.5">
                                <span class="text-red-500 text-[10px]">♥</span> Pengeluaran
                            </div>
                            <div class="text-red-600 font-black text-[22px] tracking-tight">
                                Rp{{ number_format($pembiayaan_pengeluaran, 2, ',', '.') }}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kotak Surplus / Defisit --}}
                {{-- PERBAIKAN: p-5 diganti p-4 agar lebih rapat ke pinggir --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 flex justify-between items-center gap-4">
                    <span class="text-xs font-bold text-gray-600 uppercase tracking-wider flex-shrink-0">Surplus/Defisit</span>
                    <span class="font-black text-lg tracking-tight {{ $surplus_defisit < 0 ? 'text-red-600' : 'text-gray-800' }} text-right">
                        Rp{{ number_format($surplus_defisit, 2, ',', '.') }}
                    </span>
                </div>

            </div>


            <style>
                /* Styling khusus Desktop (Tidak dirubah) */
                .apbdes-card-keren {
                    background: #ffffff;
                    border-radius: 12px;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
                    padding: 40px;
                    margin: 20px 0;
                    border: 1px solid #f0f0f0;
                }

                .apbdes-title-keren {
                    font-family: 'Poppins', sans-serif;
                    color: #2ac0b4;
                    font-size: 2.2rem;
                    font-weight: 800;
                    margin-bottom: 30px;
                    letter-spacing: -0.5px;
                }

                .chart-container-keren {
                    position: relative;
                    height: 450px;
                    width: 100%;
                }

            </style>
            {{-- ========================================== --}}
            {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
            {{-- ========================================== --}}
            <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-10">
                <div class="apbdes-card-keren">
                    <h2 class="apbdes-title-keren">Pendapatan dan Belanja Desa dari Tahun ke Tahun</h2>
                    <div class="chart-container-keren">
                        {{-- ID Khusus Desktop --}}
                        <canvas id="apbdesTrendChartDesktop"></canvas>
                    </div>
                </div>
            </div>

            {{-- ========================================== --}}
            {{-- VERSI MOBILE (Muncul di HP)                --}}
            {{-- ========================================== --}}
            <div class="block md:hidden w-full px-3 mt-6 mb-12">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4">
                    {{-- Judul disesuaikan ukurannya untuk HP --}}
                    <h2 class="text-[#2ac0b4] font-extrabold text-[20px] mb-4 leading-tight tracking-tight">
                        Pendapatan & Belanja
                    </h2>
                    {{-- Tinggi container diturunkan sedikit agar pas di layar HP --}}
                    <div class="relative w-full h-[350px]">
                        {{-- ID Khusus Mobile --}}
                        <canvas id="apbdesTrendChartMobile"></canvas>
                    </div>
                </div>
            </div>


            <style>
                .chart-box-white {
                    background: #ffffff;
                    padding: 20px 30px;
                    border-radius: 12px;
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
                    margin-top: 20px;
                    border: 1px solid #f0f0f0;
                }

                .chart-title-green {
                    font-size: 1.8rem;
                    font-weight: 800;
                    color: #2ac0b4;
                    margin-bottom: 0px;
                    padding-bottom: 0px;
                }

                .canvas-container-cat {
                    position: relative;
                    height: 320px;
                    width: 100%;
                }

            </style>

            {{-- ========================================== --}}
            {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
            {{-- ========================================== --}}
            <div class="hidden md:block w-full max-w-7xl mx-auto mb-10">
                <div class="chart-box-white">
                    <h2 class="chart-title-green">Pendapatan Desa {{ $tahun_pilih }}</h2>
                    <div class="canvas-container-cat">
                        <canvas id="pendapatanCategoryChartDesktop"></canvas>
                    </div>
                </div>
            </div>

            {{-- ========================================== --}}
            {{-- VERSI MOBILE (Muncul di HP)                --}}
            {{-- ========================================== --}}
            <div class="block md:hidden w-full px-3 mb-12">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4">
                    <h2 class="text-[#2ac0b4] font-extrabold text-[20px] mb-4 leading-tight tracking-tight">
                        Pendapatan Desa {{ $tahun_pilih }}
                    </h2>
                    {{-- Tinggi container diturunkan sedikit agar pas di layar HP --}}
                    <div class="relative w-full h-[300px]">
                        <canvas id="pendapatanCategoryChartMobile"></canvas>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Ambil data dari backend PHP
                    const valPAD = @json(isset($total_pad) ? $total_pad : 0);
                    const valTransfer = @json(isset($total_transfer) ? $total_transfer : 0);
                    const valLain = @json(isset($total_lain) ? $total_lain : 0);

                    // Pastikan plugin diregister
                    if (typeof ChartDataLabels !== 'undefined') {
                        Chart.register(ChartDataLabels);
                    }

                    // Daftar ID canvas yang akan digambar
                    const chartIds = ['pendapatanCategoryChartDesktop', 'pendapatanCategoryChartMobile'];

                    chartIds.forEach(id => {
                        const canvasElement = document.getElementById(id);
                        if (!canvasElement) return;

                        const catCtx = canvasElement.getContext('2d');
                        const isMobile = id.includes('Mobile');

                        new Chart(catCtx, {
                            type: 'bar'
                            , data: {
                                // PERBAIKAN: Pecah teks label agar tidak kepanjangan di HP
                                labels: isMobile ? [
                                    ['Pendapatan', 'Asli Desa']
                                    , ['Pendapatan', 'Transfer']
                                    , ['Pendapatan', 'Lain-lain']
                                ] : ['Pendapatan Asli Desa', 'Pendapatan Transfer', 'Pendapatan Lain-lain']
                                , datasets: [{
                                    data: [valPAD, valTransfer, valLain]
                                    , backgroundColor: '#2ac0b4'
                                    , borderRadius: 2
                                    , maxBarThickness: isMobile ? 40 : 80, // Batang dikecilkan di HP
                                }]
                            }
                            , options: {
                                responsive: true
                                , maintainAspectRatio: false
                                , layout: {
                                    padding: {
                                        // Ruang ekstra di atas untuk label angka
                                        top: isMobile ? 30 : 35
                                        , bottom: isMobile ? 15 : 10
                                    }
                                }
                                , scales: {
                                    y: {
                                        min: 0
                                        , beginAtZero: true
                                        , ticks: {
                                            // PERBAIKAN: Penyingkat Angka (Miliar/Juta) untuk Sumbu Y
                                            callback: function(value) {
                                                if (value >= 1000000000) {
                                                    return (value / 1000000000) + ' M';
                                                } else if (value >= 1000000) {
                                                    return (value / 1000000) + ' Jt';
                                                }
                                                return value;
                                            }
                                            , color: '#9ca3af'
                                            , font: {
                                                size: isMobile ? 9 : 11
                                            }
                                        }
                                        , grid: {
                                            color: '#f3f4f6'
                                            , drawBorder: false
                                        }
                                        , border: {
                                            display: false
                                        }
                                    }
                                    , x: {
                                        grid: {
                                            display: true
                                            , color: '#f3f4f6'
                                            , drawBorder: false
                                        }
                                        , ticks: {
                                            color: '#6b7280'
                                            , font: {
                                                size: isMobile ? 9 : 13 // Font dikecilkan di HP
                                            }
                                        }
                                        , border: {
                                            display: false
                                        }
                                    }
                                }
                                , plugins: {
                                    legend: {
                                        display: false
                                    }
                                    , tooltip: {
                                        backgroundColor: '#ffffff'
                                        , padding: 15
                                        , titleColor: '#6b7280'
                                        , bodyColor: '#111827'
                                        , bodyFont: {
                                            size: 14
                                            , weight: 'bold'
                                        }
                                        , borderColor: '#e5e7eb'
                                        , borderWidth: 1
                                        , displayColors: false
                                        , callbacks: {
                                            // Saat hover, tampilkan angka penuh (tidak disingkat)
                                            label: (context) => 'Rp' + new Intl.NumberFormat('id-ID', {
                                                minimumFractionDigits: 2
                                                , maximumFractionDigits: 2
                                            }).format(context.raw)
                                        }
                                    }
                                    , datalabels: {
                                        anchor: 'end'
                                        , align: 'top'
                                        , offset: isMobile ? 4 : 8
                                        , color: '#4b5563',
                                        // Putar teks vertikal jika di HP dan angkanya belum disingkat (opsional, tapi karena kita sudah menyingkat, set ke 0 saja)
                                        rotation: 0
                                        , font: {
                                            size: isMobile ? 9 : 11
                                            , weight: '600'
                                        },
                                        // PERBAIKAN: Penyingkat Angka (Miliar/Juta) untuk Label di atas batang
                                        formatter: function(value) {
                                            if (value === 0 || !value) return ''; // Sembunyikan jika 0

                                            if (value >= 1000000000) {
                                                return 'Rp' + (value / 1000000000).toLocaleString('id-ID', {
                                                    maximumFractionDigits: 2
                                                }) + ' M';
                                            } else if (value >= 1000000) {
                                                return 'Rp' + (value / 1000000).toLocaleString('id-ID', {
                                                    maximumFractionDigits: 2
                                                }) + ' Jt';
                                            }
                                            return 'Rp' + new Intl.NumberFormat('id-ID').format(value);
                                        }
                                    }
                                }
                            }
                        });
                    });
                });

            </script>


            <style>
                /* ======================================= */
                /* CSS KHUSUS DESKTOP ACCORDION            */
                /* ======================================= */
                .income-accordion-wrapper {
                    width: 100%;
                    font-family: 'Inter', 'Poppins', sans-serif;
                }

                .accordion-item {
                    background: #fff;
                    border: 1px solid #eee;
                    border-radius: 12px;
                    margin-bottom: 15px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
                    overflow: hidden;
                }

                .accordion-header {
                    width: 100%;
                    display: flex;
                    align-items: center;
                    padding: 18px 25px;
                    background: none;
                    border: none;
                    cursor: pointer;
                    justify-content: space-between;
                    transition: background 0.3s ease;
                }

                .accordion-header:hover {
                    background: #f9fafb;
                }

                .cat-title {
                    flex: 1.2;
                    text-align: left;
                    font-weight: 700;
                    color: #374151;
                    font-size: 15px;
                }

                .header-progress-container {
                    flex: 2;
                    margin: 0 30px;
                    height: 12px;
                    background: #f3f4f6;
                    border-radius: 20px;
                    overflow: hidden;
                    position: relative;
                }

                .header-progress-fill {
                    height: 100%;
                    background: #2ac0b4;
                    border-radius: 20px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 8px;
                    color: white;
                    font-weight: 800;
                }

                .total-val-wrapper {
                    flex: 1;
                    display: flex;
                    align-items: center;
                    justify-content: flex-end;
                    gap: 10px;
                }

                .total-val-wrapper span:first-child {
                    font-weight: 800;
                    color: #111827;
                    font-size: 15px;
                }

                .arrow-icon {
                    color: #9ca3af;
                    transition: transform 0.3s ease;
                    font-style: normal;
                    font-size: 12px;
                }

                .accordion-header.active .arrow-icon {
                    transform: rotate(180deg);
                }

                .accordion-content {
                    display: none;
                    padding: 0 25px 25px 25px;
                    background: white;
                    border-top: 1px solid #f9fafb;
                }

                .accordion-content.active {
                    display: block;
                }

                .detail-table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 10px;
                }

                .detail-table th {
                    text-align: left;
                    padding: 12px 0;
                    border-bottom: 2px solid #e5e7eb;
                    font-weight: 700;
                    color: #4b5563;
                    font-size: 13px;
                    text-transform: uppercase;
                }

                .detail-table td {
                    padding: 12px 0;
                    border-bottom: 1px solid #f3f4f6;
                    color: #4b5563;
                    font-size: 14px;
                    font-weight: 500;
                }

            </style>

            {{-- ========================================== --}}
            {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
            {{-- ========================================== --}}
            <div class="hidden md:block w-full max-w-7xl mx-auto mb-16">
                <div class="income-accordion-wrapper">

                    {{-- ITEM 1: PAD Desktop --}}
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleAccordion(this, 'pad-detail-desktop')">
                            <span class="cat-title">Pendapatan Asli Desa</span>
                            <div class="header-progress-container">
                                <div class="header-progress-fill" style="width: {{ $p_pad }}%;">{{ number_format($p_pad, 2) }}%</div>
                            </div>
                            <div class="total-val-wrapper">
                                <span>Rp{{ number_format($total_pad ?? 0, 2, ',', '.') }}</span>
                                <span class="arrow-icon">▼</span>
                            </div>
                        </button>
                        <div id="pad-detail-desktop" class="accordion-content">
                            <table class="detail-table">
                                <thead>
                                    <tr>
                                        <th>Uraian</th>
                                        <th class="text-right">Anggaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($pad_items as $item)
                                    <tr>
                                        <td>{{ strtoupper($item->kategori) }}</td>
                                        <td class="text-right" style="font-weight:700">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2" class="text-center" style="padding:15px; color:#9ca3af; font-style: italic;">Tidak ada rincian data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- ITEM 2: Transfer Desktop --}}
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleAccordion(this, 'transfer-detail-desktop')">
                            <span class="cat-title">Pendapatan Transfer</span>
                            <div class="header-progress-container">
                                <div class="header-progress-fill" style="width: {{ $p_transfer }}%;">{{ number_format($p_transfer, 2) }}%</div>
                            </div>
                            <div class="total-val-wrapper">
                                <span>Rp{{ number_format($total_transfer ?? 0, 2, ',', '.') }}</span>
                                <span class="arrow-icon">▼</span>
                            </div>
                        </button>
                        <div id="transfer-detail-desktop" class="accordion-content">
                            <table class="detail-table">
                                <thead>
                                    <tr>
                                        <th>Uraian</th>
                                        <th class="text-right">Anggaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($transfer_items as $item)
                                    <tr>
                                        <td>{{ strtoupper($item->kategori) }}</td>
                                        <td class="text-right" style="font-weight:700">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2" class="text-center" style="padding:15px; color:#9ca3af; font-style: italic;">Tidak ada rincian data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- ITEM 3: Lain-lain Desktop --}}
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleAccordion(this, 'lain-detail-desktop')">
                            <span class="cat-title">Pendapatan Lain-lain</span>
                            <div class="header-progress-container">
                                <div class="header-progress-fill" style="width: {{ $p_lain }}%;">{{ number_format($p_lain, 2) }}%</div>
                            </div>
                            <div class="total-val-wrapper">
                                <span>Rp{{ number_format($total_lain ?? 0, 2, ',', '.') }}</span>
                                <span class="arrow-icon">▼</span>
                            </div>
                        </button>
                        <div id="lain-detail-desktop" class="accordion-content">
                            <table class="detail-table">
                                <thead>
                                    <tr>
                                        <th>Uraian</th>
                                        <th class="text-right">Anggaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($lain_items as $item)
                                    <tr>
                                        <td>{{ strtoupper($item->kategori) }}</td>
                                        <td class="text-right" style="font-weight:700">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2" class="text-center" style="padding:15px; color:#9ca3af; font-style: italic;">Tidak ada rincian data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            {{-- ========================================== --}}
            {{-- VERSI MOBILE (Muncul di HP)                --}}
            {{-- ========================================== --}}
            <div class="block md:hidden w-full px-3 mb-12">

                {{-- ITEM 1: PAD Mobile --}}
                <div class="bg-white border border-gray-100 rounded-xl mb-3 shadow-sm overflow-hidden">
                    <button class="w-full p-4 flex flex-col gap-3 text-left focus:outline-none accordion-header-mobile" onclick="toggleAccordionMobile(this, 'pad-detail-mobile')">
                        <div class="flex justify-between items-center w-full">
                            <span class="font-bold text-gray-800 text-[14px]">Pendapatan Asli Desa</span>
                            <span class="arrow-icon-mobile text-gray-400 text-[10px] transition-transform duration-300">▼</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-[#2ac0b4]" style="width: {{ $p_pad }}%;"></div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <span class="text-[11px] text-gray-500 font-bold">{{ number_format($p_pad, 2) }}%</span>
                            <span class="font-black text-gray-900 text-[16px]">Rp{{ number_format($total_pad ?? 0, 2, ',', '.') }}</span>
                        </div>
                    </button>
                    <div id="pad-detail-mobile" class="hidden px-4 pb-4 border-t border-gray-50">
                        <table class="w-full text-left mt-2">
                            <tbody>
                                @forelse($pad_items as $item)
                                <tr class="border-b border-gray-50 last:border-0">
                                    <td class="py-2.5 text-[12px] text-gray-600">{{ strtoupper($item->kategori) }}</td>
                                    <td class="py-2.5 text-[13px] text-gray-900 font-bold text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="py-3 text-center text-xs text-gray-400 italic">Tidak ada rincian data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- ITEM 2: Transfer Mobile --}}
                <div class="bg-white border border-gray-100 rounded-xl mb-3 shadow-sm overflow-hidden">
                    <button class="w-full p-4 flex flex-col gap-3 text-left focus:outline-none accordion-header-mobile" onclick="toggleAccordionMobile(this, 'transfer-detail-mobile')">
                        <div class="flex justify-between items-center w-full">
                            <span class="font-bold text-gray-800 text-[14px]">Pendapatan Transfer</span>
                            <span class="arrow-icon-mobile text-gray-400 text-[10px] transition-transform duration-300">▼</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-[#2ac0b4]" style="width: {{ $p_transfer }}%;"></div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <span class="text-[11px] text-gray-500 font-bold">{{ number_format($p_transfer, 2) }}%</span>
                            <span class="font-black text-gray-900 text-[16px]">Rp{{ number_format($total_transfer ?? 0, 2, ',', '.') }}</span>
                        </div>
                    </button>
                    <div id="transfer-detail-mobile" class="hidden px-4 pb-4 border-t border-gray-50">
                        <table class="w-full text-left mt-2">
                            <tbody>
                                @forelse($transfer_items as $item)
                                <tr class="border-b border-gray-50 last:border-0">
                                    <td class="py-2.5 text-[12px] text-gray-600">{{ strtoupper($item->kategori) }}</td>
                                    <td class="py-2.5 text-[13px] text-gray-900 font-bold text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="py-3 text-center text-xs text-gray-400 italic">Tidak ada rincian data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- ITEM 3: Lain-lain Mobile --}}
                <div class="bg-white border border-gray-100 rounded-xl mb-3 shadow-sm overflow-hidden">
                    <button class="w-full p-4 flex flex-col gap-3 text-left focus:outline-none accordion-header-mobile" onclick="toggleAccordionMobile(this, 'lain-detail-mobile')">
                        <div class="flex justify-between items-center w-full">
                            <span class="font-bold text-gray-800 text-[14px]">Pendapatan Lain-lain</span>
                            <span class="arrow-icon-mobile text-gray-400 text-[10px] transition-transform duration-300">▼</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-[#2ac0b4]" style="width: {{ $p_lain }}%;"></div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <span class="text-[11px] text-gray-500 font-bold">{{ number_format($p_lain, 2) }}%</span>
                            <span class="font-black text-gray-900 text-[16px]">Rp{{ number_format($total_lain ?? 0, 2, ',', '.') }}</span>
                        </div>
                    </button>
                    <div id="lain-detail-mobile" class="hidden px-4 pb-4 border-t border-gray-50">
                        <table class="w-full text-left mt-2">
                            <tbody>
                                @forelse($lain_items as $item)
                                <tr class="border-b border-gray-50 last:border-0">
                                    <td class="py-2.5 text-[12px] text-gray-600">{{ strtoupper($item->kategori) }}</td>
                                    <td class="py-2.5 text-[13px] text-gray-900 font-bold text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="2" class="py-3 text-center text-xs text-gray-400 italic">Tidak ada rincian data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <script>
                // Script Khusus Desktop
                function toggleAccordion(header, contentId) {
                    const content = document.getElementById(contentId);
                    if (!content) return;
                    header.classList.toggle('active');
                    if (content.classList.contains('active')) {
                        content.classList.remove('active');
                        content.style.display = "none";
                    } else {
                        content.classList.add('active');
                        content.style.display = "block";
                    }
                }

                // Script Khusus Mobile (menggunakan class utility Tailwind 'hidden')
                function toggleAccordionMobile(header, contentId) {
                    const content = document.getElementById(contentId);
                    if (!content) return;

                    // Putar ikon panah
                    const icon = header.querySelector('.arrow-icon-mobile');
                    if (icon.style.transform === 'rotate(180deg)') {
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        icon.style.transform = 'rotate(180deg)';
                    }

                    // Tampilkan/sembunyikan tabel rincian
                    content.classList.toggle('hidden');
                }

            </script>


            <style>
                .canvas-container-belanja {
                    position: relative;
                    height: 350px;
                    width: 100%;
                }

                .expense-accordion-wrapper {
                    width: 100%;
                    margin-top: 20px;
                }

                /* Warna khusus untuk bar belanja (Hijau Muda) */
                .progress-fill-belanja {
                    background: #2ac0b4 !important;
                }

            </style>

            {{-- ========================================== --}}
            {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
            {{-- ========================================== --}}
            <div class="hidden md:block w-full max-w-7xl mx-auto mb-10">
                <div class="chart-box-white">
                    <h2 class="chart-title-green">Belanja Desa {{ $tahun_pilih }}</h2>
                    <div class="canvas-container-belanja">
                        <canvas id="belanjaCategoryChartDesktop"></canvas>
                    </div>
                </div>
            </div>

            {{-- ========================================== --}}
            {{-- VERSI MOBILE (Muncul di HP)                --}}
            {{-- ========================================== --}}
            <div class="block md:hidden w-full px-3 mb-12">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4">
                    <h2 class="text-[#2ac0b4] font-extrabold text-[20px] mb-4 leading-tight tracking-tight">
                        Belanja Desa {{ $tahun_pilih }}
                    </h2>
                    {{-- Tinggi container diturunkan sedikit agar pas di layar HP --}}
                    <div class="relative w-full h-[300px]">
                        <canvas id="belanjaCategoryChartMobile"></canvas>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Data menggunakan isset agar aman dari formatter (?? menjadi ? ?)
                    const dataBelanja = [
                        @json(isset($total_pemerintahan) ? $total_pemerintahan : 0)
                        , @json(isset($total_pembangunan) ? $total_pembangunan : 0)
                        , @json(isset($total_pembinaan) ? $total_pembinaan : 0)
                        , @json(isset($total_pemberdayaan) ? $total_pemberdayaan : 0)
                        , @json(isset($total_bencana) ? $total_bencana : 0)
                    ];

                    // Pastikan plugin diregister
                    if (typeof ChartDataLabels !== 'undefined') {
                        Chart.register(ChartDataLabels);
                    }

                    // Daftar ID canvas yang akan digambar
                    const chartIds = ['belanjaCategoryChartDesktop', 'belanjaCategoryChartMobile'];

                    chartIds.forEach(id => {
                        const canvasElement = document.getElementById(id);
                        if (!canvasElement) return;

                        const belCtx = canvasElement.getContext('2d');
                        const isMobile = id.includes('Mobile');

                        new Chart(belCtx, {
                            type: 'bar'
                            , data: {
                                // PERBAIKAN: Singkat teks di Mobile agar 5 kolom muat tanpa menabrak
                                labels: isMobile ? [
                                    ['Pemerintahan']
                                    , ['Pembangunan']
                                    , ['Pembinaan']
                                    , ['Pemberdayaan']
                                    , ['Bencana']
                                ] : [
                                    ['Penyelenggaraan', 'Pemerintahan Desa']
                                    , ['Pelaksanaan', 'Pembangunan Desa']
                                    , ['Pembinaan', 'Kemasyarakatan']
                                    , ['Pemberdayaan', 'Masyarakat']
                                    , ['Penanggulangan', 'Bencana & Darurat']
                                ]
                                , datasets: [{
                                    data: dataBelanja
                                    , backgroundColor: '#2ac0b4', // Hijau muda cerah sesuai contoh
                                    borderRadius: 4
                                    , maxBarThickness: isMobile ? 35 : 70 // Batang diperkecil di HP
                                }]
                            }
                            , options: {
                                responsive: true
                                , maintainAspectRatio: false
                                , layout: {
                                    padding: {
                                        top: isMobile ? 30 : 40, // Ruang atas disesuaikan
                                        bottom: 10
                                    }
                                }
                                , scales: {
                                    y: {
                                        min: 0
                                        , beginAtZero: true
                                        , ticks: {
                                            // PERBAIKAN: Penyingkat Angka (Miliar/Juta) untuk Sumbu Y
                                            callback: function(value) {
                                                if (value >= 1000000000) {
                                                    return (value / 1000000000) + ' M';
                                                } else if (value >= 1000000) {
                                                    return (value / 1000000) + ' Jt';
                                                }
                                                return value;
                                            }
                                            , color: '#9ca3af'
                                            , font: {
                                                size: isMobile ? 9 : 10
                                            }
                                        }
                                        , grid: {
                                            color: '#f3f4f6'
                                            , drawBorder: false
                                        }
                                        , border: {
                                            display: false
                                        }
                                    }
                                    , x: {
                                        grid: {
                                            display: false
                                        }
                                        , ticks: {
                                            color: '#6b7280'
                                            , font: {
                                                size: isMobile ? 8 : 11 // Teks kategori sangat kecil di HP agar muat 5 kolom
                                            }
                                        }
                                    }
                                }
                                , plugins: {
                                    legend: {
                                        display: false
                                    }
                                    , tooltip: {
                                        backgroundColor: '#ffffff'
                                        , padding: 15
                                        , titleColor: '#6b7280'
                                        , bodyColor: '#111827'
                                        , bodyFont: {
                                            size: 14
                                            , weight: 'bold'
                                        }
                                        , borderColor: '#e5e7eb'
                                        , borderWidth: 1
                                        , displayColors: false
                                        , callbacks: {
                                            // Saat batang diklik/hover, tampilkan angka aslinya
                                            label: (context) => 'Rp' + new Intl.NumberFormat('id-ID', {
                                                minimumFractionDigits: 2
                                                , maximumFractionDigits: 2
                                            }).format(context.raw)
                                        }
                                    }
                                    , datalabels: {
                                        anchor: 'end'
                                        , align: 'top'
                                        , offset: isMobile ? 3 : 5
                                        , color: '#4b5563'
                                        , rotation: 0, // Pastikan teks lurus
                                        font: {
                                            size: isMobile ? 8 : 10
                                            , weight: '600'
                                        },
                                        // PERBAIKAN: Penyingkat Angka (M/Jt) di atas batang
                                        formatter: function(value) {
                                            if (value === 0 || !value) return '';

                                            if (value >= 1000000000) {
                                                return 'Rp' + (value / 1000000000).toLocaleString('id-ID', {
                                                    maximumFractionDigits: 1
                                                }) + ' M';
                                            } else if (value >= 1000000) {
                                                return 'Rp' + (value / 1000000).toLocaleString('id-ID', {
                                                    maximumFractionDigits: 1
                                                }) + ' Jt';
                                            }
                                            return 'Rp' + new Intl.NumberFormat('id-ID').format(value);
                                        }
                                    }
                                }
                            }
                        });
                    });
                });

            </script>


            {{-- ========================================== --}}
            {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
            {{-- ========================================== --}}
            <div class="hidden md:block w-full max-w-7xl mx-auto  mb-16">
                <div class="expense-accordion-wrapper">

                    {{-- ITEM 1: Pemerintahan Desktop --}}
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleAccordion(this, 'pem-detail-desktop')">
                            <span class="cat-title">Bidang Penyelenggaraan Pemerintahan Desa</span>
                            <div class="header-progress-container">
                                <div class="header-progress-fill progress-fill-belanja" style="width: {{ $p_pem }}%;">
                                    {{ number_format($p_pem, 2) }}%
                                </div>
                            </div>
                            <div class="total-val-wrapper">
                                <span>Rp{{ number_format($total_pemerintahan ?? 0, 2, ',', '.') }}</span>
                                <span class="arrow-icon">▼</span>
                            </div>
                        </button>
                        <div id="pem-detail-desktop" class="accordion-content">
                            <table class="detail-table">
                                <thead>
                                    <tr>
                                        <th>Uraian</th>
                                        <th class="text-right">Anggaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BIDANG PENYELENGGARAAN PEMERINTAHAN DESA</td>
                                        <td class="text-right" style="font-weight:700">Rp{{ number_format($total_pemerintahan ?? 0, 2, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- ITEM 2: Pembangunan Desktop --}}
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleAccordion(this, 'pamb-detail-desktop')">
                            <span class="cat-title">Bidang Pelaksanaan Pembangunan Desa</span>
                            <div class="header-progress-container">
                                <div class="header-progress-fill progress-fill-belanja" style="width: {{ $p_pamb }}%;">
                                    {{ number_format($p_pamb, 2) }}%
                                </div>
                            </div>
                            <div class="total-val-wrapper">
                                <span>Rp{{ number_format($total_pembangunan ?? 0, 2, ',', '.') }}</span>
                                <span class="arrow-icon">▼</span>
                            </div>
                        </button>
                        <div id="pamb-detail-desktop" class="accordion-content">
                            <table class="detail-table">
                                <thead>
                                    <tr>
                                        <th>Uraian</th>
                                        <th class="text-right">Anggaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BIDANG PELAKSANAAN PEMBANGUNAN DESA</td>
                                        <td class="text-right" style="font-weight:700">Rp{{ number_format($total_pembangunan ?? 0, 2, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- ITEM 3: Pembinaan Desktop --}}
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleAccordion(this, 'pemb-detail-desktop')">
                            <span class="cat-title">Bidang Pembinaan Kemasyarakatan Desa</span>
                            <div class="header-progress-container">
                                <div class="header-progress-fill progress-fill-belanja" style="width: {{ $p_pemb }}%;">
                                    {{ number_format($p_pemb, 2) }}%
                                </div>
                            </div>
                            <div class="total-val-wrapper">
                                <span>Rp{{ number_format($total_pembinaan ?? 0, 2, ',', '.') }}</span>
                                <span class="arrow-icon">▼</span>
                            </div>
                        </button>
                        <div id="pemb-detail-desktop" class="accordion-content">
                            <table class="detail-table">
                                <thead>
                                    <tr>
                                        <th>Uraian</th>
                                        <th class="text-right">Anggaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BIDANG PEMBINAAN KEMASYARAKATAN DESA</td>
                                        <td class="text-right" style="font-weight:700">Rp{{ number_format($total_pembinaan ?? 0, 2, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- ITEM 4: Pemberdayaan Desktop --}}
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleAccordion(this, 'pembd-detail-desktop')">
                            <span class="cat-title">Bidang Pemberdayaan Masyarakat Desa</span>
                            <div class="header-progress-container">
                                <div class="header-progress-fill progress-fill-belanja" style="width: {{ $p_pembd }}%;">
                                    {{ number_format($p_pembd, 2) }}%
                                </div>
                            </div>
                            <div class="total-val-wrapper">
                                <span>Rp{{ number_format($total_pemberdayaan ?? 0, 2, ',', '.') }}</span>
                                <span class="arrow-icon">▼</span>
                            </div>
                        </button>
                        <div id="pembd-detail-desktop" class="accordion-content">
                            <table class="detail-table">
                                <thead>
                                    <tr>
                                        <th>Uraian</th>
                                        <th class="text-right">Anggaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BIDANG PEMBERDAYAAN MASYARAKAT DESA</td>
                                        <td class="text-right" style="font-weight:700">Rp{{ number_format($total_pemberdayaan ?? 0, 2, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- ITEM 5: Bencana Desktop --}}
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleAccordion(this, 'benc-detail-desktop')">
                            <span class="cat-title">Bidang Penanggulangan Bencana & Darurat</span>
                            <div class="header-progress-container">
                                <div class="header-progress-fill progress-fill-belanja" style="width: {{ $p_benc }}%;">
                                    {{ number_format($p_benc, 2) }}%
                                </div>
                            </div>
                            <div class="total-val-wrapper">
                                <span>Rp{{ number_format($total_bencana ?? 0, 2, ',', '.') }}</span>
                                <span class="arrow-icon">▼</span>
                            </div>
                        </button>
                        <div id="benc-detail-desktop" class="accordion-content">
                            <table class="detail-table">
                                <thead>
                                    <tr>
                                        <th>Uraian</th>
                                        <th class="text-right">Anggaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BIDANG PENANGGULANGAN BENCANA & DARURAT</td>
                                        <td class="text-right" style="font-weight:700">Rp{{ number_format($total_bencana ?? 0, 2, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>


            {{-- ========================================== --}}
            {{-- VERSI MOBILE (Muncul di HP)                --}}
            {{-- ========================================== --}}
            <div class="block md:hidden w-full px-3 mb-12">

                {{-- ITEM 1: Pemerintahan Mobile --}}
                <div class="bg-white border border-gray-100 rounded-xl mb-3 shadow-sm overflow-hidden">
                    <button class="w-full p-4 flex flex-col gap-3 text-left focus:outline-none accordion-header-mobile" onclick="toggleAccordionMobile(this, 'pem-detail-mobile')">
                        <div class="flex justify-between items-center w-full">
                            <span class="font-bold text-gray-800 text-[14px]">Bid. Penyelenggaraan Pemerintahan</span>
                            <span class="arrow-icon-mobile text-gray-400 text-[10px] transition-transform duration-300">▼</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-[#2ac0b4]" style="width: {{ $p_pem }}%;"></div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <span class="text-[11px] text-gray-500 font-bold">{{ number_format($p_pem, 2) }}%</span>
                            <span class="font-black text-gray-900 text-[15px]">Rp{{ number_format($total_pemerintahan ?? 0, 2, ',', '.') }}</span>
                        </div>
                    </button>
                    <div id="pem-detail-mobile" class="hidden px-4 pb-4 border-t border-gray-50">
                        <table class="w-full text-left mt-2">
                            <tbody>
                                <tr class="border-b border-gray-50 last:border-0">
                                    <td class="py-2.5 text-[11px] text-gray-600">BIDANG PENYELENGGARAAN PEMERINTAHAN DESA</td>
                                    <td class="py-2.5 text-[12px] text-gray-900 font-bold text-right">Rp{{ number_format($total_pemerintahan ?? 0, 2, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- ITEM 2: Pembangunan Mobile --}}
                <div class="bg-white border border-gray-100 rounded-xl mb-3 shadow-sm overflow-hidden">
                    <button class="w-full p-4 flex flex-col gap-3 text-left focus:outline-none accordion-header-mobile" onclick="toggleAccordionMobile(this, 'pamb-detail-mobile')">
                        <div class="flex justify-between items-center w-full">
                            <span class="font-bold text-gray-800 text-[14px]">Bid. Pelaksanaan Pembangunan</span>
                            <span class="arrow-icon-mobile text-gray-400 text-[10px] transition-transform duration-300">▼</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-[#2ac0b4]" style="width: {{ $p_pamb }}%;"></div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <span class="text-[11px] text-gray-500 font-bold">{{ number_format($p_pamb, 2) }}%</span>
                            <span class="font-black text-gray-900 text-[15px]">Rp{{ number_format($total_pembangunan ?? 0, 2, ',', '.') }}</span>
                        </div>
                    </button>
                    <div id="pamb-detail-mobile" class="hidden px-4 pb-4 border-t border-gray-50">
                        <table class="w-full text-left mt-2">
                            <tbody>
                                <tr class="border-b border-gray-50 last:border-0">
                                    <td class="py-2.5 text-[11px] text-gray-600">BIDANG PELAKSANAAN PEMBANGUNAN DESA</td>
                                    <td class="py-2.5 text-[12px] text-gray-900 font-bold text-right">Rp{{ number_format($total_pembangunan ?? 0, 2, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- ITEM 3: Pembinaan Mobile --}}
                <div class="bg-white border border-gray-100 rounded-xl mb-3 shadow-sm overflow-hidden">
                    <button class="w-full p-4 flex flex-col gap-3 text-left focus:outline-none accordion-header-mobile" onclick="toggleAccordionMobile(this, 'pemb-detail-mobile')">
                        <div class="flex justify-between items-center w-full">
                            <span class="font-bold text-gray-800 text-[14px]">Bid. Pembinaan Kemasyarakatan</span>
                            <span class="arrow-icon-mobile text-gray-400 text-[10px] transition-transform duration-300">▼</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-[#2ac0b4]" style="width: {{ $p_pemb }}%;"></div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <span class="text-[11px] text-gray-500 font-bold">{{ number_format($p_pemb, 2) }}%</span>
                            <span class="font-black text-gray-900 text-[15px]">Rp{{ number_format($total_pembinaan ?? 0, 2, ',', '.') }}</span>
                        </div>
                    </button>
                    <div id="pemb-detail-mobile" class="hidden px-4 pb-4 border-t border-gray-50">
                        <table class="w-full text-left mt-2">
                            <tbody>
                                <tr class="border-b border-gray-50 last:border-0">
                                    <td class="py-2.5 text-[11px] text-gray-600">BIDANG PEMBINAAN KEMASYARAKATAN DESA</td>
                                    <td class="py-2.5 text-[12px] text-gray-900 font-bold text-right">Rp{{ number_format($total_pembinaan ?? 0, 2, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- ITEM 4: Pemberdayaan Mobile --}}
                <div class="bg-white border border-gray-100 rounded-xl mb-3 shadow-sm overflow-hidden">
                    <button class="w-full p-4 flex flex-col gap-3 text-left focus:outline-none accordion-header-mobile" onclick="toggleAccordionMobile(this, 'pembd-detail-mobile')">
                        <div class="flex justify-between items-center w-full">
                            <span class="font-bold text-gray-800 text-[14px]">Bid. Pemberdayaan Masyarakat</span>
                            <span class="arrow-icon-mobile text-gray-400 text-[10px] transition-transform duration-300">▼</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-[#2ac0b4]" style="width: {{ $p_pembd }}%;"></div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <span class="text-[11px] text-gray-500 font-bold">{{ number_format($p_pembd, 2) }}%</span>
                            <span class="font-black text-gray-900 text-[15px]">Rp{{ number_format($total_pemberdayaan ?? 0, 2, ',', '.') }}</span>
                        </div>
                    </button>
                    <div id="pembd-detail-mobile" class="hidden px-4 pb-4 border-t border-gray-50">
                        <table class="w-full text-left mt-2">
                            <tbody>
                                <tr class="border-b border-gray-50 last:border-0">
                                    <td class="py-2.5 text-[11px] text-gray-600">BIDANG PEMBERDAYAAN MASYARAKAT DESA</td>
                                    <td class="py-2.5 text-[12px] text-gray-900 font-bold text-right">Rp{{ number_format($total_pemberdayaan ?? 0, 2, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- ITEM 5: Bencana Mobile --}}
                <div class="bg-white border border-gray-100 rounded-xl mb-3 shadow-sm overflow-hidden">
                    <button class="w-full p-4 flex flex-col gap-3 text-left focus:outline-none accordion-header-mobile" onclick="toggleAccordionMobile(this, 'benc-detail-mobile')">
                        <div class="flex justify-between items-center w-full">
                            <span class="font-bold text-gray-800 text-[14px]">Bid. Penanggulangan Bencana</span>
                            <span class="arrow-icon-mobile text-gray-400 text-[10px] transition-transform duration-300">▼</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-[#2ac0b4]" style="width: {{ $p_benc }}%;"></div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <span class="text-[11px] text-gray-500 font-bold">{{ number_format($p_benc, 2) }}%</span>
                            <span class="font-black text-gray-900 text-[15px]">Rp{{ number_format($total_bencana ?? 0, 2, ',', '.') }}</span>
                        </div>
                    </button>
                    <div id="benc-detail-mobile" class="hidden px-4 pb-4 border-t border-gray-50">
                        <table class="w-full text-left mt-2">
                            <tbody>
                                <tr class="border-b border-gray-50 last:border-0">
                                    <td class="py-2.5 text-[11px] text-gray-600">BIDANG PENANGGULANGAN BENCANA & DARURAT</td>
                                    <td class="py-2.5 text-[12px] text-gray-900 font-bold text-right">Rp{{ number_format($total_bencana ?? 0, 2, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>


            {{-- ========================================== --}}
            {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
            {{-- ========================================== --}}
            <div class="hidden md:block w-full max-w-7xl mx-auto mb-10">
                <div class="chart-box-white">
                    <h2 class="chart-title-green">Pembiayaan Desa {{ $tahun_pilih }}</h2>
                    <div style="position: relative; height: 300px; width: 100%;">
                        <canvas id="pembiayaanChartDesktop"></canvas>
                    </div>
                </div>
            </div>

            {{-- ========================================== --}}
            {{-- VERSI MOBILE (Muncul di HP)                --}}
            {{-- ========================================== --}}
            <div class="block md:hidden w-full px-3 mb-12">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4">
                    <h2 class="text-[#2ac0b4] font-extrabold text-[20px] mb-4 leading-tight tracking-tight">
                        Pembiayaan Desa {{ $tahun_pilih }}
                    </h2>
                    <div style="position: relative; height: 280px; width: 100%;">
                        <canvas id="pembiayaanChartMobile"></canvas>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Ambil data PHP
                    const pembiayaanData = [
                        @json(isset($pembiayaan_penerimaan) ? $pembiayaan_penerimaan : 0)
                        , @json(isset($pembiayaan_pengeluaran) ? $pembiayaan_pengeluaran : 0)
                    ];

                    // Pastikan plugin DataLabels ter-register
                    if (typeof ChartDataLabels !== 'undefined') {
                        Chart.register(ChartDataLabels);
                    }

                    const chartIds = ['pembiayaanChartDesktop', 'pembiayaanChartMobile'];

                    chartIds.forEach(id => {
                        const canvasElement = document.getElementById(id);
                        if (!canvasElement) return;

                        const finCtx = canvasElement.getContext('2d');
                        const isMobile = id.includes('Mobile');

                        new Chart(finCtx, {
                            type: 'bar'
                            , data: {
                                labels: ['Penerimaan', 'Pengeluaran']
                                , datasets: [{
                                    data: pembiayaanData
                                    , backgroundColor: '#2ac0b4', // Hijau tua identik Pendapatan
                                    borderRadius: 5
                                    , maxBarThickness: isMobile ? 60 : 100 // Batang diperkecil di HP
                                }]
                            }
                            , options: {
                                responsive: true
                                , maintainAspectRatio: false
                                , layout: {
                                    padding: {
                                        // Beri ruang atas agar teks nominal tidak terpotong (terutama di mobile)
                                        top: isMobile ? 35 : 40
                                    }
                                }
                                , plugins: {
                                    legend: {
                                        display: false
                                    }
                                    , tooltip: {
                                        backgroundColor: '#ffffff'
                                        , padding: 15
                                        , titleColor: '#6b7280'
                                        , bodyColor: '#111827'
                                        , bodyFont: {
                                            size: 14
                                            , weight: 'bold'
                                        }
                                        , borderColor: '#e5e7eb'
                                        , borderWidth: 1
                                        , displayColors: false
                                        , callbacks: {
                                            // Tampilkan nominal utuh saat hover
                                            label: (context) => 'Rp' + new Intl.NumberFormat('id-ID', {
                                                minimumFractionDigits: 2
                                                , maximumFractionDigits: 2
                                            }).format(context.raw)
                                        }
                                    }
                                    , datalabels: {
                                        anchor: 'end'
                                        , align: 'top'
                                        , offset: 6
                                        , color: '#4b5563'
                                        , font: {
                                            size: isMobile ? 10 : 12
                                            , weight: '600'
                                        },
                                        // PERBAIKAN: Penyingkat Angka Miliar/Juta (Sangat penting untuk mobile)
                                        formatter: function(value) {
                                            if (value === 0 || !value) return '';

                                            if (value >= 1000000000) {
                                                return 'Rp' + (value / 1000000000).toLocaleString('id-ID', {
                                                    maximumFractionDigits: 2
                                                }) + ' M';
                                            } else if (value >= 1000000) {
                                                return 'Rp' + (value / 1000000).toLocaleString('id-ID', {
                                                    maximumFractionDigits: 2
                                                }) + ' Jt';
                                            }
                                            return 'Rp' + new Intl.NumberFormat('id-ID').format(value);
                                        }
                                    }
                                }
                                , scales: {
                                    y: {
                                        beginAtZero: true,
                                        // Sumbu Y disembunyikan sesuai desain asli kamu
                                        display: false
                                    }
                                    , x: {
                                        grid: {
                                            display: false
                                        }
                                        , ticks: {
                                            color: '#374151'
                                            , font: {
                                                size: isMobile ? 12 : 14
                                                , weight: '500'
                                            }
                                        }
                                        , border: {
                                            display: false
                                        }
                                    }
                                }
                            }
                        });
                    });
                });

            </script>


            {{-- ========================================== --}}
            {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
            {{-- ========================================== --}}
            <div class="hidden md:block w-full max-w-7xl mx-auto mb-16">
                <div class="expense-accordion-wrapper" style="margin-top: 20px;">

                    {{-- ITEM 1: Penerimaan Desktop --}}
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleAccordion(this, 'terima-detail-desktop')">
                            <span class="cat-title">Penerimaan Pembiayaan</span>
                            <div class="header-progress-container">
                                <div class="header-progress-fill" style="width: {{ $persen_terima }}%; background: #2ac0b4;">
                                    {{ number_format($persen_terima, 2) }}%
                                </div>
                            </div>
                            <div class="total-val-wrapper">
                                <span>Rp{{ number_format($pembiayaan_penerimaan ?? 0, 2, ',', '.') }}</span>
                                <span class="arrow-icon">▼</span>
                            </div>
                        </button>
                        <div id="terima-detail-desktop" class="accordion-content">
                            <table class="detail-table">
                                <tbody>
                                    <tr>
                                        <td>PENERIMAAN PEMBIAYAAN DESA</td>
                                        <td class="text-right" style="font-weight:700">Rp{{ number_format($pembiayaan_penerimaan ?? 0, 2, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- ITEM 2: Pengeluaran Desktop --}}
                    <div class="accordion-item">
                        <button class="accordion-header" onclick="toggleAccordion(this, 'keluar-detail-desktop')">
                            <span class="cat-title">Pengeluaran Pembiayaan</span>
                            <div class="header-progress-container">
                                <div class="header-progress-fill" style="width: {{ $persen_keluar }}%; background: #2ac0b4;">
                                    {{ number_format($persen_keluar, 2) }}%
                                </div>
                            </div>
                            <div class="total-val-wrapper">
                                <span>Rp{{ number_format($pembiayaan_pengeluaran ?? 0, 2, ',', '.') }}</span>
                                <span class="arrow-icon">▼</span>
                            </div>
                        </button>
                        <div id="keluar-detail-desktop" class="accordion-content">
                            <table class="detail-table">
                                <tbody>
                                    <tr>
                                        <td>PENGELUARAN PEMBIAYAAN DESA</td>
                                        <td class="text-right" style="font-weight:700">Rp{{ number_format($pembiayaan_pengeluaran ?? 0, 2, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            {{-- ========================================== --}}
            {{-- VERSI MOBILE (Muncul di HP)                --}}
            {{-- ========================================== --}}
            <div class="block md:hidden w-full  mb-12">

                {{-- ITEM 1: Penerimaan Mobile --}}
                <div class="bg-white border border-gray-100 rounded-xl mb-3 shadow-sm overflow-hidden">
                    <button class="w-full p-4 flex flex-col gap-3 text-left focus:outline-none accordion-header-mobile" onclick="toggleAccordionMobile(this, 'terima-detail-mobile')">
                        <div class="flex justify-between items-center w-full">
                            <span class="font-bold text-gray-800 text-[14px]">Penerimaan Pembiayaan</span>
                            <span class="arrow-icon-mobile text-gray-400 text-[10px] transition-transform duration-300">▼</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-[#2ac0b4]" style="width: {{ $persen_terima }}%;"></div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <span class="text-[11px] text-gray-500 font-bold">{{ number_format($persen_terima, 2) }}%</span>
                            <span class="font-black text-gray-900 text-[16px]">Rp{{ number_format($pembiayaan_penerimaan ?? 0, 2, ',', '.') }}</span>
                        </div>
                    </button>
                    <div id="terima-detail-mobile" class="hidden px-4 pb-4 border-t border-gray-50">
                        <table class="w-full text-left mt-2">
                            <tbody>
                                <tr class="border-b border-gray-50 last:border-0">
                                    <td class="py-2.5 text-[11px] text-gray-600">PENERIMAAN PEMBIAYAAN DESA</td>
                                    <td class="py-2.5 text-[12px] text-gray-900 font-bold text-right">Rp{{ number_format($pembiayaan_penerimaan ?? 0, 2, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- ITEM 2: Pengeluaran Mobile --}}
                <div class="bg-white border border-gray-100 rounded-xl mb-3 shadow-sm overflow-hidden">
                    <button class="w-full p-4 flex flex-col gap-3 text-left focus:outline-none accordion-header-mobile" onclick="toggleAccordionMobile(this, 'keluar-detail-mobile')">
                        <div class="flex justify-between items-center w-full">
                            <span class="font-bold text-gray-800 text-[14px]">Pengeluaran Pembiayaan</span>
                            <span class="arrow-icon-mobile text-gray-400 text-[10px] transition-transform duration-300">▼</span>
                        </div>
                        <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-[#2ac0b4]" style="width: {{ $persen_keluar }}%;"></div>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <span class="text-[11px] text-gray-500 font-bold">{{ number_format($persen_keluar, 2) }}%</span>
                            <span class="font-black text-gray-900 text-[16px]">Rp{{ number_format($pembiayaan_pengeluaran ?? 0, 2, ',', '.') }}</span>
                        </div>
                    </button>
                    <div id="keluar-detail-mobile" class="hidden px-4 pb-4 border-t border-gray-50">
                        <table class="w-full text-left mt-2">
                            <tbody>
                                <tr class="border-b border-gray-50 last:border-0">
                                    <td class="py-2.5 text-[11px] text-gray-600">PENGELUARAN PEMBIAYAAN DESA</td>
                                    <td class="py-2.5 text-[12px] text-gray-900 font-bold text-right">Rp{{ number_format($pembiayaan_pengeluaran ?? 0, 2, ',', '.') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil data dari PHP Laravel
            const dataTerima = {
                {
                    $pembiayaan_penerimaan ? ? 0
                }
            };
            const dataKeluar = {
                {
                    $pembiayaan_pengeluaran ? ? 0
                }
            };

            // Panggil fungsi yang ada di app.js
            window.renderPembiayaanChart('pembiayaanChart', dataTerima, dataKeluar);
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil data dari backend PHP
            const labels = @json(isset($chart_labels) ? $chart_labels : []);
            const dataPendapatan = @json(isset($chart_pendapatan) ? $chart_pendapatan : []);
            const dataBelanja = @json(isset($chart_belanja) ? $chart_belanja : []);

            // Pastikan plugin diregister
            if (typeof ChartDataLabels !== 'undefined') {
                Chart.register(ChartDataLabels);
            }

            // Daftar ID canvas yang akan digambar
            const chartIds = ['apbdesTrendChartDesktop', 'apbdesTrendChartMobile'];

            chartIds.forEach(id => {
                const chartCanvas = document.getElementById(id);
                if (!chartCanvas) return; // Lewati jika elemen tidak ada

                const isMobile = id.includes('Mobile');

                new Chart(chartCanvas.getContext('2d'), {
                    type: 'bar'
                    , data: {
                        labels: labels
                        , datasets: [{
                                label: 'Pendapatan'
                                , data: dataPendapatan
                                , backgroundColor: '#2ac0b4', // Hijau Tua
                                maxBarThickness: isMobile ? 30 : 45, // Batang sedikit lebih kecil di HP
                                categoryPercentage: 0.6
                                , barPercentage: 0.9
                            }
                            , {
                                label: 'Belanja'
                                , data: dataBelanja
                                , backgroundColor: '#a3e87d', // Hijau Muda
                                maxBarThickness: isMobile ? 30 : 45
                                , categoryPercentage: 0.6
                                , barPercentage: 0.9
                            }
                        ]
                    }
                    , options: {
                        responsive: true
                        , maintainAspectRatio: false
                        , interaction: {
                            mode: 'index'
                            , intersect: false
                        }
                        , layout: {
                            padding: {
                                // Ruang ekstra untuk nominal di puncak, sedikit dikecilkan di mobile
                                top: isMobile ? 40 : 60
                            }
                        }
                        , scales: {
                            y: {
                                beginAtZero: true
                                , ticks: {
                                    // PERBAIKAN 1: Singkat angka di sumbu Y (sebelah kiri) juga
                                    callback: function(value) {
                                        if (value >= 1000000000) {
                                            return (value / 1000000000) + ' M';
                                        } else if (value >= 1000000) {
                                            return (value / 1000000) + ' Jt';
                                        }
                                        return value;
                                    }
                                    , color: '#9ca3af'
                                    , font: {
                                        size: isMobile ? 9 : 11 // Font Y axis lebih kecil di HP
                                    }
                                }
                                , grid: {
                                    color: '#f3f4f6'
                                    , drawBorder: false
                                }
                                , border: {
                                    display: false
                                }
                            }
                            , x: {
                                grid: {
                                    display: true
                                    , color: '#f3f4f6'
                                    , drawBorder: false
                                }
                                , ticks: {
                                    color: '#374151'
                                    , font: {
                                        size: isMobile ? 10 : 14, // Font X axis disesuaikan
                                        weight: '500'
                                    }
                                }
                                , border: {
                                    display: false
                                }
                            }
                        }
                        , plugins: {
                            legend: {
                                display: false
                            }
                            , tooltip: {
                                backgroundColor: '#ffffff'
                                , padding: isMobile ? 10 : 15
                                , titleColor: '#6b7280'
                                , titleFont: {
                                    size: isMobile ? 12 : 14
                                    , weight: '400'
                                }
                                , bodyColor: '#374151'
                                , bodyFont: {
                                    size: isMobile ? 12 : 14
                                    , weight: '700'
                                }
                                , borderColor: '#e5e7eb'
                                , borderWidth: 1
                                , cornerRadius: 6
                                , displayColors: true
                                , boxPadding: 8
                                , callbacks: {
                                    label: function(context) {
                                        let label = context.dataset.label || '';
                                        let value = context.raw || 0;
                                        let format = new Intl.NumberFormat('id-ID', {
                                            minimumFractionDigits: 2
                                            , maximumFractionDigits: 2
                                        }).format(value);
                                        return label + ' :   Rp' + format;
                                    }
                                }
                            }
                            , datalabels: {
                                anchor: 'end'
                                , align: 'top'
                                , offset: isMobile ? 4 : 8, // Jarak dari ujung batang
                                color: '#4b5563',
                                // Angka dipastikan lurus mendatar
                                rotation: 0
                                , font: {
                                    size: isMobile ? 8 : 10, // Ukuran nominal diperkecil di HP
                                    weight: '600'
                                },
                                // PERBAIKAN 2: Singkat nominal di atas batang (Miliar / Juta)
                                formatter: function(value) {
                                    if (value >= 1000000000) {
                                        return 'Rp' + (value / 1000000000).toLocaleString('id-ID', {
                                            maximumFractionDigits: 2
                                        }) + ' M';
                                    } else if (value >= 1000000) {
                                        return 'Rp' + (value / 1000000).toLocaleString('id-ID', {
                                            maximumFractionDigits: 2
                                        }) + ' Jt';
                                    }
                                    return 'Rp' + new Intl.NumberFormat('id-ID').format(value);
                                }
                            }
                        }
                    }
                });
            });
        });

    </script>



</x-frontend>
