<x-frontend>
    <style>
        /* --- WADAH UTAMA --- */
        .belanja-section-baru {
            padding: 80px 20px;
            background-color: #fbfbfb;
            /* Latar abu-abu sangat terang */
            font-family: 'Poppins', sans-serif;
        }

        .belanja-container-baru {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- HEADER RATA KIRI --- */
        .belanja-header-baru {
            margin-bottom: 50px;
            text-align: left;
            /* Rata kiri persis gambar contoh */
        }

        .belanja-title-baru {
            font-size: 2.8rem;
            font-weight: 800;
            color: #7ED957;
            /* Hijau Terang */
            margin: 0 0 10px 0;
            letter-spacing: 0.5px;
        }

        .belanja-subtitle-baru {
            font-size: 1.05rem;
            color: #333;
            line-height: 1.6;
            margin: 0;
            max-width: 900px;
        }

        /* --- GRID PRODUK --- */
        .belanja-grid-baru {
            display: grid;
            /* Membuat 4 kolom di layar besar, menyesuaikan otomatis */
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 25px;
        }

        /* Desain Kartu Boxy/Kotak Bersih */
        .belanja-card-baru {
            background: #ffffff;
            border-radius: 6px;
            /* Sudut sedikit melengkung, tidak terlalu membulat */
            overflow: hidden;
            border: 1px solid #f0f0f0;
            /* Garis tepi sangat halus */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .belanja-card-baru:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        /* Mengubah seluruh kartu menjadi area yang bisa diklik */
        .belanja-link-wrapper {
            text-decoration: none;
            color: inherit;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        /* Area Gambar Produk */
        .belanja-thumb-baru {
            width: 100%;
            height: 220px;
            overflow: hidden;
            background-color: #f9f9f9;
        }

        .belanja-thumb-baru img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .belanja-card-baru:hover .belanja-thumb-baru img {
            transform: scale(1.05);
            /* Efek zoom halus saat disentuh */
        }

        /* Area Info Produk */
        .belanja-content-baru {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Menjauhkan Judul dan Harga */
        }

        .belanja-name-baru {
            font-size: 1.05rem;
            font-weight: 700;
            color: #333;
            margin: 0 0 15px 0;
            line-height: 1.4;
            text-transform: uppercase;
            /* Memaksa huruf kapital */

            /* Memotong judul maksimal 2 baris jika kepanjangan */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Meta Info (Bintang & Harga) */
        .belanja-meta-baru {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .belanja-stars {
            display: flex;
            gap: 2px;
            color: #e5e7eb;
            /* Warna abu-abu terang untuk bintang */
        }

        .belanja-stars svg {
            width: 16px;
            height: 16px;
            fill: currentColor;
        }

        .belanja-price-baru {
            font-size: 1.15rem;
            font-weight: 800;
            color: #111;
        }

        /* --- PAGINASI --- */
        .pagination-wrapper-center {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .belanja-grid-baru {
                grid-template-columns: repeat(2, 1fr);
                /* 2 Kolom di HP */
                gap: 15px;
            }

            .belanja-title-baru {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 480px) {
            .belanja-grid-baru {
                grid-template-columns: 1fr;
            }

            /* 1 Kolom di HP layar sangat kecil */
        }

    </style>

    <section class="belanja-section-baru">
        <div class="belanja-container-baru">

            <div class="belanja-header-baru">
                <h1 class="belanja-title-baru">Beli Dari Desa</h1>
                <p class="belanja-subtitle-baru">
                    Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa
                </p>
            </div>

            <div class="belanja-grid-baru">

                @forelse($products as $item)
                <div class="belanja-card-baru">
                    <a href="{{ route('frontend.belanja.detail', $item->id) }}" class="belanja-link-wrapper">

                        <div class="belanja-thumb-baru">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" onerror="this.src='https://placehold.co/400x300?text=No+Image'">
                        </div>

                        <div class="belanja-content-baru">
                            <h3 class="belanja-name-baru">{{ $item->nama_produk }}</h3>

                            <div class="belanja-meta-baru">
                                <div class="belanja-stars">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" /></svg>
                                </div>

                                <div class="belanja-price-baru">
                                    Rp{{ number_format($item->harga, 0, ',', '.') }}
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 15px;">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                    <h3 style="color: #888; font-weight: 600;">Belum ada produk yang ditawarkan.</h3>
                    <p style="color: #aaa;">Silakan hubungi admin desa untuk mendaftarkan produk UMKM Anda.</p>
                </div>
                @endforelse

            </div>

            <div class="pagination-wrapper-center">
                {{ $products->links() }}
            </div>

        </div>
    </section>
</x-frontend>
