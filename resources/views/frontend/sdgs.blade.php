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
        /* Layout Spesifik SDGs */
        .sdgs-main-layout {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
            margin-bottom: 50px;
        }

        .sdgs-left-content {
            flex: 1.2;
        }

        .sdgs-title {
            color: #72c02c;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .sdgs-description {
            font-size: 1rem;
            line-height: 1.6;
            color: #333;
            margin-bottom: 30px;
        }

        /* Kartu Skor Horizontal (Mirip Gambar) */
        .sdgs-score-card-horizontal {
            background: #fff;
            padding: 25px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 450px;
        }

        .score-text {
            display: flex;
            flex-direction: column;
        }

        .score-text .label {
            font-size: 1.1rem;
            font-weight: 800;
            color: #333;
        }

        .score-text .sub-label {
            font-size: 1.1rem;
            font-weight: 800;
            color: #333;
        }

        .score-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: #4c5258;
        }

        /* Ilustrasi Kanan */
        .sdgs-right-illustration {
            flex: 0.8;
            display: flex;
            justify-content: center;
        }

        .sdgs-right-illustration img {
            max-width: 100%;
            height: auto;
        }

        /* Grid Kartu Bawah */
        .sdgs-grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .sdgs-item-card {
            background: #fff;
            padding: 25px 15px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }

        .sdgs-icon-placeholder {
            width: 60px;
            height: 60px;
            background: #f0f0f0;
            margin: 0 auto 15px;
            border-radius: 8px;
        }

        .sdgs-item-card p {
            font-size: 0.85rem;
            font-weight: 700;
            color: #444;
            margin: 0;
        }

        /* Layout Wrapper */
        .sdgs-grid-section {
            padding-bottom: 80px;
            background-color: #f8f9fa;
        }

        .sdgs-grid-wrapper {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            /* 4 Kolom sama persis gambar */
            gap: 20px;
        }

        /* Card Style */
        .sdgs-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            /* Shadow halus */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 160px;
            /* Menjaga tinggi kartu seragam */
            transition: transform 0.2s;
        }

        .sdgs-card:hover {
            transform: translateY(-5px);
        }

        /* Judul Kartu */
        .card-title {
            font-size: 0.9rem;
            font-weight: 700;
            /* Bold seperti gambar */
            color: #333;
            line-height: 1.4;
            margin-bottom: 25px;
        }

        /* Bagian Bawah Kartu (Ikon & Nilai) */
        .card-bottom {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            /* Ikon di bawah, Nilai di bawah */
        }

        /* Styling Ikon Kotak */
        .sdgs-icon {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sdgs-icon img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Styling Nilai */
        .score-box {
            text-align: right;
        }

        .score-label {
            display: block;
            font-size: 0.75rem;
            color: #999;
            /* Abu-abu kecil */
            font-weight: 600;
            margin-bottom: 0px;
        }

        .score-value {
            display: block;
            font-size: 2rem;
            /* Ukuran besar seperti gambar */
            font-weight: 800;
            /* Extra Bold */
            color: #222;
            /* Hampir hitam */
            line-height: 1;
        }

        /* Warna-Warni Ikon (Fallback jika gambar tidak load, background tetap berwarna) */
        .icon-red {
            background-color: #e5243b;
        }

        .icon-mustard {
            background-color: #dda63a;
        }

        .icon-green {
            background-color: #4c9f38;
        }

        .icon-darkred {
            background-color: #c5192d;
        }

        .icon-orange-red {
            background-color: #ff3a21;
        }

        .icon-cyan {
            background-color: #26bde2;
        }

        .icon-yellow {
            background-color: #fcc30b;
        }

        .icon-maroon {
            background-color: #a21942;
        }

        .icon-orange {
            background-color: #fd6925;
        }

        .icon-pink {
            background-color: #dd1367;
        }

        .icon-gold {
            background-color: #fd9d24;
        }

        .icon-bronze {
            background-color: #bf8b2e;
        }

        .icon-darkgreen {
            background-color: #3f7e44;
        }

        .icon-blue {
            background-color: #0a97d9;
        }

        .icon-lime {
            background-color: #56c02b;
        }

        .icon-navy {
            background-color: #00689d;
        }

        .icon-darkblue {
            background-color: #19486a;
        }

        .icon-teal {
            background-color: #00a08b;
        }

        /* Khusus SDG 18 */

        /* Responsive Mobile */
        @media (max-width: 1024px) {
            .sdgs-grid-wrapper {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .sdgs-grid-wrapper {
                grid-template-columns: 1fr;
            }

            .score-value {
                font-size: 1.8rem;
            }
        }

    </style>
    <section class="sdgs-page">
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
            <div class="sdgs-main-layout">
                <div class="sdgs-left-content">
                    <h2 class="sdgs-title">SDGs Desa</h2>
                    <p class="sdgs-description">
                        SDGs desa mengacu pada upaya yang dilakukan di tingkat desa untuk mencapai Tujuan Pembangunan Berkelanjutan (Sustainable Development Goals/SDGs). SDGs merupakan agenda global yang ditetapkan oleh Perserikatan Bangsa-Bangsa (PBB) untuk mengatasi berbagai tantangan sosial, ekonomi, dan lingkungan di seluruh dunia.
                    </p>

                    <div class="sdgs-score-card-horizontal">
                        <div class="score-text">
                            <span class="label">Skor SDGs Desa</span>
                            <span class="sub-label">Bedi Kulon</span>
                        </div>
                        <div class="score-number">44.63</div>
                    </div>
                </div>

                <div class="sdgs-right-illustration">
                    <img src="assets/img/sdgs-illustration.png" alt="SDGs Illustration">
                </div>
            </div>
        </div>
    </section>
    <section class="sdgs-grid-section">
        <div class="infografis-container">
            <div class="sdgs-grid-wrapper">

                <div class="sdgs-card">
                    <div class="card-title">Desa Tanpa Kemiskinan</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-red"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-01.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">38.47</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Desa Tanpa Kelaparan</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-mustard"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-02.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">33.07</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Desa Sehat dan Sejahtera</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-green"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-03.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">82.05</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Pendidikan Desa Berkualitas</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-darkred"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-04.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">14.73</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Keterlibatan Perempuan Desa</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-orange-red"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-05.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">28.57</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Desa Layak Air Bersih dan Sanitasi</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-cyan"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-06.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">63.33</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Desa Berenergi Bersih dan Terbarukan</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-yellow"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-07.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">99.8</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Pertumbuhan Ekonomi Desa Merata</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-maroon"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-08.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">26.85</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Infrastruktur dan Inovasi Desa Sesuai Kebutuhan</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-orange"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-09.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">52.33</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Desa Tanpa Kesenjangan</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-pink"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-10.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">40.82</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Kawasan Pemukiman Desa Aman dan Nyaman</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-gold"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-11.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">53.01</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Konsumsi dan Produksi Desa Sadar Lingkungan</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-bronze"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-12.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">50</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Desa Tanggap Perubahan Iklim</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-darkgreen"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-13.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">0</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Desa Peduli Lingkungan Laut</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-blue"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-14.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">0</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Desa Peduli Lingkungan Darat</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-lime"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-15.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">33.33</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Desa Damai Berkeadilan</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-navy"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-16.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">60.99</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Kemitraan Untuk Pembangunan Desa</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-darkblue"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-17.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">81.02</span>
                        </div>
                    </div>
                </div>

                <div class="sdgs-card">
                    <div class="card-title">Kelembagaan Desa Dinamis dan Budaya Desa Adaptif</div>
                    <div class="card-bottom">
                        <div class="sdgs-icon icon-teal"><img src="https://sdgs.un.org/sites/default/files/goals/E_SDG_goals_icons-individual-rgb-18.png" alt="Icon"></div>
                        <div class="score-box">
                            <span class="score-label">Nilai</span>
                            <span class="score-value">44.95</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



</x-frontend>
