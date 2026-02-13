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

        </div>

    </section>
    <section class="sdgs-goals-grid">
        <div class="container mx-auto px-4 py-10">
            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Capaian 18 Tujuan SDGs Desa</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Loop dimulai di sini, $item dibuat di sini --}}
                @forelse($sdgs_items as $item)

                <div class="card bg-white shadow-md border border-gray-100 rounded-xl overflow-hidden hover:shadow-lg transition group">
                    <div class="p-5 flex items-start gap-4">

                        {{-- Panggil fungsi Model di sini --}}
                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-lg font-bold text-white text-xl" style="background-color: {{ $item->getColor() }};">
                            {{ $item->goal_number }}
                        </div>

                        <div class="flex-1">
                            <h4 class="font-bold text-gray-800 text-lg mb-2 group-hover:text-blue-600 transition">
                                {{ $item->title }}
                            </h4>

                            {{-- Progress Bar --}}
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mb-1">
                                <div class="h-2.5 rounded-full" style="width: {{ $item->score }}%; 
                                        background-color: {{ $item->score < 40 ? '#ef4444' : ($item->score < 70 ? '#eab308' : '#22c55e') }}">
                                </div>
                            </div>

                            <div class="flex justify-between items-center mt-1">
                                <span class="text-xs text-gray-500">Capaian</span>
                                <span class="font-bold text-sm">{{ number_format($item->score, 2) }}</span>
                            </div>
                        </div>

                    </div>
                </div>

                @empty
                <div class="col-span-3 text-center py-10 text-gray-500">
                    Data SDGs tahun {{ $tahun_pilih }} belum diinput.
                </div>
                @endforelse
                {{-- Loop berakhir, $item hilang (menjadi undefined) di sini --}}

            </div>
        </div>
    </section>
</x-frontend>
