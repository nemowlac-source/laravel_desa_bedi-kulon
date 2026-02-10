<x-frontend>

    <style>
        /* Reset dan Font Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            /* Latar belakang abu-abu muda */
            color: #333;
            padding: 40px 20px;
        }

        /* Container Utama */
        .container {
            max-width: 1140px;
            margin: 0 auto;
        }

        /* Header Halaman */
        .page-header {
            margin-bottom: 30px;
        }

        .page-title {
            color: #5cb85c;
            /* Warna hijau */
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .page-subtitle {
            color: #666;
            font-size: 16px;
        }

        /* Grid Kartu */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        /* Gaya Kartu */
        .card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            /* Penting untuk posisi tombol */
            display: flex;
            flex-direction: column;
            height: 100%;
            border: 1px solid #eee;
        }

        /* Gambar Thumbnail */
        .card-img-top {
            width: 100%;
            height: 220px;
            object-fit: cover;
            background-color: #ddd;
            /* Placeholder warna jika gambar tidak ada */
        }

        /* Konten Kartu */
        .card-body {
            padding: 20px;
            padding-bottom: 60px;
            /* Ruang untuk tombol di bawah */
            flex-grow: 1;
        }

        .card-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
        }

        .card-text {
            font-size: 14px;
            color: #777;
            line-height: 1.5;
        }

        /* Tombol Selengkapnya */
        .btn-selengkapnya {
            position: absolute;
            bottom: 0;
            right: 0;
            background: linear-gradient(to right, #66cc66, #5cb85c);
            /* Gradasi Hijau */
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            /* Membuat sudut kiri atas tombol membulat */
            border-radius: 20px 0 10px 0;
            box-shadow: -2px -2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-selengkapnya:hover {
            background: linear-gradient(to right, #5cb85c, #4cae4c);
        }

        /* Paginasi */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            color: #555;
            text-decoration: none;
            font-weight: 600;
        }

        .page-link.active {
            background-color: #5cb85c;
            color: white;
            border-color: #5cb85c;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
            }

            .card-img-top {
                height: 200px;
            }
        }

    </style>

    <section class="wisata-page">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">WISATA DESA</h1>
                <p class="page-subtitle">Segala hal mengenai wisata Desa Kersik</p>
            </div>

            <div class="grid-container">

                <div class="card">
                    <img src="https://via.placeholder.com/400x220?text=Pantai+Biru+Kersik" alt="Pantai Biru Kersik" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Pantai Biru Kersik</h3>
                        <p class="card-text">Pantai ini terbuka untuk umum dan siapa saja boleh mengunjunginya, pengunjung atau wisatawan akan disambut baik oleh penduduk lokal daerah wisata...</p>
                    </div>
                    <a href="#" class="btn-selengkapnya">Selengkapnya</a>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/400x220?text=Saung+Kerang+Putih" alt="Saung Kerang Putih" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Saung Kerang Putih</h3>
                        <p class="card-text">-</p>
                    </div>
                    <a href="#" class="btn-selengkapnya">Selengkapnya</a>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/400x220?text=Cafe+Aqilah" alt="Cafe Aqilah" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Cafe Aqilah</h3>
                        <p class="card-text">--</p>
                    </div>
                    <a href="#" class="btn-selengkapnya">Selengkapnya</a>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/400x220?text=Wisata+Mangrove" alt="Wisata Mangrove" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">WISATA MANGROVE</h3>
                        <p class="card-text">Hutan mangrove ini adalah sebuah kawasan hutan konservasi yang ada di Desa Kersik, Kalimantan Timur. Di sini kita bisa melihat beberapa flora dan...</p>
                    </div>
                    <a href="#" class="btn-selengkapnya">Selengkapnya</a>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/400x220?text=Wisata+Pantai+Biru" alt="Wisata Pantai Biru Kersik" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">WISATA PANTAI BIRU KERSIK</h3>
                        <p class="card-text">Pantai Biru yang terletak di Desa Kersik, Kecamatan Marangkayu menjadi salah satu primadona bagi wisatawan yang berkunjung. Pasalnya ketika air...</p>
                    </div>
                    <a href="#" class="btn-selengkapnya">Selengkapnya</a>
                </div>

            </div>

            <div class="pagination">
                <a href="#" class="page-link">&lt;</a>
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">&gt;</a>
            </div>

        </div>

    </section>

</x-frontend>
