<x-frontend>
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
        /* Warna khusus untuk baris pemisah IKS/IKE/IKL */
        .row-separator td {
            background-color: #a8e68e !important;
            /* Hijau muda identik gambar */
            color: #fff;
            border: 1px solid #fff !important;
        }

        /* Warna khusus untuk baris footer (total skor paling bawah) */
        .row-footer-idm td {
            background-color: #90cd76;
            /* Hijau sedikit lebih tua */
            color: #fff;
            padding: 12px;
            border: 1px solid #fff !important;
        }

        .text-right {
            text-align: right;
            padding-right: 20px !important;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        /* Memperhalus tampilan teks di dalam sel */
        .idm-table-final tbody td {
            line-height: 1.4;
            word-wrap: break-word;
        }

        /* CSS INTERNAL - Menjamin gaya terload 100% */
        .idm-main-wrapper {
            background-color: #f8f9fa;
            padding: 60px 0;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .idm-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Mengatur Baris Atas (Teks di Kiri, Kartu di Kanan) */
        .idm-top-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 50px;
            margin-bottom: 30px;
        }

        .idm-info {
            flex: 1.2;
        }

        .idm-brand {
            color: #72c02c;
            font-size: 2.5rem;
            font-weight: 800;
            margin: 0 0 15px 0;
        }

        .idm-text {
            font-size: 1.1rem;
            line-height: 1.6;
            margin: 0;
        }

        /* Kolom Kartu Besar */
        .idm-primary-cards {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .card-large {
            background: #ffffff;
            padding: 25px 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Mengatur Baris Bawah (Grid 3 Kolom) */
        .idm-secondary-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .card-small {
            background: #ffffff;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Tipografi & Warna */
        .card-label {
            font-size: 0.85rem;
            font-weight: 700;
            color: #999;
            text-transform: uppercase;
        }

        .card-value-bold {
            font-size: 2.8rem;
            font-weight: 800;
            color: #4c5258;
        }

        .card-value-small {
            font-size: 1.6rem;
            font-weight: 800;
            color: #4c5258;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 900px) {
            .idm-top-section {
                flex-direction: column;
            }

            .idm-secondary-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .idm-secondary-grid {
                grid-template-columns: 1fr;
            }

            .card-value-bold {
                font-size: 2.2rem;
            }
        }
    </style>

    <div class="idm-main-wrapper">
        <div class="idm-container">

            <div class="idm-top-section">
                <div class="idm-info">
                    <h2 class="idm-brand">IDM</h2>
                    <p class="idm-text">
                        Indeks Desa Membangun (IDM) merupakan indeks komposit yang dibentuk dari tiga indeks, yaitu
                        <strong>Indeks Ketahanan Sosial</strong>, <strong>Indeks Ketahanan Ekonomi</strong>, dan
                        <strong>Indeks Ketahanan Ekologi/Lingkungan</strong>.
                    </p>
                </div>

                <div class="idm-primary-cards">
                    <div class="card-large">
                        <span class="card-label">SKOR IDM 2024</span>
                        <span class="card-value-bold">0.8152</span>
                    </div>
                    <div class="card-large">
                        <span class="card-label">STATUS IDM 2024</span>
                        <span class="card-value-bold">MAJU</span>
                    </div>
                </div>
            </div>

            <div class="idm-secondary-grid">
                <div class="card-small">
                    <span class="card-label">Target Status</span>
                    <span class="card-value-small">MANDIRI</span>
                </div>
                <div class="card-small">
                    <span class="card-label">Skor Minimal</span>
                    <span class="card-value-small">0.8156</span>
                </div>
                <div class="card-small">
                    <span class="card-label">Penambahan</span>
                    <span class="card-value-small">0.0004</span>
                </div>
                <div class="card-small">
                    <span class="card-label">Skor IKS</span>
                    <span class="card-value-small">0.8457</span>
                </div>
                <div class="card-small">
                    <span class="card-label">Skor IKE</span>
                    <span class="card-value-small">0.6667</span>
                </div>
                <div class="card-small">
                    <span class="card-label">Skor IKL</span>
                    <span class="card-value-small">0.9333</span>
                </div>
            </div>
        </div>
    </div>

    <section class="idm-chart-section">
        <div class="idm-container">
            <h2 class="chart-title-green">Skor IDM tahun ke tahun</h2>

            <div class="line-chart-wrapper">
                <canvas id="idmTrendChart"></canvas>
            </div>
        </div>
    </section>

    <section class="idm-table-container">
        <div class="idm-wrapper">
            <h2 class="table-title">Indikator Indeks Desa Membangun</h2>

            <div class="table-scroll">
                <table class="idm-table-final">
                    <thead>
                        <tr>
                            <th rowspan="2" class="col-no">No</th>
                            <th rowspan="2" class="col-indikator">Indikator IDM</th>
                            <th rowspan="2" class="col-skor">Skor</th>
                            <th rowspan="2" class="col-ket">Keterangan</th>
                            <th rowspan="2" class="col-kegiatan">Kegiatan yang dapat dilakukan</th>
                            <th rowspan="2" class="col-nilai">Nilai+</th>
                            <th colspan="6" class="col-pelaksana">Yang dapat melaksanakan kegiatan</th>

                        <tr>
                            <th class="mini-th">Pusat</th>
                            <th class="mini-th">Provinsi</th>
                            <th class="mini-th">Kab.</th>
                            <th class="mini-th">Desa</th>
                            <th class="mini-th">CSR</th>
                            <th class="mini-th">Lainnya</th>
                        </tr>

                        <tr>
                            <td class="text-center">1</td>
                            <td>Skor Akses Sarkes</td>
                            <td class="text-center">5</td>
                            <td>Waktu tempuh dari ≤ 30 Menit</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>Dinkes, PU</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Skor Dokter</td>
                            <td class="text-center">0</td>
                            <td>Jumlah Dokter Tidak ada</td>
                            <td>Pengadaan Min 1 org Dokter</td>
                            <td class="font-bold">0.0095</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Skor Bidan</td>
                            <td class="text-center">5</td>
                            <td>Jumlah bidan ≥ 1 orang</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Skor Nakes Lain</td>
                            <td class="text-center">3</td>
                            <td>Jumlah tenaga kesehatan lainnya 2 orang</td>
                            <td>Penambahan Nakes Min 3 Org</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Skor Tingkat Kepesertaan BPJS</td>
                            <td class="text-center">5</td>
                            <td>Jumlah peserta BPJS/jumlah penduduk > 0,75</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td>BPJS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Skor Ketersediaan PKBM/ Paket ABC</td>
                            <td class="text-center">1</td>
                            <td>Jumlah PKBM atau Paket ABC Tidak ada</td>
                            <td>Pelaksanaan Kegiatan PKBM/Kejar Paket A B C</td>
                            <td class="font-bold">0.0076</td>
                            <td></td>
                            <td></td>
                            <td>DISDIK</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>Skor Kelompok OR</td>
                            <td class="text-center">3</td>
                            <td>Jumlah kelompok kegiatan olahraga antara 4 s.d 5</td>
                            <td>Penambahan Min 4 Kelp Olahraga</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td>DISPORA</td>
                            <td>DISPORA</td>
                            <td>Karang Taruna</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Skor Akses Sarkes</td>
                            <td class="text-center">5</td>
                            <td>Waktu tempuh dari ≤ 30 Menit</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>Dinkes, PU</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Skor Dokter</td>
                            <td class="text-center">0</td>
                            <td>Jumlah Dokter Tidak ada</td>
                            <td>Pengadaan Min 1 org Dokter</td>
                            <td class="font-bold">0.0095</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Skor Bidan</td>
                            <td class="text-center">5</td>
                            <td>Jumlah bidan ≥ 1 orang</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Skor Nakes Lain</td>
                            <td class="text-center">3</td>
                            <td>Jumlah tenaga kesehatan lainnya 2 orang</td>
                            <td>Penambahan Nakes Min 3 Org</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Skor Tingkat Kepesertaan BPJS</td>
                            <td class="text-center">5</td>
                            <td>Jumlah peserta BPJS/jumlah penduduk > 0,75</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td>BPJS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Skor Ketersediaan PKBM/ Paket ABC</td>
                            <td class="text-center">1</td>
                            <td>Jumlah PKBM atau Paket ABC Tidak ada</td>
                            <td>Pelaksanaan Kegiatan PKBM/Kejar Paket A B C</td>
                            <td class="font-bold">0.0076</td>
                            <td></td>
                            <td></td>
                            <td>DISDIK</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>Skor Kelompok OR</td>
                            <td class="text-center">3</td>
                            <td>Jumlah kelompok kegiatan olahraga antara 4 s.d 5</td>
                            <td>Penambahan Min 4 Kelp Olahraga</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td>DISPORA</td>
                            <td>DISPORA</td>
                            <td>Karang Taruna</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Skor Akses Sarkes</td>
                            <td class="text-center">5</td>
                            <td>Waktu tempuh dari ≤ 30 Menit</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>Dinkes, PU</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Skor Dokter</td>
                            <td class="text-center">0</td>
                            <td>Jumlah Dokter Tidak ada</td>
                            <td>Pengadaan Min 1 org Dokter</td>
                            <td class="font-bold">0.0095</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Skor Bidan</td>
                            <td class="text-center">5</td>
                            <td>Jumlah bidan ≥ 1 orang</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Skor Nakes Lain</td>
                            <td class="text-center">3</td>
                            <td>Jumlah tenaga kesehatan lainnya 2 orang</td>
                            <td>Penambahan Nakes Min 3 Org</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Skor Tingkat Kepesertaan BPJS</td>
                            <td class="text-center">5</td>
                            <td>Jumlah peserta BPJS/jumlah penduduk > 0,75</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td>BPJS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Skor Ketersediaan PKBM/ Paket ABC</td>
                            <td class="text-center">1</td>
                            <td>Jumlah PKBM atau Paket ABC Tidak ada</td>
                            <td>Pelaksanaan Kegiatan PKBM/Kejar Paket A B C</td>
                            <td class="font-bold">0.0076</td>
                            <td></td>
                            <td></td>
                            <td>DISDIK</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>Skor Kelompok OR</td>
                            <td class="text-center">3</td>
                            <td>Jumlah kelompok kegiatan olahraga antara 4 s.d 5</td>
                            <td>Penambahan Min 4 Kelp Olahraga</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td>DISPORA</td>
                            <td>DISPORA</td>
                            <td>Karang Taruna</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Skor Akses Sarkes</td>
                            <td class="text-center">5</td>
                            <td>Waktu tempuh dari ≤ 30 Menit</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>Dinkes, PU</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Skor Dokter</td>
                            <td class="text-center">0</td>
                            <td>Jumlah Dokter Tidak ada</td>
                            <td>Pengadaan Min 1 org Dokter</td>
                            <td class="font-bold">0.0095</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Skor Bidan</td>
                            <td class="text-center">5</td>
                            <td>Jumlah bidan ≥ 1 orang</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Skor Nakes Lain</td>
                            <td class="text-center">3</td>
                            <td>Jumlah tenaga kesehatan lainnya 2 orang</td>
                            <td>Penambahan Nakes Min 3 Org</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Skor Tingkat Kepesertaan BPJS</td>
                            <td class="text-center">5</td>
                            <td>Jumlah peserta BPJS/jumlah penduduk > 0,75</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td>BPJS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Skor Ketersediaan PKBM/ Paket ABC</td>
                            <td class="text-center">1</td>
                            <td>Jumlah PKBM atau Paket ABC Tidak ada</td>
                            <td>Pelaksanaan Kegiatan PKBM/Kejar Paket A B C</td>
                            <td class="font-bold">0.0076</td>
                            <td></td>
                            <td></td>
                            <td>DISDIK</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>Skor Kelompok OR</td>
                            <td class="text-center">3</td>
                            <td>Jumlah kelompok kegiatan olahraga antara 4 s.d 5</td>
                            <td>Penambahan Min 4 Kelp Olahraga</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td>DISPORA</td>
                            <td>DISPORA</td>
                            <td>Karang Taruna</td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Skor Akses Sarkes</td>
                            <td class="text-center">5</td>
                            <td>Waktu tempuh dari ≤ 30 Menit</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>Dinkes, PU</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Skor Dokter</td>
                            <td class="text-center">0</td>
                            <td>Jumlah Dokter Tidak ada</td>
                            <td>Pengadaan Min 1 org Dokter</td>
                            <td class="font-bold">0.0095</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Skor Bidan</td>
                            <td class="text-center">5</td>
                            <td>Jumlah bidan ≥ 1 orang</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Skor Nakes Lain</td>
                            <td class="text-center">3</td>
                            <td>Jumlah tenaga kesehatan lainnya 2 orang</td>
                            <td>Penambahan Nakes Min 3 Org</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Skor Tingkat Kepesertaan BPJS</td>
                            <td class="text-center">5</td>
                            <td>Jumlah peserta BPJS/jumlah penduduk > 0,75</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td>BPJS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Skor Ketersediaan PKBM/ Paket ABC</td>
                            <td class="text-center">1</td>
                            <td>Jumlah PKBM atau Paket ABC Tidak ada</td>
                            <td>Pelaksanaan Kegiatan PKBM/Kejar Paket A B C</td>
                            <td class="font-bold">0.0076</td>
                            <td></td>
                            <td></td>
                            <td>DISDIK</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>Skor Kelompok OR</td>
                            <td class="text-center">3</td>
                            <td>Jumlah kelompok kegiatan olahraga antara 4 s.d 5</td>
                            <td>Penambahan Min 4 Kelp Olahraga</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td>DISPORA</td>
                            <td>DISPORA</td>
                            <td>Karang Taruna</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Skor Akses Sarkes</td>
                            <td class="text-center">5</td>
                            <td>Waktu tempuh dari ≤ 30 Menit</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>Dinkes, PU</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Skor Dokter</td>
                            <td class="text-center">0</td>
                            <td>Jumlah Dokter Tidak ada</td>
                            <td>Pengadaan Min 1 org Dokter</td>
                            <td class="font-bold">0.0095</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Skor Bidan</td>
                            <td class="text-center">5</td>
                            <td>Jumlah bidan ≥ 1 orang</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Skor Nakes Lain</td>
                            <td class="text-center">3</td>
                            <td>Jumlah tenaga kesehatan lainnya 2 orang</td>
                            <td>Penambahan Nakes Min 3 Org</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Skor Tingkat Kepesertaan BPJS</td>
                            <td class="text-center">5</td>
                            <td>Jumlah peserta BPJS/jumlah penduduk > 0,75</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td>BPJS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Skor Ketersediaan PKBM/ Paket ABC</td>
                            <td class="text-center">1</td>
                            <td>Jumlah PKBM atau Paket ABC Tidak ada</td>
                            <td>Pelaksanaan Kegiatan PKBM/Kejar Paket A B C</td>
                            <td class="font-bold">0.0076</td>
                            <td></td>
                            <td></td>
                            <td>DISDIK</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>Skor Kelompok OR</td>
                            <td class="text-center">3</td>
                            <td>Jumlah kelompok kegiatan olahraga antara 4 s.d 5</td>
                            <td>Penambahan Min 4 Kelp Olahraga</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td>DISPORA</td>
                            <td>DISPORA</td>
                            <td>Karang Taruna</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Skor Akses Sarkes</td>
                            <td class="text-center">5</td>
                            <td>Waktu tempuh dari ≤ 30 Menit</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>Dinkes, PU</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Skor Dokter</td>
                            <td class="text-center">0</td>
                            <td>Jumlah Dokter Tidak ada</td>
                            <td>Pengadaan Min 1 org Dokter</td>
                            <td class="font-bold">0.0095</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Skor Bidan</td>
                            <td class="text-center">5</td>
                            <td>Jumlah bidan ≥ 1 orang</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Skor Nakes Lain</td>
                            <td class="text-center">3</td>
                            <td>Jumlah tenaga kesehatan lainnya 2 orang</td>
                            <td>Penambahan Nakes Min 3 Org</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Skor Tingkat Kepesertaan BPJS</td>
                            <td class="text-center">5</td>
                            <td>Jumlah peserta BPJS/jumlah penduduk > 0,75</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td>BPJS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Skor Ketersediaan PKBM/ Paket ABC</td>
                            <td class="text-center">1</td>
                            <td>Jumlah PKBM atau Paket ABC Tidak ada</td>
                            <td>Pelaksanaan Kegiatan PKBM/Kejar Paket A B C</td>
                            <td class="font-bold">0.0076</td>
                            <td></td>
                            <td></td>
                            <td>DISDIK</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>Skor Kelompok OR</td>
                            <td class="text-center">3</td>
                            <td>Jumlah kelompok kegiatan olahraga antara 4 s.d 5</td>
                            <td>Penambahan Min 4 Kelp Olahraga</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td>DISPORA</td>
                            <td>DISPORA</td>
                            <td>Karang Taruna</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Skor Akses Sarkes</td>
                            <td class="text-center">5</td>
                            <td>Waktu tempuh dari ≤ 30 Menit</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>Dinkes, PU</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Skor Dokter</td>
                            <td class="text-center">0</td>
                            <td>Jumlah Dokter Tidak ada</td>
                            <td>Pengadaan Min 1 org Dokter</td>
                            <td class="font-bold">0.0095</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Skor Bidan</td>
                            <td class="text-center">5</td>
                            <td>Jumlah bidan ≥ 1 orang</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Skor Nakes Lain</td>
                            <td class="text-center">3</td>
                            <td>Jumlah tenaga kesehatan lainnya 2 orang</td>
                            <td>Penambahan Nakes Min 3 Org</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Skor Tingkat Kepesertaan BPJS</td>
                            <td class="text-center">5</td>
                            <td>Jumlah peserta BPJS/jumlah penduduk > 0,75</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DINKES</td>
                            <td></td>
                            <td>BPJS</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">12</td>
                            <td>Skor Ketersediaan PKBM/ Paket ABC</td>
                            <td class="text-center">1</td>
                            <td>Jumlah PKBM atau Paket ABC Tidak ada</td>
                            <td>Pelaksanaan Kegiatan PKBM/Kejar Paket A B C</td>
                            <td class="font-bold">0.0076</td>
                            <td></td>
                            <td></td>
                            <td>DISDIK</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-center">18</td>
                            <td>Skor Kelompok OR</td>
                            <td class="text-center">3</td>
                            <td>Jumlah kelompok kegiatan olahraga antara 4 s.d 5</td>
                            <td>Penambahan Min 4 Kelp Olahraga</td>
                            <td class="font-bold">0.0038</td>
                            <td></td>
                            <td>DISPORA</td>
                            <td>DISPORA</td>
                            <td>Karang Taruna</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="row-separator">
                            <td colspan="5" class="text-right font-bold">IKS 2024</td>
                            <td class="font-bold">0.8457</td>
                            <td colspan="6"></td>
                        </tr>

                        <tr>
                            <td class="text-center">1</td>
                            <td>Skor Keragaman Produksi</td>
                            <td class="text-center">1</td>
                            <td>Jumlah Industri Mikro/Jumlah KK < 0,001</td>
                            <td>Peningkatan Jumlah Industri Mikro/UKM hingga >= 0,4% jumlah KK di Desa</td>
                            <td class="font-bold">0.0222</td>
                            <td>DISPERINDAKOP UKM</td>
                            <td>DISPERINDAKOP UKM</td>
                            <td>DISPERINDAKOP UKM</td>
                            <td>DD</td>
                            <td>CSR</td>
                            <td>Perorangan</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Skor Pertokoan</td>
                            <td class="text-center">5</td>
                            <td>Jarak ke kelompok pertokoan terdekat <= 7 KM</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td></td>
                            <td>DISPERINDAKOP UKM</td>
                            <td></td>
                            <td></td>
                            <td>Perorangan, Swasta</td>
                        </tr>
                        <tr class="row-separator">
                            <td colspan="5" class="text-right font-bold">IKE 2024</td>
                            <td class="font-bold">0.6667</td>
                            <td colspan="6"></td>
                        </tr>

                        <tr>
                            <td class="text-center">1</td>
                            <td>Skor Kualitas Lingkungan</td>
                            <td class="text-center">5</td>
                            <td>Pencemaran (air, udara, tanah, limbah disungai) di desa (jumlah pencemaran/4) = 0</td>
                            <td>-</td>
                            <td class="font-bold">0.0000</td>
                            <td></td>
                            <td>DLH</td>
                            <td>DLH, DINKES</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="row-footer-idm">
                            <td colspan="5" class="text-right font-bold">IKL 2024</td>
                            <td class="font-bold">0.9333</td>
                            <td colspan="6"></td>
                        </tr>
                        <tr class="row-footer-idm">
                            <td colspan="5" class="text-right font-bold">IDM 2024</td>
                            <td class="font-bold">0.8152</td>
                            <td colspan="6"></td>
                        </tr>
                        <tr class="row-footer-idm">
                            <td colspan="5" class="text-right font-bold">SKOR STATUS IDM 2024</td>
                            <td class="font-bold text-uppercase">MAJU</td>
                            <td colspan="6"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lineCtx = document.getElementById('idmTrendChart').getContext('2d');

            new Chart(lineCtx, {
                type: 'line',
                data: {
                    labels: ['2021', '2022', '2023', '2024'],
                    datasets: [{
                        label: 'Skor IDM',
                        data: [0.63, 0.73, 0.81, 0.82], // Data perkiraan berdasarkan gambar
                        borderColor: '#ff9f89', // Warna oranye muda sesuai gambar
                        backgroundColor: 'transparent',
                        borderWidth: 3,
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#ff9f89',
                        pointRadius: 6,
                        pointHoverRadius: 8,
                        tension: 0 // Membuat garis lurus, bukan melengkung
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 1,
                            ticks: {
                                stepSize: 0.1
                            },
                            grid: {
                                borderDash: [5, 5] // Membuat garis grid putus-putus
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
                        }
                    }
                }
            });
        });
    </script>

</x-frontend>