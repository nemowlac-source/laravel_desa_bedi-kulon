<x-frontend>
    <section class="infografis-page py-6 md:py-10 bg-gray-50/50 min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- HEADER NAVIGASI (Tetap sama, sudah sangat bagus) --}}
            <div class="header-infografis mb-8">
                <div class="hidden md:block brand-title mb-4">
                    <h1 class="text-3xl font-extrabold text-gray-800 tracking-tight">INFOGRAFIS<br>DESA Bedi Kulon</h1>
                </div>

                <div class="nav-menu flex overflow-x-auto flex-nowrap gap-3 pb-2 hide-scroll scroll-smooth">
                    <a href="{{ route('frontend.infografis') }}" class="nav-item flex-none {{ Route::is('frontend.infografis') ? 'active' : '' }}">
                        <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg></div>
                        <span class="nav-text font-semibold text-sm">Penduduk</span>
                    </a>
                    <a href="{{ route('frontend.apbdes') }}" class="nav-item flex-none {{ Route::is('frontend.apbdes') ? 'active' : '' }}">
                        <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                                <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"></path>
                            </svg></div>
                        <span class="nav-text font-semibold text-sm">APBDes</span>
                    </a>
                    <a href="{{ route('frontend.stunting') }}" class="nav-item flex-none {{ Route::is('frontend.stunting') ? 'active' : '' }}">
                        <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M9 8m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M15 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"></path>
                                <path d="M4 20l14 0"></path>
                            </svg></div>
                        <span class="nav-text font-semibold text-sm">Stunting</span>
                    </a>
                    <a href="{{ route('frontend.bansos') }}" class="nav-item flex-none {{ Route::is('frontend.bansos') ? 'active' : '' }}">
                        <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5"></path>
                                <path d="M12 12l8 -4.5"></path>
                                <path d="M12 12v9"></path>
                                <path d="M12 12l-8 -4.5"></path>
                                <path d="M16 5.25l-8 4.5"></path>
                            </svg></div>
                        <span class="nav-text font-semibold text-sm">Bansos</span>
                    </a>
                    <a href="{{ route('frontend.idm') }}" class="nav-item flex-none {{ Route::is('frontend.idm') ? 'active' : '' }}">
                        <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z"></path>
                            </svg></div>
                        <span class="nav-text font-semibold text-sm">IDM</span>
                    </a>
                    <a href="{{ route('frontend.sdgs') }}" class="nav-item flex-none {{ Route::is('frontend.sdgs') ? 'active' : '' }}">
                        <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M8 10v-7l-2 2"></path>
                                <path d="M6 16a2 2 0 1 1 4 0c0 .591 -.601 1.46 -1 2l-3 3h4"></path>
                                <path d="M15 14a2 2 0 1 0 2 -2a2 2 0 1 0 -2 -2"></path>
                                <path d="M6.5 10h3"></path>
                            </svg></div>
                        <span class="nav-text font-semibold text-sm">SDGs</span>
                    </a>
                </div>
            </div>


            {{-- VERSI DESKTOP (Muncul di PC) --}}
            <div class="hidden md:block w-full max-w-5xl mx-auto bg-white rounded-xl shadow-sm p-8 mt-8">
                <h2 class="text-[#8cdb6e] font-black text-2xl mb-6 uppercase tracking-wide">Grafik Stunting Desktop</h2>
                <div class="relative w-full h-[500px]">
                    <canvas id="stuntingChartDesktop" data-sasaran="{{ $stunting->keluarga_sasaran ?? 0 }}" data-berisiko="{{ $stunting->berisiko ?? 0 }}" data-baduta="{{ $stunting->baduta ?? 0 }}" data-balita="{{ $stunting->balita ?? 0 }}" data-pus="{{ $stunting->pus ?? 0 }}" data-pushamil="{{ $stunting->pus_hamil ?? 0 }}" data-tahun="{{ $tahun_pilih }}">
                    </canvas>
                </div>
            </div>

            {{-- VERSI MOBILE (Muncul di HP) --}}
            <div class="block md:hidden w-full p-4 mt-6">
                <h2 class="text-[#8cdb6e] font-black text-2xl mb-6 uppercase tracking-wide">Grafik Stunting Desktop</h2>
                <div class="relative w-full h-[500px]">

                    <div class="relative w-full h-[350px]">
                        <canvas id="stuntingChartMobile" data-sasaran="{{ $stunting->keluarga_sasaran ?? 0 }}" data-berisiko="{{ $stunting->berisiko ?? 0 }}" data-baduta="{{ $stunting->baduta ?? 0 }}" data-balita="{{ $stunting->balita ?? 0 }}" data-pus="{{ $stunting->pus ?? 0 }}" data-pushamil="{{ $stunting->pus_hamil ?? 0 }}" data-tahun="{{ $tahun_pilih }}">
                        </canvas>
                    </div>
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
                        labels: [
                            'Keluarga Sasaran'
                            , 'Berisiko'
                            , 'Baduta'
                            , 'Balita'
                            , ['Pasangan Usia', 'Subur (PUS)']
                            , 'PUS Hamil'
                        ]
                        , datasets: [{
                                label: 'Data Tahun ' + (tahun - 1)
                                , data: chartDataSebelumnya
                                , backgroundColor: '#aedf7c'
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
                                top: 35
                                , bottom: 10
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
                                    maxRotation: 0
                                    , minRotation: 0
                                    , font: {
                                        family: "'Poppins', sans-serif"
                                        , size: isMobile ? 9 : 12
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
