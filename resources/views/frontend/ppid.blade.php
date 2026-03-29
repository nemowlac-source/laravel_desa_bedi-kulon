<x-frontend>
    <section class="ppid-section-baru">
        <div class="ppid-container-baru">
            {{-- ============================================================== --}}
            {{-- 1. VERSI DESKTOP (Kode Asli Milikmu) --}}
            {{-- ============================================================== --}}
            <div class="hidden md:block" style="margin-top: 90px">
                <div class="ppid-top-row">
                    <div class="ppid-intro-text">
                        <h1 class="ppid-title-main">PPID</h1>
                        <p class="ppid-desc">Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.</p>
                        <a href="{{ route('frontend.ppid.dasar-hukum') }}" class="btn-dasar-hukum">Dasar Hukum PPID</a>
                    </div>

                    <div class="ppid-categories-grid">
                        <div class="ppid-categories-grid">

                            {{-- Item 1: Berkala --}}
                            <a href="{{ route('frontend.ppid', ['kategori' => 'Berkala']) }}" class="ppid-cat-card">
                                <img src="{{ asset('assets/img/Informasi-berkala-logo.svg') }}" alt="Berkala" style="width: 140px; height: 140px; margin-bottom: 15px; object-fit: contain; transform: scale(1.1);">
                                <span>INFORMASI<br>SECARA BERKALA</span>
                            </a>

                            {{-- Item 2: Serta Merta --}}
                            <a href="{{ route('frontend.ppid', ['kategori' => 'Serta Merta']) }}" class="ppid-cat-card">
                                <img src="{{ asset('assets/img/Informasi-serta-merta.svg') }}" alt="Serta Merta" style="width: 140px; height: 140px; margin-bottom: 15px; object-fit: contain; transform: scale(1.1);">
                                <span>INFORMASI<br>SERTA MERTA</span>
                            </a>

                            {{-- Item 3: Setiap Saat --}}
                            <a href="{{ route('frontend.ppid', ['kategori' => 'Setiap Saat']) }}" class="ppid-cat-card">
                                <img src="{{ asset('assets/img/informasi-setiap-saat.svg') }}" alt="Setiap Saat" style="width: 140px; height: 140px; margin-bottom: 15px; object-fit: contain; transform: scale(1.1);">
                                <span>INFORMASI<br>SETIAP SAAT</span>
                            </a>

                        </div>


                    </div>

                </div>
            </div>


            {{-- ============================================================== --}}
            {{-- 2. VERSI MOBILE (Desain Floating Card sesuai image_9895e2.png) --}}
            {{-- ============================================================== --}}
            <div class="block md:hidden w-full " style="margin-top: 65px">


                <div class="bg-slate-800 px-5 pt-8 pb-20 relative bg-cover bg-center" style="background-image: url('{{ asset('assets/img/arsip.jpg') }}')">

                    {{-- Overlay gelap transparan --}}
                    <div class="absolute inset-0 bg-black/60"></div>

                    {{-- Konten Utama --}}
                    <div class="relative z-10">
                        <h1 class="text-white font-bold text-[22px] leading-[1.3] mb-5">
                            Pejabat Pengelola Informasi dan <br> Dokumentasi
                        </h1>

                        {{-- Tombol Dasar Hukum --}}
                        <a href="{{ route('frontend.ppid.dasar-hukum') }}" class="inline-block bg-white text-black font-bold text-[14px] px-5 py-2.5 rounded-lg border-[2px] border-[#2ac0b4] transition duration-300 hover:bg-[#2ac0b4] hover:text-white">
                            Dasar Hukum
                        </a>
                    </div>

                    {{-- ========================================== --}}
                    {{-- SNIPPET KREDIT AUTHOR (Pojok Kanan Bawah) --}}
                    {{-- ========================================== --}}
                    <div class="absolute bottom-2 right-3 z-20 text-[9px] md:text-[10px] text-white/50 hover:text-white/100 transition duration-300 font-medium tracking-wide">
                        Foto oleh <a href="#" target="_blank" class="underline hover:text-[#2ac0b4]">Archivo-FSP</a> | Lisensi CC BY-SA
                    </div>

                </div>


                {{-- Kartu Kategori Melayang (Overlap) --}}
                <div class="px-4 -mt-12 relative z-20 mb-8">
                    <div class="bg-white rounded-2xl shadow-[0_8px_30px_rgba(0,0,0,0.12)] p-4 md:p-5 flex justify-between items-start">

                        {{-- Item 1: Berkala (Jam 3D Merah) --}}
                        <a href="{{ route('frontend.ppid', ['kategori' => 'Berkala']) }}" class="flex flex-col items-center flex-1 text-center group">
                            <div class="w-[50px] h-[50px] bg-[#eaf8f6] rounded-xl flex items-center justify-center mb-2 transition-transform duration-300 group-hover:-translate-y-1">
                                <img src="https://img.icons8.com/3d-fluency/250/alarm-clock--v1.png" alt="Berkala" class="w-9 h-9 object-contain drop-shadow-sm">
                            </div>
                            <span class="text-gray-600 font-medium text-[11px] leading-tight">Informasi<br>Secara<br>Berkala</span>
                        </a>

                        {{-- Item 2: Serta Merta (Gear 3D) --}}
                        <a href="{{ route('frontend.ppid', ['kategori' => 'Serta Merta']) }}" class="flex flex-col items-center flex-1 text-center group">
                            <div class="w-[50px] h-[50px] bg-[#eaf8f6] rounded-xl flex items-center justify-center mb-2 transition-transform duration-300 group-hover:-translate-y-1">
                                <img src="https://img.icons8.com/3d-fluency/250/gear--v1.png" alt="Serta Merta" class="w-9 h-9 object-contain drop-shadow-sm">
                            </div>
                            <span class="text-gray-600 font-medium text-[11px] leading-tight">Informasi<br>Serta<br>Merta</span>
                        </a>

                        {{-- Item 3: Setiap Saat (Kalender 3D Pink) --}}
                        <a href="{{ route('frontend.ppid', ['kategori' => 'Setiap Saat']) }}" class="flex flex-col items-center flex-1 text-center group">
                            <div class="w-[50px] h-[50px] bg-[#eaf8f6] rounded-xl flex items-center justify-center mb-2 transition-transform duration-300 group-hover:-translate-y-1">
                                <img src="https://img.icons8.com/3d-fluency/250/calendar--v1.png" alt="Setiap Saat" class="w-9 h-9 object-contain drop-shadow-sm">
                            </div>
                            <span class="text-gray-600 font-medium text-[11px] leading-tight">Informasi<br>Setiap<br>Saat</span>
                        </a>


                    </div>
                </div>

            </div>






            {{-- ============================================================== --}}
            {{-- 1. VERSI DESKTOP (Kode Asli Milikmu) --}}
            {{-- ============================================================== --}}
            <div class="hidden md:block ppid-latest-section">
                <h2 class="ppid-title-sub">
                    @if(request('kategori'))
                    INFORMASI {{ strtoupper(request('kategori')) }}
                    @else
                    INFORMASI PUBLIK TERBARU
                    @endif
                </h2>
                <p class="update-meta">Update terakhir {{ $last_update_text ?? '1 minggu yang lalu' }}</p>

                <div class="document-list">
                    @forelse($documents as $doc)
                    <div class="doc-item-card">

                        <div class="doc-info">
                            <h3 class="doc-title">{{ $doc->judul }}</h3>

                            <div class="doc-meta-row">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                {{ $doc->kategori }}
                            </div>

                            <div class="doc-meta-row">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                {{ \Carbon\Carbon::parse($doc->tanggal_upload)->translatedFormat('l, d F Y') }}
                            </div>
                        </div>

                        <div class="doc-actions-col">
                            <a href="{{ route('ppid.lihat-dokumen', $doc->id) }}" target="_blank" class="btn-doc-action">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <path d="M9 15h6"></path>
                                    <path d="M9 11h6"></path>
                                </svg>
                                Lihat Berkas
                            </a>


                            <a href="{{ route('ppid.download', $doc->id) }}" class="btn-doc-action">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                                Unduh ({{ $doc->jumlah_unduh }}x)
                            </a>
                        </div>

                    </div>
                    @empty
                    <div style="text-align: center; padding: 40px 0;">
                        <p style="color: #888;">Belum ada dokumen yang tersedia untuk kategori ini.</p>
                        @if(request('kategori'))
                        <a href="{{ route('ppid.index') }}" style="color: #2ac0b4; font-weight: bold; text-decoration: none;">Tampilkan Semua</a>
                        @endif
                    </div>
                    @endforelse
                </div>

                <div style="margin-top: 40px; display: flex; justify-content: center;">
                    {{ $documents->links() }}
                </div>
            </div>
        </div>


        {{-- ============================================================== --}}
        {{-- 2. VERSI MOBILE (Gaya Card Elegan Sesuai Foto) --}}
        {{-- ============================================================== --}}
        <div class="block md:hidden w-full px-4 mb-8">

            {{-- Header Judul --}}
            <h2 class="text-[#2ac0b4] font-black text-[16px] uppercase tracking-wide mb-1">
                @if(request('kategori'))
                INFORMASI {{ strtoupper(request('kategori')) }}
                @else
                INFORMASI PUBLIK TERBARU
                @endif
            </h2>
            <p class="text-[12px] font-medium text-gray-800 mb-5">
                Update terakhir {{ $last_update_text ?? '1 minggu yang lalu' }}
            </p>

            {{-- Daftar Dokumen (Looping Card) --}}
            <div class="flex flex-col gap-4">
                @forelse($documents as $doc)
                <div class="bg-white rounded-xl shadow-[0_2px_12px_rgba(0,0,0,0.06)] border border-gray-100 p-4">

                    {{-- Judul Dokumen --}}
                    <h3 class="text-[#0f172a] font-black text-[13px] uppercase leading-snug mb-3">
                        {{ $doc->judul }}
                    </h3>

                    {{-- Meta Kategori --}}
                    <div class="flex items-start gap-2 mb-2 text-gray-700 text-[11px] font-medium">
                        <svg class="w-3.5 h-3.5 flex-shrink-0 mt-0.5 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <span>{{ $doc->kategori }}</span>
                    </div>

                    {{-- Meta Tanggal --}}
                    <div class="flex items-center gap-2 mb-4 text-gray-700 text-[11px] font-medium">
                        <svg class="w-3.5 h-3.5 flex-shrink-0 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>{{ \Carbon\Carbon::parse($doc->tanggal_upload)->translatedFormat('l, d F Y') }}</span>
                    </div>

                    {{-- Tombol Aksi (Dibelah Dua) --}}
                    <div class="flex gap-2">
                        {{-- Tombol Lihat Berkas --}}
                        <a href="{{ route('ppid.lihat-dokumen', $doc->id) }}" target="_blank" class="flex-1 bg-[#2ac0b4] text-white py-2.5 px-2 rounded-lg flex items-center justify-center gap-1.5 font-bold text-[11px] transition duration-300 hover:bg-[#209f94]">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                            </svg>
                            Lihat Berkas
                        </a>

                        {{-- Tombol Unduh --}}
                        <a href="{{ route('ppid.download', $doc->id) }}" class="flex-1 bg-[#2ac0b4] text-white py-2.5 px-2 rounded-lg flex items-center justify-center gap-1.5 font-bold text-[11px] transition duration-300 hover:bg-[#209f94]">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            Unduh ({{ $doc->jumlah_unduh }}x)
                        </a>
                    </div>

                </div>

                @empty
                {{-- Kondisi jika dokumen kosong (Mobile) --}}
                <div class="bg-gray-50 rounded-xl border border-gray-100 p-8 text-center">
                    <p class="text-gray-500 text-[13px] mb-2">Belum ada dokumen yang tersedia untuk kategori ini.</p>
                    @if(request('kategori'))
                    <a href="{{ route('ppid.index') }}" class="text-[#2ac0b4] font-bold text-[13px] underline">Tampilkan Semua</a>
                    @endif
                </div>
                @endforelse
            </div>

            {{-- Navigasi Paginasi --}}
            <div class="mt-8 flex justify-center">
                {{ $documents->links() }}
            </div>

        </div>



        {{-- ============================================================== --}}
        {{-- 1. VERSI DESKTOP (Menggunakan Class CSS Aslimu) --}}
        {{-- ============================================================== --}}
        <div class="hidden md:block ppid-request-box">
            <h3>Ingin mengajukan permohonan informasi?</h3>
            <a href="{{ route('frontend.ppid.permohonan') }}" class="btn-request">Ajukan Permohonan Informasi</a>
        </div>

        {{-- ============================================================== --}}
        {{-- 2. VERSI MOBILE (Menyesuaikan dengan foto desain) --}}
        {{-- ============================================================== --}}
        <div class="block md:hidden bg-white rounded-lg shadow-[0_2px_15px_rgba(0,0,0,0.06)] border border-gray-100 p-6 my-6 mx-auto text-center max-w-sm">

            {{-- Teks Judul (Hitam Bold) --}}
            <h3 class="text-[#0f172a] font-extrabold text-[17px] leading-snug mb-5 px-4">
                Ingin mengajukan permohonan <br> informasi?
            </h3>

            {{-- Tombol Border Hijau --}}
            <a href="{{ route('frontend.ppid.permohonan') }}" class="block w-full py-3 px-4 bg-white border border-[#2ac0b4] text-[#0f172a] font-bold text-[14px] rounded-md transition duration-300 hover:bg-[#2ac0b4] hover:text-white">
                Ajukan Permohonan Informasi
            </a>

        </div>



        </div>
    </section>
</x-frontend>
