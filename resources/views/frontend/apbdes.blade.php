<x-frontend>
    @php
    $total_biaya_all = $pembiayaan_penerimaan + $pembiayaan_pengeluaran;
    // Hindari bagi nol
    $total_biaya_all = $total_biaya_all == 0 ? 1 : $total_biaya_all;

    $persen_terima = ($pembiayaan_penerimaan / $total_biaya_all) * 100;
    $persen_keluar = ($pembiayaan_pengeluaran / $total_biaya_all) * 100;
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
        <div class="apbdes-chart-wrapper">
            <h2 class="chart-title-green">Pendapatan dan Belanja Desa dari Tahun ke Tahun</h2>
            <canvas id="apbdesTrendChart"></canvas>
        </div>
        <div class="chart-box-white">
            <h2 class="chart-title-green">Pendapatan Desa {{ $tahun_pilih }}</h2>
            <canvas id="pendapatanCategoryChart"></canvas>
        </div>
        <div class="income-accordion-wrapper">

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion('pad-detail')">
                    <span>Pendapatan Asli Desa</span>
                    <span class="total-val">
                        Rp{{ number_format($total_pad, 2, ',', '.') }}
                        <i class="arrow-icon">^</i>
                    </span>
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
                                <td>{{ $item->kategori }}</td>
                                <td class="text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center text-gray-500">Tidak ada data rincian</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header active" onclick="toggleAccordion('transfer-detail')">
                    <span>Pendapatan Transfer</span>
                    <span class="total-val">
                        Rp{{ number_format($total_transfer, 2, ',', '.') }}
                        <i class="arrow-icon">^</i>
                    </span>
                </button>
                <div id="transfer-detail" class="accordion-content active">
                    <div class="progress-container">
                        <div class="progress-bar-fill" style="width: 100%;">100%</div>
                    </div>

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
                                <td>{{ $item->kategori }}</td>
                                <td class="text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center text-gray-500">Tidak ada data rincian</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion('lain-detail')">
                    <span>Pendapatan Lain-lain</span>
                    <span class="total-val">
                        Rp{{ number_format($total_lain, 2, ',', '.') }}
                        <i class="arrow-icon">^</i>
                    </span>
                </button>
                <div id="lain-detail" class="accordion-content">
                    <table class="detail-table">
                        <tbody>
                            @forelse($lain_items as $item)
                            <tr>
                                <td>{{ $item->kategori }}</td>
                                <td class="text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center text-gray-500">Tidak ada data rincian</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="chart-box-white">
            <h2 class="chart-title-green">Belanja Desa {{ $tahun_pilih }}</h2>
            <canvas id="belanjaCategoryChart"></canvas>
        </div>
        <div class="expense-accordion-wrapper">

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion('pemerintahan-detail')">
                    <span>Penyelenggaraan Pemerintahan Desa</span>
                    <span class="total-val">
                        Rp{{ number_format($total_pemerintahan, 2, ',', '.') }}
                        <i class="arrow-icon">^</i>
                    </span>
                </button>
                <div id="pemerintahan-detail" class="accordion-content">
                    @php $persen = ($total_pemerintahan / $grand_total_belanja) * 100; @endphp
                    <div class="progress-container">
                        <div class="progress-bar-fill" style="width: {{ $persen }}%;">{{ number_format($persen, 2) }}%</div>
                    </div>
                    <table class="detail-table">
                        <tbody>
                            @forelse($belanja_pemerintahan as $item)
                            <tr>
                                <td>{{ $item->kategori }}</td>
                                <td class="text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center text-gray-500">Tidak ada data rincian</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion('pembangunan-detail')">
                    <span>Pelaksanaan Pembangunan Desa</span>
                    <span class="total-val">
                        Rp{{ number_format($total_pembangunan, 2, ',', '.') }}
                        <i class="arrow-icon">^</i>
                    </span>
                </button>
                <div id="pembangunan-detail" class="accordion-content">
                    @php $persen = ($total_pembangunan / $grand_total_belanja) * 100; @endphp
                    <div class="progress-container">
                        <div class="progress-bar-fill" style="width: {{ $persen }}%;">{{ number_format($persen, 2) }}%</div>
                    </div>
                    <table class="detail-table">
                        <tbody>
                            @forelse($belanja_pembangunan as $item)
                            <tr>
                                <td>{{ $item->kategori }}</td>
                                <td class="text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center text-gray-500">Tidak ada data rincian</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion('pembinaan-detail')">
                    <span>Pembinaan Kemasyarakatan Desa</span>
                    <span class="total-val">
                        Rp{{ number_format($total_pembinaan, 2, ',', '.') }}
                        <i class="arrow-icon">^</i>
                    </span>
                </button>
                <div id="pembinaan-detail" class="accordion-content">
                    @php $persen = ($total_pembinaan / $grand_total_belanja) * 100; @endphp
                    <div class="progress-container">
                        <div class="progress-bar-fill" style="width: {{ $persen }}%;">{{ number_format($persen, 2) }}%</div>
                    </div>
                    <table class="detail-table">
                        <tbody>
                            @forelse($belanja_pembinaan as $item)
                            <tr>
                                <td>{{ $item->kategori }}</td>
                                <td class="text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center text-gray-500">Tidak ada data rincian</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion('pemberdayaan-detail')">
                    <span>Pemberdayaan Masyarakat Desa</span>
                    <span class="total-val">
                        Rp{{ number_format($total_pemberdayaan, 2, ',', '.') }}
                        <i class="arrow-icon">^</i>
                    </span>
                </button>
                <div id="pemberdayaan-detail" class="accordion-content">
                    @php $persen = ($total_pemberdayaan / $grand_total_belanja) * 100; @endphp
                    <div class="progress-container">
                        <div class="progress-bar-fill" style="width: {{ $persen }}%;">{{ number_format($persen, 2) }}%</div>
                    </div>
                    <table class="detail-table">
                        <tbody>
                            @forelse($belanja_pemberdayaan as $item)
                            <tr>
                                <td>{{ $item->kategori }}</td>
                                <td class="text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center text-gray-500">Tidak ada data rincian</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header" onclick="toggleAccordion('bencana-detail')">
                    <span>Penanggulangan Bencana, Darurat & Mendesak</span>
                    <span class="total-val">
                        Rp{{ number_format($total_bencana, 2, ',', '.') }}
                        <i class="arrow-icon">^</i>
                    </span>
                </button>
                <div id="bencana-detail" class="accordion-content">
                    @php $persen = ($total_bencana / $grand_total_belanja) * 100; @endphp
                    <div class="progress-container">
                        <div class="progress-bar-fill" style="width: {{ $persen }}%;">{{ number_format($persen, 2) }}%</div>
                    </div>
                    <table class="detail-table">
                        <tbody>
                            @forelse($belanja_bencana as $item)
                            <tr>
                                <td>{{ $item->kategori }}</td>
                                <td class="text-right">Rp{{ number_format($item->anggaran, 2, ',', '.') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center text-gray-500">Tidak ada data rincian</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="white-box-chart">
            <h2 class="chart-title-green">Pembiayaan Desa {{ $tahun_pilih }}</h2>

            <div class="chart-container-finance">
                <canvas id="pembiayaanChart"></canvas>
            </div>
        </div>
        <div class="finance-progress-list">

            <div class="finance-item">
                <div class="finance-header-row">
                    <span class="finance-label">Penerimaan</span>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-fill dark-green" style="width: {{ $persen_terima }}%;">{{ number_format($persen_terima, 2) }}%</div>
                    </div>
                    <span class="finance-value">
                        Rp{{ number_format($pembiayaan_penerimaan, 2, ',', '.') }}
                        <i class="arrow-down">⌄</i>
                    </span>
                </div>
            </div>

            <div class="finance-item">
                <div class="finance-header-row">
                    <span class="finance-label">Pengeluaran</span>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-fill dark-green" style="width: {{ $persen_keluar }}%;">{{ number_format($persen_keluar, 2) }}%</div>
                    </div>
                    <span class="finance-value">
                        Rp{{ number_format($pembiayaan_pengeluaran, 2, ',', '.') }}
                        <i class="arrow-down">⌄</i>
                    </span>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const apbCtx = document.getElementById('apbdesTrendChart').getContext('2d');

            // Terima data dari Controller
            const labels = @json($chart_labels);
            const dataPendapatan = @json($chart_pendapatan);
            const dataBelanja = @json($chart_belanja);

            new Chart(apbCtx, {
                type: 'bar'
                , data: {
                    labels: labels, // Tahun Dinamis (2021, 2022, dst)
                    datasets: [{
                        label: 'Pendapatan'
                        , data: dataPendapatan, // Data Dinamis
                        backgroundColor: '#438e0d', // Hijau Tua
                        borderRadius: 5
                        , barPercentage: 0.8
                        , categoryPercentage: 0.6
                    , }, {
                        label: 'Belanja'
                        , data: dataBelanja, // Data Dinamis
                        backgroundColor: '#98e07a', // Hijau Muda
                        borderRadius: 5
                        , barPercentage: 0.8
                        , categoryPercentage: 0.6
                    , }]
                }
                , options: {
                    responsive: true
                    , maintainAspectRatio: false
                    , scales: {
                        y: {
                            beginAtZero: true,
                            // 'max' saya hapus agar grafik otomatis menyesuaikan jika angka makin besar
                            ticks: {
                                callback: function(value) {
                                    // Format Rupiah Singkat (Juta/Miliar) agar tidak kepanjangan
                                    if (value >= 1000000000) {
                                        return 'Rp' + (value / 1000000000).toFixed(1) + ' M';
                                    } else if (value >= 1000000) {
                                        return 'Rp' + (value / 1000000).toFixed(0) + ' Jt';
                                    }
                                    return value;
                                }
                            }
                        }
                        , x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                    , plugins: {
                        legend: {
                            position: 'bottom'
                        }
                        , tooltip: {
                            callbacks: {
                                label: function(context) {
                                    // Format Rupiah lengkap di Tooltip
                                    let value = context.raw;
                                    return context.dataset.label + ': ' + new Intl.NumberFormat('id-ID', {
                                        style: 'currency'
                                        , currency: 'IDR'
                                    }).format(value);
                                }
                            }
                        }
                    }
                }
            });
        });

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const catCtx = document.getElementById('pendapatanCategoryChart').getContext('2d');

            // Data Dinamis dari Controller
            const valPAD = {
                {
                    $total_pad
                }
            };
            const valTransfer = {
                {
                    $total_transfer
                }
            };
            const valLain = {
                {
                    $total_lain
                }
            };

            new Chart(catCtx, {
                type: 'bar'
                , data: {
                    labels: ['Pendapatan Asli Desa', 'Pendapatan Transfer', 'Pendapatan Lain-lain']
                    , datasets: [{
                        label: 'Anggaran'
                        , data: [valPAD, valTransfer, valLain], // Masukkan variabel di sini
                        backgroundColor: ['#eab308', '#438e0d', '#3b82f6'], // Variasi Warna (Kuning, Hijau, Biru)
                        borderRadius: 5
                        , barThickness: 60
                    }]
                }
                , options: {
                    responsive: true
                    , maintainAspectRatio: false
                    , scales: {
                        y: {
                            beginAtZero: true
                            , ticks: {
                                callback: value => 'Rp' + (value / 1000000).toFixed(0) + ' Jt' // Format sumbu Y ringkas
                            }
                        }
                        , x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                    , plugins: {
                        legend: {
                            display: false
                        }
                        , tooltip: {
                            callbacks: {
                                label: context => 'Rp' + new Intl.NumberFormat('id-ID').format(context.raw)
                            }
                        }
                    }
                }
            });
        });

        function toggleAccordion(id) {
            const content = document.getElementById(id);
            const header = content.previousElementSibling; // Ambil tombol header sebelum content

            content.classList.toggle('active');
            header.classList.toggle('active'); // Agar panah icon bisa diputar lewat CSS
        }

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const belCtx = document.getElementById('belanjaCategoryChart').getContext('2d');

            // Data Dinamis dari Controller
            const dataBelanja = [{
                    {
                        $total_pemerintahan
                    }
                }
                , {
                    {
                        $total_pembangunan
                    }
                }
                , {
                    {
                        $total_pembinaan
                    }
                }
                , {
                    {
                        $total_pemberdayaan
                    }
                }
                , {
                    {
                        $total_bencana
                    }
                }
            ];

            new Chart(belCtx, {
                type: 'bar'
                , data: {
                    labels: [
                        'Pemerintahan Desa'
                        , 'Pembangunan Desa'
                        , 'Pembinaan Kemasyarakatan'
                        , 'Pemberdayaan Masyarakat'
                        , 'Penanggulangan Bencana'
                    ]
                    , datasets: [{
                        label: 'Anggaran'
                        , data: dataBelanja
                        , backgroundColor: '#98e07a', // Hijau muda
                        borderRadius: 5
                        , barThickness: 50
                    }]
                }
                , options: {
                    responsive: true
                    , maintainAspectRatio: false
                    , scales: {
                        y: {
                            beginAtZero: true
                            , ticks: {
                                callback: value => 'Rp' + (value / 1000000).toFixed(0) + ' Jt'
                            }
                        }
                        , x: {
                            grid: {
                                display: false
                            }
                            , ticks: {
                                callback: function(val, index) {
                                    // Potong label jika terlalu panjang
                                    const label = this.getLabelForValue(val);
                                    return label.length > 15 ? label.substr(0, 15) + '...' : label;
                                }
                            }
                        }
                    }
                    , plugins: {
                        legend: {
                            display: false
                        }
                        , tooltip: {
                            callbacks: {
                                label: context => 'Rp' + new Intl.NumberFormat('id-ID').format(context.raw)
                            }
                        }
                    }
                }
            });
        });

    </script>

</x-frontend>
