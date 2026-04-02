<x-frontend>
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



                </div>

            </div>
            {{-- KODE ASLI KAMU BERAKHIR DI SINI --}}

        </div>


        <div class="idm-top-section">
            {{-- ========================================== --}}
            {{-- ZONA DESKTOP (PRECISE MIRRORING KERSIK)    --}}
            {{-- ========================================== --}}
            <div class="hidden md:block w-full max-w-7xl mx-auto mt-10">

                @if($idm)
                {{-- BARIS 1: JUDUL (Kiri) & KARTU UTAMA (Kanan) --}}
                <div class="flex flex-col lg:flex-row gap-16 items-start mb-6">

                    {{-- Sisi Kiri: Deskripsi --}}
                    <div class="lg:w-2/5">
                        <h2 class="text-[#2ac0b4] font-bold text-5xl mb-6 tracking-tight">IDM</h2>
                        <p class="text-gray-800 text-[19px] leading-[1.6] text-left font-medium">
                            Indeks Desa Membangun (IDM) merupakan indeks komposit yang dibentuk dari tiga indeks, yaitu
                            Indeks Ketahanan Sosial, Indeks Ketahanan Ekonomi, dan Indeks Ketahanan Ekologi/Lingkungan.
                        </p>

                        <div class="mt-10">
                            <form action="{{ route('frontend.idm') }}" method="GET">
                                <div class="relative w-44">
                                    <select name="tahun" onchange="this.form.submit()" class="w-full pl-5 pr-10 py-3 border border-gray-200 rounded-lg bg-white text-gray-700 font-bold shadow-sm focus:outline-none appearance-none cursor-pointer">
                                        @foreach($list_tahun as $thn)
                                        <option value="{{ $thn }}" {{ $tahun_pilih == $thn ? 'selected' : '' }}>Tahun {{ $thn }}</option>
                                        @endforeach
                                    </select>
                                    <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Sisi Kanan: 2 Kartu Utama --}}
                    <div class="lg:w-3/5 w-full flex flex-col gap-5">
                        {{-- Skor IDM --}}
                        <div class="bg-white rounded-lg shadow-[0_1px_10px_rgba(0,0,0,0.03)] border border-gray-100 flex h-32 overflow-hidden">
                            <div class="w-1/2 p-8 flex items-start">
                                <span class="text-gray-500 font-bold text-lg uppercase tracking-wide">SKOR IDM {{ $tahun_pilih }}</span>
                            </div>
                            <div class="w-1/2 p-8 flex items-end justify-end">
                                <span class="text-gray-700 text-6xl font-bold tracking-tighter">{{ number_format($idm->nilai_idm, 4) }}</span>
                            </div>
                        </div>

                        {{-- Status IDM --}}
                        <div class="bg-white rounded-lg shadow-[0_1px_10px_rgba(0,0,0,0.03)] border border-gray-100 flex h-32 overflow-hidden">
                            <div class="w-1/2 p-8 flex items-start">
                                <span class="text-gray-500 font-bold text-lg uppercase tracking-wide">STATUS IDM {{ $tahun_pilih }}</span>
                            </div>
                            <div class="w-1/2 p-8 flex items-end justify-end">
                                <span class="text-gray-700 text-5xl font-bold uppercase tracking-tighter">{{ $idm->status }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- BARIS 2: 6 KOTAK DETAIL (DI BAWAH / FULL WIDTH) --}}
                {{-- UBAH: div ini sekarang berada di luar div 'flex' di atas --}}
                <div class="grid grid-cols-3 gap-5 mt-10">
                    @php
                    $details = [
                    ['label' => 'Target Status', 'value' => $target_status, 'is_text' => true],
                    ['label' => 'Skor Minimal', 'value' => number_format($min_skor_target, 4), 'is_text' => false],
                    ['label' => 'Penambahan', 'value' => number_format($penambahan, 4), 'is_text' => false],
                    ['label' => 'Skor IKS', 'value' => number_format($idm->skor_iks, 4), 'is_text' => false],
                    ['label' => 'Skor IKE', 'value' => number_format($idm->skor_ike, 4), 'is_text' => false],
                    ['label' => 'Skor IKL', 'value' => number_format($idm->skor_ikl, 4), 'is_text' => false],
                    ];
                    @endphp

                    @foreach($details as $detail)
                    <div class="bg-white rounded-lg shadow-[0_1px_10px_rgba(0,0,0,0.02)] border border-gray-100 flex flex-col justify-between h-32 p-6 overflow-hidden">
                        <div class="flex items-start">
                            <span class="text-gray-500 font-bold text-sm uppercase tracking-wider">{{ $detail['label'] }}</span>
                        </div>
                        <div class="flex items-end justify-end">
                            <span class="text-gray-700 font-bold {{ $detail['is_text'] ? 'text-3xl uppercase' : 'text-4xl' }}">
                                {{ $detail['value'] }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>

                @else
                {{-- Tampilan jika data kosong --}}
                <div class="bg-white p-10 rounded-xl border-2 border-dashed border-gray-200 text-center">
                    <span class="text-gray-400 font-bold text-xl">Data IDM Tahun {{ $tahun_pilih }} Belum Tersedia</span>
                </div>
                @endif
            </div>



            {{-- ========================================== --}}
            {{-- ZONA MOBILE (List Vertikal)                --}}
            {{-- ========================================== --}}

            <div class="block md:hidden w-full">
                @if($idm)

                <div class="flex flex-col gap-3 mt-4 w-full">

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Skor IDM {{ $tahun_pilih }}</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($idm->nilai_idm, 4) }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">STATUS IDM {{ $tahun_pilih }}</span>
                        <span class="text-lg font-extrabold text-black uppercase">{{ $idm->status }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Target Status</span>
                        <span class="text-lg font-extrabold text-black uppercase">{{ $target_status }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Skor Minimal</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($min_skor_target, 4) }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Penambahan</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($penambahan, 4) }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Skor IKS</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($details_iks->sum('nilai_plus'), 4) }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Skor IKE</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($idm->skor_ike, 4) }}</span>
                    </div>

                    <div class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.04)] border border-gray-100 px-5 py-4 flex justify-between items-center">
                        <span class="text-[11px] font-bold text-black tracking-wide">Skor IKL</span>
                        <span class="text-lg font-extrabold text-black">{{ number_format($idm->skor_ikl, 4) }}</span>
                    </div>

                </div>

                @else
                <div class="w-full bg-white p-5 mt-4 rounded-xl border border-gray-100 text-center shadow-sm">
                    <span class="font-bold text-gray-400">Belum Ada Data</span>
                </div>
                @endif
            </div>





        </div>
        {{-- ========================================== --}}
        {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-10">

            <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-8 text-left tracking-tight drop-shadow-sm uppercase">
                Skor IDM Tahun ke Tahun
            </h2>

            {{-- KOTAK PUTIH UTAMA --}}
            <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-10">

                {{-- Pengecekan ketersediaan data IDM --}}
                @if(isset($chart_labels) && count($chart_labels) > 0)
                {{-- Area Canvas --}}
                <div class="relative w-full h-[450px]">
                    <canvas id="idmTrendChartDesktop" data-labels="{{ json_encode($chart_labels) }}" data-scores="{{ json_encode($chart_data) }}"></canvas>
                </div>
                @else
                {{-- Tampilan Placeholder (Empty State) Standar & Minimalis --}}
                <div class="flex flex-col items-center justify-center w-full h-[450px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    {{-- Ikon Grafik Tren --}}
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data IDM Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Riwayat skor Indeks Desa Membangun (IDM) dari tahun ke tahun belum diinput. Grafik akan otomatis muncul setelah data tersedia.
                    </p>
                </div>
                @endif

            </div>

        </div>


        {{-- ========================================== --}}
        {{-- VERSI MOBILE (Muncul di HP)                --}}
        {{-- ========================================== --}}
        <div class="block md:hidden w-full mt-6">

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4">
                <h2 class="text-[#2ac0b4] font-extrabold text-[20px] mb-4 leading-tight tracking-tight uppercase">
                    Skor IDM Tahun ke Tahun
                </h2>

                {{-- Pengecekan ketersediaan data IDM --}}
                @if(isset($chart_labels) && count($chart_labels) > 0)
                <div class="relative w-full h-[300px]">
                    <canvas id="idmTrendChartMobile" data-labels="{{ json_encode($chart_labels) }}" data-scores="{{ json_encode($chart_data) }}"></canvas>
                </div>
                @else
                {{-- Tampilan Placeholder (Empty State) Mobile Standar --}}
                <div class="flex flex-col items-center justify-center w-full h-[300px] bg-gray-50 rounded-lg border-2 border-dashed border-gray-200 p-4">
                    {{-- Ikon Grafik Tren --}}
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Belum Ada Data</p>
                    <p class="text-gray-400 text-xs mt-1 text-center leading-relaxed">
                        Riwayat skor Indeks Desa Membangun (IDM) dari tahun ke tahun belum diinput.
                    </p>
                </div>
                @endif

            </div>

        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const chartIds = ['idmTrendChartDesktop', 'idmTrendChartMobile'];

                chartIds.forEach(id => {
                    const canvas = document.getElementById(id);
                    if (!canvas) return;

                    const ctx = canvas.getContext('2d');
                    const isMobile = id.includes('Mobile');

                    // Mengambil data dari atribut HTML masing-masing canvas
                    const labels = JSON.parse(canvas.getAttribute('data-labels') || '[]');
                    const scores = JSON.parse(canvas.getAttribute('data-scores') || '[]');

                    new Chart(ctx, {
                        type: 'line'
                        , data: {
                            labels: labels
                            , datasets: [{
                                label: 'Skor IDM'
                                , data: scores
                                , borderColor: '#ff8f73', // Warna oranye/coral
                                backgroundColor: '#ffffff'
                                , fill: false
                                , borderWidth: isMobile ? 2 : 3, // Garis sedikit lebih tipis di HP
                                tension: 0, // Garis lurus antar titik
                                pointRadius: isMobile ? 4 : 5
                                , pointBackgroundColor: '#ffffff'
                                , pointBorderColor: '#ff8f73'
                                , pointBorderWidth: 2
                                , pointHoverRadius: isMobile ? 6 : 7
                            }]
                        }
                        , options: {
                            responsive: true
                            , maintainAspectRatio: false
                            , layout: {
                                padding: {
                                    top: 15
                                    , right: 15
                                    , left: isMobile ? 0 : 5
                                    , bottom: 5
                                }
                            }
                            , scales: {
                                y: {
                                    beginAtZero: true
                                    , min: 0
                                    , max: 1, // Mempertahankan skala 0 sampai 1
                                    ticks: {
                                        stepSize: 0.1
                                        , color: '#6b7280'
                                        , font: {
                                            family: "'Poppins', sans-serif"
                                            , size: isMobile ? 9 : 11 // Ukuran font disesuaikan
                                        }
                                    }
                                    , grid: {
                                        color: 'rgba(200, 210, 230, 0.5)'
                                        , borderDash: [5, 5]
                                        , drawBorder: false
                                    }
                                }
                                , x: {
                                    offset: true
                                    , ticks: {
                                        color: '#6b7280'
                                        , font: {
                                            family: "'Poppins', sans-serif"
                                            , size: isMobile ? 9 : 12, // Font dikecilkan di HP agar tahun tidak tabrakan
                                            weight: '500'
                                        }
                                        , padding: 10
                                    }
                                    , grid: {
                                        display: true
                                        , color: 'rgba(200, 210, 230, 0.5)'
                                        , borderDash: [5, 5]
                                        , drawBorder: false
                                    }
                                }
                            }
                            , plugins: {
                                legend: {
                                    display: false
                                },
                                // Mematikan angka yang menempel di garis (karena efek global grafik stunting)
                                datalabels: {
                                    display: false
                                }
                                , tooltip: {
                                    backgroundColor: 'rgba(0, 0, 0, 0.8)'
                                    , padding: isMobile ? 10 : 12
                                    , titleFont: {
                                        family: "'Poppins', sans-serif"
                                        , size: isMobile ? 11 : 12
                                    }
                                    , bodyFont: {
                                        family: "'Poppins', sans-serif"
                                        , size: isMobile ? 12 : 13
                                        , weight: 'bold'
                                    }
                                    , displayColors: false
                                    , callbacks: {
                                        label: function(context) {
                                            return 'Skor IDM: ' + context.parsed.y.toFixed(4); // Hover menampilkan 4 desimal
                                        }
                                    }
                                }
                            }
                        }
                    });
                });
            });

        </script>




        {{-- ========================================== --}}
        {{-- VERSI DESKTOP (Styling Asli Tidak Dirubah) --}}
        {{-- ========================================== --}}
        <div class="hidden lg:block w-full">
            <div class="idm-wrapper" style="margin-top: 50px">
                <div class="table-scroll">
                    <table class="idm-table-final">
                        <thead>
                            <tr>
                                <th rowspan="2" class="col-no">No</th>
                                <th rowspan="2" class="col-indikator">Indikator IDM</th>
                                <th rowspan="2" class="col-skor">Skor</th>
                                <th rowspan="2" class="col-ket">Keterangan</th>
                                <th rowspan="2" class="col-kegiatan">Kegiatan yang dapat dilakukan</th>
                                <th rowspan="2" class="col-nilai">Nilai+</th>
                                <th colspan="6" class="col-pelaksana">Yang dapat melaksanakan kegiatan</th>
                            </tr>
                            <tr>
                                <th class="mini-th">Pusat</th>
                                <th class="mini-th">Provinsi</th>
                                <th class="mini-th">Kab </th>
                                <th class="mini-th">Desa</th>
                                <th class="mini-th">CSR</th>
                                <th class="mini-th">Lainnya</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- 1. IKS --}}
                            @forelse($details_iks as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->indikator }}</td>
                                <td class="text-center">{{ $item->skor }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>{{ $item->kegiatan ?? '-' }}</td>
                                <td class="font-bold">{{ number_format($item->nilai_plus, 4) }}</td>
                                <td>{{ $item->pelaksana_pusat ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_provinsi ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_kabupaten }}</td>
                                <td>{{ $item->pelaksana_desa ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_csr ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_lainnya }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="12" class="text-center text-gray-400">Data IKS Kosong</td>
                            </tr>
                            @endforelse

                            {{-- FOOTER IKS --}}
                            @if($idm)
                            <tr class="bg-blue-50 font-bold text-blue-800">
                                <td colspan="5" class="text-right">IKS {{ $tahun_pilih }}</td>
                                <td>{{ number_format($details_iks->sum('nilai_plus'), 4) }}</td>
                                <td colspan="6"></td>
                            </tr>
                            @endif


                            {{-- 2. IKE --}}
                            @forelse($details_ike as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->indikator }}</td>
                                <td class="text-center">{{ $item->skor }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>{{ $item->kegiatan ?? '-' }}</td>
                                <td class="font-bold">{{ number_format($item->nilai_plus, 4) }}</td>
                                <td>{{ $item->pelaksana_pusat ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_provinsi ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_kabupaten }}</td>
                                <td>{{ $item->pelaksana_desa ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_csr ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_lainnya }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="12" class="text-center text-gray-400">Data IKE Kosong</td>
                            </tr>
                            @endforelse

                            {{-- FOOTER IKE --}}
                            @if($idm)
                            <tr class="bg-green-50 font-bold text-green-800">
                                <td colspan="5" class="text-right">IKE {{ $tahun_pilih }}</td>
                                <td>{{ number_format($idm->skor_ike, 4) }}</td>
                                <td colspan="6"></td>
                            </tr>
                            @endif


                            {{-- 3. IKL --}}
                            @forelse($details_ikl as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->indikator }}</td>
                                <td class="text-center">{{ $item->skor }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>{{ $item->kegiatan ?? '-' }}</td>
                                <td class="font-bold">{{ number_format($item->nilai_plus, 4) }}</td>
                                <td>{{ $item->pelaksana_pusat ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_provinsi ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_kabupaten }}</td>
                                <td>{{ $item->pelaksana_desa ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_csr ? '✓' : '' }}</td>
                                <td>{{ $item->pelaksana_lainnya }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="12" class="text-center text-gray-400">Data IKL Kosong</td>
                            </tr>
                            @endforelse

                            {{-- FOOTER IKL --}}
                            @if($idm)
                            <tr class="bg-yellow-50 font-bold text-yellow-800">
                                <td colspan="5" class="text-right">IKL {{ $tahun_pilih }}</td>
                                <td>{{ number_format($idm->skor_ikl, 4) }}</td>
                                <td colspan="6"></td>
                            </tr>
                            {{-- TOTAL IDM --}}
                            <tr class="bg-gray-200 font-bold">
                                <td colspan="5" class="text-right">IDM {{ $tahun_pilih }}</td>
                                <td>{{ number_format($idm->nilai_idm, 4) }}</td>
                                <td colspan="6"></td>
                            </tr>
                            {{-- STATUS IDM --}}
                            <tr class="bg-gray-200 font-bold">
                                <td colspan="5" class="text-right font-bold">Skor STATUS IDM {{ $tahun_pilih }}</td>
                                <td>{{ ($idm->status) }}</td>
                                <td colspan="6"></td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- ========================================== --}}
        {{-- VERSI MOBILE (Tabel bisa digeser ke kanan) --}}
        {{-- ========================================== --}}
        <div class="block lg:hidden w-full mt-10 ">

            <p class="text-[11px] text-gray-500 mb-2 italic">Geser ke kanan untuk melihat tabel detail ➔</p>

            <div class="w-full overflow-x-auto shadow-sm border border-gray-200 rounded-lg bg-white pb-2">
                {{-- KUNCI MOBILE: Class whitespace-nowrap dan font dikecilkan agar muat di HP --}}
                <table class="idm-table-final whitespace-nowrap text-[11px]" style="min-width: 800px;">
                    <thead>
                        <tr>
                            <th rowspan="2" class="col-no py-2 px-3">No</th>
                            <th rowspan="2" class="col-indikator py-2 px-3">Indikator IDM</th>
                            <th rowspan="2" class="col-skor py-2 px-3">Skor</th>
                            <th rowspan="2" class="col-ket py-2 px-3">Keterangan</th>
                            <th rowspan="2" class="col-kegiatan py-2 px-3">Kegiatan yang dapat dilakukan</th>
                            <th rowspan="2" class="col-nilai py-2 px-3">Nilai+</th>
                            <th colspan="6" class="col-pelaksana py-1 px-2 border-b">Yang dapat melaksanakan kegiatan</th>
                        </tr>
                        <tr>
                            <th class="mini-th py-1 px-2 text-[10px]">Pusat</th>
                            <th class="mini-th py-1 px-2 text-[10px]">Provinsi</th>
                            <th class="mini-th py-1 px-2 text-[10px]">Kab </th>
                            <th class="mini-th py-1 px-2 text-[10px]">Desa</th>
                            <th class="mini-th py-1 px-2 text-[10px]">CSR</th>
                            <th class="mini-th py-1 px-2 text-[10px]">Lainnya</th>
                        </tr>
                    </thead>
                    <tbody>

                        {{-- 1. IKS MOBILE --}}
                        @forelse($details_iks as $item)
                        <tr>
                            <td class="text-center py-2 px-3">{{ $loop->iteration }}</td>
                            <td class="py-2 px-3 whitespace-normal min-w-[200px]">{{ $item->indikator }}</td>
                            <td class="text-center py-2 px-3">{{ $item->skor }}</td>
                            <td class="py-2 px-3 whitespace-normal min-w-[200px]">{{ $item->keterangan }}</td>
                            <td class="py-2 px-3 whitespace-normal min-w-[200px]">{{ $item->kegiatan ?? '-' }}</td>
                            <td class="font-bold py-2 px-3">{{ number_format($item->nilai_plus, 4) }}</td>
                            <td class="text-center">{{ $item->pelaksana_pusat ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_provinsi ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_kabupaten }}</td>
                            <td class="text-center">{{ $item->pelaksana_desa ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_csr ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_lainnya }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center py-3 text-gray-400">Data IKS Kosong</td>
                        </tr>
                        @endforelse

                        @if($idm)
                        <tr class="bg-blue-50 font-bold text-blue-800">
                            <td colspan="5" class="text-right py-2 px-3">IKS {{ $tahun_pilih }}</td>
                            <td class="py-2 px-3">{{ number_format($details_iks->sum('nilai_plus'), 4) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        @endif

                        {{-- 2. IKE MOBILE --}}
                        @forelse($details_ike as $item)
                        <tr>
                            <td class="text-center py-2 px-3">{{ $loop->iteration }}</td>
                            <td class="py-2 px-3 whitespace-normal min-w-[200px]">{{ $item->indikator }}</td>
                            <td class="text-center py-2 px-3">{{ $item->skor }}</td>
                            <td class="py-2 px-3 whitespace-normal min-w-[200px]">{{ $item->keterangan }}</td>
                            <td class="py-2 px-3 whitespace-normal min-w-[200px]">{{ $item->kegiatan ?? '-' }}</td>
                            <td class="font-bold py-2 px-3">{{ number_format($item->nilai_plus, 4) }}</td>
                            <td class="text-center">{{ $item->pelaksana_pusat ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_provinsi ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_kabupaten }}</td>
                            <td class="text-center">{{ $item->pelaksana_desa ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_csr ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_lainnya }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center py-3 text-gray-400">Data IKE Kosong</td>
                        </tr>
                        @endforelse

                        @if($idm)
                        <tr class="bg-green-50 font-bold text-green-800">
                            <td colspan="5" class="text-right py-2 px-3">IKE {{ $tahun_pilih }}</td>
                            <td class="py-2 px-3">{{ number_format($idm->skor_ike, 4) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        @endif

                        {{-- 3. IKL MOBILE --}}
                        @forelse($details_ikl as $item)
                        <tr>
                            <td class="text-center py-2 px-3">{{ $loop->iteration }}</td>
                            <td class="py-2 px-3 whitespace-normal min-w-[200px]">{{ $item->indikator }}</td>
                            <td class="text-center py-2 px-3">{{ $item->skor }}</td>
                            <td class="py-2 px-3 whitespace-normal min-w-[200px]">{{ $item->keterangan }}</td>
                            <td class="py-2 px-3 whitespace-normal min-w-[200px]">{{ $item->kegiatan ?? '-' }}</td>
                            <td class="font-bold py-2 px-3">{{ number_format($item->nilai_plus, 4) }}</td>
                            <td class="text-center">{{ $item->pelaksana_pusat ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_provinsi ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_kabupaten }}</td>
                            <td class="text-center">{{ $item->pelaksana_desa ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_csr ? '✓' : '' }}</td>
                            <td class="text-center">{{ $item->pelaksana_lainnya }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center py-3 text-gray-400">Data IKL Kosong</td>
                        </tr>
                        @endforelse

                        @if($idm)
                        <tr class="bg-yellow-50 font-bold text-yellow-800">
                            <td colspan="5" class="text-right py-2 px-3">IKL {{ $tahun_pilih }}</td>
                            <td class="py-2 px-3">{{ number_format($idm->skor_ikl, 4) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        <tr class="bg-gray-200 font-bold">
                            <td colspan="5" class="text-right py-2 px-3">IDM {{ $tahun_pilih }}</td>
                            <td class="py-2 px-3">{{ number_format($idm->nilai_idm, 4) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        <tr class="bg-gray-200 font-bold">
                            <td colspan="5" class="text-right font-bold py-2 px-3">Skor STATUS IDM {{ $tahun_pilih }}</td>
                            <td class="py-2 px-3">{{ ($idm->status) }}</td>
                            <td colspan="6"></td>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>


    </section>





</x-frontend>
