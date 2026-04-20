<x-frontend>
    <section class="infografis-page py-6 md:py-10 bg-gray-50/50 min-h-screen">
        {{-- ========================================== --}}
        {{-- 1. VERSI MOBILE & DESKTOP (Header)         --}}
        {{-- ========================================== --}}
        <div class="w-full max-w-7xl mx-auto mt-12 mb-8">

            {{-- KODE ASLI KAMU DIMULAI DARI SINI (Tidak ada yang diubah) --}}
            <div class="header-infografis">

                <div class="hidden md:block brand-title">
                    <h1>INFOGRAFIS<br>DESA Bedi Kulon</h1>
                </div>

                <div class="nav-menu flex w-full justify-end overflow-x-auto flex-nowrap gap-8 pb-2 hide-scroll">

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






                </div>


            </div>
            {{-- KODE ASLI KAMU BERAKHIR DI SINI --}}

        </div>

        {{-- Catatan: Saya menghapus pembungkus luar <div class="max-w-6xl..."> agar tidak menabrak class max-w-7xl di dalamnya --}}

        {{-- ========================================== --}}
        {{-- VERSI DESKTOP (Muncul di PC)               --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-10">

            {{-- Styling judul disamakan persis: text-[40px], font-extrabold, drop-shadow-sm --}}
            <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-8 text-left tracking-tight drop-shadow-sm uppercase">
                Grafik Stunting Desktop
            </h2>

            {{-- KOTAK PUTIH UTAMA (Pengecekan dilakukan di dalam kotak ini) --}}
            <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-10">

                @if(isset($hasStuntingData) && $hasStuntingData)
                {{-- Area Canvas Grafik (Hanya tampil jika ada data) --}}
                <div class="relative w-full h-[500px]">
                    <canvas id="stuntingChartDesktop" data-sasaran="{{ $stunting->keluarga_sasaran ?? 0 }}" data-berisiko="{{ $stunting->berisiko ?? 0 }}" data-baduta="{{ $stunting->baduta ?? 0 }}" data-balita="{{ $stunting->balita ?? 0 }}" data-pus="{{ $stunting->pus ?? 0 }}" data-pushamil="{{ $stunting->pus_hamil ?? 0 }}" data-tahun="{{ $tahun_pilih }}">
                    </canvas>
                </div>
                @else
                {{-- Tampilan Placeholder (Empty State) Standar & Minimalis --}}
                <div class="flex flex-col items-center justify-center w-full h-[500px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                    {{-- Ikon Keluarga/Masyarakat --}}
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Data Stunting Belum Tersedia</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Statistik sasaran pencegahan dan penanganan stunting untuk tahun <strong>{{ $tahun_pilih }}</strong> belum diinput ke dalam sistem.
                    </p>
                </div>
                @endif

            </div>

        </div>


        {{-- ========================================== --}}
        {{-- VERSI MOBILE (Muncul di HP)                --}}
        {{-- ========================================== --}}
        <div class="block md:hidden w-full max-w-sm mx-auto px-4 mt-8 mb-10">

            {{-- Styling judul Mobile --}}
            <h2 class="text-[#2ac0b4] font-black text-[22px] mb-4 tracking-wide text-left uppercase">
                Grafik Stunting
            </h2>

            {{-- Styling kotak Mobile --}}
            <div class="relative w-full h-[350px] bg-white rounded-xl shadow-[0_4px_15px_rgba(0,0,0,0.05)] border border-gray-100 p-4">

                @if(isset($hasStuntingData) && $hasStuntingData)
                {{-- Konten Canvas TIDAK DIRUBAH --}}
                <canvas id="stuntingChartMobile" data-sasaran="{{ $stunting->keluarga_sasaran ?? 0 }}" data-berisiko="{{ $stunting->berisiko ?? 0 }}" data-baduta="{{ $stunting->baduta ?? 0 }}" data-balita="{{ $stunting->balita ?? 0 }}" data-pus="{{ $stunting->pus ?? 0 }}" data-pushamil="{{ $stunting->pus_hamil ?? 0 }}" data-tahun="{{ $tahun_pilih }}">
                </canvas>
                @else
                {{-- Tampilan Placeholder (Empty State) Mobile Standar --}}
                <div class="flex flex-col items-center justify-center w-full h-full bg-gray-50 rounded-lg border-2 border-dashed border-gray-200 p-4">
                    {{-- Ikon Keluarga/Masyarakat --}}
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Belum Ada Data</p>
                    <p class="text-gray-400 text-xs mt-1 text-center leading-relaxed">
                        Statistik sasaran penanganan stunting tahun <strong>{{ $tahun_pilih }}</strong> belum diinput.
                    </p>
                </div>
                @endif

            </div>

        </div>

    </section>

    <script>
        // Objek untuk menyimpan instance chart agar bisa di-reset jika perlu
        const stuntingChartInstances = {};

        document.addEventListener('DOMContentLoaded', function() {
            // Pastikan library sudah terload dari app.js
            if (typeof window.Chart === 'undefined') {
                console.error("❌ Chart.js tidak ditemukan! Pastikan 'window.Chart = Chart' ada di app.js");
                return;
            }

            const chartIds = ['stuntingChartDesktop', 'stuntingChartMobile'];

            chartIds.forEach(id => {
                const chartCanvas = document.getElementById(id);
                if (!chartCanvas) return;

                // 1. Hancurkan chart lama jika ID yang sama sudah pernah digambar
                if (stuntingChartInstances[id]) {
                    stuntingChartInstances[id].destroy();
                }

                const isMobile = id.includes('Mobile');

                // 2. Ambil data dari atribut data- canvas
                const chartDataAktual = [
                    chartCanvas.getAttribute('data-sasaran')
                    , chartCanvas.getAttribute('data-berisiko')
                    , chartCanvas.getAttribute('data-baduta')
                    , chartCanvas.getAttribute('data-balita')
                    , chartCanvas.getAttribute('data-pus')
                    , chartCanvas.getAttribute('data-pushamil')
                ];

                const chartDataSebelumnya = [16, 13, 1, 1, 0, 0];
                const tahun = parseInt(chartCanvas.getAttribute('data-tahun')) || 2026;

                // 3. Gambar grafik menggunakan window.Chart
                stuntingChartInstances[id] = new window.Chart(chartCanvas, {
                    type: 'bar'
                    , data: {
                        // PERBAIKAN: Memecah string menjadi Array agar menjadi 2 baris (Multi-line)
                        labels: [
                            ['Keluarga', 'Sasaran']
                            , 'Berisiko'
                            , 'Baduta'
                            , 'Balita'
                            , ['Pasangan Usia', 'Subur (PUS)']
                            , ['PUS', 'Hamil']
                        ]
                        , datasets: [{
                                label: 'Data Tahun ' + (tahun - 1)
                                , data: chartDataSebelumnya
                                , backgroundColor: '#2ac0b4'
                                , borderRadius: 6
                                , barPercentage: 0.8
                                , categoryPercentage: 0.7
                            }
                            , {
                                label: 'Data Tahun ' + tahun
                                , data: chartDataAktual
                                , backgroundColor: '#6baf92'
                                , borderRadius: 6
                                , barPercentage: 0.8
                                , categoryPercentage: 0.7
                            }
                        ]
                    }
                    , options: {
                        responsive: true
                        , maintainAspectRatio: false
                        , layout: {
                            padding: {
                                top: 35,
                                // Di mobile, padding bawah ditambah karena sekarang banyak label 2 baris
                                bottom: isMobile ? 25 : 10
                            }
                        }
                        , plugins: {
                            legend: {
                                position: 'bottom'
                                , labels: {
                                    padding: 25
                                    , boxWidth: 30
                                    , boxHeight: 12
                                    , font: {
                                        family: "'Poppins', sans-serif"
                                        , size: isMobile ? 11 : 14
                                        , weight: '600'
                                    }
                                }
                            }
                            , datalabels: {
                                anchor: 'end'
                                , align: 'top'
                                , color: '#333'
                                , offset: 2
                                , font: {
                                    family: "'Poppins', sans-serif"
                                    , weight: 'bold'
                                    , size: isMobile ? 10 : 13
                                }
                                , formatter: (value) => value > 0 ? value : ''
                            }
                        }
                        , scales: {
                            x: {
                                grid: {
                                    display: false
                                }
                                , ticks: {
                                    // KEMBALI DILURUSKAN: 0 derajat baik di mobile maupun desktop
                                    maxRotation: 0
                                    , minRotation: 0,

                                    autoSkip: false,

                                    font: {
                                        family: "'Poppins', sans-serif",
                                        // Sedikit diperkecil di mobile agar aman tidak tabrakan
                                        size: isMobile ? 9 : 12,
                                        // line-height dikecilkan sedikit agar baris pertama dan kedua tidak terlalu berjarak
                                        lineHeight: 1.2
                                    }
                                }
                            }
                            , y: {
                                beginAtZero: true
                                , suggestedMax: 20
                                , grid: {
                                    color: '#f0f0f0'
                                    , drawBorder: false
                                }
                                , ticks: {
                                    stepSize: 5
                                    , font: {
                                        family: "'Poppins', sans-serif"
                                    }
                                }
                            }
                        }
                    }
                });
            });
        });

    </script>





</x-frontend>
