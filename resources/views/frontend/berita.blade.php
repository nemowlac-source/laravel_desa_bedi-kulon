<x-frontend>
    <style>
        /* --- WADAH UTAMA --- */
        .news-section-baru {
            padding: 80px 20px;
            background-color: #f4f6f8;
            font-family: 'Poppins', sans-serif;
        }

        .news-container-baru {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- HEADER RATA KIRI --- */
        .news-header-baru {
            margin-bottom: 50px;
            text-align: left;
        }

        .news-title-baru {
            font-size: 2.8rem;
            font-weight: 800;
            color: #2ac0b4;
            margin: 0 0 10px 0;
            letter-spacing: 0.5px;
        }

        .news-subtitle-baru {
            font-size: 1.1rem;
            color: #333;
            line-height: 1.6;
            margin: 0;
            max-width: 800px;
        }

        /* --- GRID KARTU --- */
        .news-grid-baru {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 35px;
        }

        /* Desain Kartu Minimalis Mirip Inspirasi */
        .news-card-baru {
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            border: none;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.08), 0 4px 10px -3px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .news-card-baru:hover {
            transform: translateY(-7px);
            box-shadow: 0 20px 40px -5px rgba(0, 0, 0, 0.12), 0 8px 15px -5px rgba(0, 0, 0, 0.08);
        }

        /* Area Gambar */
        .news-thumb-baru {
            width: 100%;
            height: 230px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .news-thumb-baru img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .news-card-baru:hover .news-thumb-baru img {
            transform: scale(1.08);
        }

        /* Area Teks di Dalam Kartu */
        .news-content-baru {
            padding: 25px 28px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .news-card-title-baru {
            font-size: 1.2rem;
            font-weight: 800;
            color: #555555;
            margin: 0 0 12px 0;
            line-height: 1.4;
            text-transform: uppercase;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-excerpt-baru {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.6;
            margin: 0 0 20px 0;
            /* Jarak bawah sebelum meta info */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* === TAMBAHAN BARU: META INFO (Penulis, Tanggal, Views) === */
        .news-meta-baru {
            margin-top: auto;
            /* Mendorong elemen ini ke paling bawah kartu */
            padding-top: 15px;
            border-top: 1px solid #f0f0f0;
            /* Garis tipis pemisah */
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-wrap: wrap;
            gap: 15px;
            font-size: 0.85rem;
            color: #888;
        }

        .meta-item-baru {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Membuat icon view (Dilihat) terdorong ke paling kanan */
        .meta-views-baru {
            margin-left: auto;
        }

        /* --- PAGINASI --- */
        .pagination-wrapper {
            margin-top: 60px;
            display: flex;
            justify-content: center;
        }

        /* Area Teks di Dalam Kartu */
        .news-content-baru {
            padding: 25px 28px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            /* SANGAT PENTING: Agar badge hijau bisa menempel di pojok */
        }

        /* ... (biarkan CSS judul dan excerpt seperti sebelumnya) ... */

        /* === UPDATE: META INFO (Penulis & Views Bertumpuk) === */
        .news-meta-baru {
            margin-top: auto;
            /* Mendorong elemen ini ke bawah */
            display: flex;
            flex-direction: column;
            /* Menyusun ke bawah (vertikal) */
            gap: 8px;
            /* Jarak antar baris ikon */
            font-size: 0.9rem;
            color: #4b5563;
            /* Warna abu-abu kebiruan mirip contoh */
        }

        .meta-item-baru {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .meta-item-baru svg {
            stroke: #111;
            /* Warna ikon hitam tegas */
            width: 18px;
            height: 18px;
        }

        /* === UPDATE: BADGE TANGGAL HIJAU DI POJOK KANAN BAWAH === */
        .meta-date-badge {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #2ac0b4;

            /* Warna hijau terang presisi dengan gambar */
            color: white;
            padding: 12px 18px;
            border-top-left-radius: 16px;
            /* Lengkungan khusus di pojok kiri atas */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            line-height: 1.1;
        }

        .meta-date-badge .date-day {
            font-size: 1.15rem;
            font-weight: 800;
        }

        .meta-date-badge .date-year {
            font-size: 0.95rem;
            font-weight: 700;
            opacity: 0.95;
        }

        /* === UPDATE: META INFO (Rata Kiri & Tanpa Garis) === */
        .news-meta-baru {
            margin-top: auto;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* SANGAT PENTING: Memaksa teks rata kiri sempurna */
            gap: 8px;
            font-size: 0.9rem;
            color: #4b5563;

            border-top: none;
            /* SANGAT PENTING: Menghapus garis melintang abu-abu */
            padding-top: 15px;
            /* Sisa jarak dari teks atasnya */
        }

        .meta-item-baru {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .meta-item-baru svg {
            stroke: #333;
            /* Warna ikon hitam tebal */
            width: 17px;
            height: 17px;
        }

        /* === UPDATE: BADGE TANGGAL (Warna Gradasi Mirip Referensi) === */
        .meta-date-badge {
            position: absolute;
            bottom: 0;
            right: 0;
            /* Menggunakan gradasi hijau halus persis seperti gambar contoh */
            background: linear-gradient(135deg, #6daca6 0%, #2ac0b4 100%);


            color: white;
            padding: 10px 20px;
            /* Diperlebar sedikit agar lebih proporsional */
            border-top-left-radius: 18px;
            /* Lengkungan sudut ditarik lebih dalam */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            line-height: 1.2;
        }

        .meta-date-badge .date-day {
            font-size: 1.15rem;
            font-weight: 800;
        }

        .meta-date-badge .date-year {
            font-size: 1.05rem;
            font-weight: 800;
        }



        /* --- RESPONSIVE --- */
        @media (max-width: 992px) {
            .news-grid-baru {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .news-grid-baru {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .news-title-baru {
                font-size: 2.2rem;
            }
        }

    </style>
    <section class="news-section-baru">
        <div class="block md:hidden min-h-screen pb-24">

            <div class="text-center">
                <h2 class="text-[#2ac0b4] font-extrabold text-2xl mb-2">Berita Desa</h2>
                <p class="text-gray-500 text-[13px] leading-relaxed">
                    Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Bedi Kulon
                </p>
            </div>

            <div class="mt-4 space-y-6">
                @forelse($beritas as $item)
                {{-- Tambahkan 'relative' di sini agar link inset-0 bekerja untuk seluruh kartu --}}
                <div class="relative bg-white rounded-2xl shadow-[0_4px_15px_rgba(0,0,0,0.05)] overflow-hidden border border-gray-100 transition-all active:scale-[0.98]">

                    <div class="w-full h-52">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="w-full h-full object-cover" alt="{{ $item->judul }}" onerror="this.src='https://placehold.co/600x400?text=Berita+Desa'">
                    </div>

                    <div class="p-5">
                        <h3 class="font-bold text-[15px] text-[#2ac0b4] leading-snug mb-2 uppercase tracking-tight line-clamp-2">
                            {{ $item->judul }}
                        </h3>

                        <p class="text-gray-500 text-[12px] leading-relaxed mb-10 line-clamp-2">
                            {{ Str::limit(strip_tags($item->isi), 100) }}
                        </p>

                        <div class="flex justify-between items-end mt-4">
                            <div class="flex flex-col gap-1.5 text-[11px] text-gray-500 font-medium">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span>Administrator</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    <span>Dilihat {{ $item->views ?? 0 }} kali</span>
                                </div>
                            </div>
                        </div>

                        <div class="absolute bottom-0 right-0 bg-[#2ac0b4] text-white px-3 py-2 rounded-tl-2xl text-center min-w-[70px] shadow-sm">
                            <span class="block text-[12px] font-black leading-none uppercase">
                                {{ \Carbon\Carbon::parse($item->created_at)->format('d M') }}
                            </span>
                            <span class="block text-[10px] mt-1 font-bold opacity-90">
                                {{ \Carbon\Carbon::parse($item->created_at)->format('Y') }}
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('frontend.berita.detail', $item->id) }}" class="absolute inset-0 z-20"></a>

                </div>
                @empty
                {{-- Tampilan Placeholder (Empty State) Standar untuk Berita Mobile --}}
                <div class="flex flex-col items-center justify-center w-full h-[300px] bg-gray-50 rounded-xl border-2 border-dashed border-gray-200 p-4 mt-6">
                    {{-- Ikon Koran/Berita --}}
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Belum Ada Berita</p>
                    <p class="text-gray-400 text-xs mt-1 text-center leading-relaxed">
                        Saat ini belum ada artikel atau berita terbaru yang dipublikasikan.
                    </p>
                </div>
                @endforelse
            </div>

            {{-- Sembunyikan pagination jika berita kosong --}}
            @if($beritas->count() > 0)
            <div id="pagination-container" class="mt-8 mb-10 flex justify-center">
                {{ $beritas->links('vendor.pagination.custom-mobile') }}
            </div>
            @endif

        </div>

        <div class="news-container-baru hidden md:block mt-30">
            <div class="mb-8">
                {{-- Judul: Hijau terang, font besar & tebal, uppercase, dan drop-shadow --}}
                <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mt-5 mb-2 text-left tracking-tight drop-shadow-sm uppercase">
                    BERITA DESA
                </h2>

                {{-- Deskripsi: Ukuran teks agak besar (text-lg), abu-abu, dan medium --}}
                <p class="text-lg text-gray-600 font-medium">
                    Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Bedi Kulon.
                </p>
            </div>

            <div class="news-grid-baru">

                @forelse($beritas as $item)
                <div class="news-card-baru">
                    <a href="{{ route('frontend.berita.detail', $item->id) }}" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; height: 100%;">

                        <div class="news-thumb-baru">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" onerror="this.src='https://placehold.co/600x400?text=Berita'">
                        </div>

                        <div class="news-content-baru">
                            <h3 class="news-card-title-baru">
                                {{ $item->judul }}
                            </h3>
                            <p class="news-excerpt-baru">
                                {{ Str::limit(strip_tags($item->isi), 100) }}
                            </p>

                            <div class="news-meta-baru">
                                <span class="meta-item-baru" title="Penulis">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    {{ $item->penulis ?? 'Administrator' }}
                                </span>

                                <span class="meta-item-baru" title="Jumlah Dilihat">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    Dilihat {{ $item->views ?? 0 }} kali
                                </span>
                            </div>

                            <div class="meta-date-badge">
                                <span class="date-day">{{ $item->created_at->format('d M') }}</span>
                                <span class="date-year">{{ $item->created_at->format('Y') }}</span>
                            </div>
                        </div>

                    </a>
                </div>

                @empty
                {{-- Tampilan Placeholder (Empty State) Standar & Minimalis --}}
                <div style="grid-column: 1 / -1;" class="flex flex-col items-center justify-center w-full h-[400px] bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200 mt-2">
                    {{-- Ikon Koran/Berita --}}
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Belum Ada Berita</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Saat ini belum ada artikel atau berita terbaru yang dipublikasikan oleh administrator desa.
                    </p>
                </div>
                @endforelse

            </div>

            {{-- Sembunyikan pagination jika berita kosong --}}
            @if($beritas->count() > 0)
            <div id="pagination-container" class="mt-8 mb-10 flex justify-center">
                {{ $beritas->links('vendor.pagination.custom-mobile') }}
            </div>
            @endif

        </div>

    </section>


</x-frontend>
