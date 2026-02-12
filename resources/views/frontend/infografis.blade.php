<x-frontend>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Import Font mirip dengan gambar (Poppins/Sans-serif modern) */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600;800&display=swap');

        /* ... css sebelumnya ... */
        .piramida-section {
            padding: 60px 0;
            background: #f1f5f9;
        }

        .title-blue-bold {
            color: #1e3a8a;
            font-size: 2rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 30px;
        }

        .narasi-statistik {
            margin-top: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .narasi-item {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .border-green {
            border-left: 5px solid #10b981;
        }

        .border-orange {
            border-left: 5px solid #f97316;
        }

        @media (max-width: 768px) {
            .narasi-statistik {
                grid-template-columns: 1fr;
            }
        }


        .infografis-page {
            padding: 20px 0;
            /* background-color: #f9f9f9; */

        }

        .stat-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .title-green-sub {
            color: #28a745;
            font-size: 2rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        .stat-penduduk-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* 2 Kolom biar besar */
            gap: 30px;
        }

        .stat-card-penduduk {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 20px;
            border-left: 5px solid #28a745;
            transition: transform 0.3s;
        }

        .stat-card-penduduk:hover {
            transform: translateY(-5px);
        }

        .stat-icon-wrapper img {
            width: 60px;
            height: 60px;
        }

        .stat-data {
            display: flex;
            flex-direction: column;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #888;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 800;
        }

        .color-green {
            color: #28a745;
        }

        .color-light-green {
            color: #82c91e;
        }

        @media (max-width: 768px) {
            .stat-penduduk-grid {
                grid-template-columns: 1fr;
            }
        }


        .header-infografis {
            background-color: #f8f9fa;
            /* Background abu-abu sangat muda/putih */
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
    <section class="infografis-page">
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
            <div class="demografi-content">
                <div class="demografi-text">
                    <h2 class="title-green">DEMOGRAFI PENDUDUK</h2>
                    <p>Memberikan informasi lengkap mengenai karakteristik demografi penduduk suatu wilayah. Mulai dari jumlah penduduk, usia, jenis kelamin, tingkat pendidikan, pekerjaan, agama, dan aspek penting lainnya yang menggambarkan komposisi populasi secara rinci.</p>
                </div>
                <div class="demografi-visual">
                    <img src="https://img.freepik.com/free-vector/gradient-dynamic-blue-lines-background_23-2148995756.jpg" alt="Visualisasi Data">
                </div>
            </div>
        </div>
    </section>
    <section class="infografis-page">
        <div class="stat-container">

            <div style="text-align: center; margin-bottom: 60px;">
                <h1 style="font-size: 3rem; font-weight: 900; color: #333;">INFOGRAFIS DESA</h1>
                <p style="color: #666;">Data Statistik Kependudukan & Transparansi Desa</p>
            </div>

            <h2 class="title-green-sub">Jumlah Penduduk dan Kepala Keluarga</h2>

            <div class="stat-penduduk-grid">

                <div class="stat-card-penduduk">
                    <div class="stat-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/437/437501.png" alt="Icon Total">
                    </div>
                    <div class="stat-data">
                        <span class="stat-label">TOTAL PENDUDUK</span>
                        <span class="stat-value color-green">
                            {{ number_format($total_penduduk, 0, ',', '.') }} <small>Jiwa</small>
                        </span>
                    </div>
                </div>

                <div class="stat-card-penduduk">
                    <div class="stat-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/3667/3667325.png" alt="Icon KK">
                    </div>
                    <div class="stat-data">
                        <span class="stat-label">KEPALA KELUARGA</span>
                        <span class="stat-value color-green">
                            {{ number_format($total_kk, 0, ',', '.') }} <small>KK</small>
                        </span>
                    </div>
                </div>

                <div class="stat-card-penduduk">
                    <div class="stat-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png" alt="Icon Perempuan">
                    </div>
                    <div class="stat-data">
                        <span class="stat-label">PEREMPUAN</span>
                        <span class="stat-value color-light-green">
                            {{ number_format($total_perempuan, 0, ',', '.') }} <small>Jiwa</small>
                        </span>
                    </div>
                </div>

                <div class="stat-card-penduduk">
                    <div class="stat-icon-wrapper">
                        <img src="https://cdn-icons-png.flaticon.com/512/4140/4140037.png" alt="Icon Laki-laki">
                    </div>
                    <div class="stat-data">
                        <span class="stat-label">LAKI-LAKI</span>
                        <span class="stat-value color-light-green">
                            {{ number_format($total_laki, 0, ',', '.') }} <small>Jiwa</small>
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="piramida-section">
        <div class="stat-container">
            <h2 class="title-blue-bold">Berdasarkan Kelompok Umur</h2>

            <div class="chart-wrapper" style="max-width: 900px; margin: 0 auto; background: white; border-radius: 12px; padding: 20px; position: relative;">
                <canvas id="piramidaChart"></canvas>
            </div>

            <div class="narasi-statistik">

                <div class="narasi-item border-green">
                    <p>
                        Untuk jenis kelamin laki-laki, kelompok umur <strong>{{ $max_laki->kelompok_umur }}</strong>
                        adalah yang tertinggi dengan jumlah <strong>{{ $max_laki->laki_laki }} orang</strong>
                        atau <strong>{{ number_format($persen_max_laki, 2) }}%</strong>.
                        Sedangkan, kelompok umur <strong>{{ $min_laki->kelompok_umur }}</strong>
                        adalah yang terendah dengan jumlah <strong>{{ $min_laki->laki_laki }} orang</strong>
                        atau <strong>{{ number_format($persen_min_laki, 2) }}%</strong>.
                    </p>
                </div>

                <div class="narasi-item border-orange">
                    <p>
                        Untuk jenis kelamin perempuan, kelompok umur <strong>{{ $max_cewe->kelompok_umur }}</strong>
                        adalah yang tertinggi dengan jumlah <strong>{{ $max_cewe->perempuan }} orang</strong>
                        atau <strong>{{ number_format($persen_max_cewe, 2) }}%</strong>.
                        Sedangkan, kelompok umur <strong>{{ $min_cewe->kelompok_umur }}</strong>
                        adalah yang terendah dengan jumlah <strong>{{ $min_cewe->perempuan }} orang</strong>
                        atau <strong>{{ number_format($persen_min_cewe, 2) }}%</strong>.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <script>
        const ctx = document.getElementById('piramidaChart').getContext('2d');

        // Data dari Controller Laravel
        const labels = @json($categories);
        const dataLaki = @json($data_laki);
        const dataPerempuan = @json($data_perempuan);

        // Ubah data laki-laki menjadi negatif agar grafiknya ke kiri
        const dataLakiNegatif = dataLaki.map(value => -value);

        new Chart(ctx, {
            type: 'bar'
            , data: {
                labels: labels
                , datasets: [{
                        label: 'Laki-laki'
                        , data: dataLakiNegatif
                        , backgroundColor: '#3b82f6', // Biru
                        borderRadius: 5
                    , }
                    , {
                        label: 'Perempuan'
                        , data: dataPerempuan
                        , backgroundColor: '#ec4899', // Pink
                        borderRadius: 5
                    , }
                ]
            }
            , options: {
                indexAxis: 'y', // Membuat chart horizontal
                scales: {
                    x: {
                        stacked: true
                        , ticks: {
                            callback: function(value) {
                                return Math.abs(value); // Hilangkan tanda minus di label bawah
                            }
                        }
                    }
                    , y: {
                        stacked: true
                        , beginAtZero: true
                    }
                }
                , plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += Math.abs(context.raw); // Hilangkan tanda minus di tooltip
                                return label;
                            }
                        }
                    }
                }
                , responsive: true
            , }
        });

    </script>
    <section class="dusun-section">
        <style>
            .dusun-section {
                padding: 60px 0;
                background: #fff;
            }

            .dusun-grid {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
                gap: 50px;
                margin-top: 40px;
            }

            .chart-pie-wrapper {
                width: 100%;
                max-width: 400px;
                /* Ukuran Grafik */
                position: relative;
            }

            .dusun-keterangan {
                flex: 1;
                min-width: 300px;
            }

            .keterangan-list {
                list-style: none;
                padding: 0;
            }

            .keterangan-list li {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
                font-size: 1rem;
                border-bottom: 1px solid #eee;
                padding-bottom: 10px;
            }

            .dot {
                width: 15px;
                height: 15px;
                border-radius: 50%;
                display: inline-block;
                margin-right: 15px;
            }

            @media (max-width: 768px) {
                .dusun-grid {
                    flex-direction: column;
                    text-align: center;
                }

                .keterangan-list li {
                    justify-content: center;
                }
            }

        </style>

        <div class="stat-container">
            <h2 class="title-blue-bold">Berdasarkan Dusun / Wilayah</h2>

            <div class="dusun-grid">

                <div class="chart-pie-wrapper">
                    <canvas id="dusunChart"></canvas>
                </div>

                <div class="dusun-keterangan">
                    <h4 style="margin-bottom: 20px; font-weight: 800; color: #333;">Keterangan Populasi:</h4>
                    <ul class="keterangan-list">
                        @foreach($dusun_list as $index => $item)
                        <li>
                            <span class="dot" style="background-color: {{ $chart_colors[$index % count($chart_colors)] }};"></span>

                            <div style="flex-grow: 1; display: flex; justify-content: space-between;">
                                <strong>{{ $item->nama_wilayah }}</strong>
                                <span>{{ number_format($item->laki_laki + $item->perempuan) }} Jiwa</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <script>
        // ... (Script Piramida Chart sebelumnya biarkan di atas) ...

        // --- CHART DUSUN CONFIG ---
        const ctxDusun = document.getElementById('dusunChart').getContext('2d');

        new Chart(ctxDusun, {
            type: 'doughnut', // Bisa ganti 'pie' jika ingin lingkaran penuh
            data: {
                labels: @json($dusun_labels)
                , datasets: [{
                    data: @json($dusun_totals)
                    , backgroundColor: @json($chart_colors)
                    , hoverOffset: 4
                }]
            }
            , options: {
                responsive: true
                , plugins: {
                    legend: {
                        display: false // Kita sembunyikan legend bawaan karena sudah buat list sendiri
                    }
                    , tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += context.raw + ' Jiwa';
                                return label;
                            }
                        }
                    }
                }
            }
        });

    </script>


    <section class="pendidikan-section">
        <style>
            .pendidikan-section {
                padding: 60px 0;
                background: #f8f9fa;
                /* Abu-abu muda agar selang-seling */
            }

            .chart-bar-wrapper {
                width: 100%;
                max-width: 1000px;
                /* Lebar chart */
                height: 500px;
                /* Tinggi chart */
                margin: 0 auto;
                background: white;
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            }

            @media (max-width: 768px) {
                .chart-bar-wrapper {
                    height: 350px;
                }
            }

        </style>

        <div class="stat-container">
            <h2 class="title-blue-bold">Berdasarkan Pendidikan</h2>

            <div class="chart-bar-wrapper">
                <canvas id="pendidikanChart"></canvas>
            </div>
        </div>
    </section>

    <script>
        // ... (Script Piramida & Dusun sebelumnya biarkan) ...

        // --- CHART PENDIDIKAN CONFIG ---
        const ctxPendidikan = document.getElementById('pendidikanChart').getContext('2d');

        new Chart(ctxPendidikan, {
            type: 'bar', // Grafik Batang Tegak
            data: {
                labels: @json($pendidikan_labels)
                , datasets: [{
                    label: 'Jumlah Penduduk'
                    , data: @json($pendidikan_values)
                    , backgroundColor: '#3b82f6', // Warna Biru Solid
                    borderColor: '#2563eb', // Garis Tepi Biru Gelap
                    borderWidth: 1
                    , borderRadius: 5, // Sudut batang melengkung
                    barThickness: 'flex', // Lebar batang fleksibel
                    maxBarThickness: 50 // Maksimal lebar batang
                }]
            }
            , options: {
                responsive: true
                , maintainAspectRatio: false, // Agar chart mengikuti tinggi wrapper (500px)
                plugins: {
                    legend: {
                        display: false // Hilangkan legend karena warnanya cuma satu
                    }
                    , tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.raw + ' Orang';
                            }
                        }
                    }
                }
                , scales: {
                    y: {
                        beginAtZero: true
                        , title: {
                            display: true
                            , text: 'Jumlah Orang'
                        }
                    }
                    , x: {
                        ticks: {
                            autoSkip: false, // Jangan sembunyikan label jika sempit
                            maxRotation: 45, // Miringkan teks jika panjang
                            minRotation: 45
                        }
                    }
                }
            }
        });

    </script>


    <section class="pekerjaan-section">
        <style>
            .pekerjaan-section {
                padding: 60px 0;
                background: #fff;
            }

            .title-green {
                color: #28a745;
                font-size: 2rem;
                font-weight: 800;
                text-align: center;
                margin-bottom: 40px;
            }

            .pekerjaan-grid-main {
                display: grid;
                grid-template-columns: 1fr 1.5fr;
                /* Tabel 1 bagian, Kartu 1.5 bagian */
                gap: 40px;
                align-items: start;
            }

            /* Style Tabel */
            .pekerjaan-table-wrapper {
                background: #fff;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
                border: 1px solid #eee;
            }

            .pekerjaan-table {
                width: 100%;
                border-collapse: collapse;
            }

            .pekerjaan-table th {
                background: #28a745;
                color: white;
                padding: 15px;
                text-align: left;
                font-weight: 700;
            }

            .pekerjaan-table td {
                padding: 12px 15px;
                border-bottom: 1px solid #f0f0f0;
                color: #555;
            }

            .pekerjaan-table tr:last-child td {
                border-bottom: none;
            }

            .pekerjaan-table tr:hover {
                background-color: #f9f9f9;
            }

            /* Style Grid Cards */
            .pekerjaan-cards-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                /* 2 Kolom kartu */
                gap: 20px;
            }

            .job-card {
                background: #f8f9fa;
                padding: 20px;
                border-radius: 10px;
                border-left: 5px solid #28a745;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                transition: transform 0.3s;
            }

            .job-card:hover {
                transform: translateY(-5px);
                background: #fff;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }

            .job-name {
                font-size: 0.95rem;
                font-weight: 600;
                color: #444;
                margin-bottom: 10px;
            }

            .job-count {
                font-size: 1.8rem;
                font-weight: 800;
                color: #28a745;
                align-self: flex-end;
                /* Angka di kanan bawah */
            }

            @media (max-width: 992px) {
                .pekerjaan-grid-main {
                    grid-template-columns: 1fr;
                }
            }

        </style>

        <div class="stat-container">
            <h2 class="title-green">Berdasarkan Pekerjaan</h2>

            <div class="pekerjaan-grid-main">

                <div class="pekerjaan-table-wrapper">
                    <table class="pekerjaan-table">
                        <thead>
                            <tr>
                                <th>Jenis Pekerjaan</th>
                                <th style="width: 80px; text-align: center;">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pekerjaan_sisanya as $item)
                            <tr>
                                <td>{{ $item->nama_pekerjaan }}</td>
                                <td style="text-align: center; font-weight: bold;">{{ $item->jumlah }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="pekerjaan-cards-grid">
                    @foreach($pekerjaan_top as $item)
                    <div class="job-card">
                        <span class="job-name">{{ $item->nama_pekerjaan }}</span>
                        <span class="job-count">{{ $item->jumlah }}</span>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>


    <section class="wajib-pilih-section">
        <style>
            .wajib-pilih-section {
                padding: 60px 0;
                background: #f1f5f9;
                /* Background sedikit abu agar kontras */
            }

            .title-green {
                color: #28a745;
                font-size: 2rem;
                font-weight: 800;
                text-align: center;
                margin-bottom: 40px;
            }

            /* Kita gunakan wrapper yang sama dengan chart pendidikan agar konsisten */
            .chart-bar-wrapper {
                width: 100%;
                max-width: 900px;
                height: 450px;
                margin: 0 auto;
                background: white;
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            }

        </style>

        <div class="stat-container">
            <h2 class="title-green">Berdasarkan Wajib Pilih</h2>

            <div class="chart-bar-wrapper">
                <canvas id="wajibPilihChart"></canvas>
            </div>
        </div>
    </section>

    <script>
        // ... (Script Piramida, Dusun, Pendidikan sebelumnya biarkan) ...

        // --- CHART WAJIB PILIH CONFIG ---
        const ctxWajibPilih = document.getElementById('wajibPilihChart').getContext('2d');

        new Chart(ctxWajibPilih, {
            type: 'bar', // Grafik Batang
            data: {
                labels: @json($wp_labels)
                , datasets: [{
                    label: 'Jumlah Penduduk'
                    , data: @json($wp_values),
                    // Warna Hijau Gradasi (Array warna agar tiap batang beda nuansa hijaunya)
                    backgroundColor: [
                        '#28a745', // Hijau Tua (Laki)
                        '#20c997', // Hijau Teal (Perempuan)
                        '#adb5bd' // Abu-abu (Belum Wajib)
                    ]
                    , borderColor: '#fff'
                    , borderWidth: 2
                    , borderRadius: 8, // Sudut tumpul
                    barThickness: 60 // Ketebalan batang
                }]
            }
            , options: {
                responsive: true
                , maintainAspectRatio: false
                , plugins: {
                    legend: {
                        display: false // Sembunyikan legend
                    }
                    , tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.raw + ' Orang';
                            }
                        }
                    }
                }
                , scales: {
                    y: {
                        beginAtZero: true
                        , grid: {
                            color: '#f0f0f0' // Garis grid tipis
                        }
                    }
                    , x: {
                        grid: {
                            display: false // Hilangkan garis vertikal
                        }
                    }
                }
            }
        });

    </script>

    <section class="perkawinan-section">
        <style>
            .perkawinan-section {
                padding: 60px 0;
                background: #fff;
            }

            .infografis-grid-triple {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                /* 3 Kolom */
                gap: 25px;
            }

            .stat-card-mini {
                background: #fff;
                border: 1px solid #eee;
                border-radius: 12px;
                padding: 20px;
                display: flex;
                align-items: center;
                gap: 15px;
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .stat-card-mini:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
                border-color: #28a745;
                /* Highlight Hijau saat hover */
            }

            .stat-card-mini img {
                width: 50px;
                height: 50px;
                object-fit: contain;
            }

            .card-info {
                display: flex;
                flex-direction: column;
            }

            .stat-card-mini .label {
                font-size: 0.9rem;
                color: #666;
                font-weight: 600;
            }

            .stat-card-mini .value {
                font-size: 1.5rem;
                font-weight: 800;
            }

            .color-green {
                color: #28a745;
            }

            @media (max-width: 992px) {
                .infografis-grid-triple {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width: 600px) {
                .infografis-grid-triple {
                    grid-template-columns: 1fr;
                }
            }

        </style>

        <div class="stat-container">
            <h2 class="title-green">Berdasarkan Perkawinan</h2>

            <div class="infografis-grid-triple">

                @php
                // Mapping Icon berdasarkan Nama Status di Database
                $icons = [
                'Belum Kawin' => 'https://cdn-icons-png.flaticon.com/512/4140/4140048.png',
                'Kawin' => 'https://cdn-icons-png.flaticon.com/512/3656/3656910.png',
                'Cerai Mati' => 'https://cdn-icons-png.flaticon.com/512/3141/3141151.png',
                'Kawin Tercatat' => 'https://cdn-icons-png.flaticon.com/512/2912/2912781.png',
                'Cerai Hidup' => 'https://cdn-icons-png.flaticon.com/512/4137/4137063.png',
                'Kawin Tidak Tercatat' => 'https://cdn-icons-png.flaticon.com/512/10543/10543315.png',
                ];
                // Default icon jika nama tidak cocok
                $default_icon = 'https://cdn-icons-png.flaticon.com/512/1077/1077114.png';
                @endphp

                @foreach($kawin_data as $item)
                <div class="stat-card-mini">
                    <img src="{{ $icons[$item->status] ?? $default_icon }}" alt="{{ $item->status }}">

                    <div class="card-info">
                        <span class="label">{{ $item->status }}</span>
                        <span class="value color-green">{{ number_format($item->jumlah, 0, ',', '.') }}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="agama-section">
        <style>
            .agama-section {
                padding: 60px 0;
                background: #f8f9fa;
                /* Background abu-abu muda */
            }

            .title-green {
                color: #28a745;
                font-size: 2rem;
                font-weight: 800;
                text-align: center;
                margin-bottom: 40px;
            }

            /* Kita gunakan style grid dan card yang sama dengan Perkawinan */
            .infografis-grid-triple {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 25px;
            }

            .stat-card-mini {
                background: #fff;
                border: 1px solid #eee;
                border-radius: 12px;
                padding: 20px;
                display: flex;
                align-items: center;
                gap: 15px;
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .stat-card-mini:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
                border-color: #28a745;
            }

            .stat-card-mini img {
                width: 50px;
                height: 50px;
                object-fit: contain;
            }

            .card-info {
                display: flex;
                flex-direction: column;
            }

            .stat-card-mini .label {
                font-size: 0.9rem;
                color: #666;
                font-weight: 600;
            }

            .stat-card-mini .value {
                font-size: 1.5rem;
                font-weight: 800;
            }

            .color-green {
                color: #28a745;
            }

            @media (max-width: 992px) {
                .infografis-grid-triple {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width: 600px) {
                .infografis-grid-triple {
                    grid-template-columns: 1fr;
                }
            }

        </style>



    </section>

    <section class="agama-section">
        <style>
            .agama-section {
                padding: 60px 0;
                background: #f8f9fa;
                /* Background abu-abu muda */
            }

            .title-green {
                color: #28a745;
                font-size: 2rem;
                font-weight: 800;
                text-align: center;
                margin-bottom: 40px;
            }

            /* Kita gunakan style grid dan card yang sama dengan Perkawinan */
            .infografis-grid-triple {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 25px;
            }

            .stat-card-mini {
                background: #fff;
                border: 1px solid #eee;
                border-radius: 12px;
                padding: 20px;
                display: flex;
                align-items: center;
                gap: 15px;
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .stat-card-mini:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
                border-color: #28a745;
            }

            .stat-card-mini img {
                width: 50px;
                height: 50px;
                object-fit: contain;
            }

            .card-info {
                display: flex;
                flex-direction: column;
            }

            .stat-card-mini .label {
                font-size: 0.9rem;
                color: #666;
                font-weight: 600;
            }

            .stat-card-mini .value {
                font-size: 1.5rem;
                font-weight: 800;
            }

            .color-green {
                color: #28a745;
            }

            @media (max-width: 992px) {
                .infografis-grid-triple {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width: 600px) {
                .infografis-grid-triple {
                    grid-template-columns: 1fr;
                }
            }

        </style>

        <div class="stat-container">
            <h2 class="title-green">Berdasarkan Agama</h2>

            <div class="infografis-grid-triple">

                @php
                // Mapping Icon berdasarkan Nama Agama di Database
                $agamaIcons = [
                'Islam' => 'https://cdn-icons-png.flaticon.com/512/2000/2000100.png',
                'Kristen' => 'https://cdn-icons-png.flaticon.com/512/1155/1155255.png',
                'Katolik' => 'https://cdn-icons-png.flaticon.com/512/2663/2663300.png',
                'Hindu' => 'https://cdn-icons-png.flaticon.com/512/10390/10390977.png',
                'Buddha' => 'https://cdn-icons-png.flaticon.com/512/2501/2501538.png',
                'Konghucu' => 'https://cdn-icons-png.flaticon.com/512/3667/3667448.png', // Icon Yin Yang
                'Kepercayaan Lainnya' => 'https://cdn-icons-png.flaticon.com/512/2312/2312674.png',
                ];
                // Default icon
                $defaultAgamaIcon = 'https://cdn-icons-png.flaticon.com/512/1077/1077114.png';
                @endphp

                @foreach($agama_data as $item)
                <div class="stat-card-mini">
                    <img src="{{ $agamaIcons[$item->agama] ?? $defaultAgamaIcon }}" alt="{{ $item->agama }}">

                    <div class="card-info">
                        <span class="label">{{ $item->agama }}</span>
                        <span class="value color-green">{{ number_format($item->jumlah, 0, ',', '.') }}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <script>
        const wpCtx = document.getElementById('wajibPilihChart').getContext('2d');

        new Chart(wpCtx, {
            type: 'bar'
            , data: {
                labels: ['2024', '2025', '2026'], // Tahun sesuai gambar
                datasets: [{
                    label: 'Jumlah Wajib Pilih'
                    , data: [800, 825, 850], // Data angka sesuai label di atas batang
                    backgroundColor: '#438e0d', // Hijau tua sesuai gambar
                    borderRadius: 5
                    , barThickness: 80 // Membuat batang lebih tebal seperti di gambar
                }]
            }
            , options: {
                responsive: true
                , maintainAspectRatio: false
                , scales: {
                    y: {
                        beginAtZero: true
                        , max: 1000, // Skala maksimal sesuai gambar
                        ticks: {
                            stepSize: 200
                        }
                    }
                }
                , plugins: {
                    legend: {
                        display: false
                    }
                    , tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.raw + ' Jiwa';
                            }
                        }
                    }
                }
            }
        });

    </script>

    <script>
        const eduCtx = document.getElementById('pendidikanChart').getContext('2d');

        new Chart(eduCtx, {
            type: 'bar'
            , data: {
                labels: [
                    'Tidak/Belum Sekolah'
                    , 'Belum Tamat SD/Sederajat'
                    , 'Tamat SD/Sederajat'
                    , 'SLTP/Sederajat'
                    , 'SLTA/Sederajat'
                    , 'Diploma I/II'
                    , 'Diploma III/Sarjana Muda'
                    , 'Diploma IV/Strata I'
                    , 'Strata II'
                    , 'Strata III'
                ]
                , datasets: [{
                    label: 'Jumlah Penduduk'
                    , data: [181, 93, 180, 78, 132, 5, 11, 46, 0, 0], // Data sesuai gambar
                    backgroundColor: '#0d2481', // Biru tua sesuai gambar
                    borderRadius: 5
                    , barThickness: 40
                }]
            }
            , options: {
                responsive: true
                , maintainAspectRatio: false
                , scales: {
                    y: {
                        beginAtZero: true
                        , max: 210, // Menyesuaikan skala y sesuai gambar
                        ticks: {
                            stepSize: 30
                        }
                    }
                    , x: {
                        ticks: {
                            font: {
                                size: 10
                            }
                        }
                    }
                }
                , plugins: {
                    legend: {
                        display: false // Sembunyikan legenda karena sudah jelas dari judul
                    }
                    , tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.raw + ' Orang';
                            }
                        }
                    }
                }
            }
        });

    </script>

    <script>
        const pieCtx = document.getElementById('dusunChart').getContext('2d');

        new Chart(pieCtx, {
            type: 'pie'
            , data: {
                labels: ['Piasan', 'Mubur Kecil']
                , datasets: [{
                    data: [470, 256], // Data jiwa sesuai gambar
                    backgroundColor: [
                        '#5b73c7', // Biru untuk Piasan
                        '#90cd76' // Hijau untuk Mubur Kecil
                    ]
                    , borderWidth: 1
                }]
            }
            , options: {
                responsive: true
                , maintainAspectRatio: false
                , plugins: {
                    legend: {
                        display: false // Kita gunakan keterangan custom di samping
                    }
                    , tooltip: {
                        callbacks: {
                            label: function(context) {
                                let total = 470 + 256;
                                let value = context.raw;
                                let percentage = ((value / total) * 100).toFixed(2);
                                return context.label + ': ' + value + ' Jiwa (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });

    </script>

    <script>
        const pieCtx = document.getElementById('dusunChart').getContext('2d');

        new Chart(pieCtx, {
            type: 'pie'
            , data: {
                labels: ['Piasan', 'Mubur Kecil']
                , datasets: [{
                    data: [470, 256], // Data jiwa sesuai gambar
                    backgroundColor: [
                        '#5b73c7', // Biru untuk Piasan
                        '#90cd76' // Hijau untuk Mubur Kecil
                    ]
                    , borderWidth: 1
                }]
            }
            , options: {
                responsive: true
                , maintainAspectRatio: false
                , plugins: {
                    legend: {
                        display: false // Kita gunakan keterangan custom di samping
                    }
                    , tooltip: {
                        callbacks: {
                            label: function(context) {
                                let total = 470 + 256;
                                let value = context.raw;
                                let percentage = ((value / total) * 100).toFixed(2);
                                return context.label + ': ' + value + ' Jiwa (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('piramidaChart').getContext('2d');

            const dataLaki = [-23, -41, -40, -34, -22, -32, -27, -17, -36, -24, -19, -18, -18, -6, -3, -1, -1, -1];
            const dataPerempuan = [35, 28, 45, 35, 33, 31, 28, 21, 27, 22, 26, 10, 8, 6, 5, 1, 2, 0];
            const labels = ['0-4', '5-9', '10-14', '15-19', '20-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65-69', '70-74', '75-79', '80-84', '85+'];

            new Chart(ctx, {
                type: 'bar'
                , data: {
                    labels: labels
                    , datasets: [{
                            label: 'Laki-Laki'
                            , data: dataLaki
                            , backgroundColor: '#689f84'
                            , borderRadius: 5
                        , }
                        , {
                            label: 'Perempuan'
                            , data: dataPerempuan
                            , backgroundColor: '#f5a691'
                            , borderRadius: 5
                        , }
                    ]
                }
                , options: {
                    indexAxis: 'y'
                    , responsive: true
                    , scales: {
                        x: {
                            stacked: true
                            , ticks: {
                                callback: (value) => Math.abs(value)
                            }
                        }
                        , y: {
                            beginAtZero: true
                            , stacked: true
                            , position: 'center'
                        }
                    }
                    , plugins: {
                        tooltip: {
                            callbacks: {
                                label: (context) => {
                                    let label = context.dataset.label || '';
                                    return label + ': ' + Math.abs(context.raw) + ' orang';
                                }
                            }
                        }
                    }
                }
            });
        });

    </script>



</x-frontend>
