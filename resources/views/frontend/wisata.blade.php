<x-frontend>
    <style>
        /* Mengubah warna background seluruh halaman (Lantai-nya) */
        body,
        main {
            background-color: #f9f9f9 !important;
            /* Ganti kode warna ini sesuai selera (ini contoh abu-abu sangat muda) */
        }

    </style>

    <section class="mt-[70px] w-full max-w-7xl mx-auto pt-5 md:pt-18 pb-5 min-h-[60vh] lg:px-10 ">

        {{-- ========================================== --}}
        {{-- HEADER (Berlaku untuk Mobile & Desktop)    --}}
        {{-- ========================================== --}}
        <div class="mb-5 md:mb-12 text-center md:text-left ">
            <h2 class="text-[#2ac0b4] md:text-[#2ac0b4] font-extrabold text-[20px] md:text-[40px] mb-1.5 md:mb-2 tracking-wide md:tracking-tight md:drop-shadow-sm uppercase">
                WISATA DESA
            </h2>
            <p class="text-[14px] md:text-[18px] font-medium text-gray-700 md:text-gray-800 leading-snug md:leading-relaxed">
                <span class="md:hidden block">Segala hal mengenai destinasi dan</span>
                <span class="md:hidden block">potensi wisata Desa Bedikulon</span>
                <span class="hidden md:block">Segala hal mengenai destinasi dan potensi wisata Desa Bedikulon.</span>
            </p>
        </div>

        {{-- ========================================== --}}
        {{-- VERSI MOBILE (Muncul di HP)                --}}
        {{-- ========================================== --}}
        <div class="md:hidden space-y-2"> {{-- Sedikit direnggangkan dibanding Beli Dari Desa --}}
            @forelse($wisatas as $item)
            <a href="{{ route('frontend.show', $item->id) }}" class="flex bg-white p-2.5 rounded-lg border border-gray-100 shadow-[0_1px_3px_rgba(0,0,0,0.05)] active:scale-[0.99] transition-all">

                {{-- Gambar Wisata (Rasio Persegi/Square untuk Mobile) --}}
                <div class="relative w-[100px] h-[100px] flex-shrink-0">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_wisata }}" class="w-full h-full object-cover rounded-md" onerror="this.src='https://placehold.co/200x200?text=No+Image'">
                </div>

                {{-- Konten Teks --}}
                <div class="flex-1 ml-3 flex flex-col justify-start py-0.5">

                    {{-- Judul Wisata --}}
                    <h3 class="font-bold text-[14px] text-gray-800 leading-tight mb-1.5 line-clamp-2">
                        {{ $item->nama_wisata }}
                    </h3>

                    {{-- Deskripsi Singkat --}}
                    <p class="text-gray-500 text-[12px] leading-snug line-clamp-3 mb-2">
                        {{ Str::limit(strip_tags($item->deskripsi), 80) }}
                    </p>

                    {{-- Teks Selengkapnya di bawah (opsional) --}}
                    <span class="mt-auto text-[11px] font-bold text-[#2ac0b4] flex items-center gap-1">
                        Baca selengkapnya
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </span>
                </div>
            </a>
            @empty
            <div class="text-center py-20 text-gray-400 text-xs font-medium bg-white rounded-lg border border-gray-100 shadow-[0_1px_3px_rgba(0,0,0,0.05)]">
                Belum ada data wisata
            </div>
            @endforelse
        </div>


        {{-- ========================================== --}}
        {{-- VERSI DESKTOP (Muncul di Laptop)           --}}
        {{-- ========================================== --}}
        <div class="hidden md:grid grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($wisatas as $item)
            {{-- Card Wisata Desktop --}}
            <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">

                <a href="{{ route('frontend.show', $item->id) }}" class="block relative aspect-[4/3] overflow-hidden bg-gray-100">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_wisata }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/400x300?text=No+Image'">
                </a>

                <div class="p-5 flex flex-col flex-grow">
                    <h3 class="font-bold text-gray-800 text-xl mb-3 line-clamp-2 leading-tight">
                        <a href="{{ route('frontend.show', $item->id) }}" class="hover:text-[#2ac0b4] transition-colors">
                            {{ $item->nama_wisata }}
                        </a>
                    </h3>

                    <p class="text-gray-600 text-[14px] leading-relaxed mb-6 line-clamp-3">
                        {{ Str::limit(strip_tags($item->deskripsi), 110) }}
                    </p>

                    <a href="{{ route('frontend.show', $item->id) }}" class="mt-auto inline-flex items-center justify-center gap-2 w-full py-2.5 px-4 bg-emerald-50 text-emerald-600 hover:bg-[#2ac0b4] hover:text-white rounded-xl font-bold transition-colors text-sm shadow-sm">
                        Selengkapnya
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full mt-8 flex justify-center">
                <div class="flex items-center gap-3 px-8 py-5 bg-gray-100 rounded text-gray-500 w-full max-w-lg justify-center">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                        <line x1="9" y1="14" x2="15" y2="14"></line>
                    </svg>
                    <span class="font-medium text-[15px]">Belum ada data wisata tersedia.</span>
                </div>
            </div>
            @endforelse
        </div>

        {{-- ========================================== --}}
        {{-- PAGINASI                                   --}}
        {{-- ========================================== --}}
        <div id="pagination-container" class="mt-10 mb-4 px-5 flex justify-center">
            {{ $wisatas->links('vendor.pagination.custom-mobile') }}
        </div>

    </section>

</x-frontend>
