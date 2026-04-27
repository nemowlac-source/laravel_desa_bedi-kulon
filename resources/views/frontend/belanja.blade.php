<x-frontend>
    <section class="belanja-section-baru" style="background-color: #f7f8fa;margin-top: 20px;" id="belanja-wrapper">
        <div class="bg-[#f9f9f9] pb-1 md:hidden">
            <div class="text-center mb-5">
                <h2 class="text-[#2ac0b4] font-extrabold text-[20px] mb-1.5 tracking-wide">Beli Dari Desa</h2>
                <p class="text-[14px] font-medium text-gray-700 leading-snug">
                    <span class="block">Layanan yang disediakan promosi produk UMKM</span>
                    <span class="block">desa sehingga mampu meningkatkan</span>
                    <span class="block">perekonomian masyarakat desa</span>
                </p>
            </div>

            <div id="product-list-container" class="space-y-1 px-3"> {{-- Ditambahkan px-3 agar ujung kotak tidak terlalu menempel ke layar HP --}}

                @forelse($products as $item)
                <a href="{{ route('frontend.belanja.detail', $item->id) }}" class="flex bg-white p-2 rounded-lg border border-gray-100 shadow-[0_1px_3px_rgba(0,0,0,0.05)] active:scale-[0.99] transition-all">
                    {{-- rounded-lg membuat sudut tidak terlalu bulat seperti sebelumnya --}}

                    <div class="relative w-[90px] h-[90px] flex-shrink-0">
                        <img src="{{ asset('storage/' . ($item->gambar_thumbnail ?? $item->gambar)) }}" alt="{{ $item->nama_produk }}" class="w-full h-full object-cover rounded-md" onerror="this.src='https://placehold.co/200x200?text=No+Image'">
                    </div>

                    <div class="flex-1 ml-3 flex flex-col justify-between py-0.5">

                        <h3 class="font-bold text-[13px] text-gray-800 leading-tight mb-1">
                            {{ $item->nama_produk }}
                        </h3>

                        <div class="space-y-1.5 mb-4">
                            <div class="flex items-center gap-2 text-sm text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 8v4.172a2 2 0 0 0 .586 1.414l5.71 5.71a2.41 2.41 0 0 0 3.408 0l3.592-3.592a2.41 2.41 0 0 0 0-3.408l-5.71-5.71a2 2 0 0 0-1.414-.586h-4.172a2 2 0 0 0-2 2z"></path>
                                    <path d="M18 19l1.592-1.592a4.82 4.82 0 0 0 0-6.816l-4.592-4.592"></path>
                                    <path d="M7 10h-.01"></path>
                                </svg>
                                <span>Sembako</span>
                            </div>

                            <div class="flex items-center gap-2 text-sm text-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 21l18 0"></path>
                                    <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path>
                                    <path d="M5 21l0-10.15"></path>
                                    <path d="M19 21l0-10.15"></path>
                                    <path d="M9 21v-4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4"></path>
                                </svg>
                                <span>Toko Desa</span>
                            </div>
                            <div class="flex justify-between items-end mt-1">
                                <div class="flex gap-[1px]">
                                    @for ($i = 0; $i < 5; $i++) <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[18px] h-[18px] text-gray-200">
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        @endfor
                                </div>

                                <span class="text-slate-800 font-bold text-[13px] leading-none">
                                    Rp{{ number_format($item->harga, 0, ',', '.') }}
                                </span>
                            </div>

                        </div>
                    </div>
                </a>

                @empty
                {{-- Tampilan Placeholder (Empty State) Mobile Standar --}}
                <div class="flex flex-col items-center justify-center w-full h-[250px] bg-white rounded-lg border-2 border-dashed border-gray-200 p-4 mb-4">
                    {{-- Ikon Tas Belanja --}}
                    <svg class="w-12 h-12 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <p class="text-gray-500 text-base font-semibold tracking-wide text-center">Belum Ada Produk</p>
                    <p class="text-gray-400 text-xs mt-1 text-center leading-relaxed">
                        Saat ini belum ada produk unggulan UMKM desa yang ditawarkan.
                    </p>
                </div>
                @endforelse

            </div>
        </div>

        {{-- Container Desktop --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-1 mb-10 px-10">

            {{-- Header: Warna Hijau Terang Sesuai Referensi --}}
            <div class="mb-8">
                {{-- Judul: Sama seperti Lokasi Desa (Huruf besar, tebal, ada drop-shadow tipis) --}}
                <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-2 text-left tracking-tight drop-shadow-sm uppercase">
                    BELI DARI DESA
                </h2>

                {{-- Deskripsi: Sama seperti Lokasi Desa (Teks abu-abu, ukuran lg) --}}
                <p class="text-lg text-gray-600 font-medium">
                    Layanan yang disediakan promosi produk UMKM desa sehingga mampu meningkatkan perekonomian masyarakat desa.
                </p>
            </div>

            {{-- Grid Produk: 3 Kolom di Layar Besar --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($products as $item)
                <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 overflow-hidden">
                    <a href="{{ route('frontend.belanja.detail', $item->id) }}" class="block">

                        {{-- Foto Produk --}}
                        <div class="relative aspect-[4/3] overflow-hidden bg-gray-100">
                            <img src="{{ asset('storage/' . ($item->gambar_thumbnail ?? $item->gambar)) }}" alt="{{ $item->nama_produk }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://placehold.co/400x300?text=No+Image'">
                        </div>

                        {{-- Konten Detail --}}
                        <div class="p-5">
                            <h3 class="font-bold text-gray-800 text-lg mb-2 truncate">{{ $item->nama_produk }}</h3>

                            {{-- Meta Info --}}
                            <div class="space-y-1.5 mb-4">
                                <div class="flex items-center gap-2 text-sm text-slate-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 8v4.172a2 2 0 0 0 .586 1.414l5.71 5.71a2.41 2.41 0 0 0 3.408 0l3.592-3.592a2.41 2.41 0 0 0 0-3.408l-5.71-5.71a2 2 0 0 0-1.414-.586h-4.172a2 2 0 0 0-2 2z"></path>
                                        <path d="M18 19l1.592-1.592a4.82 4.82 0 0 0 0-6.816l-4.592-4.592"></path>
                                        <path d="M7 10h-.01"></path>
                                    </svg>
                                    <span>Sembako</span>
                                </div>

                                <div class="flex items-center gap-2 text-sm text-slate-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 21l18 0"></path>
                                        <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path>
                                        <path d="M5 21l0-10.15"></path>
                                        <path d="M19 21l0-10.15"></path>
                                        <path d="M9 21v-4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4"></path>
                                    </svg>
                                    <span>Toko Desa</span>
                                </div>
                            </div>

                            {{-- Footer Card: Rating & Harga --}}
                            <div class="flex justify-between items-center pt-4 border-t border-gray-50">
                                <div class="flex gap-0.5">
                                    @for ($i = 0; $i < 5; $i++) <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-gray-200">
                                        <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                        </svg>
                                        @endfor
                                </div>
                                <span class="text-[#2ac0b4] font-black text-lg">
                                    Rp{{ number_format($item->harga, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                {{-- Tampilan Placeholder (Empty State) Standar & Minimalis (Grid span full) --}}
                <div class="col-span-full flex flex-col items-center justify-center w-full h-[350px] bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200 mt-2">
                    {{-- Ikon Tas Belanja --}}
                    <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    <p class="text-gray-500 text-lg font-semibold tracking-wide">Belum Ada Produk</p>
                    <p class="text-gray-400 text-sm mt-2 text-center max-w-md">
                        Saat ini belum ada produk unggulan UMKM desa yang ditawarkan atau dipublikasikan.
                    </p>
                </div>
                @endforelse
            </div>
        </div>



        <div id="pagination-container" class="mt-5 mb-1 px-5 flex justify-center">
            {{ $products->links('vendor.pagination.custom-mobile') }}
        </div>
    </section>
    <script>
        document.addEventListener('click', function(e) {
            // Mencari elemen <a> terdekat di dalam pagination-container
            const link = e.target.closest('#pagination-container a');

            if (link) {
                e.preventDefault();
                const url = link.href;

                // Target kontainer utama yang akan diperbarui
                const container = document.getElementById('belanja-wrapper');
                if (!container) return;

                // Efek visual saat memuat data
                container.style.opacity = '0.5';

                fetch(url, {
                        headers: {
                            "X-Requested-With": "XMLHttpRequest"
                        }
                    })
                    .then(response => response.text())
                    .then(html => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        const newElement = doc.getElementById('belanja-wrapper');

                        if (newElement) {
                            const newContent = newElement.innerHTML;
                            container.innerHTML = newContent;
                            container.style.opacity = '1';
                            window.scrollTo({
                                top: 0
                                , behavior: 'smooth'
                            });
                        } else {
                            // Jika AJAX gagal menemukan wrapper, paksa refresh halaman ke URL tersebut
                            window.location.href = url;
                        }

                    })
                    .catch(error => {
                        console.error('Paginasi Error:', error);
                        container.style.opacity = '1';
                    });
            }
        });

    </script>


</x-frontend>
