<x-frontend>
    <style>
        /* Styling APBDes */
        .apbdes-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .apbdes-layout {
            display: flex;
            justify-content: space-between;
            gap: 50px;
            align-items: flex-start;
        }

        .apbdes-info {
            flex: 1;
        }

        .apbdes-stats {
            flex: 1.5;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Judul Kiri */
        .title-green-big {
            color: #72c02c;
            font-size: 2.2rem;
            font-weight: 800;
            line-height: 1.2;
        }

        .apbdes-location {
            color: #444;
            font-size: 1.1rem;
            margin-top: 15px;
            line-height: 1.5;
        }

        /* Year Selector */
        .year-selector {
            align-self: flex-end;
            width: 100%;
        }

        .form-select {
            width: 100%;
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid #ced4da;
            color: #333;
            font-weight: 600;
        }

        /* Card Styles */
        .stats-row-top,
        .stats-row-inner {
            display: flex;
            gap: 15px;
        }

        .stat-card,
        .pembiayaan-wrapper,
        .stat-card-total {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border: 1px solid #eef0f2;
        }

        .stat-card {
            flex: 1;
            padding: 20px;
        }

        /* Pembiayaan Section */
        .pembiayaan-wrapper {
            display: flex;
            flex-direction: column;
        }

        .pembiayaan-header {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            font-weight: 700;
            color: #666;
        }

        .stat-card-inner {
            flex: 1;
            padding: 20px;
        }

        .stat-card-inner:first-child {
            border-right: 1px solid #eee;
        }

        /* Total Section */
        .stat-card-total {
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        /* Typography & Colors */
        .stat-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 700;
            color: #555;
            margin-bottom: 8px;
        }

        .stat-value {
            display: block;
            font-size: 1.5rem;
            font-weight: 800;
        }

        .stat-label-total {
            font-size: 1.1rem;
            font-weight: 700;
            color: #555;
        }

        .stat-value-total {
            font-size: 1.6rem;
            font-weight: 800;
            color: #555;
        }

        .color-green-money {
            color: #2d7d46;
        }

        /* Hijau uang */
        .color-red-money {
            color: #c0392b;
        }

        /* Merah belanja */

        .arrow-up {
            color: #27ae60;
            font-style: normal;
            margin-right: 5px;
        }

        .heart-icon {
            color: #e74c3c;
            font-style: normal;
            margin-right: 5px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .apbdes-layout {
                flex-direction: column;
            }

            .stats-row-top,
            .stats-row-inner {
                flex-direction: column;
            }
        }

        /* Styling Grafik Tren APBDes */
        .apbdes-trend-section {
            padding: 20px 0 60px;
            background-color: #f8f9fa;
        }

        .chart-title-green {
            color: #72c02c;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .apbdes-chart-wrapper {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            height: 500px;
            /* Tinggi grafik disesuaikan agar label angka terbaca */
            width: 100%;
            border: 1px solid #f0f0f0;
        }

        /* Penyesuaian Responsif */
        @media (max-width: 768px) {
            .apbdes-chart-wrapper {
                height: 350px;
                padding: 20px;
            }
        }

        /* Styling Detail Pendapatan */
        .pendapatan-detail-section {
            padding: 20px 0 60px;
        }

        .chart-box-white {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            height: 400px;
            margin-bottom: 30px;
            border: 1px solid #f0f0f0;
        }

        /* Accordion Styles */
        .income-accordion-wrapper {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #f0f0f0;
        }

        .accordion-header {
            width: 100%;
            padding: 20px 25px;
            background: #fff;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: #333;
            cursor: pointer;
            transition: background 0.3s;
        }

        .accordion-header:hover {
            background: #f9f9f9;
        }

        .total-val {
            color: #333;
            font-weight: 800;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .accordion-content.active {
            max-height: 500px;
            border-top: 1px solid #eee;
        }

        /* Detail Table inside Accordion */
        .detail-table {
            width: 100%;
            border-collapse: collapse;
        }

        .detail-table th {
            text-align: left;
            padding: 15px 25px;
            background: #fafafa;
            font-size: 0.9rem;
            color: #000;
            border-bottom: 2px solid #eee;
        }

        .detail-table td {
            padding: 15px 25px;
            font-size: 0.9rem;
        }

        .text-center {
            text-align: center;
        }

        /* Container untuk Progress Bar di dalam Akordion */
        .progress-container {
            padding: 15px 25px;
            background-color: #fcfcfc;
        }

        .progress-bar-fill {
            background-color: #438e0d;
            /* Hijau sesuai gambar */
            height: 12px;
            border-radius: 20px;
            color: white;
            font-size: 10px;
            font-weight: 800;
            text-align: center;
            line-height: 12px;
        }

        .progress-container.empty .progress-bar-fill {
            background-color: #e5e7eb;
        }

        /* Perataan teks untuk kolom Anggaran */
        .text-right {
            text-align: right;
            padding-right: 25px !important;
        }

        .text-center {
            text-align: center;
        }

        /* Styling Baris Tabel */
        .detail-table tbody tr {
            border-bottom: 1px solid #f0f0f0;
        }

        .detail-table tbody tr td {
            font-weight: 600;
            color: #1f2937;
            text-transform: uppercase;
            /* Mengikuti style gambar yang huruf kapital */
            font-size: 0.85rem;
        }

        /* Warna khusus untuk baris progress belanja */
        .belanja-detail-section .progress-bar-fill {
            background-color: #98e07a;
            /* Warna hijau muda belanja sesuai gambar */
            color: #333;
            /* Teks persentase lebih gelap agar terbaca di warna muda */
        }

        /* Memastikan teks tabel belanja rapi */
        .expense-accordion-wrapper .detail-table td {
            text-transform: capitalize;
            /* Belanja biasanya lebih baik tidak kapital semua */
            font-size: 0.8rem;
            padding: 12px 25px;
        }

        /* Penyesuaian khusus label grafik belanja yang panjang */
        @media (max-width: 768px) {
            .chart-box-white {
                height: 500px;
                /* Lebih tinggi di mobile agar label miring terbaca */
            }
        }

        /* Styling List Anggaran Belanja */
        .accordion-item {
            background: #fff;
            margin-bottom: 5px;
            border-radius: 4px;
        }

        .accordion-header-static {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            gap: 20px;
            border-bottom: 1px solid #f0f0f0;
        }

        .label-text {
            flex: 1;
            font-size: 0.85rem;
            font-weight: 600;
            color: #333;
        }

        .progress-wrapper {
            flex: 1.5;
            /* Memberikan ruang lebih untuk bar di tengah */
        }

        .progress-bar-bg {
            background-color: #f0f0f0;
            height: 14px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .progress-bar-fill.light-green {
            background-color: #98e07a;
            /* Warna hijau muda belanja sesuai gambar */
            height: 100%;
            text-align: center;
            line-height: 14px;
            font-size: 9px;
            font-weight: 800;
            color: #fff;
            text-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
        }

        .value-text {
            flex: 0.8;
            text-align: right;
            font-size: 0.9rem;
            font-weight: 700;
            color: #333;
        }

        .arrow-down {
            font-style: normal;
            font-size: 12px;
            margin-left: 5px;
            color: #888;
        }

        /* Responsif Mobile */
        @media (max-width: 768px) {
            .accordion-header-static {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .progress-wrapper,
            .value-text {
                width: 100%;
                text-align: left;
            }

            .value-text {
                text-align: right;
            }
        }

        /* Styling Section Pembiayaan */
        .pembiayaan-section {
            padding: 20px 0 60px;
            background-color: #f8f9fa;
        }

        .white-box-chart {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }

        .chart-title-green {
            color: #72c02c;
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .chart-container-finance {
            height: 400px;
            position: relative;
        }

        /* Styling Bar Progres Pembiayaan */
        .finance-progress-list {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .finance-item {
            border-bottom: 1px solid #f0f0f0;
        }

        .finance-item:last-child {
            border-bottom: none;
        }

        .finance-header-row {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            gap: 30px;
        }

        .finance-label {
            flex: 1;
            font-size: 0.9rem;
            font-weight: 700;
            color: #333;
        }

        .progress-bar-bg {
            flex: 2;
            background-color: #f0f0f0;
            height: 16px;
            border-radius: 20px;
            overflow: hidden;
        }

        .progress-bar-fill.dark-green {
            background-color: #438e0d;
            /* Hijau Tua */
            height: 100%;
            text-align: center;
            color: #fff;
            font-size: 10px;
            font-weight: 800;
            line-height: 16px;
        }

        .finance-value {
            flex: 1;
            text-align: right;
            font-size: 1rem;
            font-weight: 800;
            color: #333;
        }

        .arrow-down {
            font-style: normal;
            font-size: 12px;
            color: #999;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .finance-header-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .progress-bar-bg,
            .finance-value {
                width: 100%;
            }
        }
    </style>
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
                        <a href="#" class="nav-item active">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="Penduduk">
                            </div>
                            <span class="nav-text">Penduduk</span>
                        </a>

                        <a href="#" class="nav-item">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2382/2382461.png" alt="APBDes">
                            </div>
                            <span class="nav-text">APBDes</span>
                        </a>

                        <a href="#" class="nav-item">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2560/2560157.png" alt="Stunting">
                            </div>
                            <span class="nav-text">Stunting</span>
                        </a>

                        <a href="#" class="nav-item">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/679/679720.png" alt="Bansos">
                            </div>
                            <span class="nav-text">Bansos</span>
                        </a>

                        <a href="#" class="nav-item">
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/512/2544/2544339.png" alt="IDM">
                            </div>
                            <span class="nav-text">IDM</span>
                        </a>

                        <a href="#" class="nav-item">
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
                        <select class="form-select">
                            <option selected>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                        </select>
                    </div>

                    <div class="stats-row-top">
                        <div class="stat-card">
                            <span class="stat-label"><i class="arrow-up">▲</i> Pendapatan</span>
                            <span class="stat-value color-green-money">Rp4.254.715.300,00</span>
                        </div>
                        <div class="stat-card">
                            <span class="stat-label"><i class="heart-icon">♥</i> Belanja</span>
                            <span class="stat-value color-red-money">Rp4.235.654.388,75</span>
                        </div>
                    </div>

                    <div class="pembiayaan-wrapper">
                        <div class="pembiayaan-header">Pembiayaan</div>
                        <div class="stats-row-inner">
                            <div class="stat-card-inner">
                                <span class="stat-label"><i class="arrow-up">▲</i> Penerimaan</span>
                                <span class="stat-value color-green-money">Rp125.939.088,75</span>
                            </div>
                            <div class="stat-card-inner">
                                <span class="stat-label"><i class="heart-icon">♥</i> Pengeluaran</span>
                                <span class="stat-value color-red-money">Rp145.000.000,00</span>
                            </div>
                        </div>
                    </div>

                    <div class="stat-card-total">
                        <span class="stat-label-total">Surplus/Defisit</span>
                        <span class="stat-value-total">Rp0,00</span>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const apbCtx = document.getElementById('apbdesTrendChart').getContext('2d');

            new Chart(apbCtx, {
                type: 'bar',
                data: {
                    labels: ['2021', '2022', '2023', '2024', '2025'],
                    datasets: [{
                            label: 'Pendapatan',
                            data: [1164117188.75, 1336738788.75, 4613002200.00, 4802205805.00, 4254715300.00],
                            backgroundColor: '#438e0d', // Hijau Tua
                            borderRadius: 5,
                            barPercentage: 0.8,
                            categoryPercentage: 0.6
                        },
                        {
                            label: 'Belanja',
                            data: [0, 0, 4796206868.75, 4888222678.75, 4235654388.75],
                            backgroundColor: '#98e07a', // Hijau Muda
                            borderRadius: 5,
                            barPercentage: 0.8,
                            categoryPercentage: 0.6
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 5000000000,
                            ticks: {
                                stepSize: 1000000000,
                                callback: function(value) {
                                    return value.toLocaleString('id-ID');
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': Rp' + context.raw.toLocaleString('id-ID');
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
            <h2 class="chart-title-green">Pendapatan Desa 2025</h2>

            <div class="chart-box-white">
                <canvas id="pendapatanCategoryChart"></canvas>
            </div>

            <div class="income-accordion-wrapper">
                <div class="accordion-item">
                    <button class="accordion-header" onclick="toggleAccordion('pad-detail')">
                        <span>Pendapatan Asli Desa</span>
                        <span class="total-val">Rp0,00 <i class="arrow-icon">^</i></span>
                    </button>
                    <div id="pad-detail" class="accordion-content">
                        <table class="detail-table">
                            <thead>
                                <tr>
                                    <th>Uraian</th>
                                    <th>Anggaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="text-center">Tidak ada data rincian</td>
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
            const catCtx = document.getElementById('pendapatanCategoryChart').getContext('2d');

            new Chart(catCtx, {
                type: 'bar',
                data: {
                    labels: ['Pendapatan Asli Desa', 'Pendapatan Transfer', 'Pendapatan Lain-lain'],
                    datasets: [{
                        label: 'Anggaran',
                        data: [0, 4254715300, 0], // Data sesuai gambar
                        backgroundColor: '#438e0d',
                        borderRadius: 5,
                        barThickness: 60
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 5000000000,
                            ticks: {
                                callback: value => value.toLocaleString('id-ID')
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: context => 'Rp' + context.raw.toLocaleString('id-ID')
                            }
                        }
                    }
                }
            });
        });

        function toggleAccordion(id) {
            const content = document.getElementById(id);
            content.classList.toggle('active');
        }
    </script>

    <div class="accordion-item">
        <button class="accordion-header active" onclick="toggleAccordion('transfer-detail')">
            <span>Pendapatan Transfer</span>
            <span class="total-val">Rp4.254.715.300,00 <i class="arrow-icon">^</i></span>
        </button>
        <div id="transfer-detail" class="accordion-content active">
            <div class="progress-container">
                <div class="progress-bar-fill" style="width: 100%;">100.00%</div>
            </div>

            <table class="detail-table">
                <thead>
                    <tr>
                        <th>Uraian</th>
                        <th class="text-right">Anggaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DANA DESA</td>
                        <td class="text-right">Rp723.068.000,00</td>
                    </tr>
                    <tr>
                        <td>BAGI HASIL PAJAK DAN RETRIBUSI DAERAH KABUPATEN/KOTA</td>
                        <td class="text-right">Rp130.421.800,00</td>
                    </tr>
                    <tr>
                        <td>ALOKASI DANA DESA</td>
                        <td class="text-right">Rp2.999.405.900,00</td>
                    </tr>
                    <tr>
                        <td>BANTUAN KEUANGAN DARI APBD PROVINSI</td>
                        <td class="text-right">Rp75.000.000,00</td>
                    </tr>
                    <tr>
                        <td>BANTUAN KEUANGAN DARI APBD KABUPATEN/KOTA</td>
                        <td class="text-right">Rp326.819.600,00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="accordion-item">
        <button class="accordion-header" onclick="toggleAccordion('lain-detail')">
            <span>Pendapatan Lain-lain</span>
            <span class="total-val">Rp0,00 <i class="arrow-icon">^</i></span>
        </button>
        <div id="lain-detail" class="accordion-content">
            <div class="progress-container empty">
                <div class="progress-bar-fill" style="width: 0%;"></div>
            </div>
            <table class="detail-table">
                <tbody>
                    <tr>
                        <td class="text-center">Tidak ada data rincian</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <section class="belanja-detail-section">
        <div class="infografis-container">
            <h2 class="chart-title-green">Belanja Desa 2025</h2>

            <div class="chart-box-white">
                <canvas id="belanjaCategoryChart"></canvas>
            </div>

            <div class="expense-accordion-wrapper">

                <div class="accordion-item">
                    <button class="accordion-header" onclick="toggleAccordion('pemerintahan-detail')">
                        <span>Penyelenggaraan Pemerintahan Desa</span>
                        <span class="total-val">Rp1.933.401.432,00 <i class="arrow-icon">^</i></span>
                    </button>
                    <div id="pemerintahan-detail" class="accordion-content">
                        <div class="progress-container">
                            <div class="progress-bar-fill" style="width: 45.65%;">45.65%</div>
                        </div>
                        <table class="detail-table">
                            <thead>
                                <tr>
                                    <th>Uraian</th>
                                    <th class="text-right">Anggaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Penyelenggaraan Belanja Siltap, Tunjangan dan Operasional Pemerintahan Desa</td>
                                    <td class="text-right">Rp1.545.922.900,00</td>
                                </tr>
                                <tr>
                                    <td>Penyediaan Sarana Prasarana Pemerintahan Desa</td>
                                    <td class="text-right">Rp215.110.432,00</td>
                                </tr>
                                <tr>
                                    <td>Pengelolaan Administrasi Kependudukan, Pencatatan Sipil, Statistik Dan Kearsipan</td>
                                    <td class="text-right">Rp12.600.000,00</td>
                                </tr>
                                <tr>
                                    <td>Penyelenggaraan Tata Praja Pemerintahan, Perencanaan, Tata Corak Dan Keuangan Desa</td>
                                    <td class="text-right">Rp159.768.100,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-header" onclick="toggleAccordion('pembangunan-detail')">
                        <span>Pelaksanaan Pembangunan Desa</span>
                        <span class="total-val">Rp1.525.181.190,75 <i class="arrow-icon">^</i></span>
                    </button>
                    <div id="pembangunan-detail" class="accordion-content">
                        <div class="progress-container">
                            <div class="progress-bar-fill" style="width: 36.01%;">36.01%</div>
                        </div>
                        <table class="detail-table">
                            <tbody>
                                <tr>
                                    <td class="text-center">Klik untuk melihat rincian pembangunan...</td>
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
            const belCtx = document.getElementById('belanjaCategoryChart').getContext('2d');

            new Chart(belCtx, {
                type: 'bar',
                data: {
                    labels: [
                        'Penyelenggaraan Pemerintahan Desa',
                        'Pelaksanaan Pembangunan Desa',
                        'Pembinaan Kemasyarakatan Desa',
                        'Pemberdayaan Masyarakat Desa',
                        'Penanggulangan Bencana, Darurat Dan Mendesak Desa'
                    ],
                    datasets: [{
                        label: 'Anggaran',
                        data: [1933401432, 1525181190.75, 602530766, 66541000, 108000000],
                        backgroundColor: '#98e07a', // Hijau muda belanja
                        borderRadius: 5,
                        barThickness: 50
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 2100000000,
                            ticks: {
                                callback: value => value.toLocaleString('id-ID')
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                callback: function(val, index) {
                                    // Potong label panjang agar rapi
                                    const label = this.getLabelForValue(val);
                                    return label.length > 20 ? label.substr(0, 20) + '...' : label;
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: context => 'Rp' + context.raw.toLocaleString('id-ID')
                            }
                        }
                    }
                }
            });
        });
    </script>

    <div class="accordion-item">
        <div class="accordion-header-static">
            <span class="label-text">Pembinaan Kemasyarakatan Desa</span>
            <div class="progress-wrapper">
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill light-green" style="width: 100%;">100.00%</div>
                </div>
            </div>
            <span class="value-text">Rp602.530.766,00 <i class="arrow-down">⌄</i></span>
        </div>
    </div>

    <div class="accordion-item">
        <div class="accordion-header-static">
            <span class="label-text">Pemberdayaan Masyarakat Desa</span>
            <div class="progress-wrapper">
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill light-green" style="width: 100%;">100.00%</div>
                </div>
            </div>
            <span class="value-text">Rp66.541.000,00 <i class="arrow-down">⌄</i></span>
        </div>
    </div>

    <div class="accordion-item">
        <div class="accordion-header-static">
            <span class="label-text">Penanggulangan Bencana, Keadaan Darurat, dan Keadaan Mendesak Desa</span>
            <div class="progress-wrapper">
                <div class="progress-bar-bg">
                    <div class="progress-bar-fill light-green" style="width: 100%;">100.00%</div>
                </div>
            </div>
            <span class="value-text">Rp108.000.000,00 <i class="arrow-down">⌄</i></span>
        </div>
    </div>

    <section class="pembiayaan-section">
        <div class="infografis-container">
            <div class="white-box-chart">
                <h2 class="chart-title-green">Pembiayaan Desa 2025</h2>

                <div class="chart-container-finance">
                    <canvas id="pembiayaanChart"></canvas>
                </div>
            </div>

            <div class="finance-progress-list">
                <div class="finance-item">
                    <div class="finance-header-row">
                        <span class="finance-label">Penerimaan</span>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill dark-green" style="width: 46.45%;">46.45%</div>
                        </div>
                        <span class="finance-value">Rp125.939.088,75 <i class="arrow-down">⌄</i></span>
                    </div>
                </div>

                <div class="finance-item">
                    <div class="finance-header-row">
                        <span class="finance-label">Pengeluaran</span>
                        <div class="progress-bar-bg">
                            <div class="progress-bar-fill dark-green" style="width: 53.55%;">53.55%</div>
                        </div>
                        <span class="finance-value">Rp145.000.000,00 <i class="arrow-down">⌄</i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const finCtx = document.getElementById('pembiayaanChart').getContext('2d');

            new Chart(finCtx, {
                type: 'bar',
                data: {
                    labels: ['Penerimaan', 'Pengeluaran'],
                    datasets: [{
                        label: 'Anggaran',
                        data: [125939088.75, 145000000],
                        backgroundColor: '#438e0d', // Hijau Tua sesuai gambar
                        borderRadius: 4,
                        barThickness: 80
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 150000000,
                            ticks: {
                                stepSize: 30000000,
                                callback: value => value.toLocaleString('id-ID')
                            },
                            grid: {
                                borderDash: [5, 5]
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            callbacks: {
                                label: context => 'Rp' + context.raw.toLocaleString('id-ID')
                            }
                        }
                    }
                }
            });
        });
    </script>

</x-frontend>