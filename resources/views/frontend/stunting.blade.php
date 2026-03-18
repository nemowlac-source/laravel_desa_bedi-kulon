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

            {{-- KARTU GRAFIK RESPONSIVE --}}


            {{-- Judul Khusus Mobile (Muncul hanya di HP) --}}
            <div class="md:hidden text-center mb-6">
                <h2 class="text-xl font-extrabold text-[#5ea48a]">Data Stunting</h2>
            </div>

            {{-- Judul Khusus Desktop (Muncul hanya di Laptop) --}}
            <div class="hidden md:block text-center mb-8">
                <h2 class="text-3xl font-extrabold text-[#5ea48a]">Data Stunting Desa Bedikulon</h2>
            </div>

            {{-- Wrapper Canvas (Tinggi otomatis menyesuaikan layar) --}}
            <div class="relative w-full h-[350px] md:h-[450px]">
                {{-- Saya menambahkan data dummy tahun sebelumnya agar bisa memunculkan 2 batang grafik seperti digambar --}}
                <canvas id="stuntingChart" data-sasaran="{{ $stunting->keluarga_sasaran ?? 0 }}" data-berisiko="{{ $stunting->berisiko ?? 0 }}" data-baduta="{{ $stunting->baduta ?? 0 }}" data-balita="{{ $stunting->balita ?? 0 }}" data-pus="{{ $stunting->pus ?? 0 }}" data-pushamil="{{ $stunting->pus_hamil ?? 0 }}" data-tahun="{{ $tahun_pilih }}">
                </canvas>
            </div>


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <script>
        // Registrasi plugin datalabels untuk memunculkan angka di atas bar
        Chart.register(ChartDataLabels);

        document.addEventListener('DOMContentLoaded', function() {
            const chartCanvas = document.getElementById('stuntingChart');

            // Mengambil Data Asli dari Database (Tahun yang dipilih)
            const chartDataAktual = [
                chartCanvas.getAttribute('data-sasaran')
                , chartCanvas.getAttribute('data-berisiko')
                , chartCanvas.getAttribute('data-baduta')
                , chartCanvas.getAttribute('data-balita')
                , chartCanvas.getAttribute('data-pus')
                , chartCanvas.getAttribute('data-pushamil')
            ];

            // Data Dummy/Simulasi untuk tahun sebelumnya (Agar tampilan 100% mirip gambar)
            // Jika kamu punya data asli tahun sebelumnya, kamu bisa lempar dari controller juga!
            const chartDataSebelumnya = [16, 13, 1, 1, 0, 0];

            const tahun = parseInt(chartCanvas.getAttribute('data-tahun'));

            new Chart(chartCanvas, {
                type: 'bar'
                , data: {
                    labels: [
                        'Keluarga Sasaran'
                        , 'Berisiko'
                        , 'Baduta'
                        , 'Balita'
                        , ['Pasangan Usia', 'Subur (PUS)'], // Teks dipecah jadi 2 baris
                        'PUS Hamil'
                    ]
                    , datasets: [{

                            // BATANG 1 (Hijau Muda)
                            label: 'Data Tahun ' + (tahun - 1)
                            , data: chartDataSebelumnya
                            , backgroundColor: '#aedf7c'
                            , borderRadius: 6, // Ujung tumpul
                            borderSkipped: false
                            , barPercentage: 0.8
                            , categoryPercentage: 0.7
                        }
                        , {
                            // BATANG 2 (Hijau Tua/Teal)
                            label: 'Data Tahun ' + tahun
                            , data: chartDataAktual
                            , backgroundColor: '#6baf92'
                            , borderRadius: 6, // Ujung tumpul
                            borderSkipped: false
                            , barPercentage: 0.8
                            , categoryPercentage: 0.7
                        }
                    ]
                }
                , options: {
                    responsive: true
                    , maintainAspectRatio: false, // Penting agar tinggi bisa diatur lewat CSS Tailwind
                    layout: {
                        padding: {
                            top: 20 // Memberi ruang agar angka tidak terpotong di atas
                        }
                    }
                    , plugins: {
                        legend: {
                            position: 'bottom'
                            , labels: {
                                padding: 20
                                , usePointStyle: false
                                , boxWidth: 30, // Mengubah ikon legenda menjadi kotak persegi
                                boxHeight: 12
                                , font: {
                                    family: "'Poppins', sans-serif"
                                    , size: 13
                                    , weight: '600'
                                }
                                , color: '#555'
                            }
                        }
                        , datalabels: {
                            anchor: 'end'
                            , align: 'top'
                            , color: '#333'
                            , font: {
                                family: "'Poppins', sans-serif"
                                , weight: 'bold'
                                , size: 12
                            }
                            , formatter: function(value) {
                                return value > 0 ? value : ''; // Sembunyikan angka 0 agar lebih bersih
                            }
                        }
                    }
                    , scales: {
                        x: {
                            grid: {
                                display: false // Menghilangkan garis vertikal (mirip di gambar)
                            }
                            , ticks: {
                                // Tambahkan dua baris ini untuk memaksa teks selalu lurus:
                                maxRotation: 0
                                , minRotation: 0,
                                // --------------------------------------------------------
                                font: {
                                    family: "'Poppins', sans-serif"
                                    , size: window.innerWidth < 768 ? 10 : 12
                                }
                            }

                        }
                        , y: {
                            beginAtZero: true
                            , suggestedMax: 18
                            , grid: {
                                color: '#f0f0f0', // Garis horizontal tipis
                                drawBorder: false
                            }
                            , ticks: {
                                stepSize: 3, // Skala loncat kelipatan 3 (0, 3, 6, 9, 12, 15, 18)
                                font: {
                                    family: "'Poppins', sans-serif"
                                }
                            }
                        }
                    }
                }
            });
        });

    </script>
</x-frontend>
