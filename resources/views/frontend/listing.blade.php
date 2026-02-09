<x-frontend>

    <style>
        /* CSS INTERNAL - Menjamin tata letak peta dan sidebar berfungsi */
        .listing-map-section {
            padding: 80px 5% 60px;
            background-color: #f4f7f6;
            font-family: 'Poppins', sans-serif;
        }

        .title-green-bold {
            color: #72c02c;
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 30px;
            max-width: 700px;
        }

        /* Layout Utama: Map di kiri, Sidebar di kanan */
        .map-layout {
            display: flex;
            gap: 25px;
            height: 600px;
            /* Tinggi tetap untuk menyamakan map dan sidebar */
        }

        /* Container Peta */
        .map-container {
            flex: 2;
            /* Peta lebih lebar */
            background: #e5e3df;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        /* Sidebar Titik Menarik */
        .poi-sidebar {
            flex: 1;
            /* Sidebar lebih kecil */
            background: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
        }

        .poi-sidebar h3 {
            color: #333;
            font-size: 1.2rem;
            font-weight: 700;
            padding-bottom: 15px;
            margin-bottom: 15px;
            border-bottom: 2px solid #72c02c;
        }

        /* Daftar Item Scrollable */
        .poi-list {
            overflow-y: auto;
            /* Agar daftar bisa di-scroll jika banyak */
            padding-right: 5px;
        }

        .poi-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 15px;
            margin-bottom: 10px;
            background: #fdfdfd;
            border-radius: 10px;
            border: 1px solid #f0f0f0;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .poi-item:hover {
            background: #f0fdf4;
            border-color: #72c02c;
            transform: translateX(5px);
        }

        .poi-icon {
            font-size: 1.5rem;
            background: #e8f5e9;
            padding: 10px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .poi-item h4 {
            margin: 0;
            font-size: 1rem;
            color: #2e7d32;
            font-weight: 700;
        }

        .poi-item p {
            margin: 5px 0 0;
            font-size: 0.85rem;
            color: #777;
            line-height: 1.4;
        }

        /* Kustomisasi Scrollbar Sidebar */
        .poi-list::-webkit-scrollbar {
            width: 6px;
        }

        .poi-list::-webkit-scrollbar-thumb {
            background: #ddd;
            border-radius: 10px;
        }

        /* Responsif untuk Tablet dan HP */
        @media (max-width: 992px) {
            .map-layout {
                flex-direction: column;
                height: auto;
            }

            .map-container {
                height: 400px;
            }

            .poi-sidebar {
                height: 500px;
            }
        }

    </style>

    <section class="listing-map-section">
        <div class="container">
            <h1 class="title-green-bold">Peta Potensi & Tempat Menarik</h1>
            <p class="subtitle">Eksplorasi titik-titik strategis, objek wisata, dan fasilitas penting di Desa Kersik.</p>

            <div class="map-layout">
                <div class="map-container" id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.049448057218!2d117.478377!3d-0.052557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df679e501101ac3%3A0x1594cfc9946b3cfb!2sKantor%20Desa%20Kersik!5e0!3m2!1sid!2sid!4v1707000000000!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>

                <div class="poi-sidebar">
                    <h3>Titik Point Desa</h3>
                    <div class="poi-list">

                        <div class="poi-item">
                            <span class="poi-icon">🏖️</span>
                            <div>
                                <h4>Pantai Biru Kersik</h4>
                                <p>Destinasi wisata utama dengan pemandangan laut yang menawan.</p>
                            </div>
                        </div>

                        <div class="poi-item">
                            <span class="poi-icon">🏫</span>
                            <div>
                                <h4>Kantor Desa Kersik</h4>
                                <p>Pusat administrasi dan pelayanan publik warga desa.</p>
                            </div>
                        </div>

                        <div class="poi-item">
                            <span class="poi-icon">🕌</span>
                            <div>
                                <h4>Masjid At-Taqwa</h4>
                                <p>Sarana ibadah dan kegiatan keagamaan warga setempat.</p>
                            </div>
                        </div>

                        <div class="poi-item">
                            <span class="poi-icon">🏢</span>
                            <div>
                                <h4>BUMDes Kersik</h4>
                                <p>Pusat pengembangan ekonomi dan usaha milik desa.</p>
                            </div>
                        </div>

                        <div class="poi-item">
                            <span class="poi-icon">🛒</span>
                            <div>
                                <h4>Pasar Desa</h4>
                                <p>Pusat perdagangan hasil bumi dan laut lokal.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</x-frontend>
