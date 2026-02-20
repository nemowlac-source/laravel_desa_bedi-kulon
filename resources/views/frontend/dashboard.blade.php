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
                    <div class="icon-box-dashboard">

                        <img src="https://cdn-icons-png.flaticon.com/512/5351/5351465.png" alt="Profil Desa" />
                    </div>
                    <h3>PROFIL DESA</h3>
                </div>

                <div class="explore-card">
                    <div class="icon-box-dashboard">

                        <img src="https://cdn-icons-png.flaticon.com/512/4221/4221419.png" alt="Infografis" />
                    </div>
                    <h3>INFOGRAFIS</h3>
                </div>

                <div class="explore-card">
                    <div class="icon-box-dashboard">
                        <img src="https://cdn-icons-png.flaticon.com/512/1067/1067357.png" alt="IDM" />
                    </div>
                    <h3>IDM</h3>
                </div>

                <div class="explore-card">
                    <div class="icon-box-dashboard">

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

                @forelse($perangkat_desa as $staf)
                <div class="staf-card">
                    <div class="staf-photo">
                        <img src="{{ asset('storage/' . $staf->foto) }}" alt="{{ $staf->nama }}" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='https://placehold.co/400x400?text=No+Photo'" />
                    </div>

                    <div class="staf-info">
                        <h3>{{ strtoupper($staf->nama) }}</h3>

                        <p>{{ $staf->jabatan }}</p>

                        @if($staf->niap)
                        <p style="font-size: 0.8rem; color: #888; margin-top: 5px;">
                            NIAP: {{ $staf->niap }}
                        </p>
                        @endif
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
            <p class="news-subtitle">
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
                <a href="{{ route('frontend.potensi') }}" class="view-more-link">
                    <i class="icon-list"></i> LIHAT POTENSI LEBIH BANYAK
                </a>
            </div>

            <div class="potensi-slider" style="display: flex; gap: 30px; flex-wrap: wrap; justify-content: center;">

                @forelse($potensi_desa as $item)

                @php
                $colors = ['red', 'orange', 'green', 'blue'];
                $color = $colors[$loop->index % 4];
                // Jika urutan ke-0 pakai merah, ke-1 orange, dst.
                @endphp

                <div class="potensi-item" style="text-align: center; max-width: 200px;">
                    <div class="circle-potensi" style="position: relative; width: 180px; height: 180px; margin: 0 auto 20px;">

                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%; border: 5px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.1);" onerror="this.src='https://placehold.co/200x200?text=Potensi'" />

                        <div class="accent-{{ $color }}" style="position: absolute; bottom: 0; right: 0; width: 40px; height: 40px; border-radius: 50%;">
                        </div>
                    </div>

                    <h3 style="font-size: 1.1rem; font-weight: bold; text-transform: uppercase;">
                        {{ $item->judul }}
                    </h3>

                    @if($item->lokasi)
                    <p style="font-size: 0.8rem; color: #888;">{{ $item->lokasi }}</p>
                    @endif
                </div>

                @empty
                <div style="width: 100%; text-align: center; padding: 40px; color: #888;">
                    <p>Data potensi desa belum ditambahkan.</p>
                </div>
                @endforelse

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

            <div class="wisata-slider-wrapper" style="position: relative; overflow: hidden; border-radius: 15px;">

                @forelse($wisata_desa as $key => $item)
                <div class="wisata-hero-card myslides fade" style="display: {{ $key == 0 ? 'flex' : 'none' }}; background-image: url('{{ asset('storage/' . $item->gambar) }}'); background-size: cover; background-position: center; height: 400px; position: relative; align-items: flex-end; padding: 30px;">

                    <div class="wisata-overlay" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;"></div>

                    <div class="wisata-content" style="position: relative; z-index: 2; color: white; max-width: 600px;">
                        <h1 style="font-size: 2rem; font-weight: bold; margin-bottom: 10px;">{{ $item->nama_wisata }}</h1>

                        <div style="margin-bottom: 10px; font-size: 0.9rem; color: #ddd;">
                            <span style="margin-right: 15px;"><i class="icon-clock"></i> {{ $item->jam_buka ?? '24 Jam' }}</span>
                            <span><i class="icon-ticket"></i> {{ $item->harga_tiket ?? 'Gratis' }}</span>
                        </div>

                        <p style="font-size: 1rem; line-height: 1.5; opacity: 0.9;">
                            {{ Str::limit($item->deskripsi, 150) }}
                        </p>
                    </div>
                </div>
                @empty
                <div class="wisata-hero-card" style="background-color: #333; height: 300px; display: flex; align-items: center; justify-content: center; color: white;">
                    <p>Belum ada data wisata.</p>
                </div>
                @endforelse

                @if($wisata_desa->count() > 1)
                <button class="slider-arrow left" onclick="plusSlides(-1)" style="position: absolute; top: 50%; left: 20px; transform: translateY(-50%); background: rgba(0,0,0,0.5); color: white; border: none; font-size: 24px; padding: 10px 15px; cursor: pointer; z-index: 10; border-radius: 50%;">❮</button>
                <button class="slider-arrow right" onclick="plusSlides(1)" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%); background: rgba(0,0,0,0.5); color: white; border: none; font-size: 24px; padding: 10px 15px; cursor: pointer; z-index: 10; border-radius: 50%;">❯</button>
                @endif
            </div>

            <div class="wisata-footer" style="margin-top: 30px; text-align: center;">
                <a href="{{ route('frontend.wisata') }}" class="view-more-white" style="color: white; text-decoration: none; font-weight: bold; border: 1px solid white; padding: 10px 20px; border-radius: 5px; transition: 0.3s;">
                    <i class="icon-list"></i> LIHAT WISATA LEBIH BANYAK
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

                @forelse($produk_umkm as $produk)
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" style="width: 100%; height: 200px; object-fit: cover;" onerror="this.src='https://placehold.co/400x300?text=No+Image'" />
                    </div>

                    <div class="product-info">
                        <h3 style="margin-bottom: 5px;">{{ $produk->nama_produk }}</h3>

                        <div style="font-size: 0.8rem; color: #888; margin-bottom: 5px;">
                            <i class="icon-user"></i> {{ $produk->penjual }}
                        </div>

                        <p class="price" style="color: #28a745; font-weight: bold;">
                            Rp{{ number_format($produk->harga, 0, ',', '.') }}
                        </p>

                        <a href="https://wa.me/{{ $produk->no_hp }}?text=Halo, saya tertarik dengan produk {{ $produk->nama_produk }} yang ada di Website Desa." target="_blank" style="display: block; text-align: center; background: #25D366; color: white; padding: 8px; border-radius: 5px; text-decoration: none; margin-top: 10px; font-weight: bold; font-size: 0.9rem;">
                            <i class="icon-phone"></i> Beli Sekarang
                        </a>
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 40px; color: #888;">
                    <p>Belum ada produk UMKM yang ditawarkan saat ini.</p>
                </div>
                @endforelse

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
