<x-frontend>
    <style>
        /* Container Layout */
        .belanja-section {
            padding: 50px 0 80px;
            background-color: #f9f9f9;
            font-family: 'Poppins', sans-serif;
            min-height: 80vh;
            /* Agar footer tidak naik jika produk sedikit */
        }

        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        .belanja-header {
            margin-bottom: 40px;
            text-align: center;
            /* Center header agar lebih rapi */
        }

        .belanja-title {
            color: #72c02c;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        /* Garis bawah judul */
        .title-underline {
            width: 80px;
            height: 4px;
            background-color: #72c02c;
            margin: 0 auto 15px auto;
            border-radius: 2px;
        }

        .belanja-subtitle {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Grid System */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Card Style */
        .product-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #eee;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .product-thumb {
            height: 250px;
            overflow: hidden;
            background: #f0f0f0;
            position: relative;
        }

        .product-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-thumb img {
            transform: scale(1.05);
        }

        /* Content Details */
        .product-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-name {
            font-size: 1.1rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
            line-height: 1.3;
        }

        .product-seller {
            font-size: 0.85rem;
            color: #888;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .product-desc {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 20px;
            flex-grow: 1;
            /* Mendorong footer ke bawah */
        }

        /* Footer Card (Harga & Tombol) */
        .product-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #f0f0f0;
            padding-top: 15px;
            margin-top: auto;
            /* Pastikan selalu di bawah */
        }

        .price {
            font-size: 1.1rem;
            font-weight: 700;
            color: #72c02c;
            /* Hijau Harga */
        }

        /* Tombol Beli WA */
        .btn-beli {
            background-color: #25D366;
            /* Warna WA */
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: background 0.3s;
        }

        .btn-beli:hover {
            background-color: #128c7e;
            color: white;
        }

        /* Pagination Styling */
        .pagination-wrapper-center {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        /* Override gaya pagination bawaan Laravel agar sesuai desain */
        .pagination-wrapper-center nav div {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 5px;
        }

        /* Responsive Mobile */
        @media (max-width: 992px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            .belanja-title {
                font-size: 2rem;
            }
        }

    </style>

    <section class="belanja-section">
        <div class="container-custom">

            <div class="belanja-header">
                <h1 class="belanja-title">Beli Dari Desa</h1>
                <div class="title-underline"></div>
                <p class="belanja-subtitle">
                    Dukung perekonomian lokal dengan membeli produk asli buatan warga desa kami.
                    Kualitas terjamin, harga bersahabat.
                </p>
            </div>

            <div class="product-grid">

                @forelse($products as $item)
                <div class="product-card">

                    <div class="product-thumb">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" onerror="this.src='https://placehold.co/400x300?text=No+Image'">
                    </div>

                    <div class="product-content">
                        <h3 class="product-name">{{ $item->nama_produk }}</h3>

                        <div class="product-seller">
                            <i class="icon-user"></i> {{ $item->penjual }}
                        </div>

                        <p class="product-desc">
                            {{ Str::limit($item->deskripsi, 80) ?? 'Tidak ada deskripsi.' }}
                        </p>

                        <div class="product-footer">
                            <span class="price">Rp{{ number_format($item->harga, 0, ',', '.') }}</span>

                            <a href="https://wa.me/{{ $item->no_hp }}?text=Halo, saya tertarik membeli {{ $item->nama_produk }} yang ada di website Desa." class="btn-beli" target="_blank">
                                <i class="icon-phone"></i> Beli
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
                    <img src="https://placehold.co/100x100?text=Empty" style="margin: 0 auto 20px; opacity: 0.5; border-radius: 50%;">
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
