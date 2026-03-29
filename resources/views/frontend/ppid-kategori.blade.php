<x-frontend>
    {{-- Letakkan ini di baris paling atas file PPID kamu --}}
    <style>
        /* Mengubah warna background seluruh halaman (Lantai-nya) */
        body,
        main {
            background-color: #f9f9f9 !important;
            /* Ganti kode warna ini sesuai selera (ini contoh abu-abu sangat muda) */
        }

    </style>

    {{-- Tambahkan min-h-[60vh] agar halamannya selalu punya tinggi minimal (tidak mepet footer) --}}
    <section class="w-full max-w-7xl mx-auto px-4 md:px-6 lg:px-10 mt-20 md:mt-28 mb-12 min-h-[70vh]">

        {{-- Header PPID --}}
        <div class="mb-8 md:mb-12 text-left">
            <h1 class="text-[#2ac0b4] font-extrabold text-[28px] md:text-[40px] mb-2 tracking-tight drop-shadow-sm uppercase">
                Informasi {{ request('kategori') ?? 'Publik' }}
            </h1>
            <p class="text-[14px] md:text-[18px] text-gray-800 font-medium leading-relaxed">
                {{ $subtitle }}
            </p>
        </div>

        {{-- Accordion Wrapper --}}
        <div class="flex flex-col gap-4">

            @forelse($documents as $subKategori => $items)
            {{-- Accordion Item --}}
            <details class="group bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

                {{-- Header Accordion --}}
                <summary class="flex justify-between items-center cursor-pointer p-4 md:p-5 font-bold text-gray-800 bg-gray-50/50 hover:bg-gray-50 transition-colors list-none [&::-webkit-details-marker]:hidden">
                    <span class="text-[15px] md:text-lg uppercase tracking-wide">{{ $subKategori }}</span>
                    <span class="transition-transform duration-300 group-open:rotate-180 text-gray-400">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                </summary>

                {{-- Body Accordion (Tabel) --}}
                <div class="w-full overflow-x-auto border-t border-gray-200">
                    <table class="w-full text-left text-[13px] md:text-sm text-gray-700 whitespace-nowrap">
                        <thead class="bg-white text-gray-500 font-semibold border-b border-gray-200">
                            <tr>
                                <th class="px-5 py-4 w-12 text-center uppercase tracking-wider text-xs">No</th>
                                <th class="px-5 py-4 min-w-[200px] uppercase tracking-wider text-xs">Judul</th>
                                <th class="px-5 py-4 uppercase tracking-wider text-xs">Tanggal</th>
                                <th class="px-5 py-4 text-center uppercase tracking-wider text-xs">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $index => $doc)
                            <tr class="hover:bg-gray-50/80 transition-colors border-b border-gray-50 last:border-0">
                                <td class="px-5 py-4 text-center font-medium">{{ $index + 1 }}</td>

                                <td class="px-5 py-4 text-gray-800 font-bold whitespace-normal min-w-[250px]">
                                    {{ $doc->judul }}
                                </td>

                                <td class="px-5 py-4 text-gray-500">
                                    {{ \Carbon\Carbon::parse($doc->tanggal_upload)->translatedFormat('l, d F Y') }}
                                </td>

                                <td class="px-5 py-4">
                                    <div class="table-actions-col flex justify-center gap-2">
                                        <a href="{{ route('ppid.lihat-dokumen', $doc->id) }}" target="_blank" class="btn-action-sm">
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
            {{-- Tampilan Kosong (Dibuat mirip kotak abu-abu memanjang di tengah seperti difotomu) --}}
            <div class="mt-8 flex justify-center">
                <div class="flex items-center gap-3 px-8 py-5 bg-gray-100 rounded text-gray-500 w-full max-w-lg justify-center">
                    {{-- Icon Folder Silang --}}
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                        <line x1="9" y1="14" x2="15" y2="14"></line>
                    </svg>
                    <span class="font-medium text-[15px]">Belum ada informasi untuk saat ini.</span>
                </div>
            </div>
            @endforelse

        </div>
    </section>



</x-frontend>
