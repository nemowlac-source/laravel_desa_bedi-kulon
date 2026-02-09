<x-frontend>

    <style>
        /* Container & Layout */
        .page-section {
            padding: 60px 0;
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            min-height: 80vh;
        }

        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Judul */
        .page-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .page-title {
            color: #2c3e50;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .title-underline {
            width: 80px;
            height: 4px;
            background-color: #28a745;
            /* Hijau Desa */
            margin: 0 auto 15px auto;
            border-radius: 2px;
        }

        .page-subtitle {
            color: #6c757d;
            font-size: 1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Grid Galeri */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 3 Kolom */
            gap: 30px;
        }

        /* Card Foto */
        .gallery-card {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .gallery-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        /* Area Gambar */
        .card-image-wrapper {
            position: relative;
            height: 250px;
            /* Tinggi gambar tetap */
            overflow: hidden;
            background-color: #eee;
        }

        .card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Agar gambar tidak gepeng */
            transition: transform 0.5s ease;
        }

        .gallery-card:hover .card-image-wrapper img {
            transform: scale(1.1);
            /* Efek Zoom saat hover */
        }

        /* Label Tanggal di atas gambar */
        .date-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: rgba(40, 167, 69, 0.9);
            /* Hijau Transparan */
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            backdrop-filter: blur(2px);
        }

        /* Konten Teks */
        .card-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .card-desc {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
            flex-grow: 1;
            /* Mendorong tombol ke bawah */
        }

        /* Pagination Custom */
        .pagination-wrapper {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }

        /* Modifikasi tampilan pagination bawaan Laravel */
        .pagination-wrapper nav div {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .page-title {
                font-size: 2rem;
            }
        }

    </style>

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
