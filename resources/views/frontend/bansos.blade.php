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
        /* Styling Halaman Bansos */
        .bansos-section {
            padding: 40px 0;
            background-color: #f9f9f9;
        }

        .infografis-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .title-green {
            color: #72c02c;
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 30px;
        }

        /* Grid Layout */
        .bansos-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* Dua kolom sesuai gambar */
            gap: 20px;
        }

        /* Kartu Bansos */
        .bansos-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 30px;
            display: flex;
            align-items: center;
            gap: 40px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .bansos-card:hover {
            transform: translateY(-5px);
        }

        /* Bagian Angka (Kiri) */
        .bansos-count {
            text-align: center;
            min-width: 100px;
        }

        .bansos-count .number {
            display: block;
            font-size: 3rem;
            font-weight: 800;
            color: #333;
            line-height: 1;
        }

        .bansos-count .unit {
            font-size: 0.9rem;
            font-weight: 700;
            color: #444;
        }

        /* Bagian Teks (Kanan) */
        .bansos-info p {
            margin: 0;
            font-size: 0.9rem;
            color: #777;
        }

        .bansos-info h3 {
            margin: 5px 0 0;
            font-size: 1.2rem;
            font-weight: 800;
            color: #4c5258;
        }

        /* Responsif untuk layar HP */
        @media (max-width: 768px) {
            .bansos-grid {
                grid-template-columns: 1fr;
                /* Jadi satu kolom di HP */
            }

            .bansos-card {
                padding: 20px;
                gap: 20px;
            }

            .bansos-count .number {
                font-size: 2.2rem;
            }
        }

        /* Styling Cek Penerima Bansos */
        .cek-bansos-section {
            padding: 20px 0 80px;
            background-color: #f9f9f9;
        }

        .search-bansos-wrapper {
            margin-top: 20px;
        }

        .search-input-group {
            position: relative;
            display: flex;
            align-items: center;
            background: #ffffff;
            border: 1px solid #d1d5db;
            /* Border abu-abu tipis sesuai gambar */
            border-radius: 8px;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
        }

        .icon-search {
            color: #9ca3af;
            margin-right: 15px;
            font-size: 1.1rem;
        }

        .input-nik {
            width: 100%;
            border: none;
            outline: none;
            font-size: 1rem;
            color: #4b5563;
            font-family: 'Poppins', sans-serif;
        }

        .input-nik::placeholder {
            color: #9ca3af;
            /* Warna placeholder abu-abu muda sesuai gambar */
        }

        /* Efek Fokus */
        .search-input-group:focus-within {
            border-color: #72c02c;
            box-shadow: 0 0 0 3px rgba(114, 192, 44, 0.1);
        }
    </style>
    <section class="bansos-section">
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
            <h2 class="title-green">Jumlah Penerima Bansos</h2>

            <div class="bansos-grid">
                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">67</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>BPJS PBI Ketenagakerjaan</h3>
                    </div>
                </div>

                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">41</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>PKH</h3>
                    </div>
                </div>

                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">35</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>BPNT</h3>
                    </div>
                </div>

                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">0</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>BLT 2024</h3>
                    </div>
                </div>

                <div class="bansos-card">
                    <div class="bansos-count">
                        <span class="number">0</span>
                        <span class="unit">Penduduk</span>
                    </div>
                    <div class="bansos-info">
                        <p>mendapatkan bantuan</p>
                        <h3>PSTN</h3>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="cek-bansos-section">
        <div class="infografis-container">
            <h2 class="title-green">Cek Penerima Bansos</h2>

            <div class="search-bansos-wrapper">
                <div class="search-input-group">
                    <i class="icon-search">🔍</i>
                    <input type="text" placeholder="Masukkan NIK penerima bansos" class="input-nik">
                </div>
            </div>
        </div>
    </section>

</x-frontend>