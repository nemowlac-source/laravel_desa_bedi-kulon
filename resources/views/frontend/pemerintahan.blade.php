<x-frontend>
    <section class="pemerintahan-section">
        <div class="container-custom-pemerintahan">
            <div class="page-header-pemerintahan">
                <h1 class="page-title-pemerintahan">STOK</h1>
                <p>Struktur Organisasi dan Tata Kerja Desa Bedikulon</p>
            </div>

            <div class="sotk-wrapper-pemerinatahan">
                <img src="{{ asset('assets/img/bagan_2.png') }}" alt="Bagan Struktur Organisasi" class="sotk-img" onerror="this.style.display='none'; this.insertAdjacentHTML('afterend', '<p style=\'padding:40px; color:#888; font-style:italic;\'>Gambar Bagan Struktur belum diunggah.</p>')">
            </div>

            <div class="page-header-pemerintahan" style="margin-top: 10px;">

                <h1 class="page-title-pemerintahan">Aparat Pemerintah Desa</h1>
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
