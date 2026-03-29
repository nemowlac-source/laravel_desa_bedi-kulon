<x-frontend>
    <section class="pemerintahan-section">

        <div class="page-header-pemerintahan">
            <h1 class="page-title-pemerintahan mt-20">STOK</h1>
            <p>Struktur Organisasi dan Tata Kerja Desa Bedikulon</p>
        </div>

        <div class="sotk-wrapper-pemerinatahan">
            {{-- Tambahkan w-full h-auto agar bagan tidak kepotong di HP --}}
            <img src="{{ asset('assets/img/bagan_2.png') }}" alt="Bagan Struktur Organisasi" class="sotk-img w-full h-auto" onerror="this.style.display='none'; this.insertAdjacentHTML('afterend', '<p style=\'padding:40px; color:#888; font-style:italic;\'>Gambar Bagan Struktur belum diunggah.</p>')">
        </div>


        {{-- ========================================== --}}
        {{-- ZONA DESKTOP (Kodingan Aslimu 100% Utuh)   --}}
        {{-- ========================================== --}}
        <div class=" hidden md:block page-header-pemerintahan" style="margin-top: 10px;">

            <h1 class="page-title-pemerintahan">Aparat Pemerintah Desa</h1>
        </div>

        <div class="hidden md:block">


            <div class="aparat-grid">
                @forelse($perangkats as $item)
                <div class="aparat-card">
                    <div class="aparat-thumb">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}" onerror="this.src='https://placehold.co/400x500?text=No+Photo'">
                    </div>

                    <div class="aparat-info">
                        <h3 class="aparat-name">{{ $item->nama }}</h3>
                        <span class="aparat-job">{{ $item->jabatan }}</span>
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 50px; color: #888;">
                    <i class="ph ph-users-three" style="font-size: 3rem; color: #ccc; margin-bottom: 10px;"></i>
                    <h3>Belum ada data perangkat desa.</h3>
                    <p>Silakan input data melalui halaman Admin.</p>
                </div>
                @endforelse
            </div>
        </div>

        {{-- ========================================== --}}
        {{-- ZONA MOBILE (Grid 2 Kolom, Info Hijau)     --}}
        {{-- ========================================== --}}
        {{-- Menggunakan grid 2 kolom --}}
        <div class=" block md:hidden page-header-pemerintahan" style="margin-top: 10px;display:flex;justify-content:center;">

            <h1 class="block md:hidden page-title-pemerintahan-p">Aparat Pemerintah Desa</h1>

        </div>

        <div class="w-full block md:hidden grid grid-cols-2 gap-3 px-1.5">


            @forelse($perangkats as $item)
            <div class="bg-white rounded-xl shadow-[0_4px_10px_rgba(0,0,0,0.08)] overflow-hidden flex flex-col h-full">

                {{-- Area Foto --}}
                {{-- Aspect-[3/4] memastikan rasio foto pas untuk pasfoto standar --}}
                {{-- bg-red-600 ditambahkan sebagai fallback jika foto yg diupload formatnya PNG transparan --}}
                <div class="w-full aspect-[3/4] bg-red-600 overflow-hidden relative">
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}" class="w-full h-full object-cover absolute inset-0" onerror="this.src='https://placehold.co/300x400?text=No+Photo'">
                </div>

                {{-- Area Info (Background Hijau Terang sesuai gambar) --}}
                <div class="bg-[#5bc639] p-2.5 flex flex-col items-center justify-center text-center flex-1">
                    <h3 class="font-extrabold text-white text-[10px] sm:text-[11px] uppercase leading-tight mb-1 w-full">
                        {{ $item->nama }}
                    </h3>
                    <span class="text-white/90 font-medium text-[9px] sm:text-[10px] leading-tight w-full capitalize">
                        {{ $item->jabatan }}
                    </span>
                </div>

            </div>
            @empty
            <div class="col-span-2 text-center p-6 bg-white rounded-xl shadow-sm border border-gray-100">
                <span class="font-bold text-gray-400">Belum ada data aparat.</span>
            </div>
            @endforelse
        </div>

    </section>
</x-frontend>
