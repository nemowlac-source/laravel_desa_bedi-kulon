<x-frontend>
    <style>
        /* Container Layout */
        .news-section {
            padding: 60px 0;
            background-color: #f9f9f9;
            /* Background abu-abu sangat muda */
            font-family: 'Poppins', sans-serif;
        }

        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header */
        .news-header {
            margin-bottom: 40px;
        }

        .news-title {
            color: #72c02c;
            /* Hijau khas */
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .news-subtitle {
            color: #555;
            font-size: 1rem;
            max-width: 800px;
        }

        /* Grid System */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 3 Kolom */
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Card Style */
        .news-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform 0.3s;
        }

        .news-card:hover {
            transform: translateY(-5px);
        }

        .news-thumb {
            height: 200px;
            overflow: hidden;
        }

        .news-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-content {
            padding: 20px 20px 10px;
            flex: 1;
        }

        .news-card-title {
            font-size: 0.95rem;
            font-weight: 800;
            color: #333;
            line-height: 1.4;
            margin-bottom: 15px;
            text-transform: uppercase;
            /* Huruf Kapital Sesuai Gambar */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-excerpt {
            font-size: 0.85rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* Footer Card & Date Badge */
        .news-footer {
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .news-meta {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .meta-item {
            font-size: 0.75rem;
            color: #888;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .meta-item i {
            font-size: 0.8rem;
        }

        /* Kotak Tanggal Hijau */
        .news-date-badge {
            background-color: #72c02c;
            /* Hijau Default */
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            text-align: center;
            display: flex;
            flex-direction: column;
            min-width: 60px;
        }

        .news-date-badge.green-light {
            background-color: #72c02c;
            /* Variasi warna jika perlu, di gambar terlihat sama */
        }

        .date-day {
            font-size: 0.85rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .date-year {
            font-size: 0.75rem;
            font-weight: 400;
        }

        /* Pagination */
        .pagination-wrapper {
            display: flex;
            justify-content: center;
            gap: 5px;
        }

        .page-link {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 35px;
            height: 35px;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-decoration: none;
            color: #555;
            font-size: 0.9rem;
            transition: 0.3s;
            background: #fff;
        }

        .page-link:hover {
            background-color: #f0f0f0;
        }

        .page-link.active {
            background-color: #72c02c;
            color: #fff;
            border-color: #72c02c;
        }

        .page-dots {
            display: flex;
            align-items: center;
            color: #888;
            padding: 0 5px;
        }

        /* Responsive Mobile */
        @media (max-width: 992px) {
            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .news-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <section class="news-section">
        <div class="container-custom">
            <div class="news-header">
                <h1 class="news-title">Berita Desa</h1>
                <p class="news-subtitle">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Bedi Kulon</p>
            </div>

            <div class="news-grid">

                <div class="news-card">
                    <div class="news-thumb">
                        <img src="assets/img/berita/pokdarwis.jpg" alt="Berita 1">
                    </div>
                    <div class="news-content">
                        <h3 class="news-card-title">POKDARWIS PANTAI BIRU Bedi Kulon TERIMA BANTUAN GAZEBO DARI BAN...</h3>
                        <p class="news-excerpt">Bedi Kulon - Kelompok Sadar Wisata (POKDARWIS) Pantai Biru Bedi Kulon menerima bantuan 10 (sepuluh) unit gazebo dari Bank Indonesia sebagai bagian dari...</p>
                    </div>
                    <div class="news-footer">
                        <div class="news-meta">
                            <div class="meta-item"><i class="icon-user"></i> Administrator</div>
                            <div class="meta-item"><i class="icon-eye"></i> Dilihat 161 kali</div>
                        </div>
                        <div class="news-date-badge">
                            <span class="date-day">18 Dec</span>
                            <span class="date-year">2025</span>
                        </div>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-thumb">
                        <img src="assets/img/berita/gotongroyong.jpg" alt="Berita 2">
                    </div>
                    <div class="news-content">
                        <h3 class="news-card-title">KEGIATAN GOTONG ROYONG WARGA RT.002 DESA Bedi Kulon MELALUI BKKD RT</h3>
                        <p class="news-excerpt">Bedi Kulon - Warga RT.002 Desa Bedi Kulon, Kecamatan Marang Kayu, Kabupaten Kutai Kartanegara, melaksanakan kegiatan gotong royong melalui Bantuan Keuangan...</p>
                    </div>
                    <div class="news-footer">
                        <div class="news-meta">
                            <div class="meta-item"><i class="icon-user"></i> Administrator</div>
                            <div class="meta-item"><i class="icon-eye"></i> Dilihat 173 kali</div>
                        </div>
                        <div class="news-date-badge">
                            <span class="date-day">18 Dec</span>
                            <span class="date-year">2025</span>
                        </div>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-thumb">
                        <img src="assets/img/berita/poskamling.jpg" alt="Berita 3">
                    </div>
                    <div class="news-content">
                        <h3 class="news-card-title">RT DI DESA Bedi Kulon TINGKATKAN PENJAGAAN KEAMANAN LINGKUNG...</h3>
                        <p class="news-excerpt">Bedi Kulon - Dalam upaya menciptakan lingkungan yang aman, tertib, dan kondusif, Ketua RT bersama warga di Desa Bedi Kulon, Kecamatan Marang Kayu,...</p>
                    </div>
                    <div class="news-footer">
                        <div class="news-meta">
                            <div class="meta-item"><i class="icon-user"></i> Administrator</div>
                            <div class="meta-item"><i class="icon-eye"></i> Dilihat 104 kali</div>
                        </div>
                        <div class="news-date-badge">
                            <span class="date-day">18 Dec</span>
                            <span class="date-year">2025</span>
                        </div>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-thumb">
                        <img src="assets/img/berita/bersihpantai.jpg" alt="Berita 4">
                    </div>
                    <div class="news-content">
                        <h3 class="news-card-title">GERAKAN BERSIH PANTAI DI DESA Bedi Kulon WUJUD KEPEDULIAN...</h3>
                        <p class="news-excerpt">Bedi Kulon - Dalam rangka menjaga kelestarian ekosistem pesirir dan meningkatkan kesadaran masyarakat terhadap pentingnya kebersihan lingkungan laut,...</p>
                    </div>
                    <div class="news-footer">
                        <div class="news-meta">
                            <div class="meta-item"><i class="icon-user"></i> Administrator</div>
                            <div class="meta-item"><i class="icon-eye"></i> Dilihat 257 kali</div>
                        </div>
                        <div class="news-date-badge green-light">
                            <span class="date-day">26 Oct</span>
                            <span class="date-year">2025</span>
                        </div>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-thumb">
                        <img src="assets/img/berita/pelatihan.jpg" alt="Berita 5">
                    </div>
                    <div class="news-content">
                        <h3 class="news-card-title">Pelatihan Tata Kelola Bisnis dan Pemasaran Destinasi Wisata...</h3>
                        <p class="news-excerpt">Bedi Kulon - Dalam rangka meningkatkan kualitas sumber daya manusia (SDM) di bidang pariwisata, kegiatan Pelatihan Tata Kelola Bisnis dan Pemasaran...</p>
                    </div>
                    <div class="news-footer">
                        <div class="news-meta">
                            <div class="meta-item"><i class="icon-user"></i> Administrator</div>
                            <div class="meta-item"><i class="icon-eye"></i> Dilihat 280 kali</div>
                        </div>
                        <div class="news-date-badge green-light">
                            <span class="date-day">23 Sep</span>
                            <span class="date-year">2025</span>
                        </div>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-thumb">
                        <img src="assets/img/berita/pendampingan.jpg" alt="Berita 6">
                    </div>
                    <div class="news-content">
                        <h3 class="news-card-title">Pendampingan Desa Wisata Bedi Kulon: Perancangan Paket Wisata oleh...</h3>
                        <p class="news-excerpt">Bedi Kulon - Kelompok Sadar Wisata (Pokdarwis) Pantai Biru Bedi Kulon kembali mendapatkan pendampingan dalam rangka pengembangan Desa Wisata. Kali ini,...</p>
                    </div>
                    <div class="news-footer">
                        <div class="news-meta">
                            <div class="meta-item"><i class="icon-user"></i> Administrator</div>
                            <div class="meta-item"><i class="icon-eye"></i> Dilihat 290 kali</div>
                        </div>
                        <div class="news-date-badge green-light">
                            <span class="date-day">23 Sep</span>
                            <span class="date-year">2025</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="pagination-wrapper">
                <a href="#" class="page-link prev">
                    << /a>
                        <a href="#" class="page-link active">1</a>
                        <a href="#" class="page-link">2</a>
                        <a href="#" class="page-link">3</a>
                        <a href="#" class="page-link">4</a>
                        <a href="#" class="page-link">5</a>
                        <span class="page-dots">...</span>
                        <a href="#" class="page-link">11</a>
                        <a href="#" class="page-link next">></a>
            </div>

        </div>
    </section>

</x-frontend>