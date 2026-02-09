<x-frontend>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* KUNCI UTAMA */
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        /*   */
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            /* Sesuaikan tinggi sesuai kebutuhan */

            /* Gambar default awal */
            background-image: url('assets/img/desa1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            /* INI KUNCINYA: Membuat efek transisi halus saat gambar berubah */
            transition: background-image 1s ease-in-out;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-overlay {
            /* Memberikan lapisan gelap agar teks terbaca jelas */
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 10px;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* */

    </style>
    <header class="hero">
        <div class="hero-overlay">
            <h4>PEMERINTAH DESA PONOROGO</h4>
            <h1>Selamat Datang di<br />Website Resmi Desa Bedi Kulon</h1>
            <p>Sumber informasi terbaru tentang pemerintahan di Desa Bedi Kulon</p>
            <!-- <div class="special-event">
            Selamat memperingati Hari Kemerdekaan Indonesia yang ke-80
        </div> -->
        </div>
    </header>
    <section class="explore-section">
        <div class="explore-container">
            <div class="explore-content">
                <h2 class="title-green">JELAJAHI DESA</h2>
                <p>
                    Melalui website ini Anda dapat menjelajahi segala hal yang terkait
                    dengan desa. Aspek pemerintahan, penduduk, demografi, potensi desa,
                    dan juga berita tentang desa.
                </p>
            </div>

            <div class="explore-grid">
                <div class="explore-card">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/512/5351/5351465.png" alt="Profil Desa" />
                    </div>
                    <h3>PROFIL DESA</h3>
                </div>

                <div class="explore-card">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/512/4221/4221419.png" alt="Infografis" />
                    </div>
                    <h3>INFOGRAFIS</h3>
                </div>

                <div class="explore-card">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/512/1067/1067357.png" alt="IDM" />
                    </div>
                    <h3>IDM</h3>
                </div>

                <div class="explore-card">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/512/2991/2991108.png" alt="PPID" />
                    </div>
                    <h3>PPID</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="welcome-section">
        <div class="welcome-container">
            <div class="welcome-image">
                <div class="circle-bg">
                    <img src="assets/img/Logo Ponorogo.png" alt="Logo Kabupaten Ponorogo" />

                </div>
            </div>

            <div class="welcome-text">
                <h2 class="title-green">Sambutan Kepala Desa Bedi Kulon</h2>
                <h3 class="name-head">LUKMANUL HADI</h3>

                <p class="position-head">Kepala Desa Bedi Kulon</p>

                <div class="scroll-box">
                    <p><strong>Assalamu Alaikum Warohmatullahi Wabarakatu.</strong></p>
                    <p>
                        Website ini hadir sebagai wujud transformasi desa Bedi Kulon menjadi
                        desa yang mampu memanfaatkan teknologi informasi dan komunikasi,
                        terintegrasi kedalam sistem online. Keterbukaan informasi publik,
                        pelayanan publik dan kegiatan perekonomian di desa, guna
                        mewujudkan desa Bedi Kulon sebagai desa wisata yang berkelanjutan,
                        adaptasi dan mitigasi terhadap perubahan iklim serta menjadi desa
                        yang mandiri.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="map-section">
        <div class="map-container">
            <h2 class="title-green">LOKASI DESA</h2>
            <p class="map-subtitle">
                Temukan lokasi strategis dan batas wilayah Desa Bedi Kulon melalui peta
                interaktif berikut.
            </p>

            <div class="map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82214.9804084441!2d111.4497112763571!3d-7.942160672324217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e797497c48641c7%3A0x67c2c67a022feb71!2sBedikulon%2C%20Kec.%20Bungkal%2C%20Kabupaten%20Ponorogo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1770011788443!5m2!1sid!2sid" width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
    <section class="sotk-section">
        <div class="sotk-container">
            <h2 class="title-green">SOTK</h2>
            <p class="sotk-subtitle">
                Struktur Organisasi dan Tata Kerja Desa Bedi Kulon
            </p>

            <div class="sotk-grid">
                <div class="staf-card">
                    <div class="staf-photo">
                        <img src="link_foto_staf1.jpg" alt="Rina Jayanti" />
                    </div>
                    <div class="staf-info">
                        <h3>RINA JAYANTI</h3>
                        <p>Kaur Keuangan</p>
                    </div>
                </div>

                <div class="staf-card">
                    <div class="staf-photo">
                        <img src="assets\img\Logo Ponorogo.png" alt="Marliana" />
                    </div>
                    <div class="staf-info">
                        <h3>MARLIANA</h3>
                        <p>Kepala Seksi Pelayanan dan Kesejahteraan</p>
                    </div>
                </div>

                <div class="staf-card">
                    <div class="staf-photo">
                        <img src="link_foto_staf3.jpg" alt="Alfiah Ramadhani Ampat" />
                    </div>
                    <div class="staf-info">
                        <h3>ALFIAH RAMADHANI AMPAT</h3>
                        <p>Kaur Umum dan Perencanaan</p>
                    </div>
                </div>

                <div class="staf-card">
                    <div class="staf-photo">
                        <img src="link_foto_staf4.jpg" alt="Safitriyani" />
                    </div>
                    <div class="staf-info">
                        <h3>SAFITRIYANI</h3>
                        <p>Kasi Pemerintahan</p>
                    </div>
                </div>
            </div>

            <div class="sotk-footer">
                <a href="{{ route('frontend.pemerintahan') }}" class="view-more">
                    <i class="icon-list"></i> LIHAT STRUKTUR LEBIH LENGKAP
                </a>
            </div>
        </div>
    </section>
    <section class="admin-section">
        <div class="admin-container">
            <h2 class="title-green">Administrasi Penduduk</h2>
            <p class="admin-subtitle">
                Sistem digital yang berfungsi mempermudah pengelolaan data dan
                informasi terkait dengan kependudukan dan pendayagunaannya untuk
                pelayanan publik yang efektif dan efisien
            </p>

            <div class="admin-grid">
                <div class="stat-item">
                    <div class="stat-number">1.162</div>
                    <div class="stat-label">Penduduk</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">608</div>
                    <div class="stat-label">Laki-Laki</div>
                </div>

                <div class="stat-item">
                    <div class="stat-number">310</div>
                    <div class="stat-label">Kepala Keluarga</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">554</div>
                    <div class="stat-label">Perempuan</div>
                </div>

                <div class="stat-item">
                    <div class="stat-number">99</div>
                    <div class="stat-label">Penduduk Sementara</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">44</div>
                    <div class="stat-label">Mutasi Penduduk</div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-section">
        <div class="news-container">
            <h2 class="title-green">Berita Desa</h2>
            <p class="news-subtitle">
                Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan
                artikel-artikel jurnalistik dari Desa Bedi Kulon
            </p>

            <div class="news-grid">
                <div class="news-card">
                    <div class="news-img">
                        <img src="link_gambar_berita1.jpg" alt="Berita 1" />
                    </div>
                    <div class="news-content">
                        <h3>POKDARWIS PANTAI BIRU Bedi Kulon TERIMA BANTUAN GAZEBO...</h3>
                        <p>
                            Bedi Kulon - Kelompok Sadar Wisata (POKDARWIS) Pantai Biru Bedi Kulon
                            menerima bantuan 10 unit gazebo...
                        </p>
                        <div class="news-footer">
                            <span><i class="user-icon"></i> Administrator</span>
                            <span class="date-tag">18 Dec 2025</span>
                        </div>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-img">
                        <img src="link_gambar_berita2.jpg" alt="Berita 2" />
                    </div>
                    <div class="news-content">
                        <h3>KEGIATAN GOTONG ROYONG WARGA RT.002 DESA Bedi Kulon...</h3>
                        <p>
                            Bedi Kulon - Warga RT.002 Desa Bedi Kulon melaksanakan kegiatan gotong
                            royong melalui bantuan keuangan...
                        </p>
                        <div class="news-footer">
                            <span><i class="user-icon"></i> Administrator</span>
                            <span class="date-tag">18 Dec 2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-more">
                <a href="{{ route('frontend.berita') }}" class="view-more-link">
                    <i class="icon-file"></i> LIHAT BERITA LEBIH BANYAK
                </a>
            </div>
        </div>
    </section>
    <section class="potensi-section">
        <div class="potensi-container">
            <div class="potensi-header">
                <div>
                    <h2 class="title-green">POTENSI DESA</h2>
                    <p class="potensi-subtitle">
                        Informasi tentang potensi dan kemajuan desa di berbagai bidang
                        seperti ekonomi, pariwisata, pertanian, industri kreatif, dan
                        kelestarian lingkungan
                    </p>
                </div>
                <a href="#" class="view-more-link">
                    <i class="icon-list"></i> LIHAT POTENSI LEBIH BANYAK
                </a>
            </div>

            <div class="potensi-slider">
                <div class="potensi-item">
                    <div class="circle-potensi">
                        <img src="link_gambar_wisata.jpg" alt="Pariwisata" />
                        <div class="accent-red"></div>
                    </div>
                    <h3>PARIWISATA</h3>
                </div>

                <div class="potensi-item">
                    <div class="circle-potensi">
                        <img src="link_gambar_ikan.jpg" alt="Potensi Perikanan" />
                        <div class="accent-orange"></div>
                    </div>
                    <h3>POTENSI PERIKANAN</h3>
                </div>
            </div>

            <div class="slider-nav">
                <button class="nav-btn">←</button>
                <button class="nav-btn">→</button>
            </div>
        </div>
    </section>
    <section class="wisata-section">
        <div class="wisata-container">
            <div class="wisata-header">
                <h2 class="title-white">WISATA DESA</h2>
                <p class="wisata-subtitle">
                    Layanan yang mempermudah promosi wisata desa sehingga dapat menarik
                    pengunjung desa
                </p>
            </div>

            <div class="wisata-hero-card">
                <div class="wisata-overlay">
                    <div class="wisata-content">
                        <h1>Pantai Biru Bedi Kulon</h1>
                        <p>
                            Pantai ini terbuka untuk umum dan siapa saja boleh
                            mengunjunginya, pengunjung atau wisatawan akan disambut baik
                            oleh penduduk lokal daerah wisata...
                        </p>
                    </div>
                </div>
                <button class="slider-arrow left">❮</button>
                <button class="slider-arrow right">❯</button>
            </div>

            <div class="wisata-footer">
                <a href="#" class="view-more-white">
                    <i class="icon-list"></i> LIHAT WISATA LEBIH BANYAK
                </a>
            </div>
        </div>
    </section>
    <section class="shop-section">
        <div class="shop-container">
            <div class="shop-header">
                <div>
                    <h2 class="title-green">BELI DARI DESA</h2>
                    <p class="shop-subtitle">
                        Layanan yang disediakan untuk promosi produk UMKM desa sehingga
                        mampu meningkatkan perekonomian masyarakat desa
                    </p>
                </div>
                <a href="{{ route('frontend.belanja') }}" class="view-more-link">

                    <i class="icon-grid"></i> LIHAT PRODUK LEBIH BANYAK
                </a>
            </div>

            <div class="product-grid">
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=500&q=80" alt="Roti Tawar" />
                    </div>
                    <div class="product-info">
                        <h3>Roti tawar</h3>
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                        <p class="price">Rp10.000</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <img src="link_foto_konektor.jpg" alt="Konektor Masker" />
                    </div>
                    <div class="product-info">
                        <h3>Konektor masker</h3>
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                        <p class="price">Rp10.000</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <img src="link_foto_snack.jpg" alt="Snack Box" />
                    </div>
                    <div class="product-info">
                        <h3>Untuk snack box</h3>
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                        <p class="price">Rp123</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-img">
                        <img src="link_foto_talam.jpg" alt="Talam Susu" />
                    </div>
                    <div class="product-info">
                        <h3>Talam susu</h3>
                        <div class="rating">⭐⭐⭐⭐⭐</div>
                        <p class="price">Rp123</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section">
        <div class="gallery-container">
            <div class="gallery-header">
                <div>
                    <h2 class="title-green">GALERI DESA</h2>
                    <p class="gallery-subtitle">
                        Menampilkan kegiatan-kegiatan yang berlangsung di desa
                    </p>
                </div>
                <a href="{{ route('frontend.galeri') }}" class="view-more-link">
                    <i class="icon-images"></i> LIHAT FOTO LEBIH BANYAK
                </a>
            </div>

            <div class="gallery-grid">

                @forelse($galeri_terbaru as $foto)
                <div class="gallery-item">
                    <img src="{{ asset('storage/' . $foto->gambar) }}" alt="{{ $foto->judul }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='https://placehold.co/600x400?text=Foto+Tidak+Ditemukan'" />

                    <div class="gallery-overlay">
                        <span>{{ $foto->judul }}</span>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center p-10 text-gray-500">
                    <p>Belum ada foto kegiatan yang diunggah.</p>
                </div>
                @endforelse

            </div>
        </div>
    </section>
    <script>
        // 1. Daftar gambar yang ingin dijadikan slide
        // Ganti path sesuai lokasi gambar Anda
        const images = [
            'assets/img/background 1.png'
            , 'assets/img/background 2.png'
            , 'assets/img/background 3.png'
            , 'assets/img/background 3.png'
        ];

        let currentIndex = 0;
        const heroSection = document.querySelector('.hero');

        function changeBackground() {
            // Naikkan index gambar
            currentIndex++;

            // Jika sudah sampai gambar terakhir, kembali ke 0 (looping)
            if (currentIndex >= images.length) {
                currentIndex = 0;
            }

            // Ganti background image
            heroSection.style.backgroundImage = `url('${images[currentIndex]}')`;
        }

        // Jalankan fungsi changeBackground setiap 5 detik (5000 milidetik)
        setInterval(changeBackground, 5000);

    </script>
</x-frontend>
