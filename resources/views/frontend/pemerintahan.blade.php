<x-frontend>

    <section class="pemerintahan-section">
        <div class="container-custom">

            <div class="page-header">
                <h4 style="color: #38bdf8; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">SOTK</h4>
                <h1 class="page-title">Struktur Organisasi</h1>
                <div class="title-underline"></div>
                <p class="page-subtitle">Pemerintah Desa Bedi Kulon, Kecamatan Marang Kayu</p>
            </div>

            <div class="sotk-wrapper">
                <img src="{{ asset('img/sotk.png') }}" alt="Bagan Struktur Organisasi" class="sotk-img" onerror="this.style.display='none'; this.insertAdjacentHTML('afterend', '<p style=\'padding:40px; color:#888; font-style:italic;\'>Gambar Bagan Struktur belum diunggah.</p>')">
            </div>

            <div class="page-header" style="margin-top: 80px;">
                <h1 class="page-title">Aparat Pemerintah Desa</h1>
                <div class="title-underline"></div>
                <p class="page-subtitle">Daftar perangkat desa yang menjabat saat ini</p>
            </div>

            <div class="aparat-grid">

                @forelse($perangkats as $item)
                <div class="aparat-card">
                    <div class="aparat-thumb">
                        <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}" onerror="this.src='https://placehold.co/400x500?text=No+Photo'">
                    </div>

                    <div class="aparat-info">
                        <h3 class="aparat-name">{{ $item->nama }}</h3>
                        <span class="aparat-job">{{ $item->jabatan }}</span>

                        @if($item->niap)
                        <span style="font-size: 0.7rem; margin-top: 4px; opacity: 0.8;">
                            NIAP: {{ $item->niap }}
                        </span>
                        @endif
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
    </section>
</x-frontend>
