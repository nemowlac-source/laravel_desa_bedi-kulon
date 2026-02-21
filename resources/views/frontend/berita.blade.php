<x-frontend>
    <section class="news-section">
        <div class="container-custom">

            <div class="news-header">
                <h1 class="news-title">Berita Desa</h1>
                <div class="title-underline"></div>
                <p class="news-subtitle">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel jurnalistik dari Desa Bedi Kulon</p>
            </div>

            <div class="news-grid">

                @forelse($beritas as $item)
                <div class="news-card">
                    <div class="news-thumb">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" onerror="this.src='https://placehold.co/600x400?text=Berita'">
                    </div>

                    <div class="news-content">
                        <h3 class="news-card-title">
                            <a href="{{ route('frontend.berita.detail', $item->id) }}">{{ $item->judul }}</a>
                        </h3>

                        <p class="news-excerpt">
                            {{ Str::limit(strip_tags($item->isi), 100) }}
                        </p>
                    </div>

                    <div class="news-footer">
                        <div class="news-meta">
                            <div class="meta-item">
                                <i class="icon-user"></i> {{ $item->penulis ?? 'Administrator' }}
                            </div>
                            <div class="meta-item">
                                <i class="icon-eye"></i> Dibaca
                            </div>
                        </div>

                        <div class="news-date-badge">
                            <span class="date-day">{{ $item->created_at->format('d M') }}</span>
                            <span class="date-year">{{ $item->created_at->format('Y') }}</span>
                        </div>
                    </div>
                </div>
                @empty
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px;">
                    <img src="https://placehold.co/100x100?text=Empty" style="margin: 0 auto 20px; opacity: 0.5; border-radius:50%;">
                    <h3 style="color: #888;">Belum ada berita yang diterbitkan.</h3>
                </div>
                @endforelse

            </div>

            <div class="pagination-wrapper">
                {{ $beritas->links() }}
            </div>

        </div>
    </section>
</x-frontend>
