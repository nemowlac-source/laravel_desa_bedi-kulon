<x-frontend>
    <section class="belanja-detail-section">
        <div class="belanja-container">

            <div class="belanja-breadcrumb">
                <a href="/">Home</a> <span>/</span>
                <a href="{{ route('frontend.belanja') ?? '#' }}">Belanja Desa</a> <span>/</span>
                <span class="active">{{ $produk->nama_produk ?? 'Detail Produk' }}</span>
            </div>

            <div class="produk-card">

                <div class="produk-gallery">
                    <div class="main-image-box">
                        <img src="{{ asset('storage/' . ($produk->gambar ?? '')) }}" alt="{{ $produk->nama_produk }}" onerror="this.src='https://placehold.co/600x600?text=Foto+Produk'">
                    </div>

                    <div class="thumbnail-list">
                        <div class="thumb-box active">
                            <img src="{{ asset('storage/' . ($produk->gambar ?? '')) }}" alt="Thumbnail" onerror="this.src='https://placehold.co/100x100?text=Foto'">
                        </div>
                    </div>
                </div>

                <div class="produk-info">

                    <div class="title-row">
                        <h1 class="produk-title">{{ $produk->nama_produk ?? 'NAMA PRODUK' }}</h1>
                        <button class="btn-wishlist">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="produk-meta">
                        <div class="stars">
                            &#9733;&#9733;&#9733;&#9733;&#9733; </div>
                        <span class="penilaian">Penilaian (0)</span>
                        <span class="separator">|</span>
                        <span class="kategori">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:4px;">
                                <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                <line x1="7" y1="7" x2="7.01" y2="7"></line>
                            </svg>
                            {{ $produk->kategori ?? 'Pertanian' }}
                        </span>
                    </div>

                    <div class="produk-price">
                        Rp{{ number_format($produk->harga ?? 0, 0, ',', '.') }}
                    </div>

                    <div class="produk-desc">
                        {{ $produk->deskripsi ?? 'Deskripsi produk UMKM desa.' }}
                    </div>

                    <a href="https://wa.me/{{ $produk->no_hp ?? '' }}?text=Halo, saya tertarik dengan produk {{ $produk->nama_produk }} yang ada di Website Desa." target="_blank" class="btn-wa">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg>
                        Hubungi Penjual
                    </a>

                    <div class="produk-share">
                        <span class="share-text">Bagikan:</span>
                        <a href="#" class="share-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg></a>
                        <a href="#" class="share-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                            </svg></a>
                        <a href="#" class="share-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                            </svg></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        /* --- STYLING UNTUK DETAIL BELANJA --- */
        .belanja-detail-section {
            padding: 120px 20px 60px 20px;
            /* Jarak atas besar agar tidak menabrak navbar */
            background-color: #f9fafb;
            font-family: 'Poppins', sans-serif;
        }

        .belanja-container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .belanja-breadcrumb {
            font-size: 0.9rem;
            color: #6b7280;
            margin-bottom: 20px;
        }

        .belanja-breadcrumb a {
            color: #2ac0b4;
            text-decoration: none;
        }

        .belanja-breadcrumb span {
            margin: 0 8px;
        }

        .belanja-breadcrumb .active {
            color: #111;
            font-weight: 600;
        }

        /* Kartu Utama (Grid 2 Kolom) */
        .produk-card {
            background-color: #ffffff;
            border-radius: 4px;
            border: 1px solid #e5e7eb;
            padding: 30px;
            display: grid;
            grid-template-columns: 40% 60%;
            /* Kiri 40%, Kanan 60% */
            gap: 40px;
        }

        /* Kolom Kiri: Gambar */
        .main-image-box img {
            width: 100%;
            aspect-ratio: 1 / 1;
            /* Membuat gambar persegi */
            object-fit: cover;
            border-radius: 4px;
            border: 1px solid #f3f4f6;
        }

        .thumbnail-list {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .thumb-box {
            width: 70px;
            height: 70px;
            border: 2px solid transparent;
            cursor: pointer;
            border-radius: 4px;
        }

        .thumb-box.active {
            border-color: #7ED957;
            /* Warna hijau penanda aktif */
        }

        .thumb-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 2px;
        }

        /* Kolom Kanan: Info Produk */
        .produk-info {
            display: flex;
            flex-direction: column;
        }

        .title-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .produk-title {
            font-size: 1.6rem;
            font-weight: 800;
            color: #111;
            margin: 0;
            text-transform: uppercase;
            line-height: 1.3;
        }

        .btn-wishlist {
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            transition: transform 0.2s;
        }

        .btn-wishlist:hover {
            transform: scale(1.1);
        }

        .produk-meta {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 25px;
        }

        .stars {
            color: #d1d5db;
            font-size: 1.2rem;
            letter-spacing: 2px;
        }

        .separator {
            color: #d1d5db;
        }

        .kategori {
            display: flex;
            align-items: center;
        }

        .produk-price {
            font-size: 2rem;
            font-weight: 800;
            color: #111;
            margin-bottom: 25px;
        }

        .produk-desc {
            font-size: 1rem;
            color: #444;
            line-height: 1.6;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        /* Tombol WA Hijau Terang */
        .btn-wa {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: #7ED957;
            /* Hijau WA sesuai referensi */
            color: white;
            font-weight: 700;
            font-size: 1rem;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            width: max-content;
            margin-bottom: 30px;
            transition: background-color 0.3s;
        }

        .btn-wa:hover {
            background-color: #6BCB45;
        }

        /* Share Icons */
        .produk-share {
            display: flex;
            align-items: center;
            gap: 15px;
            color: #333;
            font-size: 0.95rem;
        }

        .share-icon {
            color: #555;
            text-decoration: none;
            display: flex;
            transition: color 0.3s;
        }

        .share-icon:hover {
            color: #7ED957;
        }

        /* Responsive HP */
        @media (max-width: 768px) {
            .produk-card {
                grid-template-columns: 1fr;
                /* Jadi 1 kolom bersusun atas-bawah */
            }
        }

    </style>

</x-frontend>
