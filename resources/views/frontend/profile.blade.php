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
                            “Desa Bedikulon sebagai Desa Mandiri yang mampu mengelola potensi Desa dan pembangunan berkelanjutan untuk mewujudkan masyarakat yang sejahtera”
                        </p>
                    </div>
                    <div class="mission-card">
                        <h1 class="title-green-bold">Misi</h1>
                        <ol class="mission-list list-decimal list-inside space-y-2 text-gray-700" id="missionList">
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

            {{-- ========================================== --}}
            {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
            {{-- ========================================== --}}
            <div class="hidden md:block w-full max-w-7xl mx-auto px-6 mt-16 mb-16">

                {{-- Header Bagan Desktop --}}
                <div class="mb-8">
                    <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-2 text-left tracking-tight drop-shadow-sm uppercase">
                        BAGAN DESA
                    </h2>
                    <p class="text-lg text-gray-600 font-medium">
                        Struktur Organisasi Pemerintahan dan Badan Permusyawaratan Desa Bedikulon.
                    </p>
                </div>
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col p-6 hover:shadow-md transition-shadow">
                        <h3 class="font-bold text-gray-800 text-xl mb-5 text-center px-4">
                            Struktur Organisasi Pemerintahan Desa
                        </h3>
                        <div class="w-full bg-gray-50 rounded-xl overflow-hidden border border-gray-100 p-2 flex items-center justify-center">
                            <img src="{{ asset('assets/img/Bagan_desa_bedi.jfif') }}" alt="Struktur Organisasi Pemerintahan Desa" class="w-full h-auto object-contain rounded-lg">
                        </div>
                    </div>
                </div>

                {{-- Grid 2 Kolom untuk Bagan
                {{-- <div class="grid grid-cols-2 gap-8"> --}}

                {{-- Bagan 1 --}}
                {{-- <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col p-6 hover:shadow-md transition-shadow">
                        <h3 class="font-bold text-gray-800 text-xl mb-5 text-center px-4">
                            Struktur Organisasi Pemerintahan Desa
                        </h3>
                        <div class="w-full bg-gray-50 rounded-xl overflow-hidden border border-gray-100 p-2 flex-grow flex items-center justify-center">
                            <img src="{{ asset('assets/img/bagan_1.jpg') }}" alt="Struktur Organisasi Pemerintahan Desa" class="w-full h-auto object-contain rounded-lg">
            </div>
        </div> --}}

        {{-- Bagan 2 --}}
        {{-- <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col p-6 hover:shadow-md transition-shadow">
                        <h3 class="font-bold text-gray-800 text-xl mb-5 text-center px-4">
                            Struktur Organisasi Badan Permusyawaratan Desa
                        </h3>
                        <div class="w-full bg-gray-50 rounded-xl overflow-hidden border border-gray-100 p-2 flex-grow flex items-center justify-center">
                            <img src="{{ asset('assets/img/bagan_1.jpg') }}" alt="Struktur Organisasi BPD" class="w-full h-auto object-contain rounded-lg">
    </div>
    </div> --}}

    {{-- </div>  --}}
    </div>


    {{-- ========================================== --}}
    {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
    {{-- ========================================== --}}
    <div class="hidden md:block w-full max-w-7xl mx-auto px-6 mt-16 mb-16">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-12 hover:shadow-md transition-shadow">

            <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-8 text-left tracking-tight drop-shadow-sm uppercase">
                Sejarah Berdirinya Desa Bedikulon
            </h2>

            {{-- space-y-6 otomatis memberi jarak vertikal antar paragraf --}}
            <div class="space-y-6 text-lg text-gray-600 font-medium leading-relaxed text-justify">
                <p>Dulu antara Bedikulon dan Bediwetan menjadi satu wilayah dengan nama Desa Bedi. Tokoh yang babad Desa Bedi ada tiga orang, yaitu Soprojo yang membabad wilayah Barat, Sowongso babad di wilayah Tengah dan Podrono yang babad di wilayah Timur. Dari keturunan Mbah Soprojo kemudian diangkat menjadi lurah palang, yaitu Mbah Truno. Setelah menjadi desa yang ramai kemudian pada era Bupati Tjokronegoro I Desa Bedi dibagi menjadi dua wilayah, dengan pusat pemerintahannya dinamai Bedikulon. </p>


                {{-- Desain khusus untuk Quote/Kutipan --}}
                <blockquote class="border-l-4 border-[#2ac0b4] bg-emerald-50 py-4 px-6 rounded-r-xl italic text-gray-800 font-semibold text-xl my-8">
                    "Membangun Ponorogo Hebat."
                </blockquote>

                <p>Desa Bedikulon sendiri terdiri dari 3 dhukuhan (dusun), yakni Bogem, Krajan dan Mayi.
                    Penamaan Bedi ini diriwayatkan oleh warga setidaknya dalam tiga versi. Pertama, dari kata "medhi", Kedua, adalah karena dulu terdapat sebuah langgar (musholla) yang berdebu karena pasir (jw. wedhi). Sedangkan versi ketiga, yaitu karena banyak sungai yang membawa endapan pasir. Meskipun agak berbeda, namun ketiganya sama-sama berkaitan dengan pasir atau wedhi.</p>

            </div>

        </div>
    </div>


    {{-- ========================================== --}}
    {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
    {{-- ========================================== --}}
    <div class="hidden md:block w-full max-w-7xl mx-auto px-6 mt-16 mb-16">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-12 hover:shadow-md transition-shadow">

            <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-8 text-left tracking-tight drop-shadow-sm uppercase">
                Lokasi & Wilayah Desa
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

                {{-- Kolom Kiri: Data & Batas Wilayah (Porsi 5/12) --}}
                <div class="lg:col-span-5 flex flex-col gap-6">

                    {{-- Kotak Statistik (Luas & Penduduk) --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-50 border border-gray-100 rounded-xl p-5 flex flex-col justify-center items-center text-center">
                            <span class="text-xs text-gray-500 font-bold uppercase tracking-widest mb-1">Luas Desa</span>
                            <span class="text-2xl text-[#2ac0b4] font-black"> 54,01 km²</span>

                        </div>
                        <div class="bg-gray-50 border border-gray-100 rounded-xl p-5 flex flex-col justify-center items-center text-center">
                            <span class="text-xs text-gray-500 font-bold uppercase tracking-widest mb-1">Penduduk</span>
                            <span class="text-2xl text-[#2ac0b4] font-black">{{ number_format($total_penduduk ?? 0, 0, ',', '.') }} Jiwa</span>
                        </div>
                    </div>

                    {{-- Kotak Batas Wilayah --}}
                    <div class="bg-emerald-50 border border-emerald-100 rounded-xl p-6 flex-grow">
                        <h3 class="font-bold text-emerald-800 text-lg mb-4 uppercase tracking-wider">Batas Wilayah</h3>
                        <ul class="flex flex-col text-emerald-900 font-medium">
                            <li class="flex justify-between py-3 border-b border-emerald-200/50">
                                <span class="font-bold">Utara</span>
                                <span class="text-emerald-700 text-right">Desa Bajang</span>
                            </li>
                            <li class="flex justify-between py-3 border-b border-emerald-200/50">
                                <span class="font-bold">Selatan</span>
                                <span class="text-emerald-700 text-right">Desa Bancar</span>
                            </li>
                            <li class="flex justify-between py-3 border-b border-emerald-200/50">
                                <span class="font-bold">Barat</span>
                                <span class="text-emerald-700 text-right">Desa Mojopitu & Desa Crabak</span>
                            </li>
                            <li class="flex justify-between py-3">
                                <span class="font-bold">Timur</span>
                                <span class="text-emerald-700 text-right">Desa Bediwetan</span>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Kolom Kanan: Peta (Porsi 7/12) --}}
                <div class="lg:col-span-7">
                    <div class="w-full h-full min-h-[400px] bg-gray-100 rounded-xl overflow-hidden shadow-inner border border-gray-200 relative z-0">
                        <div id="mapDesaDesktop" class="absolute inset-0 w-full h-full z-0"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>


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
                        “Desa Bedikulon sebagai Desa Mandiri yang mampu mengelola potensi Desa dan pembangunan berkelanjutan untuk mewujudkan masyarakat yang sejahtera”
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
                    <div class="p-5 border-t border-gray-100 bg-gray-50/50">
                        <h3 class="font-bold text-gray-800 text-center px-4 mb-4">Struktur Organisasi Pemerintahan dan Badan Permusyawaratan Desa Bedikulon</h3>
                        <div class="w-full bg-white rounded-xl overflow-hidden border border-gray-100 p-2 flex items-center justify-center">
                            <img src="{{ asset('assets/img/Bagan_desa_bedi.jfif') }}" alt="Struktur Organisasi Pemerintahan Desa" class="w-full h-auto object-contain rounded-lg">
                        </div>
                    </div>
                </details>

                {{-- Sejarah Accordion --}}
                <details class="group bg-white rounded-xl shadow-[0_2px_10px_rgba(0,0,0,0.05)] mb-8 overflow-hidden">
                    <summary class="flex justify-between items-center font-bold text-[#2ac0b4] text-lg p-5 cursor-pointer list-none select-none">
                        <span>Sejarah Desa Bedikulon</span>
                        <svg class="w-5 h-5 text-[#2ac0b4] transition-transform duration-300 group-open:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" />
                        </svg>
                    </summary>
                    <div class="p-5 border-t border-gray-100 text-gray-700 text-[14px] leading-relaxed bg-gray-50/50 space-y-4 text-justify">
                        <p>Dulu antara Bedikulon dan Bediwetan menjadi satu wilayah dengan nama Desa Bedi. Tokoh yang babad Desa Bedi ada tiga orang, yaitu Soprojo yang membabad wilayah Barat, Sowongso babad di wilayah Tengah dan Podrono yang babad di wilayah Timur. Dari keturunan Mbah Soprojo kemudian diangkat menjadi lurah palang, yaitu Mbah Truno. Setelah menjadi desa yang ramai kemudian pada era Bupati Tjokronegoro i Desa Bedi dibagi menjadi dua wilayah, dengan pusat pemerintahannya dinamai Bedikulon.</p>
                        <div class="my-4 border-l-4 border-[#2ac0b4] pl-4 py-2 bg-white italic font-medium text-gray-600 shadow-sm">
                            "Membangun Ponorogo Hebat."
                        </div>
                        <p>Desa Bedikulon sendiri terdiri dari 3 dhukuhan (dusun), yakni Bogem, Krajan dan Mayi. Penamaan Bedi ini diriwayatkan oleh warga setidaknya dalam tiga versi. Pertama, dari kata "medhi", Kedua, adalah karena dulu terdapat sebuah langgar (musholla) yang berdebu karena pasir (jw. wedhi). Sedangkan versi ketiga, yaitu karena banyak sungai yang membawa endapan pasir. Meskipun agak berbeda, namun ketiganya sama-sama berkaitan dengan pasir atau wedhi.</p>
                        <p>Buku ini ditulis mengacu pada penelitian dan fakta-fakta sejarah berdasarkan memori kolektif-kolegial yang masih tersimpan rapi dalam ingatan para sesepuh desa dengan memaparkan kronologi sejarah Desa Bediwetan secara sistematis.</p>
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
                                <span class="text-sm font-bold text-gray-800">54,01 km²</span>

                            </div>
                            <div class="bg-gray-50 border border-gray-100 p-3 rounded-lg flex justify-between items-center shadow-sm">
                                <span class="text-sm text-gray-500 font-semibold">Jumlah Penduduk</span>
                                <span class="text-sm font-bold text-gray-800">{{ number_format($total_penduduk ?? 0, 0, ',', '.') }} Jiwa</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 border border-gray-100 p-4 rounded-lg shadow-sm mb-6">
                            <h3 class="text-sm font-bold text-[#2ac0b4] mb-2 border-b border-gray-200 pb-1">Batas Wilayah</h3>
                            <ul class="text-sm text-gray-700 space-y-1.5">
                                <li><strong class="text-gray-900 w-16 inline-block">Utara</strong> : Desa Bajang</li>
                                <li><strong class="text-gray-900 w-16 inline-block">Selatan</strong> : Desa Bancar</li>
                                <li><strong class="text-gray-900 w-16 inline-block">Barat</strong> : Desa Mojopitu & Desa Crabak</li>
                                <li><strong class="text-gray-900 w-16 inline-block">Timur</strong> : Desa Bediwetan</li>
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
