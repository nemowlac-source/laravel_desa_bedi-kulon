<x-frontend>
    <style>
        /* Container Layout */
        .pemerintahan-section {
            padding: 60px 0;
            background-color: #f9f9f9;
            /* Abu-abu muda */
            font-family: 'Poppins', sans-serif;
        }

        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Title */
        .page-header {
            margin-bottom: 50px;
            text-align: center;
            /* Judul Tengah */
        }

        .page-title {
            color: #333;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        /* Garis biru di bawah judul */
        .title-underline {
            width: 80px;
            height: 4px;
            background-color: #38bdf8;
            /* Biru Pemerintahan */
            margin: 0 auto 20px auto;
        }

        .page-subtitle {
            color: #555;
            font-size: 1rem;
            max-width: 800px;
            margin: 0 auto;
        }

        /* --- SOTK SECTION --- */
        .sotk-wrapper {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 60px;
            text-align: center;
        }

        .sotk-img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        /* --- GRID SYSTEM (APARAT) --- */
        .aparat-grid {
            display: grid;
            /* Desktop: 4 Kolom sesuai foto referensi */
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 50px;
        }

        /* --- CARD STYLE --- */
        .aparat-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform 0.3s;
        }

        .aparat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Foto Aparat */
        .aparat-thumb {
            height: 320px;
            /* Tinggi foto fixed agar rapi */
            overflow: hidden;
            background-color: #eee;
        }

        .aparat-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Agar foto tidak gepeng */
            object-position: top center;
            /* Fokus ke wajah */
        }

        /* Kotak Nama (Biru) */
        .aparat-info {
            background-color: #38bdf8;
            /* WARNA BIRU (Sesuai Request) */
            padding: 15px;
            text-align: center;
            color: #fff;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 90px;
        }

        .aparat-name {
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .aparat-job {
            font-size: 0.8rem;
            font-weight: 400;
            opacity: 0.9;
            text-transform: uppercase;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            padding-top: 5px;
            display: inline-block;
        }

        /* --- RESPONSIVE MEDIA QUERIES --- */

        /* Tablet (2 Kolom) */
        @media (max-width: 992px) {
            .aparat-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .page-title {
                font-size: 2rem;
            }
        }

        /* Mobile (1 Kolom) */
        @media (max-width: 600px) {
            .aparat-grid {
                grid-template-columns: 1fr;
            }

            .aparat-thumb {
                height: 350px;
                /* Foto lebih tinggi di HP */
            }
        }

    </style>

    <section class="pemerintahan-section">
        <div class="container-custom">

            <div class="page-header">
                <h4 style="color: #38bdf8; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">SOTK</h4>
                <h1 class="page-title">Struktur Organisasi</h1>
                <div class="title-underline"></div>
                <p class="page-subtitle">Pemerintah Desa Bedi Kulon, Kecamatan Marang Kayu</p>
            </div>

            <div class="sotk-wrapper">
                <img src="{{ asset('img/sotk.png') }}" alt="Bagan Struktur Organisasi" class="sotk-img" onerror="this.style.display='none'; this.insertAdjacentHTML('afterend', '<p style=\'padding:50px; color:#888;\'>Gambar SOTK belum tersedia.</p>')">
            </div>

            <div class="page-header" style="margin-top: 80px;">
                <h1 class="page-title">Aparat Pemerintah Desa</h1>
                <div class="title-underline"></div>
            </div>

            <div class="aparat-grid">

                @php
                $aparat = [
                ['nama' => 'Wiji Puguh Hariadi', 'jabatan' => 'Sekretaris Desa', 'foto' => 'wiji.jpg'],
                ['nama' => 'Hari Wijathmiko', 'jabatan' => 'Kasi Pemerintahan', 'foto' => 'hari.jpg'],
                ['nama' => 'Supardi', 'jabatan' => 'Kasi Kesejahteraan', 'foto' => 'supardi.jpg'],
                ['nama' => 'Mujib', 'jabatan' => 'Kasi Pelayanan', 'foto' => 'mujib.jpg'],
                ['nama' => 'Elifianti Esthu Riandi', 'jabatan' => 'Kaur Keuangan', 'foto' => 'eli.jpg'],
                ['nama' => 'Machfud GP', 'jabatan' => 'Kaur Umum & Tata Usaha', 'foto' => 'machfud.jpg'],
                ['nama' => 'Dewi Setyowati', 'jabatan' => 'Kaur Perencanaan', 'foto' => 'dewi.jpg'],
                ['nama' => 'Wawan Hernowo', 'jabatan' => 'Kepala Dusun Nunu', 'foto' => 'wawan.jpg'],
                ['nama' => 'Fajar Sotya Pratama', 'jabatan' => 'Kepala Dusun Karangtengah', 'foto' => 'fajar.jpg'],
                ['nama' => 'Deny Afin Kurniawan', 'jabatan' => 'Kepala Dusun Baku', 'foto' => 'deny.jpg'],
                ];
                @endphp

                @foreach($aparat as $p)
                <div class="aparat-card">
                    <div class="aparat-thumb">
                        <img src="{{ asset('img/aparat/' . $p['foto']) }}" alt="{{ $p['nama'] }}" onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($p['nama']) }}&size=400&background=random&color=fff'">
                    </div>

                    <div class="aparat-info">
                        <h3 class="aparat-name">{{ $p['nama'] }}</h3>
                        <span class="aparat-job">{{ $p['jabatan'] }}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

</x-frontend>
