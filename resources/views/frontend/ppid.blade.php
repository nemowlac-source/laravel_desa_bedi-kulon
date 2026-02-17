<x-frontend>
    <section class="ppid-section">
        <div class="container-ppid">
            <div class="ppid-intro">
                <div class="ppid-text">
                    <h1 class="title-green-bold">PPID</h1>
                    <p>Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.</p>
                    <a href="#" class="btn-dasar-hukum">Dasar Hukum PPID</a>
                </div>

                <div class="ppid-categories">
                    <a href="{{ route('ppid.index', ['kategori' => 'Berkala']) }}" class="cat-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="Berkala">
                        <span>INFORMASI SECARA BERKALA</span>
                    </a>
                    <a href="{{ route('ppid.index', ['kategori' => 'Serta Merta']) }}" class="cat-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/10473/10473631.png" alt="Serta Merta">
                        <span>INFORMASI SERTA MERTA</span>
                    </a>
                    <a href="{{ route('ppid.index', ['kategori' => 'Setiap Saat']) }}" class="cat-card">
                        <img src="https://cdn-icons-png.flaticon.com/512/9511/9511743.png" alt="Setiap Saat">
                        <span>INFORMASI SETIAP SAAT</span>
                    </a>
                </div>
            </div>

            <div class="ppid-latest">
                <h2 class="title-green-bold">
                    @if(request('kategori'))
                    INFORMASI {{ strtoupper(request('kategori')) }}
                    @else
                    INFORMASI PUBLIK TERBARU
                    @endif
                </h2>

                <p class="update-meta">Update terakhir {{ $last_update_text }}</p>

                <div class="document-list">
                    @forelse($documents as $doc)
                    <div class="doc-item">
                        <div class="doc-info">
                            <h3>{{ $doc->judul }}</h3>

                            <p class="doc-cat">
                                <i class="icon-file"></i>
                                {{ $doc->kategori }}
                            </p>

                            <p class="doc-date">
                                <i class="icon-clock"></i>
                                {{ \Carbon\Carbon::parse($doc->tanggal_upload)->translatedFormat('l, d F Y') }}
                            </p>
                        </div>

                        <div class="doc-actions">
                            <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="btn-action">
                                <i class="icon-view"></i> Lihat Berkas
                            </a>

                            <a href="{{ route('ppid.download', $doc->id) }}" class="btn-action">
                                <i class="icon-download"></i> Unduh ({{ $doc->jumlah_unduh }}x)
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class="text-center py-10">
                        <p class="text-gray-500">Belum ada dokumen yang tersedia untuk kategori ini.</p>
                        @if(request('kategori'))
                        <a href="{{ route('ppid.index') }}" class="text-blue-600 hover:underline">Tampilkan Semua</a>
                        @endif
                    </div>
                    @endforelse
                </div>

                <div class="mt-8">
                    {{ $documents->links() }}
                </div>
            </div>

            <div class="ppid-request-box">
                <h3>Ingin mengajukan permohonan informasi?</h3>
                <a href="#" class="btn-request">Ajukan Permohonan Informasi</a>
            </div>
        </div>
    </section>
</x-frontend>
