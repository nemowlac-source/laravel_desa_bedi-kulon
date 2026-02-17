<x-frontend>


    <section class="page-section">
        <div class="container-custom">

            <div class="page-header">
                <h1 class="page-title">Galeri Desa</h1>
                <div class="title-underline"></div>
                <p class="page-subtitle">Dokumentasi kegiatan, pembangunan, dan potensi wisata Desa Bedi Kulon.</p>
            </div>

            <div class="gallery-grid">

                @forelse($galeris as $item)
                <div class="gallery-card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" onerror="this.src='https://placehold.co/600x400?text=No+Image'">

                        <div class="date-badge">
                            {{ $item->created_at->format('d M Y') }}
                        </div>
                    </div>

                    <div class="card-content">
                        <h3 class="card-title">{{ $item->judul }}</h3>
                        <p class="card-desc">
                            {{ Str::limit($item->deskripsi, 100) ?? 'Tidak ada deskripsi.' }}
                        </p>
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 50px;">
                    <img src="https://placehold.co/100x100?text=Empty" style="margin: 0 auto 20px; opacity: 0.5;">
                    <h3 style="color: #888;">Belum ada foto yang diunggah.</h3>
                </div>
                @endforelse

            </div>

            <div class="pagination-wrapper">
                {{ $galeris->links() }}
            </div>

        </div>
    </section>

</x-frontend>
