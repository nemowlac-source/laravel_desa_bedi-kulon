<x-frontend>
    <style>
        /* Container Layout */
        .news-section {
            padding: 60px 0;
            background-color: #f9f9f9;
            font-family: 'Poppins', sans-serif;
            min-height: 80vh;
        }

        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header */
        .news-header {
            margin-bottom: 40px;
            text-align: center;
        }

        .news-title {
            color: #72c02c;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .title-underline {
            width: 80px;
            height: 4px;
            background-color: #72c02c;
            margin: 0 auto 15px auto;
            border-radius: 2px;
        }

        .news-subtitle {
            color: #555;
            font-size: 1rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Grid System */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 50px;
        }

        /* Card Style */
        .news-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform 0.3s;
            border: 1px solid #eee;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .news-thumb {
            height: 220px;
            overflow: hidden;
            background-color: #eee;
        }

        .news-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .news-card:hover .news-thumb img {
            transform: scale(1.05);
        }

        .news-content {
            padding: 20px 20px 10px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .news-card-title {
            font-size: 1rem;
            font-weight: 800;
            color: #333;
            line-height: 1.4;
            margin-bottom: 15px;
            text-transform: uppercase;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-card-title a {
            text-decoration: none;
            color: inherit;
        }

        .news-excerpt {
            font-size: 0.85rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* Footer Card & Date Badge */
        .news-footer {
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            background-color: #fff;
            border-top: 1px solid #f5f5f5;
        }

        .news-meta {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .meta-item {
            font-size: 0.75rem;
            color: #888;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Kotak Tanggal Hijau */
        .news-date-badge {
            background-color: #72c02c;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            text-align: center;
            display: flex;
            flex-direction: column;
            min-width: 60px;
        }

        .date-day {
            font-size: 0.9rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .date-year {
            font-size: 0.75rem;
            font-weight: 400;
        }

        /* Pagination Laravel Styling Override */
        .pagination-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        /* Agar pagination bawaan Laravel rapi ditengah */
        .pagination-wrapper nav div {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
        }

        /* Responsive Mobile */
        @media (max-width: 992px) {
            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .news-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>

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
                            <a href="#">{{ $item->judul }}</a>
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
