<x-frontend>
    <section class="listing-map-section">
        {{-- ========================================== --}}
        {{-- VERSI DESKTOP (Muncul di Laptop/PC)        --}}
        {{-- ========================================== --}}
        <div class="hidden md:block w-full max-w-7xl mx-auto mt-16 mb-10">

            {{-- Header Peta Desktop --}}
            <div class="mb-8">
                <h2 class="text-[#2ac0b4] font-extrabold text-[40px] mb-2 text-left tracking-tight drop-shadow-sm uppercase">
                    LOKASI DESA
                </h2>
                <p class="text-lg text-gray-600 font-medium">
                    Temukan lokasi strategis dan batas wilayah Desa Bedikulon melalui peta berikut.
                </p>
            </div>

            {{-- Container Peta Desktop --}}
            <div class="relative w-full h-[500px] bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden z-0">
                <div id="mapDesaDesktop" class="w-full h-full z-0"></div>
            </div>

        </div>

        {{-- ========================================== --}}
        {{-- VERSI MOBILE (Muncul di HP)                --}}
        {{-- ========================================== --}}
        <div class="block md:hidden w-full mt-6 mb-12">

            {{-- Header Peta Mobile --}}
            <div class="mb-4 px-1">
                <h2 class="text-[#2ac0b4] font-bold text-[26px] mb-2 leading-tight uppercase">
                    LOKASI DESA
                </h2>
                <p class="text-[14px] text-gray-800 leading-relaxed font-medium">
                    Temukan lokasi strategis dan batas wilayah Desa Bedikulon melalui peta berikut.
                </p>
            </div>

            {{-- Container Peta Mobile --}}
            <div class="relative w-full h-[350px] bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden z-0">
                {{-- PERUBAHAN: ID khusus untuk map mobile --}}
                <div id="mapDesaMobile" class="w-full h-full z-0"></div>
            </div>

        </div>


    </section>
</x-frontend>
