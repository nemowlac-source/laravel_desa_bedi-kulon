<x-layouts.admin>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">

                <div class="flex justify-between items-center mb-8 border-b pb-4">
                    <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        Detail Pengaduan Masyarakat ⏺️
                    </h2>
                    <a href="{{ route('admin.pengaduan.index') }}" class="text-sm bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-lg transition flex items-center gap-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        Kembali
                    </a>
                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-4">
                        <div>
                            <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Nama Pelapor</label>
                            <p class="text-lg font-semibold text-gray-900">{{ $pengaduan->nama }}</p>
                        </div>
                        <div>
                            <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Nomor Telepon/WA</label>
                            <p class="text-gray-900">{{ $pengaduan->no_hp }}</p>
                        </div>
                        <div>
                            <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Kategori</label>
                            <p class="inline-block bg-blue-50 text-blue-700 px-3 py-1 rounded text-sm font-bold">{{ $pengaduan->kategori }}</p>
                        </div>
                        <div>
                            <label class="text-xs font-bold text-gray-500 uppercase tracking-wider">Tanggal Laporan</label>
                            <p class="text-gray-900">{{ $pengaduan->created_at->format('d F Y, H:i') }} WIB</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                        <label class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-3 block">Update Status Aduan 🛠️</label>
                        <form action="{{ route('admin.pengaduan.update', $pengaduan->id) }}" method="POST" class="mb-4">
                            @csrf
                            @method('PUT')
                            <select name="status" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mb-4 text-sm">
                                <option value="pending" {{ $pengaduan->status == 'pending' ? 'selected' : '' }}>PENDING (Menunggu)</option>
                                <option value="proses" {{ $pengaduan->status == 'proses' ? 'selected' : '' }}>PROSES (Sedang Ditangani)</option>
                                <option value="selesai" {{ $pengaduan->status == 'selesai' ? 'selected' : '' }}>SELESAI (Selesai Dikerjakan)</option>
                            </select>
                            <textarea name="catatan_admin" id="catatanAdmin" rows="3" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 mb-4 text-sm" placeholder="Tambahkan catatan progres atau alasan...">{{ $pengaduan->catatan_admin }}</textarea>

                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-lg transition shadow-md text-sm">
                                Simpan Perubahan Status
                            </button>


                        </form>


                        @php
                        // Format nomor HP ke standar internasional (62)
                        $no_hp = $pengaduan->no_hp;
                        if (str_starts_with($no_hp, '0')) { $no_hp = '62' . substr($no_hp, 1); }

                        $catatanTxt = $pengaduan->catatan_admin ? "\n\n*Catatan Tambahan:*\n" . $pengaduan->catatan_admin : "";

                        $pesan = "Halo Bapak/Ibu *" . $pengaduan->nama . "*,\n\nKami dari *Pemerintah Desa Bedi Kulon* menginformasikan bahwa pengaduan Anda mengenai *" . $pengaduan->kategori . "* saat ini berstatus: *" . strtoupper($pengaduan->status) . "*." . $catatanTxt . "\n\nTerima kasih.\n*Admin Desa Bedi Kulon*";

                        $url_wa = "https://wa.me/" . $no_hp . "?text=" . urlencode($pesan);
                        @endphp

                        <a href="{{ $url_wa }}" id="waButton" target="_blank" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 rounded-lg transition flex items-center justify-center gap-2 text-sm shadow-md">

                            <i class="ph ph-whatsapp-logo text-lg"></i>
                            Konfirmasi via WhatsApp
                        </a>



                    </div>
                </div>

                <hr class="my-8">

                <div class="mb-8">
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wider block mb-2">Isi Pengaduan 📝</label>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-100 italic text-gray-700 leading-relaxed">
                        "{{ $pengaduan->isi_pengaduan }}"
                    </div>
                </div>

                <div>
                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wider block mb-3">Lampiran Bukti 📂</label>
                    @if($pengaduan->lampiran)
                    @php $extension = pathinfo($pengaduan->lampiran, PATHINFO_EXTENSION); @endphp

                    @if(in_array($extension, ['jpg', 'jpeg', 'png', 'webp']))
                    <div class="relative group max-w-md">
                        <img src="{{ asset('storage/' . $pengaduan->lampiran) }}" class="rounded-lg shadow-lg border border-gray-200 cursor-zoom-in" alt="Lampiran Aduan">
                        <a href="{{ asset('storage/' . $pengaduan->lampiran) }}" target="_blank" class="absolute bottom-2 right-2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-70 transition">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M15 3h6v6"></path>
                                <path d="M9 21H3v-6"></path>
                                <path d="M21 3l-7 7"></path>
                                <path d="M3 21l7-7"></path>
                            </svg>
                        </a>
                    </div>
                    @else
                    <a href="{{ asset('storage/' . $pengaduan->lampiran) }}" target="_blank" class="flex items-center gap-3 p-4 border rounded-lg bg-red-50 text-red-700 hover:bg-red-100 transition w-fit">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                        <span class="font-bold">Download Lampiran (PDF/File)</span>
                    </a>
                    @endif
                    @else
                    <p class="text-sm text-gray-400 italic">Tidak ada lampiran yang diunggah ⏺️</p>
                    @endif
                </div>

            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const catatanInput = document.getElementById('catatanAdmin');
            const statusSelect = document.getElementById('statusSelect');
            const waButton = document.getElementById('waButton');

            // Data dari Laravel 📂
            const namaWarga = "{{ $pengaduan->nama }}";
            const kategori = "{{ $pengaduan->kategori }}";
            const noHp = "{{ str_starts_with($pengaduan->no_hp, '0') ? '62' . substr($pengaduan->no_hp, 1) : $pengaduan->no_hp }}";

            function updateWaLink() {
                const status = statusSelect.options[statusSelect.selectedIndex].text;
                const catatan = catatanInput.value;

                let pesan = `Halo Bapak/Ibu *${namaWarga}*,\n\n`;
                pesan += `Kami dari *Admin Desa Bedi Kulon* menginformasikan bahwa aduan Anda mengenai *${kategori}* saat ini berstatus: *${status}*.`;

                if (catatan) {
                    pesan += `\n\n*Catatan Admin:*\n${catatan}`;
                }

                pesan += `\n\nTerima kasih.\n*Pemerintah Desa Bedi Kulon*`;

                waButton.href = `https://wa.me/${noHp}?text=${encodeURIComponent(pesan)}`;
            }

            // Pantau perubahan saat mengetik 🛠️
            catatanInput.addEventListener('input', updateWaLink);
            statusSelect.addEventListener('change', updateWaLink);

            // Jalankan saat pertama kali halaman dimuat 📂
            updateWaLink();
        });

        document.addEventListener('DOMContentLoaded', function() {
            const catatanInput = document.getElementById('catatanAdmin');
            const statusSelect = document.getElementById('statusSelect');
            const waButton = document.getElementById('waButton');

            // Data dasar dari Laravel 📂
            const namaWarga = "{{ $pengaduan->nama }}";
            const kategori = "{{ $pengaduan->kategori }}";
            const noHp = "{{ str_starts_with($pengaduan->no_hp, '0') ? '62' . substr($pengaduan->no_hp, 1) : $pengaduan->no_hp }}";

            function updateWaLink() {
                const status = statusSelect.options[statusSelect.selectedIndex].text;
                const catatan = catatanInput.value;

                // Rakit pesan otomatis ⏺️
                let pesan = `Halo Bapak/Ibu *${namaWarga}*,\n\n`;
                pesan += `Kami dari *Admin Desa Bedi Kulon* menginformasikan bahwa aduan Anda mengenai *${kategori}* saat ini berstatus: *${status}*.`;

                if (catatan) {
                    pesan += `\n\n*Catatan Admin:*\n${catatan}`;
                }

                pesan += `\n\nTerima kasih.\n*Pemerintah Desa Bedi Kulon*`;

                // Update link tombol 🛠️
                waButton.href = `https://wa.me/${noHp}?text=${encodeURIComponent(pesan)}`;
            }

            // Jalankan fungsi saat mengetik atau mengubah status 📂
            catatanInput.addEventListener('input', updateWaLink);
            statusSelect.addEventListener('change', updateWaLink);

            // Jalankan sekali saat halaman pertama kali dimuat ⏺️
            updateWaLink();
        });

    </script>

    @endpush
</x-layouts.admin>
