<x-frontend>
    <style>
        /* Import Font mirip dengan gambar (Poppins/Sans-serif modern) */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap');

        .header-infografis {
            background-color: #f8f9fa;
            /* Background abu-abu sangat muda/putih */
            padding-top: 40px;
            font-family: 'Poppins', sans-serif;
            border-bottom: 1px solid #e0e0e0;
            /* Garis abu-abu tipis di bawah seluruh header */
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            /* Elemen sejajar di garis bawah */
        }

        /* Styling Judul Kiri */
        .brand-title h1 {
            font-size: 2.5rem;
            font-weight: 800;
            /* Extra Bold */
            color: #72c02c;
            /* Warna Hijau Cerah sesuai gambar */
            line-height: 1.1;
            margin: 0;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        /* Styling Menu Kanan */
        .nav-menu {
            display: flex;
            gap: 30px;
            /* Jarak antar menu */
        }

        .nav-item {
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 15px;
            position: relative;
            color: #6c757d;
            /* Warna teks abu-abu tua */
            transition: all 0.3s ease;
        }

        /* Styling Ikon */
        .icon-box img {
            width: 32px;
            height: 32px;
            margin-bottom: 8px;
            /* Filter agar ikon menjadi abu-abu gelap (outline style) */
            filter: grayscale(100%) opacity(0.7);
        }

        /* Styling Teks Menu */
        .nav-text {
            font-size: 0.9rem;
            font-weight: 700;
        }

        /* Efek Hover */
        .nav-item:hover {
            color: #333;
        }

        .nav-item:hover .icon-box img {
            filter: grayscale(100%) opacity(1);
        }

        /* State Active (PENDUDUK) */
        .nav-item.active {
            color: #343a40;
            /* Teks lebih gelap saat aktif */
        }

        .nav-item.active .icon-box img {
            filter: grayscale(100%) opacity(1);
            /* Ikon lebih tegas */
        }

        /* Garis Hijau di Bawah Tab Aktif */
        .nav-item.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            /* Menempel tepat di garis border container */
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #72c02c;
            /* Warna Hijau */
        }

        /* Responsif untuk Mobile */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                align-items: center;
            }

            .brand-title h1 {
                text-align: center;
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .nav-menu {
                width: 100%;
                justify-content: space-between;
                overflow-x: auto;
                /* Scroll samping jika layar kecil */
                padding-bottom: 0;
            }

            .nav-item {
                min-width: 70px;
                /* Lebar minimum agar ikon tidak berdempetan */
            }
        }

    </style>
    <section class="apbdes-section">
        <div class="infografis-container">
            <div class="header-infografis">
                <div class="header-container">
                    <div class="brand-title">
                        <h1>INFOGRAFIS<br>DESA Bedi Kulon</h1>
                    </div>

                    <div class="nav-menu">
                        <a href="{{ route('frontend.infografis') }}" class="nav-item active">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="Penduduk">
                            </div>
                            <span class="nav-text">Penduduk</span>
                        </a>

                        <a href="{{ route('frontend.apbdes') }}" class="nav-item">

                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2382/2382461.png" alt="APBDes">
                            </div>
                            <span class="nav-text">APBDes</span>
                        </a>

                        <a href="{{ route('frontend.stunting') }}" class="nav-item">

                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2560/2560157.png" alt="Stunting">
                            </div>
                            <span class="nav-text">Stunting</span>
                        </a>

                        <a href="{{ route('frontend.bansos') }}" class="nav-item">

                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/679/679720.png" alt="Bansos">
                            </div>
                            <span class="nav-text">Bansos</span>
                        </a>

                        <a href="{{ route('frontend.idm') }}" class="nav-item">

                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2544/2544339.png" alt="IDM">
                            </div>
                            <span class="nav-text">IDM</span>
                        </a>

                        <a href="{{ route('frontend.sdgs') }}" class="nav-item">

                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/5695/5695663.png" alt="SDGs">
                            </div>
                            <span class="nav-text">SDGs</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="apbdes-layout">

                <div class="apbdes-info">
                    <h2 class="title-green-big">APB Desa Bedi Kulon Tahun 2025</h2>
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
        </div>
    </section>
    <section class="apbdes-trend-section">
        <div class="infografis-container">
            <h2 class="chart-title-green">Pendapatan dan Belanja Desa dari Tahun ke Tahun</h2>
            <div class="apbdes-chart-wrapper">
                <canvas id="apbdesTrendChart"></canvas>
            </div>
        </div>
    </section>
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
    <section class="pendapatan-detail-section">
        <div class="infografis-container">
            <h2 class="chart-title-green">Pendapatan Desa {{ $tahun_pilih }}</h2>

            <div class="chart-box-white">
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
        </div>
    </section>
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
    <section class="belanja-detail-section">
        <div class="infografis-container">
            <h2 class="chart-title-green">Belanja Desa {{ $tahun_pilih }}</h2>

            <div class="chart-box-white">
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
        </div>
    </section>
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
    <div class="accordion-item">
        <button class="accordion-header" onclick="toggleAccordion('pembinaan-detail')">
            <span>Pembinaan Kemasyarakatan Desa</span>
            <span class="total-val">
                Rp{{ number_format($total_pembinaan, 2, ',', '.') }}
                <i class="arrow-icon">^</i>
            </span>
        </button>

        <div id="pembinaan-detail" class="accordion-content">
            @php
            $persen = ($grand_total_belanja > 0) ? ($total_pembinaan / $grand_total_belanja) * 100 : 0;
            @endphp
            <div class="progress-container">
                <div class="progress-bar-fill" style="width: {{ $persen }}%;">{{ number_format($persen, 2) }}%</div>
            </div>

            <table class="detail-table">
                <thead>
                    <tr>
                        <th>Uraian</th>
                        <th class="text-right">Anggaran</th>
                    </tr>
                </thead>
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
            @php
            $persen = ($grand_total_belanja > 0) ? ($total_pemberdayaan / $grand_total_belanja) * 100 : 0;
            @endphp
            <div class="progress-container">
                <div class="progress-bar-fill" style="width: {{ $persen }}%;">{{ number_format($persen, 2) }}%</div>
            </div>

            <table class="detail-table">
                <thead>
                    <tr>
                        <th>Uraian</th>
                        <th class="text-right">Anggaran</th>
                    </tr>
                </thead>
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
            @php
            $persen = ($grand_total_belanja > 0) ? ($total_bencana / $grand_total_belanja) * 100 : 0;
            @endphp
            <div class="progress-container">
                <div class="progress-bar-fill" style="width: {{ $persen }}%;">{{ number_format($persen, 2) }}%</div>
            </div>

            <table class="detail-table">
                <thead>
                    <tr>
                        <th>Uraian</th>
                        <th class="text-right">Anggaran</th>
                    </tr>
                </thead>
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
    <section class="pembiayaan-section">
        <div class="infografis-container">
            <div class="white-box-chart">
                <h2 class="chart-title-green">Pembiayaan Desa {{ $tahun_pilih }}</h2>

                <div class="chart-container-finance">
                    <canvas id="pembiayaanChart"></canvas>
                </div>
            </div>

            @php
            $total_biaya_all = $pembiayaan_penerimaan + $pembiayaan_pengeluaran;
            // Hindari bagi nol
            $total_biaya_all = $total_biaya_all == 0 ? 1 : $total_biaya_all;

            $persen_terima = ($pembiayaan_penerimaan / $total_biaya_all) * 100;
            $persen_keluar = ($pembiayaan_pengeluaran / $total_biaya_all) * 100;
            @endphp

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
</x-frontend>
