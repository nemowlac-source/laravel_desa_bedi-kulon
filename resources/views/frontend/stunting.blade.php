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
    <style>
        /* Styling Section Stunting */
        .stunting-section {
            padding: 40px 0 80px;
            background-color: #f8f9fa;
        }

        .stunting-summary-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .summary-card {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        .summary-card .label {
            font-size: 0.85rem;
            font-weight: 700;
            color: #888;
            text-transform: uppercase;
        }

        .summary-card .value {
            font-size: 2.2rem;
            font-weight: 800;
            color: #333;
            margin: 5px 0;
        }

        .summary-card .percentage {
            font-size: 0.9rem;
            font-weight: 700;
            color: #72c02c;
        }

        /* Garis warna di samping kartu */
        .card-blue {
            border-left: 5px solid #3498db;
        }

        .card-green {
            border-left: 5px solid #72c02c;
        }

        .card-yellow {
            border-left: 5px solid #f1c40f;
        }

        .card-red {
            border-left: 5px solid #e74c3c;
        }

        /* Layout Grafik */
        .stunting-charts-row {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 30px;
        }

        .chart-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .chart-box h3 {
            font-size: 1.1rem;
            font-weight: 800;
            color: #444;
            margin-bottom: 25px;
            border-left: 4px solid #72c02c;
            padding-left: 15px;
        }

        /* Responsif Mobile */
        @media (max-width: 992px) {
            .stunting-summary-grid {
                grid-template-columns: 1fr 1fr;
            }

            .stunting-charts-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .stunting-summary-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>

    <section class="stunting-section">
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
            <h2 class="title-green">Data Stunting Desa Bedi Kulon</h2>

            <div class="stunting-summary-grid">
                <div class="summary-card card-blue">
                    <span class="label">Total Balita</span>
                    <span class="value">142</span>
                    <span class="sub-label">Tahun 2025</span>
                </div>
                <div class="summary-card card-green">
                    <span class="label">Status Gizi Baik</span>
                    <span class="value">128</span>
                    <span class="percentage">90.1%</span>
                </div>
                <div class="summary-card card-yellow">
                    <span class="label">Gizi Kurang</span>
                    <span class="value">10</span>
                    <span class="percentage">7.0%</span>
                </div>
                <div class="summary-card card-red">
                    <span class="label">Stunting (Sangat Pendek)</span>
                    <span class="value">4</span>
                    <span class="percentage">2.9%</span>
                </div>
            </div>

            <div class="stunting-charts-row">
                <div class="chart-box">
                    <h3>Distribusi Status Gizi</h3>
                    <canvas id="statusGiziChart"></canvas>
                </div>
                <div class="chart-box">
                    <h3>Tren Stunting 3 Tahun Terakhir</h3>
                    <canvas id="trenStuntingChart"></canvas>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Grafik Pie Distribusi
            const ctxPie = document.getElementById('statusGiziChart').getContext('2d');
            new Chart(ctxPie, {
                type: 'doughnut'
                , data: {
                    labels: ['Gizi Baik', 'Gizi Kurang', 'Stunting']
                    , datasets: [{
                        data: [128, 10, 4]
                        , backgroundColor: ['#72c02c', '#f1c40f', '#e74c3c']
                        , borderWidth: 0
                    }]
                }
                , options: {
                    responsive: true
                    , plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // 2. Grafik Batang Tren
            const ctxBar = document.getElementById('trenStuntingChart').getContext('2d');
            new Chart(ctxBar, {
                type: 'bar'
                , data: {
                    labels: ['2023', '2024', '2025']
                    , datasets: [{
                        label: 'Jumlah Kasus Stunting'
                        , data: [12, 8, 4]
                        , backgroundColor: '#72c02c'
                        , borderRadius: 5
                    }]
                }
                , options: {
                    responsive: true
                    , scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });

    </script>

</x-frontend>
