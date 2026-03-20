<x-frontend>

    <div style="margin-top: 60px">
        {{-- ============================================================== --}}
        {{-- 1. VERSI DESKTOP (Menampilkan Desain Asli Bawaanmu) --}}
        {{-- ============================================================== --}}
        <div class="hidden md:block">

            {{-- Visi Misi Desktop --}}
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
                        <ol class="mission-list" id="missionList">
                            <li>Mewujudkan tata kelola pemerintahan yang baik</li>
                            <li>Mengembangkan kegiatan keagamaan</li>
                            <li>Meningkatkan kualitas pendidikan dan sumber daya manusia</li>
                            <li>Mengembangkan teknologi informasi</li>
                            <li>Pembangunan infrastruktur, sarana dan prasarana</li>
                        </ol>
                        <a href="javascript:void(0)" class="read-more-link" id="readMoreBtn">
                            <span class="btn-text">Baca Selengkapnya</span>
                            <span class="btn-icon">︾</span>
                        </a>
                    </div>
                </div>
            </section>

            {{-- Bagan Desktop --}}
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

            {{-- Sejarah Desktop --}}
            <section class="sejarah-konten">
                <div class="sejarah-wrapper">
                    <h2 class="title-green">Sejarah Berdirinya Desa Bedi Kulon </h2>
                    <div class="sejarah-text-container">
                        <p><strong>Asal-usul Nama:</strong> Nama "Bedi Kulon" diambil dari bahasa lokal yang merujuk pada butiran pasir halus atau suara desir pasir di pesisir pantai. Desa ini pada mulanya merupakan pemukiman kecil para nelayan yang menempati wilayah pesisir di Kecamatan Marang Kayu.</p>
                        <p>Dahulu, wilayah ini merupakan area hutan bakau yang luas dan pesisir pantai yang kaya akan hasil laut. Seiring dengan berjalannya waktu, migrasi penduduk dari berbagai daerah mulai berdatangan untuk mencari penghidupan sebagai nelayan dan berkebun, sehingga membentuk komunitas masyarakat yang majemuk namun tetap rukun.</p>
                        <div class="quote-sejarah">"Membangun dari pesisir, menjaga warisan leluhur untuk masa depan yang lebih cerah."</div>
                        <p>Secara administratif, Desa Bedi Kulon resmi berdiri menjadi desa mandiri di bawah naungan Kabupaten Kutai Kartanegara melalui proses pemekaran wilayah. Fokus utama pembangunan desa sejak awal berdirinya adalah optimalisasi potensi kelautan dan pariwisata bahari, yang kini dikenal dengan destinasi Pantai Biru Bedi Kulon.</p>
                        <p>Hingga saat ini, sejarah berdirinya desa terus dijaga melalui cerita turun-temurun dari para tokoh adat dan tetua desa, memastikan bahwa generasi muda tidak melupakan akar budaya dan perjuangan para pendahulu dalam membuka wilayah pemukiman ini.</p>
                    </div>
                </div>
            </section>

            {{-- Lokasi Desktop --}}
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
                                {{-- PERHATIKAN ID PETA UNTUK DESKTOP --}}
                                <div id="mapDesaDesktop" style="width: 100%; height: 100%; border:0;" allowfullscreen="" loading="lazy"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>


        {{-- ============================================================== --}}
        {{-- 2. VERSI MOBILE (Menampilkan Desain Accordion Tarik-Ulur) --}}
        {{-- ============================================================== --}}
        <div class="block md:hidden">

            <section class="bg-[#f7f8fa] px-5 py-10 min-h-screen">
                <div class="w-full">

                    {{-- Judul Profil --}}
                    <h2 class="text-[#2ac0b4] font-black text-2xl uppercase mb-6 text-center tracking-wide">
                        Profil Desa
                    </h2>

                    {{-- Visi Accordion --}}
                    <details class="group bg-white rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.05)] mb-4 overflow-hidden">
                        <summary class="flex justify-between items-center font-bold text-[#2ac0b4] text-lg p-5 cursor-pointer list-none select-none">
                            <span>Visi</span>
                            <svg class="w-5 h-5 text-[#2ac0b4] transition-transform duration-300 group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="p-5 border-t border-gray-100 text-gray-700 text-[14.5px] font-medium leading-relaxed bg-gray-50/50 text-center italic">
                            “Desa Bedi Kulon sebagai Desa Mandiri yang mampu mengelola potensi Desa dan pembangunan berkelanjutan untuk mewujudkan masyarakat yang sejahtera”
                        </div>
                    </details>

                    {{-- Misi Accordion --}}
                    <details class="group bg-white rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.05)] mb-4 overflow-hidden">
                        <summary class="flex justify-between items-center font-bold text-[#2ac0b4] text-lg p-5 cursor-pointer list-none select-none">
                            <span>Misi</span>
                            <svg class="w-5 h-5 text-[#2ac0b4] transition-transform duration-300 group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="p-5 border-t border-gray-100 text-gray-700 text-[14.5px] font-medium leading-relaxed bg-gray-50/50">
                            <ol class="list-decimal pl-5 space-y-2">
                                <li>Mewujudkan tata kelola pemerintahan yang baik</li>
                                <li>Mengembangkan kegiatan keagamaan</li>
                                <li>Meningkatkan kualitas pendidikan dan sumber daya manusia</li>
                                <li>Mengembangkan teknologi informasi</li>
                                <li>Pembangunan infrastruktur, sarana dan prasarana</li>
                            </ol>
                        </div>
                    </details>

                    {{-- Bagan Accordion --}}
                    <details class="group bg-white rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.05)] mb-4 overflow-hidden">
                        <summary class="flex justify-between items-center font-bold text-[#2ac0b4] text-lg p-5 cursor-pointer list-none select-none">
                            <span>Bagan Desa</span>
                            <svg class="w-5 h-5 text-[#2ac0b4] transition-transform duration-300 group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="p-5 border-t border-gray-100 bg-gray-50/50 space-y-6">
                            <div>
                                <h3 class="text-sm text-gray-600 font-bold mb-3 text-center">Struktur Organisasi Pemerintahan Desa</h3>
                                <img src="{{ asset('assets/img/bagan_1.jpg') }}" alt="Struktur Pemdes" class="w-full rounded-lg border border-gray-200 shadow-sm">
                            </div>
                            <div>
                                <h3 class="text-sm text-gray-600 font-bold mb-3 text-center">Struktur Organisasi BPD</h3>
                                <img src="{{ asset('assets/img/bagan_1.jpg') }}" alt="Struktur BPD" class="w-full rounded-lg border border-gray-200 shadow-sm">
                            </div>
                        </div>
                    </details>

                    {{-- Sejarah Accordion --}}
                    <details class="group bg-white rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.05)] mb-8 overflow-hidden">
                        <summary class="flex justify-between items-center font-bold text-[#2ac0b4] text-lg p-5 cursor-pointer list-none select-none">
                            <span>Sejarah Desa</span>
                            <svg class="w-5 h-5 text-[#2ac0b4] transition-transform duration-300 group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="p-5 border-t border-gray-100 text-gray-700 text-[14px] leading-relaxed bg-gray-50/50 space-y-4 text-justify">
                            <p><strong>Asal-usul Nama:</strong> Nama "Bedi Kulon" diambil dari bahasa lokal yang merujuk pada butiran pasir halus atau suara desir pasir di pesisir pantai. Desa ini pada mulanya merupakan pemukiman kecil para nelayan yang menempati wilayah pesisir di Kecamatan Marang Kayu.</p>
                            <p>Dahulu, wilayah ini merupakan area hutan bakau yang luas dan pesisir pantai yang kaya akan hasil laut. Seiring dengan berjalannya waktu, migrasi penduduk dari berbagai daerah mulai berdatangan untuk mencari penghidupan sebagai nelayan dan berkebun, sehingga membentuk komunitas masyarakat yang majemuk namun tetap rukun.</p>
                            <div class="my-4 border-l-4 border-[#2ac0b4] pl-4 py-2 bg-white italic font-medium text-gray-600 shadow-sm">
                                "Membangun dari pesisir, menjaga warisan leluhur untuk masa depan yang lebih cerah."
                            </div>
                            <p>Secara administratif, Desa Bedi Kulon resmi berdiri menjadi desa mandiri di bawah naungan Kabupaten Kutai Kartanegara melalui proses pemekaran wilayah. Fokus utama pembangunan desa sejak awal berdirinya adalah optimalisasi potensi kelautan dan pariwisata bahari, yang kini dikenal dengan destinasi Pantai Biru Bedi Kulon.</p>
                        </div>
                    </details>

                    {{-- Lokasi & Wilayah Mobile --}}
                    <div class="bg-white rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.05)] overflow-hidden">
                        <div class="bg-[#2ac0b4] p-4">
                            <h2 class="text-white font-bold text-lg text-center tracking-wide">Lokasi & Wilayah Desa</h2>
                        </div>

                        <div class="p-5">
                            <div class="flex flex-col gap-3 mb-6">
                                <div class="bg-gray-50 border border-gray-100 p-3 rounded-lg flex justify-between items-center shadow-sm">
                                    <span class="text-sm text-gray-500 font-semibold">Luas Desa</span>
                                    <span class="text-sm font-bold text-gray-800">... km²</span>
                                </div>
                                <div class="bg-gray-50 border border-gray-100 p-3 rounded-lg flex justify-between items-center shadow-sm">
                                    <span class="text-sm text-gray-500 font-semibold">Jumlah Penduduk</span>
                                    <span class="text-sm font-bold text-gray-800">1.479 Jiwa</span>
                                </div>
                            </div>

                            <div class="bg-gray-50 border border-gray-100 p-4 rounded-lg shadow-sm mb-6">
                                <h3 class="text-sm font-bold text-[#2ac0b4] mb-2 border-b border-gray-200 pb-1">Batas Wilayah</h3>
                                <ul class="text-sm text-gray-700 space-y-1.5">
                                    <li><strong class="text-gray-900 w-16 inline-block">Utara</strong> : ...</li>
                                    <li><strong class="text-gray-900 w-16 inline-block">Selatan</strong> : ...</li>
                                    <li><strong class="text-gray-900 w-16 inline-block">Barat</strong> : ...</li>
                                    <li><strong class="text-gray-900 w-16 inline-block">Timur</strong> : ...</li>
                                </ul>
                            </div>

                            {{-- PERHATIKAN ID PETA UNTUK MOBILE --}}
                            <div class="w-full h-[350px] rounded-lg overflow-hidden border-2 border-gray-200 relative bg-gray-100">
                                <div id="mapDesaMobile" class="w-full h-full z-10"></div>
                                <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-400 text-sm font-medium z-0">Memuat Peta...</span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </div>

</x-frontend>
