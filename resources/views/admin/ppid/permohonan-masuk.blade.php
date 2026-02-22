<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold">Daftar Permohonan Informasi</h1>
            <p class="text-gray-500 text-sm">Pesan dan permintaan informasi dari masyarakat</p>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white font-bold">
        {{ session('success') }}
    </div>
    @endif

    <div class="card bg-white shadow p-4 overflow-x-auto">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>Waktu Masuk</th>
                    <th>Nama Pemohon</th>
                    <th>Instansi</th>
                    <th>Kontak (HP/Email)</th>
                    <th>Permohonan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($permohonan as $item)
                <tr class="hover">
                    <td class="text-sm whitespace-nowrap">{{ $item->created_at->format('d/m/Y - H:i') }}</td>
                    <td class="font-bold">{{ $item->nama }}</td>
                    <td>{{ $item->instansi }}</td>
                    <td class="text-sm text-gray-600">
                        <div>📞 {{ $item->telepon }}</div>
                        <div>✉️ {{ $item->email }}</div>
                    </td>
                    <td>
                        <div class="max-w-xs truncate text-gray-600">
                            {{ Str::limit($item->permohonan, 40) }}
                        </div>
                    </td>
                    <td class="flex gap-2">
                        <button onclick="modal_{{ $item->id }}.showModal()" class="btn btn-xs btn-info text-white">Buka / Baca</button>

                        <form action="{{ route('admin.ppid.permohonan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus permohonan dari {{ $item->nama }}?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-xs btn-error text-white">Hapus</button>
                        </form>
                    </td>
                </tr>

                <dialog id="modal_{{ $item->id }}" class="modal">
                    <div class="modal-box w-11/12 max-w-2xl">
                        <h3 class="font-bold text-lg mb-4 text-green-600">Detail Permohonan Informasi</h3>

                        <div class="grid grid-cols-2 gap-4 mb-4 text-sm">
                            <div>
                                <p class="text-gray-500">Nama Lengkap</p>
                                <p class="font-bold text-lg">{{ $item->nama }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Asal Instansi</p>
                                <p class="font-bold text-lg">{{ $item->instansi }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Nomor Telepon (WhatsApp)</p>
                                <p class="font-bold text-lg">{{ $item->telepon }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Alamat E-mail</p>
                                <p class="font-bold text-lg">{{ $item->email }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Tanggal Masuk</p>
                                <p class="font-bold">{{ $item->created_at->translatedFormat('l, d F Y - H:i:s') }}</p>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <p class="text-gray-500 mb-2">Isi Permohonan Informasi:</p>
                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 whitespace-pre-line text-gray-800">
                            {{ $item->permohonan }}
                        </div>

                        <div class="modal-action mt-6">
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $item->telepon) }}?text=Halo%20Bapak/Ibu%20{{ urlencode($item->nama) }},%20kami%20dari%20Admin%20Desa%20menghubungi%20terkait%20Permohonan%20Informasi%20Anda%20di%20Website%20kami..." target="_blank" class="btn btn-success text-white">
                                Balas via WhatsApp
                            </a>

                            <form method="dialog">
                                <button class="btn">Tutup</button>
                            </form>
                        </div>
                    </div>
                    <form method="dialog" class="modal-backdrop">
                        <button>close</button>
                    </form>
                </dialog>

                @empty
                <tr>
                    <td colspan="6" class="text-center py-8 text-gray-500">
                        Belum ada permohonan informasi yang masuk saat ini.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $permohonan->links() }}
    </div>
</x-layouts.admin>
