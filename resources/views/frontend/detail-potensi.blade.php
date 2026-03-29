<x-frontend>
    <section class="berita-detail-section mt-20">
        <div class="berita-container">

            <div class="berita-main-content">

                <div class="berita-breadcrumb">
                    <a href="/">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </a>
                    <span class="separator">/</span>
                    <a href="#">Potensi Desa</a>
                </div>

                <h1 class="berita-title">{{ $potensi->nama_wisata ?? 'Nama Potensi' }}</h1>

                <div class="berita-meta-info">
                    <span class="meta-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        {{ \Carbon\Carbon::parse($potensi->created_at ?? now())->isoFormat('D MMMM Y') }}
                    </span>

                    <span class="meta-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        Ditulis oleh Administrator
                    </span>

                    <span class="meta-item meta-views">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        Dilihat {{ $potensi->views ?? 0 }} kali
                    </span>
                </div>

                <div class="berita-featured-image" style="position: relative;">
                    <img src="{{ asset('storage/' . ($potensi->gambar ?? '')) }}" alt="{{ $potensi->nama_wisata ?? 'Gambar Potensi' }}" onerror="this.src='https://placehold.co/800x400?text=Gambar+Potensi'">
                </div>

                <div class="berita-body-text">
                    {!! $potensi->deskripsi !!}
                </div>

                <div class="mt-8 border-t pt-4 flex items-center gap-3">
                    <span class="text-gray-600 font-medium text-sm">Bagikan:</span>
                    <div class="flex gap-2">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="w-9 h-9 flex items-center justify-center rounded-full bg-[#1877F2] text-white hover:opacity-80 transition">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text={{ urlencode($potensi->nama_wisata . ' - ' . url()->current()) }}" target="_blank" class="w-9 h-9 flex items-center justify-center rounded-full bg-[#25D366] text-white hover:opacity-80 transition">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($potensi->nama_wisata) }}" target="_blank" class="w-9 h-9 flex items-center justify-center rounded-full bg-black text-white hover:opacity-80 transition">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </div>
                </div>

            </div>

            <aside class="berita-sidebar">
                <div class="sidebar-widget">
                    <h3 class="sidebar-widget-title">Potensi Lainnya</h3>

                    <div class="latest-news-list">
                        @forelse($potensi_lain ?? [] as $lain)
                        <a href="{{ route('frontend.potensi.detail', $lain->id) }}" class="latest-news-item">
                            <img src="{{ asset('storage/' . $lain->gambar) }}" class="latest-news-img" alt="{{ $lain->nama_wisata }}" onerror="this.src='https://placehold.co/100x100?text=Potensi'">

                            <div class="latest-news-details">
                                <h4 class="latest-news-title">{{ Str::limit($lain->nama_wisata, 45) }}</h4>

                                <div class="latest-news-meta">
                                    <span>
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg> {{ \Carbon\Carbon::parse($lain->created_at)->isoFormat('D MMMM Y') }}
                                    </span>

                                    <span style="margin-top: 2px;">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg> Dilihat {{ $lain->views ?? 0 }} kali
                                    </span>
                                </div>
                            </div>
                        </a>
                        @empty
                        <p style="color: #888; font-size: 0.9rem;">Belum ada potensi lainnya.</p>
                        @endforelse
                    </div>

                </div>
            </aside>

        </div>
    </section>
</x-frontend>
