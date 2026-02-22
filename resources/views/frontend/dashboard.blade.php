<x-frontend>

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
    <section class="infografis-page">

        <div class="explore-container">
            <div class="explore-content">
                <h2 class="title-green" style="font-size: 50px">JELAJAHI DESA</h2>
                <p>
                    Melalui website ini Anda dapat menjelajahi segala hal yang terkait
                    dengan desa. Aspek pemerintahan, penduduk, demografi, potensi desa,
                    dan juga berita tentang desa.
                </p>
            </div>

            <div class="explore-grid">
                <div class="explore-card" onclick="window.location='{{ route('frontend.profile') }}'">


                    <div class="icon-box-dashboard">
                        <img src="{{ asset('assets/img/profil.svg') }}" alt="Profil Desa" />
                    </div>
                    <h3>PROFIL DESA</h3>
                </div>

                <div class="explore-card" onclick="window.location='{{ route('frontend.infografis') }}'">

                    <div class="icon-box-dashboard">
                        <img src="{{ asset('assets/img/infografis.svg') }}" alt="Infografis" />
                    </div>
                    <h3>INFOGRAFIS</h3>
                </div>

                <div class="explore-card" onclick="window.location='{{ route('frontend.idm') }}'">
                    <div class="icon-box-dashboard">
                        <img src="{{ asset('assets/img/idm.svg') }}" alt="IDM" />
                    </div>
                    <h3>IDM</h3>
                </div>

                <div class="explore-card" onclick="window.location='{{ route('frontend.ppid') }}'">
                    <div class="icon-box-dashboard">
                        <img src="{{ asset('assets/img/ppid.svg') }}" alt="PPID" />
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
                Temukan lokasi strategis dan batas wilayah Desa Bedi Kulon melalui peta berikut.
            </p>

            <div class="peta-container" style="position: relative; width: 100%; height: 500px; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                <div id="mapDesa" style="width: 100%; height: 100%;"></div>
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

                @forelse($perangkat_desa as $staf)
                <div class="staf-card">
                    <div class="staf-photo">
                        <img src="{{ asset('storage/' . $staf->foto) }}" alt="{{ $staf->nama }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='https://placehold.co/400x400?text=No+Photo'" />
                    </div>

                    <div class="staf-info">
                        <h3>{{ strtoupper($staf->nama) }}</h3>

                        <p>{{ $staf->jabatan }}</p>
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; color: #888; padding: 20px;">
                    <p>Data perangkat desa belum diinput.</p>
                </div>
                @endforelse

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
                    <div class="stat-number">
                        {{ number_format($total_penduduk, 0, ',', '.') }}
                    </div>
                    <div class="stat-label">Penduduk</div>
                </div>

                <div class="stat-item">
                    <div class="stat-number">
                        {{ number_format($total_laki, 0, ',', '.') }}
                    </div>
                    <div class="stat-label">Laki-Laki</div>
                </div>

                <div class="stat-item">
                    <div class="stat-number">
                        {{ number_format($total_kk, 0, ',', '.') }}
                    </div>
                    <div class="stat-label">Kepala Keluarga</div>
                </div>

                <div class="stat-item">
                    <div class="stat-number">
                        {{ number_format($total_perempuan, 0, ',', '.') }}
                    </div>
                    <div class="stat-label">Perempuan</div>
                </div>

                <div class="stat-item">
                    <div class="stat-number">
                        {{ number_format($total_sementara, 0, ',', '.') }}
                    </div>
                    <div class="stat-label">Penduduk Sementara</div>
                </div>

                <div class="stat-item">
                    <div class="stat-number">
                        {{ number_format($total_mutasi, 0, ',', '.') }}
                    </div>
                    <div class="stat-label">Mutasi Penduduk</div>
                </div>

            </div>

            <div style="text-align: center; margin-top: 20px; font-size: 0.8rem; color: #888;">
                *Data diperbarui per tanggal {{ date('d M Y') }}
            </div>
        </div>
    </section>
    <section class="apb-section">
        <div class="container">
            <div class="apb-wrapper">

                <div class="apb-image-col">
                    <img src="{{ asset('assets/img/asset-dashboard-apbd.png') }}" alt="Ilustrasi APB Desa" onerror="this.src='https://placehold.co/600x400?text=Grafik+APBD'">
                </div>

                <div class="apb-content-col">
                    <h2 class="apb-title">APB DESA {{ $tahun_ini }}</h2>
                    <p class="apb-desc">
                        Akses cepat dan transparan terhadap Anggaran Pendapatan dan Belanja Desa
                        serta proyek pembangunan tahun anggaran {{ $tahun_ini }}.
                    </p>

                    <div class="apb-card">
                        <span class="apb-label">Pendapatan Desa</span>
                        <div class="apb-value" style="color: #28a745;">
                            Rp{{ number_format($apbd_pendapatan, 2, ',', '.') }}
                        </div>
                    </div>

                    <div class="apb-card">
                        <span class="apb-label">Belanja Desa</span>
                        <div class="apb-value" style="color: #dc3545;">
                            Rp{{ number_format($apbd_belanja, 2, ',', '.') }}

                        </div>
                    </div>

                    <div class="apb-footer">
                        <a href="#" class="view-data-link">
                            <i class="fa-regular fa-file-lines"></i> LIHAT DATA LEBIH LENGKAP
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="news-section">
        <div class="news-container">
            <h2 class="title-green">Berita Desa</h2>
            <p class="admin-subtitle">
                Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan
                artikel-artikel jurnalistik dari Desa Bedi Kulon
            </p>

            <div class="news-grid">

                @forelse($berita_terbaru as $berita)
                <div class="news-card">
                    <div class="news-img">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" style="width: 100%; height: 200px; object-fit: cover;" onerror="this.src='https://placehold.co/600x400?text=Berita'" />
                    </div>

                    <div class="news-content">
                        <h3>
                            <a href="#" style="text-decoration: none; color: inherit;">
                                {{ Str::limit($berita->judul, 50) }}
                            </a>
                        </h3>

                        <p>
                            {{ Str::limit(strip_tags($berita->isi), 100) }}
                        </p>

                        <div class="news-footer">
                            <span><i class="user-icon"></i> {{ $berita->penulis ?? 'Admin' }}</span>

                            <span class="date-tag">{{ $berita->created_at->format('d M Y') }}</span>
                        </div>
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; color: #888; padding: 40px;">
                    <p>Belum ada berita terbaru.</p>
                </div>
                @endforelse

            </div>

            <div class="news-more">
                <a href="{{ route('frontend.berita') }}" class="view-more-link">
                    <i class="icon-file"></i> LIHAT BERITA LEBIH BANYAK
                </a>
            </div>
        </div>
    </section>
    <style>
        /* --- WADAH UTAMA --- */
        .potensi-desa-section {
            padding: 80px 20px;
            background-color: #fbfbfb;
            /* Warna latar belakang sangat terang */
            font-family: 'Poppins', sans-serif;
        }

        .potensi-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- HEADER (Judul & Tombol) --- */
        .potensi-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 60px;
            gap: 30px;
        }

        .potensi-title-area {
            max-width: 600px;
            /* Membatasi lebar teks deskripsi */
        }

        .judul-potensi {
            font-size: 2.5rem;
            font-weight: 800;
            color: #7ED957;
            /* Hijau Terang */
            margin: 0 0 15px 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .deskripsi-potensi {
            font-size: 1.05rem;
            color: #333;
            line-height: 1.6;
            margin: 0;
        }

        .potensi-action-area {
            padding-top: 10px;
            /* Menyelaraskan dengan judul */
        }

        .btn-lihat-semua {
            display: inline-flex;
            align-items: center;
            font-size: 0.95rem;
            font-weight: 800;
            color: #111;
            text-decoration: none;
            text-transform: uppercase;
            transition: color 0.3s;
        }

        .btn-lihat-semua:hover {
            color: #7ED957;
        }

        /* --- GRID LINGKARAN --- */
        .potensi-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 60px;
            justify-content: flex-start;
            /* Menyusun dari kiri ke kanan */
        }

        .potensi-item {
            width: 320px;
            /* Ukuran total tiap item */
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Wadah Lingkaran */
        .potensi-circle-wrapper {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            /* Memotong gambar & ornamen agar tetap melingkar */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
            background-color: #eaeaea;
        }

        .potensi-circle-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Ornamen Gelap Kanan Atas */
        .shape-dark {
            position: absolute;
            top: 0;
            right: -20px;
            width: 55%;
            height: 100%;
            background-color: #31313A;
            /* Biru Gelap/Hitam */
            /* Membuat bentuk panah ke kiri */
            clip-path: polygon(100% 0, 100% 100%, 0 50%);
            z-index: 2;
            opacity: 0.95;
        }

        /* Ornamen Warna Kiri Bawah */
        .shape-accent {
            position: absolute;
            bottom: -10px;
            left: -10px;
            width: 40%;
            height: 60%;
            /* Membuat bentuk panah ke kanan */
            clip-path: polygon(0 0, 100% 50%, 0 100%);
            z-index: 2;
            opacity: 0.95;
        }

        /* Logika Warna Unik (Ganjil Merah, Genap Oranye seperti referensi) */
        .potensi-item:nth-child(odd) .shape-accent {
            background-color: #E62A2A;
            /* Merah */
        }

        .potensi-item:nth-child(even) .shape-accent {
            background-color: #F27A1A;
            /* Oranye */
        }

        /* Teks Judul di Bawah */
        .potensi-name {
            font-size: 1.25rem;
            font-weight: 800;
            color: #111;
            margin: 0;
            letter-spacing: 0.5px;
        }

        /* --- RESPONSIVE UNTUK HP / TABLET --- */
        @media (max-width: 992px) {
            .potensi-header {
                flex-direction: column;
                /* Tumpuk judul dan tombol */
                gap: 20px;
            }

            .potensi-grid {
                justify-content: center;
                /* Di layar kecil, lingkaran ke tengah */
            }
        }

        @media (max-width: 576px) {
            .potensi-circle-wrapper {
                width: 250px;
                height: 250px;
            }
        }

    </style>

    <section class="potensi-desa-section">
        <div class="potensi-container">

            <div class="potensi-header">
                <div class="potensi-title-area">

                    <h1 class="judul-potensi">POTENSI DESA</h1>
                    <p class="deskripsi-potensi">
                        Informasi tentang potensi dan kemajuan desa di berbagai bidang seperti ekonomi, pariwisata, pertanian, industri kreatif, dan kelestarian lingkungan.
                    </p>
                </div>

                <div class="potensi-action-area">
                    <a href="{{ route('frontend.wisata') ?? '#' }}" class="btn-lihat-semua">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px;">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                        </svg>
                        LIHAT POTENSI LEBIH BANYAK
                    </a>
                </div>
            </div>

            <div class="potensi-grid">

                @forelse($wisata_desa ?? [] as $item)
                <div class="potensi-item">
                    <a href="{{ route('frontend.potensi.detail', $item->id) }}" style="text-decoration: none; display: flex; flex-direction: column;transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                        <div class="potensi-circle-wrapper">
                            <img src="{{ asset('storage/' . ($item->gambar ?? '')) }}" alt="{{ $item->nama_wisata }}">
                            <div class="shape-dark"></div>
                            <div class="shape-accent"></div>
                        </div>
                        <h3 class="potensi-name">{{ strtoupper($item->nama_wisata) }}</h3>
                    </a>
                </div>
                @empty
                <div style="width: 100%; text-align: left; padding: 50px 0; color: #888;">
                    Belum ada data potensi desa.
                </div>
                @endforelse

            </div>

        </div>
    </section>

    <section class="wisata-section-baru">

        <div class="wisata-wrapper-utama">

            <div class="slide-bg-luar" style="background-image: url('{{ asset('storage/' . ($wisata_desa->first()->gambar ?? '')) }}');"></div>
            <div class="slide-bg-overlay"></div>

            <div class="wisata-container-tengah">

                <div class="wisata-header-kiri">
                    <h1 class="judul-wisata">WISATA DESA</h1>
                    <span class="deskripsi-wisata">Layanan promosi potensi desa dan fasilitas untuk menarik minat pengunjung.</span>
                </div>

                <div class="wisata-inner-slider">
                    @forelse($wisata_desa as $key => $item)
                    <a href="#" class="wisata-slide fade" style="display: {{ $key == 0 ? 'block' : 'none' }};">

                        <img src="{{ asset('storage/' . $item->gambar) }}" class="inner-image" alt="{{ $item->nama_wisata }}">
                        <div class="inner-box-gradient"></div>

                        <button class="slide-arrow-btn left" onclick="plusSlides(-1); event.preventDefault();">❮</button>

                        <div class="wisata-text-content">
                            <h3>{{ $item->nama_wisata }}</h3>
                            <p>{{ Str::limit($item->deskripsi, 150) }}</p>
                        </div>

                        <button class="slide-arrow-btn right" onclick="plusSlides(1); event.preventDefault();">❯</button>
                    </a>
                    @empty
                    <div class="wisata-slide" style="background-color: #333; display: flex; align-items: center; justify-content: center; color: white;">
                        Belum ada data wisata.
                    </div>
                    @endforelse
                </div>
            </div>

        </div>
        <div class="news-more">
            <div class="wisata-div-bar">
                <a href="{{ route('frontend.wisata') }}" class="btn-lihat-semua">
                    <i class="icon-list-wisata"></i> LIHAT WISATA LEBIH BANYAK
                </a>
            </div>
        </div>

    </section>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Fungsi Tombol Next/Prev
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Fungsi Utama Slider
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("myslides");
            if (slides.length === 0) return; // Cegah error jika tidak ada slide

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "flex";
        }

    </script>
    <section class="shop-section">
        <div class="shop-container">

            <div class="shop-header">
                <div>
                    <h2 class="title-green" style="color: #7ED957; font-size: 2.5rem; font-weight: 800; margin-bottom: 5px; text-transform: uppercase;">
                        BELI DARI DESA
                    </h2>
                    <p class="shop-subtitle">
                        Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa
                    </p>
                </div>
            </div>

            <div class="product-grid">

                @forelse($produk_umkm as $produk)
                <div class="product-card">
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="product-image" onerror="this.src='https://placehold.co/400x300?text=No+Image'" />

                    <div class="product-info">
                        <h3>{{ $produk->nama_produk }}</h3>

                        <div class="product-bottom-row">
                            <div class="rating-stars">
                                &#9733;&#9733;&#9733;&#9733;&#9733;
                            </div>

                            <span class="price-text">Rp{{ number_format($produk->harga, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: #888;">
                    <p>Belum ada produk UMKM yang ditawarkan saat ini.</p>
                </div>
                @endforelse

            </div>

            <div class="shop-footer">
                <a href="{{ route('frontend.belanja') }}" class="btn-lihat-semua-hitam">
                    <i class="icon-list"></i> LIHAT PRODUK LEBIH BANYAK
                </a>
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
            <div class="shop-footer">
                <a href="{{ route('frontend.galeri') }}" class="view-more-link">
                    <i class="icon-images"></i> LIHAT FOTO LEBIH BANYAK
                </a>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const myImages = [
                "{{ asset('assets/img/background 1.webp') }}"
                , "{{ asset('assets/img/background 2.webp') }}"
                , "{{ asset('assets/img/background 3.webp') }}"
            ];

            // --- TAMBAHKAN LOGIKA PRELOAD INI ---
            myImages.forEach((src) => {
                const img = new Image();
                img.src = src;
            });
            // ------------------------------------

            window.initHeroSlider('.hero', myImages, 5000);
        });

    </script>


</x-frontend>
