<x-frontend>

    <section class="profile-page">
        <div class="profile-container">

            <div class="vision-card">
                <h1 class="title-green-bold">Visi </h1>

                <p class="vision-text">
                    “Desa Bedi Kulon sebagai Desa Mandiri yang mampu mengelola potensi Desa dan pembangunan berkelanjutan untuk mewujudkan masyarakat yang sejahtera”
                </p>
            </div>

            <div class="mission-card">
                <h1 class="title-green-bold">Misi</h1>

                {{-- Tambahkan ID 'missionList' 🛠️ --}}
                <ol class="mission-list" id="missionList">
                    <li>Mewujudkan tata kelola pemerintahan yang baik</li>
                    <li>Mengembangkan kegiatan keagamaan</li>
                    <li>Meningkatkan kualitas pendidikan dan sumber daya manusia</li>
                    <li>Mengembangkan teknologi informasi</li>
                    <li>Pembangunan infrastruktur, sarana dan prasarana</li>
                </ol>

                {{-- Tambahkan ID 'readMoreBtn' ⏺️ --}}
                <a href="javascript:void(0)" class="read-more-link" id="readMoreBtn">
                    <span class="btn-text">Baca Selengkapnya</span>
                    <span class="btn-icon">︾</span>
                </a>
            </div>


        </div>
    </section>
    <section class="bagan-section">
        <div class="bagan-container">
            <h2 class="title-green">Bagan Desa </h2>
            <div class="bagan-grid">
                <div class="bagan-item">
                    <h3>Struktur Organisasi Pemerintahan Desa</h3>
                    <div class="bagan-image-wrapper">
                        <img src="{{ asset('assets/img/bagan_1.jpg') }}" alt="Struktur Organisasi Pemerintahan Desa">

                    </div>
                </div>

                <div class="bagan-item">
                    <h3>Struktur Organisasi Badan Permusyawaratan Desa</h3>
                    <div class="bagan-image-wrapper">
                        <img src="{{ asset('assets/img/bagan_1.jpg') }}" alt="Struktur Organisasi BPD">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sejarah-konten">
        <div class="sejarah-wrapper">
            <h2 class="title-green">Sejarah Berdirinya Desa Bedi Kulon </h2>


            <div class="sejarah-text-container">
                <p>
                    <strong>Asal-usul Nama:</strong> Nama "Bedi Kulon" diambil dari bahasa lokal yang merujuk pada butiran pasir halus atau suara desir pasir di pesisir pantai. Desa ini pada mulanya merupakan pemukiman kecil para nelayan yang menempati wilayah pesisir di Kecamatan Marang Kayu.
                </p>

                <p>
                    Dahulu, wilayah ini merupakan area hutan bakau yang luas dan pesisir pantai yang kaya akan hasil laut. Seiring dengan berjalannya waktu, migrasi penduduk dari berbagai daerah mulai berdatangan untuk mencari penghidupan sebagai nelayan dan berkebun, sehingga membentuk komunitas masyarakat yang majemuk namun tetap rukun.
                </p>

                <div class="quote-sejarah">
                    "Membangun dari pesisir, menjaga warisan leluhur untuk masa depan yang lebih cerah."
                </div>

                <p>
                    Secara administratif, Desa Bedi Kulon resmi berdiri menjadi desa mandiri di bawah naungan Kabupaten Kutai Kartanegara melalui proses pemekaran wilayah. Fokus utama pembangunan desa sejak awal berdirinya adalah optimalisasi potensi kelautan dan pariwisata bahari, yang kini dikenal dengan destinasi Pantai Biru Bedi Kulon.
                </p>

                <p>
                    Hingga saat ini, sejarah berdirinya desa terus dijaga melalui cerita turun-temurun dari para tokoh adat dan tetua desa, memastikan bahwa generasi muda tidak melupakan akar budaya dan perjuangan para pendahulu dalam membuka wilayah pemukiman ini.
                </p>
            </div>
        </div>
    </section>
    <section class="lokasi-wilayah">
        <div class="lokasi-container">
            <h2 class="title-green">Lokasi & Wilayah Desa</h2>

            <div class="lokasi-grid">

                <div class="lokasi-data">
                    <div class="data-statistik">
                        <div class="stat-box">
                            <span class="label">Luas Desa</span>
                            <span class="value"> km²</span>
                        </div>
                        <div class="stat-box">
                            <span class="label">Jumlah Penduduk</span>
                            <span class="value">1.479 Jiwa</span>

                        </div>
                    </div>

                    <div class="batas-box">
                        <h3>Batas Wilayah</h3>
                        <ul>
                            <li><strong>Utara:</strong> </li>
                            <li><strong>Selatan:</strong> </li>
                            <li><strong>Barat:</strong> </li>
                            <li><strong>Timur:</strong> </li>

                        </ul>
                    </div>
                </div>

                <div class="lokasi-map">
                    <div class="map-responsive">
                        <div id="mapDesa" style="width: 100%; height: 100%;" style="border:0;" allowfullscreen="" loading="lazy"></div>

                    </div>

                </div>

            </div>
        </div>
    </section>
</x-frontend>
