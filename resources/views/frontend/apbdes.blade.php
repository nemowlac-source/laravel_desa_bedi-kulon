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
        <div class="header-infografis">
            <div class="brand-title">
                <h1>INFOGRAFIS<br>DESA Bedi Kulon</h1>
            </div>

            <div class="nav-menu">
                <a href="{{ route('frontend.infografis') }}" class="nav-item {{ Route::is('frontend.infografis') ? 'active' : '' }}">
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


                <a href="{{ route('frontend.apbdes') }}" class="nav-item {{ Route::is('frontend.apbdes') ? 'active' : '' }}">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-cash" style="overflow: visible;">
                            <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                            <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2"></path>
                        </svg>
                    </div>
                    <span class="nav-text">APBDes</span>
                </a>



                <a href="{{ route('frontend.stunting') }}" class="nav-item {{ Route::is('frontend.stunting') ? 'active' : '' }}">
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


                <a href="{{ route('frontend.bansos') }}" class="nav-item {{ Route::is('frontend.bansos') ? 'active' : '' }}">
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


                <a href="{{ route('frontend.idm') }}" class="nav-item {{ Route::is('frontend.idm') ? 'active' : '' }}">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="tabler-icon tabler-icon-crown">
                            <path d="M12 6l4 6l5 -4l-2 10h-14l-2 -10l5 4z"></path>
                        </svg>
                    </div>
                    <span class="nav-text">IDM</span>
                </a>


                <a href="{{ route('frontend.sdgs') }}" class="nav-item {{ Route::is('frontend.sdgs') ? 'active' : '' }}">
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


        <div class="apbdes-layout">
            <div class="apbdes-info">
                <h2 class="title-green-big">APB Desa Bedi Kulon Tahun {{ $tahun_pilih ?? date('Y') }}</h2>
                <p class="apbdes-location">Desa Bedi Kulon, Kecamatan Marang Kayu, Kabupaten Kutai Kartanegara, Provinsi Kalimantan Timur</p>
            </div>
            <div class="apbdes-stats">
                <div class="year-selector">
                    <form action="{{ url()->current() }}" method="GET" id="formTahunStats">
                        <select class="form-select" name="tahun" onchange="document.getElementById('formTahunStats').submit()">
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

        <style>
            .apbdes-card-keren {
                background: #ffffff;
                border-radius: 12px;
                /* Bayangan tipis agar mirip contoh */
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
                padding: 40px;
                margin: 20px 0;
                border: 1px solid #f0f0f0;
            }

            .apbdes-title-keren {
                font-family: 'Poppins', sans-serif;
                color: #8ade54;
                /* Hijau terang sesuai foto contoh */
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
        <div class="apbdes-card-keren">
            <h2 class="apbdes-title-keren">Pendapatan dan Belanja Desa dari Tahun ke Tahun</h2>
            <div class="chart-container-keren">
                <canvas id="apbdesTrendChart"></canvas>
            </div>
        </div>

        <style>
            .chart-box-white {
                background: #ffffff;
                padding: 20px 30px;
                /* Atas-bawah 20px, Kiri-kanan 30px */
                border-radius: 12px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
                margin-top: 20px;
                border: 1px solid #f0f0f0;
            }

            .chart-title-green {
                font-size: 1.8rem;
                font-weight: 800;
                color: #8ade54;
                margin-bottom: 0px;
                /* HILANGKAN: Agar grafik langsung di bawah judul */
                padding-bottom: 0px;
            }

            .canvas-container-cat {
                position: relative;
                height: 320px;
                /* PENDEK & PADAT: Agar mirip landscape Desa Kersik */
                width: 100%;
            }

        </style>
        <div class="chart-box-white">
            <h2 class="chart-title-green">Pendapatan Desa {{ $tahun_pilih }}</h2>
            <div class="canvas-container-cat">
                <canvas id="pendapatanCategoryChart"></canvas>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const canvasElement = document.getElementById('pendapatanCategoryChart');
                if (!canvasElement) return;

                const catCtx = canvasElement.getContext('2d');

                const valPAD = @json(isset($total_pad) ? $total_pad : 0);
                const valTransfer = @json(isset($total_transfer) ? $total_transfer : 0);
                const valLain = @json(isset($total_lain) ? $total_lain : 0);

                Chart.register(ChartDataLabels);

                new Chart(catCtx, {
                    type: 'bar'
                    , data: {
                        labels: ['Pendapatan Asli Desa', 'Pendapatan Transfer', 'Pendapatan Lain-lain']
                        , datasets: [{
                            data: [valPAD, valTransfer, valLain]
                            , backgroundColor: '#489c19', // Hijau solid Desa Kersik
                            borderRadius: 2
                            , maxBarThickness: 80, // Dikecilkan sedikit agar lebih elegan
                        }]
                    }
                    , options: {
                        responsive: true
                        , maintainAspectRatio: false
                        , layout: {
                            padding: {
                                top: 35, // DIPANGKAS: Dari 60 ke 35 agar grafik langsung naik
                                bottom: 10
                            }
                        }
                        , scales: {

                            y: {
                                min: 0
                                , beginAtZero: true
                                , ticks: {
                                    callback: (v) => new Intl.NumberFormat('en-US').format(v)
                                    , color: '#9ca3af'
                                    , font: {
                                        size: 11
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
                                        size: 13
                                    }
                                }
                                , border: {
                                    display: false
                                }
                            }
                        }
                        , plugins: {
                            // 1. SEMBUNYIKAN LEGEND (Agar tidak ada tulisan "Anggaran" di atas)
                            legend: {
                                display: false
                            },

                            // 2. TOOLTIP PUTIH ELEGAN
                            tooltip: {
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
                                    label: (context) => 'Rp' + new Intl.NumberFormat('id-ID', {
                                        minimumFractionDigits: 2
                                        , maximumFractionDigits: 2
                                    }).format(context.raw)
                                }
                            },

                            // 3. NOMINAL DI ATAS BATANG (Formatting Presisi)
                            datalabels: {
                                anchor: 'end'
                                , align: 'top'
                                , offset: 8, // Jarak dari batang
                                color: '#4b5563'
                                , font: {
                                    size: 11
                                    , weight: '400'
                                }
                                , formatter: (v) => 'Rp' + new Intl.NumberFormat('id-ID', {
                                    minimumFractionDigits: 2
                                    , maximumFractionDigits: 2
                                }).format(v)
                            }
                        }
                    }
                });
            });

        </script>

        <style>
            .income-accordion-wrapper {
                width: 100%;
                margin-top: 20px;
                font-family: 'Inter', sans-serif;
            }

            .accordion-item {
                background: #fff;
                border: 1px solid #eee;
                border-radius: 10px;
                margin-bottom: 15px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
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
            }

            .cat-title {
                flex: 1.2;
                text-align: left;
                font-weight: 600;
                color: #333;
            }

            /* STYLE BAR HIJAU */
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
                background: #489c19;
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

            .total-val-wrapper span {
                font-weight: 700;
                color: #111827;
            }

            /* IKON PANAH */
            .arrow-icon {
                color: #9ca3af;
                transition: transform 0.3s ease;
                font-style: normal;
            }

            .accordion-header.active .arrow-icon {
                transform: rotate(180deg);
            }

            /* ISI TABEL ANTI TERPOTONG */
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
            }

            .detail-table th {
                text-align: left;
                padding: 15px 0;
                border-bottom: 2px solid #111827;
                font-weight: 800;
            }

            .detail-table td {
                padding: 12px 0;
                border-bottom: 1px solid #f9fafb;
                color: #4b5563;
            }

        </style>

        <div class="income-accordion-wrapper">
            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this, 'pad-detail')">
                    <span class="cat-title">Pendapatan Asli Desa</span>
                    <div class="header-progress-container">
                        <div class="header-progress-fill" style="width: {{ $p_pad }}%;">{{ number_format($p_pad, 2) }}%</div>
                    </div>
                    <div class="total-val-wrapper">
                        <span>Rp{{ number_format($total_pad ?? 0, 2, ',', '.') }}</span>
                        <span class="arrow-icon">▼</span>
                    </div>
                </button>
                <div id="pad-detail" class="accordion-content">
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
                                <td colspan="2" class="text-center" style="padding:15px; color:#999">Tidak ada rincian data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this, 'transfer-detail')">
                    <span class="cat-title">Pendapatan Transfer</span>
                    <div class="header-progress-container">
                        <div class="header-progress-fill" style="width: {{ $p_transfer }}%;">{{ number_format($p_transfer, 2) }}%</div>
                    </div>
                    <div class="total-val-wrapper">
                        <span>Rp{{ number_format($total_transfer ?? 0, 2, ',', '.') }}</span>
                        <span class="arrow-icon">▼</span>
                    </div>
                </button>
                <div id="transfer-detail" class="accordion-content">
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
                                <td colspan="2" class="text-center" style="padding:15px; color:#999">Tidak ada rincian data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this, 'lain-detail')">
                    <span class="cat-title">Pendapatan Lain-lain</span>
                    <div class="header-progress-container">
                        <div class="header-progress-fill" style="width: {{ $p_lain }}%;">{{ number_format($p_lain, 2) }}%</div>
                    </div>
                    <div class="total-val-wrapper">
                        <span>Rp{{ number_format($total_lain ?? 0, 2, ',', '.') }}</span>
                        <span class="arrow-icon">▼</span>
                    </div>
                </button>
                <div id="lain-detail" class="accordion-content">
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
                                <td colspan="2" class="text-center" style="padding:15px; color:#999">Tidak ada rincian data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script>
            function toggleAccordion(header, contentId) {
                const content = document.getElementById(contentId);
                if (!content) return;

                // Toggle class active pada tombol (untuk putar panah)
                header.classList.toggle('active');

                // Tampilkan atau sembunyikan konten
                if (content.classList.contains('active')) {
                    content.classList.remove('active');
                    content.style.display = "none";
                } else {
                    content.classList.add('active');
                    content.style.display = "block";
                }
            }

        </script>

        {{-- --}}



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
                background: #98e07a !important;
            }

        </style>

        <div class="chart-box-white">
            <h2 class="chart-title-green">Belanja Desa {{ $tahun_pilih }}</h2>
            <div class="canvas-container-belanja">
                <canvas id="belanjaCategoryChart"></canvas>
            </div>
        </div>
        <div class="expense-accordion-wrapper">
            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this, 'pem-detail')">
                    <span class="cat-title">Bidang Penyelenggaraan Pemerintahan Desa</span>
                    <div class="header-progress-container">
                        <div class="header-progress-fill progress-fill-belanja" style="width: {{ $p_pem }}%;">
                            {{ number_format($p_pem, 2) }}%
                        </div>
                    </div>
                    <div class="total-val-wrapper">
                        <span>Rp{{ number_format($total_pemerintahan ?? 0, 2, ',', '.') }}</span>
                        <span class="arrow-icon"></span>
                    </div>
                </button>
                <div id="pem-detail" class="accordion-content">
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

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this, 'pamb-detail')">
                    <span class="cat-title">Bidang Pelaksanaan Pembangunan Desa</span>
                    <div class="header-progress-container">
                        <div class="header-progress-fill progress-fill-belanja" style="width: {{ $p_pamb }}%;">
                            {{ number_format($p_pamb, 2) }}%
                        </div>
                    </div>
                    <div class="total-val-wrapper">
                        <span>Rp{{ number_format($total_pembangunan ?? 0, 2, ',', '.') }}</span>
                        <span class="arrow-icon"></span>
                    </div>
                </button>
                <div id="pamb-detail" class="accordion-content">
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

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this, 'pemb-detail')">
                    <span class="cat-title">Bidang Pembinaan Kemasyarakatan Desa</span>
                    <div class="header-progress-container">
                        <div class="header-progress-fill progress-fill-belanja" style="width: {{ $p_pemb }}%;">
                            {{ number_format($p_pemb, 2) }}%
                        </div>
                    </div>
                    <div class="total-val-wrapper">
                        <span>Rp{{ number_format($total_pembinaan ?? 0, 2, ',', '.') }}</span>
                        <span class="arrow-icon"></span>
                    </div>
                </button>
                <div id="pemb-detail" class="accordion-content">
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

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this, 'pembd-detail')">
                    <span class="cat-title">Bidang Pemberdayaan Masyarakat Desa</span>
                    <div class="header-progress-container">
                        <div class="header-progress-fill progress-fill-belanja" style="width: {{ $p_pembd }}%;">
                            {{ number_format($p_pembd, 2) }}%
                        </div>
                    </div>
                    <div class="total-val-wrapper">
                        <span>Rp{{ number_format($total_pemberdayaan ?? 0, 2, ',', '.') }}</span>
                        <span class="arrow-icon"></span>
                    </div>
                </button>
                <div id="pembd-detail" class="accordion-content">
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

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this, 'benc-detail')">
                    <span class="cat-title">Bidang Penanggulangan Bencana & Darurat</span>
                    <div class="header-progress-container">
                        <div class="header-progress-fill progress-fill-belanja" style="width: {{ $p_benc }}%;">
                            {{ number_format($p_benc, 2) }}%
                        </div>
                    </div>
                    <div class="total-val-wrapper">
                        <span>Rp{{ number_format($total_bencana ?? 0, 2, ',', '.') }}</span>
                        <span class="arrow-icon"></span>
                    </div>
                </button>
                <div id="benc-detail" class="accordion-content">
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

        {{-- --}}

        <div class="chart-box-white">
            <h2 class="chart-title-green">Pembiayaan Desa {{ $tahun_pilih }}</h2>
            <div style="height: 300px;">
                <canvas id="pembiayaanChart"></canvas>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const finCtx = document.getElementById('pembiayaanChart').getContext('2d');

                new Chart(finCtx, {
                    type: 'bar'
                    , data: {
                        labels: ['Penerimaan', 'Pengeluaran']
                        , datasets: [{
                            data: [
                                @json(isset($pembiayaan_penerimaan) ? $pembiayaan_penerimaan : 0)
                                , @json(isset($pembiayaan_pengeluaran) ? $pembiayaan_pengeluaran : 0)
                            ]
                            , backgroundColor: '#489c19', // Hijau tua identik Pendapatan
                            borderRadius: 5
                            , maxBarThickness: 100
                        }]
                    }
                    , options: {
                        responsive: true
                        , maintainAspectRatio: false
                        , plugins: {
                            legend: {
                                display: false
                            }
                            , datalabels: {
                                anchor: 'end'
                                , align: 'top'
                                , formatter: (v) => 'Rp' + new Intl.NumberFormat('id-ID').format(v)
                            }
                        }
                        , scales: {
                            y: {
                                beginAtZero: true
                                , display: false
                            }
                            , x: {
                                grid: {
                                    display: false
                                }
                            }
                        }
                    }
                });
            });

        </script>
        <div class="expense-accordion-wrapper" style="margin-top: 20px;">
            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this, 'terima-detail')">
                    <span class="cat-title">Penerimaan Pembiayaan</span>
                    <div class="header-progress-container">
                        <div class="header-progress-fill" style="width: {{ $persen_terima }}%; background: #489c19;">
                            {{ number_format($persen_terima, 2) }}%
                        </div>
                    </div>
                    <div class="total-val-wrapper">
                        <span>Rp{{ number_format($pembiayaan_penerimaan ?? 0, 2, ',', '.') }}</span>
                        <span class="arrow-icon">▼</span>
                    </div>
                </button>
                <div id="terima-detail" class="accordion-content">
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

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion(this, 'keluar-detail')">
                    <span class="cat-title">Pengeluaran Pembiayaan</span>
                    <div class="header-progress-container">
                        <div class="header-progress-fill" style="width: {{ $persen_keluar }}%; background: #489c19;">
                            {{ number_format($persen_keluar, 2) }}%
                        </div>
                    </div>
                    <div class="total-val-wrapper">
                        <span>Rp{{ number_format($pembiayaan_pengeluaran ?? 0, 2, ',', '.') }}</span>
                        <span class="arrow-icon">▼</span>
                    </div>
                </button>
                <div id="keluar-detail" class="accordion-content">
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const apbCtx = document.getElementById('apbdesTrendChart').getContext('2d');

            const labels = @json(isset($chart_labels) ? $chart_labels : []);
            const dataPendapatan = @json(isset($chart_pendapatan) ? $chart_pendapatan : []);
            const dataBelanja = @json(isset($chart_belanja) ? $chart_belanja : []);

            Chart.register(ChartDataLabels);

            new Chart(apbCtx, {
                type: 'bar'
                , data: {
                    labels: labels
                    , datasets: [{
                        label: 'Pendapatan'
                        , data: dataPendapatan
                        , backgroundColor: '#489c19', // Hijau Tua
                        maxBarThickness: 45, // Batang tetap langsing meski data sedikit
                        categoryPercentage: 0.6, // Memberi jarak antar tahun
                        barPercentage: 0.9 // Merapatkan batang Pendapatan & Belanja
                    }, {
                        label: 'Belanja'
                        , data: dataBelanja
                        , backgroundColor: '#a3e87d', // Hijau Muda
                        maxBarThickness: 45
                        , categoryPercentage: 0.6
                        , barPercentage: 0.9
                    }]
                }
                , options: {
                    responsive: true
                    , maintainAspectRatio: false,
                    // === RAHASIA INTERAKSI "SATU DIV" ===
                    interaction: {
                        mode: 'index', // Mengunci berdasarkan tahun (indeks)
                        intersect: false // Aktifkan meski kursor hanya di area kolom (tidak harus kena batang)
                    }
                    , layout: {
                        padding: {
                            top: 60
                        } // Ruang ekstra untuk nominal di puncak
                    }
                    , scales: {
                        y: {
                            beginAtZero: true
                            , ticks: {
                                callback: (v) => new Intl.NumberFormat('en-US').format(v)
                                , color: '#9ca3af'
                                , font: {
                                    size: 11
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
                                    size: 14
                                    , weight: '500'
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
                        }, // Tanpa legend di bawah agar bersih

                        // === TOOLTIP PUTIH GAYA DESA KERSIK ===
                        tooltip: {
                            backgroundColor: '#ffffff'
                            , padding: 15
                            , titleColor: '#6b7280', // Warna tahun (abu-abu)
                            titleFont: {
                                size: 14
                                , weight: '400'
                            }
                            , bodyColor: '#374151', // Warna teks utama
                            bodyFont: {
                                size: 14
                                , weight: '700'
                            }
                            , borderColor: '#e5e7eb'
                            , borderWidth: 1
                            , cornerRadius: 6
                            , displayColors: true, // Menampilkan titik warna hijau
                            boxPadding: 8
                            , callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    let value = context.raw || 0;
                                    let format = new Intl.NumberFormat('id-ID', {
                                        minimumFractionDigits: 2
                                        , maximumFractionDigits: 2
                                    }).format(value);
                                    // Layout teks: Label di kiri, Nominal Bold di kanan
                                    return label + ' :   Rp' + format;
                                }
                            }
                        },

                        // === NOMINAL DI ATAS BATANG (FORMAT PRESISI) ===
                        datalabels: {
                            anchor: 'end'
                            , align: 'top'
                            , offset: 8
                            , color: '#4b5563'
                            , font: {
                                size: 10
                                , weight: '400'
                            }
                            , formatter: (v) => 'Rp' + new Intl.NumberFormat('id-ID', {
                                minimumFractionDigits: 2
                                , maximumFractionDigits: 2
                            }).format(v)
                        }
                    }
                }
            });
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const belCtx = document.getElementById('belanjaCategoryChart').getContext('2d');

            // Data menggunakan isset agar aman dari formatter (?? menjadi ? ?)
            const dataBelanja = [
                @json(isset($total_pemerintahan) ? $total_pemerintahan : 0)
                , @json(isset($total_pembangunan) ? $total_pembangunan : 0)
                , @json(isset($total_pembinaan) ? $total_pembinaan : 0)
                , @json(isset($total_pemberdayaan) ? $total_pemberdayaan : 0)
                , @json(isset($total_bencana) ? $total_bencana : 0)
            ];

            new Chart(belCtx, {
                type: 'bar'
                , data: {
                    labels: [
                        ['Penyelenggaraan', 'Pemerintahan Desa']
                        , ['Pelaksanaan', 'Pembangunan Desa']
                        , ['Pembinaan', 'Kemasyarakatan']
                        , ['Pemberdayaan', 'Masyarakat']
                        , ['Penanggulangan', 'Bencana & Darurat']
                    ]
                    , datasets: [{
                        data: dataBelanja
                        , backgroundColor: '#98e07a', // Hijau muda cerah sesuai contoh
                        borderRadius: 4
                        , maxBarThickness: 70
                    }]
                }
                , options: {
                    responsive: true
                    , maintainAspectRatio: false
                    , layout: {
                        padding: {
                            top: 40
                            , bottom: 10
                        }
                    }
                    , scales: {
                        y: {
                            min: 0
                            , beginAtZero: true
                            , ticks: {
                                callback: (v) => new Intl.NumberFormat('en-US').format(v)
                                , color: '#9ca3af'
                                , font: {
                                    size: 10
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
                                    size: 11
                                }
                            }
                        }
                    }
                    , plugins: {
                        legend: {
                            display: false
                        }
                        , datalabels: {
                            anchor: 'end'
                            , align: 'top'
                            , offset: 5
                            , color: '#4b5563'
                            , font: {
                                size: 10
                                , weight: '600'
                            }
                            , formatter: (v) => 'Rp' + new Intl.NumberFormat('id-ID', {
                                minimumFractionDigits: 2
                            }).format(v)
                        }
                    }
                }
            });
        });

    </script>

</x-frontend>
