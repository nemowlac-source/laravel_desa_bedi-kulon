<x-frontend>

    <section>
        <div class="container-custom">

            <div class="page-header">
                <h2 class="page-title">POTENSI DESA</h2>
                <div class="title-underline"></div>
                <p class="page-subtitle">Menjelajahi kekayaan alam, budaya, dan inovasi Desa Bedi Kulon</p>
            </div>

            <div class="potensi-grid">

                @forelse($potensis as $item)
                <div class="card {{ $loop->even ? 'card-2' : '' }}">

                    <div class="card-image-header">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-main" onerror="this.src='https://placehold.co/400x300?text=No+Image'">

                        <div class="shape-dark"></div>

                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Detail" class="img-small-top" onerror="this.src='https://placehold.co/150x150?text=Icon'">

                        <div class="shape-accent"></div>
                    </div>

                    <div class="card-body">
                        <h3 class="card-title">{{ $item->judul }}</h3>

                        @if($item->lokasi)
                        <div class="card-location">
                            <i class="ph ph-map-pin"></i> {{ $item->lokasi }}
                        </div>
                        @endif

                        <p class="card-text">
                            {{ Str::limit(strip_tags($item->deskripsi), 120) }}
                        </p>
                    </div>

                    <a href="#" class="btn-selengkapnya">Selengkapnya</a>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px;">
                    <img src="https://placehold.co/100x100?text=Empty" style="margin: 0 auto 20px; opacity: 0.5; border-radius:50%;">
                    <h3 style="color: #888;">Belum ada data potensi.</h3>
                </div>
                @endforelse

            </div>

            <div class="pagination-wrapper">
                {{ $potensis->links() }}
            </div>

        </div>
    </section>
</x-frontend>
