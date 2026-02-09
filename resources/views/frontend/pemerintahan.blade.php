<x-frontend>
    <style>
        /* Container Layout */
        .pemerintahan-section {
            padding: 60px 0;
            background-color: #f9f9f9;
            font-family: 'Poppins', sans-serif;
            min-height: 80vh;
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
        }

        .page-title {
            color: #333;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .title-underline {
            width: 80px;
            height: 4px;
            background-color: #38bdf8;
            margin: 0 auto 20px auto;
        }

        .page-subtitle {
            color: #555;
            font-size: 1rem;
            max-width: 800px;
            margin: 0 auto;
        }

        /* --- SOTK SECTION (BAGAN) --- */
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
            overflow: hidden;
            background-color: #eee;
            position: relative;
        }

        .aparat-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
        }

        /* Kotak Info */
        .aparat-info {
            background-color: #38bdf8;
            /* Biru Langit */
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
            opacity: 0.95;
            text-transform: uppercase;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            padding-top: 5px;
            display: inline-block;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .aparat-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .page-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 600px) {
            .aparat-grid {
                grid-template-columns: 1fr;
            }

            .aparat-thumb {
                height: 350px;
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
                <img src="{{ asset('img/sotk.png') }}" alt="Bagan Struktur Organisasi" class="sotk-img" onerror="this.style.display='none'; this.insertAdjacentHTML('afterend', '<p style=\'padding:40px; color:#888; font-style:italic;\'>Gambar Bagan Struktur belum diunggah.</p>')">
            </div>

            <div class="page-header" style="margin-top: 80px;">
                <h1 class="page-title">Aparat Pemerintah Desa</h1>
                <div class="title-underline"></div>
                <p class="page-subtitle">Daftar perangkat desa yang menjabat saat ini</p>
            </div>

            <div class="aparat-grid">

                @forelse($perangkats as $item)
                <div class="aparat-card">
                    <div class="aparat-thumb">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}" onerror="this.src='https://placehold.co/400x500?text=No+Photo'">
                    </div>

                    <div class="aparat-info">
                        <h3 class="aparat-name">{{ $item->nama }}</h3>
                        <span class="aparat-job">{{ $item->jabatan }}</span>

                        @if($item->niap)
                        <span style="font-size: 0.7rem; margin-top: 4px; opacity: 0.8;">
                            NIAP: {{ $item->niap }}
                        </span>
                        @endif
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 50px; color: #888;">
                    <i class="ph ph-users-three" style="font-size: 3rem; color: #ccc; margin-bottom: 10px;"></i>
                    <h3>Belum ada data perangkat desa.</h3>
                    <p>Silakan input data melalui halaman Admin.</p>
                </div>
                @endforelse

            </div>
        </div>
    </section>

</x-frontend>
