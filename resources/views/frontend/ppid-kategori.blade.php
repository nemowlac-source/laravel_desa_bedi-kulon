<x-frontend>


    <section class="ppid-detail-section">
        <div class="ppid-detail-container">

            <div class="ppid-detail-header">
                <h1 class="ppid-detail-title">Informasi {{ request('kategori') ?? 'Publik' }}</h1>
                <p class="ppid-detail-subtitle">{{ $subtitle }}</p>
            </div>

            <div class="ppid-accordion-wrapper">

                @forelse($documents as $subKategori => $items)
                <details class="ppid-accordion">

                    <summary class="ppid-accordion-header">
                        {{ $subKategori }}
                        <span class="accordion-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span>
                    </summary>

                    <div class="ppid-accordion-body">
                        <table class="ppid-table">
                            <thead>
                                <tr>
                                    <th class="col-no">No</th>
                                    <th class="col-judul">Judul</th>
                                    <th class="col-tanggal">Tanggal</th>
                                    <th class="col-aksi"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $index => $doc)
                                <tr>
                                    <td class="col-no">{{ $index + 1 }}</td>
                                    <td class="col-judul">{{ $doc->judul }}</td>
                                    <td class="col-tanggal">{{ \Carbon\Carbon::parse($doc->tanggal_upload)->translatedFormat('l, d F Y') }}</td>

                                    <td class="col-aksi">
                                        <div class="table-actions-col">
                                            <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank" class="btn-action-sm">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <path d="M9 15h6"></path>
                                                    <path d="M9 11h6"></path>
                                                </svg>
                                                Lihat Berkas
                                            </a>
                                            <a href="{{ route('ppid.download', $doc->id) }}" class="btn-action-sm">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="7 10 12 15 17 10"></polyline>
                                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                                </svg>
                                                Unduh ({{ $doc->jumlah_unduh }}x)
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </details>
                @empty
                <div class="ppid-empty-state">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                        <line x1="9" y1="14" x2="15" y2="14"></line>
                    </svg>
                    Belum ada informasi untuk saat ini.
                </div>
                @endforelse

            </div>
        </div>
    </section>
</x-frontend>
