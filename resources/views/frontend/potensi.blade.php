<x-frontend>

    <section class="w-full max-w-7xl mx-auto px-4 md:px-6 lg:px-10 mt-32 md:mt-40 mb-16 min-h-[60vh]">

        {{-- Header Potensi --}}
        <div class="mb-8 md:mb-12 text-left">
            <h1 class="text-[#8cdb6e] font-extrabold text-[28px] md:text-[40px] mb-2 tracking-tight drop-shadow-sm uppercase">
                POTENSI DESA
            </h1>
            <p class="text-[14px] md:text-[18px] text-gray-800 font-medium leading-relaxed">
                Menjelajahi kekayaan alam, budaya, dan inovasi Desa Bedi Kulon.
            </p>
        </div>

        {{-- Grid Container (3 Kolom di Laptop, 1 Kolom di HP) --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse($potensis as $item)
            {{-- Card Potensi --}}
            <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden flex flex-col">

                {{-- Gambar Potensi --}}
                <a href="{{ route('frontend.potensi.detail', $item->id ?? '#') }}" class="block relative aspect-[4/3] overflow-hidden bg-gray-100">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/400x300?text=No+Image'">

                    {{-- Badge Lokasi Transparan di atas gambar (Opsional, agar makin keren) --}}
                    @if($item->lokasi)
                    <div class="absolute bottom-3 left-3 bg-black/60 backdrop-blur-md text-white px-3 py-1.5 rounded-lg text-xs font-medium flex items-center gap-1.5 shadow-sm">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span class="truncate max-w-[150px]">{{ $item->lokasi }}</span>
                    </div>
                    @endif
                </a>

                {{-- Konten Card --}}
                <div class="p-5 flex flex-col flex-grow">

                    {{-- Judul Potensi --}}
                    <h3 class="font-bold text-gray-800 text-xl mb-3 line-clamp-2 leading-tight">
                        <a href="{{ route('frontend.potensi.detail', $item->id ?? '#') }}" class="hover:text-[#2ac0b4] transition-colors">
                            {{ $item->judul }}
                        </a>
                    </h3>

                    {{-- Deskripsi Singkat --}}
                    <p class="text-gray-600 text-[14px] leading-relaxed mb-6 line-clamp-3">
                        {{ Str::limit(strip_tags($item->deskripsi), 110) }}
                    </p>

                    {{-- Tombol Selengkapnya (Terus menempel di bawah berkat mt-auto) --}}
                    <a href="{{ route('frontend.potensi.detail', $item->id ?? '#') }}" class="mt-auto inline-flex items-center justify-center gap-2 w-full py-2.5 px-4 bg-emerald-50 text-emerald-600 hover:bg-[#2ac0b4] hover:text-white rounded-xl font-bold transition-colors text-sm shadow-sm">
                        Selengkapnya
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>

            @empty
            {{-- Tampilan Kosong (Sama persis dengan PPID dan Wisata) --}}
            <div class="col-span-full mt-8 flex justify-center">
                <div class="flex items-center gap-3 px-8 py-5 bg-gray-100 rounded-xl text-gray-500 w-full max-w-lg justify-center border border-gray-200">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                        <line x1="9" y1="14" x2="15" y2="14"></line>
                    </svg>
                    <span class="font-medium text-[15px]">Belum ada data potensi tersedia.</span>
                </div>
            </div>
            @endforelse

        </div>

        {{-- Pagination Wrapper --}}
        <div class="mt-12 flex justify-center">
            {{ $potensis->links() }}
        </div>

    </section>

</x-frontend>
