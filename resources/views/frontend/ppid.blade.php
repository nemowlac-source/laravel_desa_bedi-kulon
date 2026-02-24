<x-frontend>
    <section class="ppid-section-baru">
        <div class="ppid-container-baru">

            <div class="ppid-top-row">

                <div class="ppid-intro-text">
                    <h1 class="ppid-title-main">PPID</h1>
                    <p class="ppid-desc">Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan publik.</p>
                    <a href="#" class="btn-dasar-hukum">Dasar Hukum PPID</a>
                </div>

                <div class="ppid-categories-grid">
                    <a href="{{ route('frontend.ppid', ['kategori' => 'Berkala']) }}" class="ppid-cat-card">

                        <img src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="Berkala">
                        <span>INFORMASI SECARA BERKALA</span>
                    </a>
                    <a href="{{ route('frontend.ppid', ['kategori' => 'Serta Merta']) }}" class="ppid-cat-card">

                        <img src="https://cdn-icons-png.flaticon.com/512/10473/10473631.png" alt="Serta Merta">
                        <span>INFORMASI SERTA MERTA</span>
                    </a>
                    <a href="{{ route('frontend.ppid', ['kategori' => 'Setiap Saat']) }}" class="ppid-cat-card">

                        <img src="https://cdn-icons-png.flaticon.com/512/9511/9511743.png" alt="Setiap Saat">
                        <span>INFORMASI SETIAP SAAT</span>
                    </a>
                </div>

            </div>

            <div class="ppid-latest-section">

                <h2 class="ppid-title-sub">
                    @if(request('kategori'))
                    INFORMASI {{ strtoupper(request('kategori')) }}
                    @else
                    INFORMASI PUBLIK TERBARU
                    @endif
                </h2>
                <p class="update-meta">Update terakhir {{ $last_update_text ?? '1 minggu yang lalu' }}</p>

                <div class="document-list">
                    @forelse($documents as $doc)
                    <div class="doc-item-card">

                        <div class="doc-info">
                            <h3 class="doc-title">{{ $doc->judul }}</h3>

                            <div class="doc-meta-row">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                {{ $doc->kategori }}
                            </div>

                            <div class="doc-meta-row">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                {{ \Carbon\Carbon::parse($doc->tanggal_upload)->translatedFormat('l, d F Y') }}
                            </div>
                        </div>

                        <div class="doc-actions-col">
                            <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="btn-doc-action">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <path d="M9 15h6"></path>
                                    <path d="M9 11h6"></path>
                                </svg>
                                Lihat Berkas
                            </a>

                            <a href="{{ route('ppid.download', $doc->id) }}" class="btn-doc-action">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg>
                                Unduh ({{ $doc->jumlah_unduh }}x)
                            </a>
                        </div>

                    </div>
                    @empty
                    <div style="text-align: center; padding: 40px 0;">
                        <p style="color: #888;">Belum ada dokumen yang tersedia untuk kategori ini.</p>
                        @if(request('kategori'))
                        <a href="{{ route('ppid.index') }}" style="color: #2ac0b4; font-weight: bold; text-decoration: none;">Tampilkan Semua</a>
                        @endif
                    </div>
                    @endforelse
                </div>

                <div style="margin-top: 40px; display: flex; justify-content: center;">
                    {{ $documents->links() }}
                </div>

            </div>

            <div class="ppid-request-box">
                <h3>Ingin mengajukan permohonan informasi?</h3>
                <a href="{{ route('frontend.ppid.permohonan') }}" class="btn-request">Ajukan Permohonan Informasi</a>
            </div>

        </div>
    </section>
</x-frontend>
