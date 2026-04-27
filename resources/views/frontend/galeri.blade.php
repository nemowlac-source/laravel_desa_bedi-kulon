<x-frontend>
    <section class="py-16 mt-20 relative bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-12 text-center">
                <h1 class="text-4xl font-extrabold text-[#2ac0b4] mb-4 uppercase tracking-tight">Galeri Desa</h1>
                <div class="w-20 h-1 bg-[#2ac0b4] mx-auto mb-4 rounded-full"></div>
                <p class="text-gray-600 text-lg font-medium max-w-2xl mx-auto">
                    Dokumentasi kegiatan, pembangunan, dan potensi wisata Desa Bedikulon.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

                @forelse($galeris as $item)
                <div onclick="openLightbox('{{ asset('storage/' . ($item->gambar_thumbnail ?? $item->gambar)) }}', '{{ $item->judul }}')" class="cursor-pointer overflow-hidden relative group aspect-[4/3] rounded-xl shadow-sm transition-all duration-300 hover:shadow-lg border border-gray-100 bg-gray-100">
                    <img src="{{ asset('storage/' . ($item->gambar_thumbnail ?? $item->gambar)) }}" alt="{{ $item->judul }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" onerror="this.src='https://placehold.co/600x400?text=No+Image'">

                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm text-gray-800 px-3 py-1.5 rounded-lg text-xs font-bold shadow-sm flex items-center gap-1">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        {{ $item->created_at->format('d M Y') }}
                    </div>

                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-5 opacity-90 group-hover:opacity-100 transition-opacity">
                        <span class="text-white font-extrabold text-lg leading-snug drop-shadow-sm group-hover:text-[#2ac0b4] transition-colors line-clamp-2">{{ $item->judul }}</span>
                    </div>
                </div>
                @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20 bg-white rounded-2xl border border-gray-100 shadow-sm">
                    <img src="https://placehold.co/100x100?text=Empty" class="mx-auto mb-4 opacity-40 rounded-lg">
                    <h3 class="text-gray-500 font-medium text-lg">Belum ada foto yang diunggah.</h3>
                </div>
                @endforelse

            </div>

            <div class="flex justify-center mt-8">
                {{ $galeris->links() }}
            </div>

        </div>

        <div id="lightboxModal" class="fixed inset-0 z-[9999] hidden bg-black/90 backdrop-blur-sm flex items-center justify-center p-4 transition-opacity duration-300 opacity-0" onclick="closeLightbox()">
            <button class="absolute top-6 right-8 text-white/70 hover:text-white text-5xl font-light transition-colors focus:outline-none">&times;</button>

            <img id="lightboxImage" src="" class="max-w-full max-h-[85vh] object-contain rounded-md shadow-2xl scale-95 transition-transform duration-300" alt="Preview">

            <p id="lightboxCaption" class="absolute bottom-8 text-white text-lg md:text-xl font-semibold tracking-wide drop-shadow-lg text-center px-4"></p>
        </div>
    </section>

    <script>
        function openLightbox(imageSrc, captionText) {
            const modal = document.getElementById('lightboxModal');
            const modalImg = document.getElementById('lightboxImage');
            const modalCaption = document.getElementById('lightboxCaption');

            modalImg.src = imageSrc;
            modalCaption.textContent = captionText;
            modal.classList.remove('hidden');

            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalImg.classList.remove('scale-95');
                modalImg.classList.add('scale-100');
            }, 10);
        }

        function closeLightbox() {
            const modal = document.getElementById('lightboxModal');
            const modalImg = document.getElementById('lightboxImage');

            modal.classList.add('opacity-0');
            modalImg.classList.remove('scale-100');
            modalImg.classList.add('scale-95');

            setTimeout(() => {
                modal.classList.add('hidden');
                modalImg.src = '';
            }, 300);
        }

    </script>
</x-frontend>
