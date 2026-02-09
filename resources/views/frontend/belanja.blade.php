<x-frontend>
    <style>
        /* Container Layout */
        .belanja-section {
            padding: 50px 0 80px;
            background-color: #f9f9f9;
            /* Background abu-abu muda sesuai gambar */
            font-family: 'Poppins', sans-serif;
        }

        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header Styles */
        .belanja-header {
            margin-bottom: 30px;
        }

        .belanja-title {
            color: #72c02c;
            /* Hijau Terang */
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .belanja-subtitle {
            font-size: 0.95rem;
            color: #444;
            line-height: 1.5;
            font-weight: 500;
        }

        /* Grid System */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 3 Kolom */
            gap: 30px;
            margin-bottom: 40px;
        }

        /* Card Style */
        .product-card {
            background: #fff;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            /* Shadow halus */
            transition: transform 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .product-thumb {
            height: 220px;
            /* Tinggi gambar tetap agar rapi */
            overflow: hidden;
            background: #eee;
        }

        .product-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Memastikan gambar memenuhi kotak tanpa gepeng */
        }

        /* Content Details */
        .product-content {
            padding: 15px 20px 20px;
        }

        .product-name {
            font-size: 1rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 25px;
            /* Jarak antara judul dan harga cukup jauh */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Footer Card (Bintang & Harga) */
        .product-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stars {
            display: flex;
            gap: 2px;
        }

        /* Menggunakan karakter bintang CSS atau FontAwesome */
        .icon-star::before {
            content: "★";
            font-size: 14px;
            color: #d1d5db;
            /* Warna abu-abu (empty star) sesuai gambar */
        }

        .price {
            font-size: 0.95rem;
            font-weight: 700;
            color: #555;
            /* Abu-abu tua */
        }

        /* Pagination (Center) */
        .pagination-wrapper-center {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-top: 20px;
        }

        .page-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 35px;
            height: 35px;
            border: 1px solid #e5e7eb;
            background: #fff;
            text-decoration: none;
            color: #666;
            font-size: 0.9rem;
            border-radius: 4px;
            transition: 0.3s;
        }

        .page-btn:hover {
            background-color: #f9f9f9;
        }

        .page-btn.active {
            background-color: #72c02c;
            /* Hijau aktif */
            color: #fff;
            border-color: #72c02c;
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
        }
    </style>

    <section class="belanja-section">
        <div class="container-custom">

            <div class="belanja-header">
                <h1 class="belanja-title">Beli Dari Desa</h1>
                <p class="belanja-subtitle">Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa</p>
            </div>

            <div class="product-grid">

                <div class="product-card">
                    <div class="product-thumb">
                        <img src="assets/img/produk/roti-tawar.jpg" alt="Roti tawar">
                    </div>
                    <div class="product-content">
                        <h3 class="product-name">Roti tawar</h3>
                        <div class="product-footer">
                            <div class="stars">
                                <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
                            </div>
                            <span class="price">Rp10.000</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-thumb">
                        <img src="assets/img/produk/konektor.jpg" alt="Konektor Masker">
                    </div>
                    <div class="product-content">
                        <h3 class="product-name">konektor masker</h3>
                        <div class="product-footer">
                            <div class="stars">
                                <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
                            </div>
                            <span class="price">Rp10.000</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-thumb">
                        <img src="assets/img/produk/snack-box.jpg" alt="Snack Box">
                    </div>
                    <div class="product-content">
                        <h3 class="product-name">Untuk snack box</h3>
                        <div class="product-footer">
                            <div class="stars">
                                <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
                            </div>
                            <span class="price">Rp123</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-thumb">
                        <img src="assets/img/produk/talam-susu.jpg" alt="Talam Susu">
                    </div>
                    <div class="product-content">
                        <h3 class="product-name">Talam susu</h3>
                        <div class="product-footer">
                            <div class="stars">
                                <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
                            </div>
                            <span class="price">Rp123</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-thumb">
                        <img src="assets/img/produk/souvenir.jpg" alt="Souvenir">
                    </div>
                    <div class="product-content">
                        <h3 class="product-name">Souvenir</h3>
                        <div class="product-footer">
                            <div class="stars">
                                <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
                            </div>
                            <span class="price">Rp150.000</span>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-thumb">
                        <img src="assets/img/produk/micropay.jpg" alt="MICROPAY">
                    </div>
                    <div class="product-content">
                        <h3 class="product-name">MICROPAY</h3>
                        <div class="product-footer">
                            <div class="stars">
                                <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
                            </div>
                            <span class="price">Rp123</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="pagination-wrapper-center">
                <a href="#" class="page-btn prev">
                    << /a>
                        <a href="#" class="page-btn active">1</a>
                        <a href="#" class="page-btn">2</a>
                        <a href="#" class="page-btn">3</a>
                        <a href="#" class="page-btn next">></a>
            </div>

        </div>
    </section>

</x-frontend>