<x-frontend>
    <section class="potensi-detail-section">
        <div class="potensi-detail-container">

            <div class="potensi-main-content">

                <div class="potensi-breadcrumb">
                    <a href="/">Home</a>
                    <span class="separator">/</span>
                    <a href="{{ route('frontend.wisata') ?? '#' }}">Potensi Desa</a>
                    <span class="separator">/</span>
                    <span class="active">{{ $potensi->nama_wisata ?? 'Detail Potensi' }}</span>
                </div>

                <h1 class="potensi-title">{{ strtoupper($potensi->nama_wisata ?? 'NAMA POTENSI') }}</h1>

                <div class="potensi-hero-image">
                    <img src="{{ asset('storage/' . ($potensi->gambar ?? '')) }}" alt="{{ $potensi->nama_wisata }}" onerror="this.src='https://placehold.co/800x450?text=Gambar+Potensi'">

                    <div class="potensi-badge">POTENSI UNGGULAN</div>
                </div>

                <div class="potensi-body-text">
                    {!! $potensi->deskripsi ?? '<p>Deskripsi detail mengenai potensi desa ini akan ditampilkan di sini.</p>' !!}
                </div>

            </div>

            <aside class="potensi-sidebar">
                <div class="sidebar-widget">
                    <h3 class="sidebar-widget-title">Potensi Lainnya</h3>

                    <div class="other-potensi-list">
                        @forelse($potensi_lain ?? [] as $lain)
                        <a href="{{ route('frontend.potensi.detail', $lain->id) }}" class="other-potensi-item">
                            <img src="{{ asset('storage/' . $lain->gambar) }}" class="other-potensi-img" alt="{{ $lain->nama_wisata }}" onerror="this.src='https://placehold.co/100x100?text=Foto'">
                            <div class="other-potensi-details">
                                <h4 class="other-potensi-name">{{ $lain->nama_wisata }}</h4>
                            </div>
                        </a>
                        @empty
                        <p style="color: #888; font-size: 0.9rem;">Belum ada potensi lain.</p>
                        @endforelse
                    </div>
                </div>
            </aside>

        </div>
    </section>
</x-frontend>
