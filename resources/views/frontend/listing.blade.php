<x-frontend>
    <section class="listing-map-section">
        {{-- ========================================== --}}
        {{-- KODE KHUSUS DESKTOP (Layar Besar) --}}
        {{-- ========================================== --}}
        <div class="hidden md:block map-section">
            <div class="map-container">
                <h2 class="title-green">LOKASI DESA</h2>
                <p class="map-subtitle">
                    Temukan lokasi strategis dan batas wilayah Desa Bedi Kulon melalui peta berikut.
                </p>
                <div class="peta-container" style="position: relative; width: 100%; height: 500px; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">

                    {{-- PERUBAHAN DI SINI: ID diganti jadi mapDesaDesktop --}}
                    <div id="mapDesaDesktop" style="width: 100%; height: 100%;"></div>

                </div>
            </div>
        </div>
        {{-- ========================================== --}}
        {{-- KODE KHUSUS MOBILE (Layar HP) --}}
        {{-- ========================================== --}}
        <div class="block md:hidden bg-white px-5 py-10">
            <div class="max-w-3xl mx-auto flex flex-col items-center">

                <h2 class="text-[#70d25b] font-black text-2xl uppercase mb-2 text-center tracking-wide">
                    Lokasi Desa
                </h2>

                <p class="text-gray-800 text-[13px] font-medium text-center mb-6 leading-relaxed max-w-[90%]">
                    Temukan lokasi strategis dan batas wilayah Desa Bedi Kulon melalui peta berikut.
                </p>

                <div class="w-full relative h-[400px] md:h-[500px] border-[6px] border-gray-200 rounded-lg overflow-hidden shadow-sm bg-gray-100 flex items-center justify-center">

                    {{-- PERUBAHAN DI SINI: ID diganti jadi mapDesaMobile --}}
                    <div id="mapDesaMobile" class="w-full h-full z-10"></div>

                    <span class="absolute text-gray-400 text-sm font-medium z-0">Memuat Peta...</span>
                </div>

            </div>
        </div>

    </section>
</x-frontend>
