<x-frontend>
    <section class="potensi-detail-section">
        <div class="potensi-detail-container">

            <div class="potensi-main-content">

                <div class="potensi-breadcrumb">
                    <a href="/">Home</a>
                    <span class="separator">/</span>
                    <a href="{{ route('frontend.wisata') ?? '#' }}">Potensi Desa</a>
                    <span class="separator">/</span>
                    <span class="active">{{ $potensi->nama_wisata ?? 'Detail Potensi' }}</span>
                </div>

                <h1 class="potensi-title">{{ strtoupper($potensi->nama_wisata ?? 'NAMA POTENSI') }}</h1>

                <div class="potensi-hero-image">
                    <img src="{{ asset('storage/' . ($potensi->gambar ?? '')) }}" alt="{{ $potensi->nama_wisata }}" onerror="this.src='https://placehold.co/800x450?text=Gambar+Potensi'">

                    <div class="potensi-badge">POTENSI UNGGULAN</div>
                </div>

                <div class="potensi-body-text">
                    {!! $potensi->deskripsi ?? '<p>Deskripsi detail mengenai potensi desa ini akan ditampilkan di sini.</p>' !!}
                </div>

            </div>

            <aside class="potensi-sidebar">
                <div class="sidebar-widget">
                    <h3 class="sidebar-widget-title">Potensi Lainnya</h3>

                    <div class="other-potensi-list">
                        @forelse($potensi_lain ?? [] as $lain)
                        <a href="{{ route('frontend.potensi.detail', $lain->id) }}" class="other-potensi-item">
                            <img src="{{ asset('storage/' . $lain->gambar) }}" class="other-potensi-img" alt="{{ $lain->nama_wisata }}" onerror="this.src='https://placehold.co/100x100?text=Foto'">
                            <div class="other-potensi-details">
                                <h4 class="other-potensi-name">{{ $lain->nama_wisata }}</h4>
                            </div>
                        </a>
                        @empty
                        <p style="color: #888; font-size: 0.9rem;">Belum ada potensi lain.</p>
                        @endforelse
                    </div>
                </div>
            </aside>

        </div>
    </section>

    <style>
        /* --- WADAH UTAMA --- */
        .potensi-detail-section {
            background-color: #fbfbfb;
            padding: 120px 20px 60px 20px;
            /* Jarak atas besar agar tidak menabrak navbar */
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        .potensi-detail-container {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2.2fr 1fr;
            /* Kiri lebih lebar dari kanan */
            gap: 40px;
            align-items: start;
        }

        /* --- KOLOM KIRI (KONTEN) --- */
        .potensi-main-content {
            background-color: #ffffff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        }

        .potensi-breadcrumb {
            font-size: 0.9rem;
            color: #6b7280;
            margin-bottom: 20px;
        }

        .potensi-breadcrumb a {
            color: #7ED957;
            text-decoration: none;
            font-weight: 600;
        }

        .potensi-breadcrumb .separator {
            margin: 0 8px;
            color: #ccc;
        }

        .potensi-breadcrumb .active {
            color: #111;
        }

        .potensi-title {
            font-size: 2.2rem;
            font-weight: 800;
            color: #111;
            margin: 0 0 25px 0;
            line-height: 1.3;
        }

        .potensi-hero-image {
            width: 100%;
            position: relative;
            margin-bottom: 30px;
            border-radius: 8px;
            overflow: hidden;
        }

        .potensi-hero-image img {
            width: 100%;
            max-height: 450px;
            object-fit: cover;
            display: block;
        }

        .potensi-badge {
            position: absolute;
            bottom: 20px;
            left: -10px;
            background-color: #F27A1A;
            /* Oranye */
            color: white;
            padding: 8px 20px 8px 30px;
            font-weight: 800;
            font-size: 0.9rem;
            border-radius: 0 30px 30px 0;
            box-shadow: 0 4px 10px rgba(242, 122, 26, 0.4);
        }

        .potensi-body-text {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #4b5563;
            text-align: justify;
        }

        /* --- KOLOM KANAN (SIDEBAR) --- */
        .potensi-sidebar {
            position: sticky;
            top: 100px;
            /* Sidebar mengikuti scroll */
        }

        .sidebar-widget {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        }

        .sidebar-widget-title {
            font-size: 1.2rem;
            font-weight: 800;
            margin: 0 0 20px 0;
            padding-bottom: 15px;
            border-bottom: 2px solid #7ED957;
            /* Garis hijau */
        }

        .other-potensi-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .other-potensi-item {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            color: inherit;
            transition: transform 0.3s;
            background: #f9f9f9;
            padding: 10px;
            border-radius: 8px;
        }

        .other-potensi-item:hover {
            transform: translateX(5px);
            background: #f1f1f1;
        }

        .other-potensi-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
            /* Dibuat bulat agar senada dengan halaman depan */
        }

        .other-potensi-name {
            font-size: 0.95rem;
            font-weight: 700;
            color: #333;
            margin: 0;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .potensi-detail-container {
                grid-template-columns: 1fr;
                /* Jadi 1 kolom di HP */
            }
        }

    </style>

</x-frontend>
