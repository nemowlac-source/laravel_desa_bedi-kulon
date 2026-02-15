<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold">Rincian Indikator IDM {{ $idm->tahun }}</h1>
            <p class="text-gray-500 text-sm">Status: <span class="badge badge-sm badge-success text-white">{{ $idm->status }}</span> | Skor: {{ $idm->nilai_idm }}</p>
        </div>
        <div class="flex gap-2">
            <a href="{{ route('idm.index') }}" class="btn btn-ghost">Kembali</a>
            <a href="{{ route('idm.detail.create', $idm->id) }}" class="btn btn-primary text-white">Tambah Indikator</a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4 overflow-x-auto">
        <table class="table table-xs w-full border">
            <thead class="bg-green-100 text-green-900 text-center">
                <tr>
                    <th rowspan="2" class="border">No</th>
                    <th rowspan="2" class="border text-left">Jenis Indikator</th>
                    <th rowspan="2" class="border text-left">Indikator IDM</th>
                    <th rowspan="2" class="border">Skor</th>
                    <th rowspan="2" class="border text-left w-64">Keterangan</th>
                    <th rowspan="2" class="border text-left w-64">Kegiatan yang dapat dilakukan</th>
                    <th rowspan="2" class="border">Nilai+</th>
                    <th colspan="6" class="border">Yang dapat melaksanakan kegiatan</th>
                    <th rowspan="2" class="border">Aksi</th>
                </tr>
                <tr>
                    <th class="border text-xs">Pusat</th>
                    <th class="border text-xs">Prov</th>
                    <th class="border text-xs">Kab</th>
                    <th class="border text-xs">Desa</th>
                    <th class="border text-xs">CSR</th>
                    <th class="border text-xs">Lain</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $index => $item)
                <tr class="hover">
                    <td class="text-center border">{{ $index + 1 }}</td>
                    <td class="font-bold border">{{ $item->jenis }}</td>
                    <td class="font-bold border">{{ $item->indikator }}</td>
                    <td class="text-center font-bold border">{{ $item->skor }}</td>
                    <td class="border">{{ $item->keterangan }}</td>
                    <td class="border">{{ $item->kegiatan ?? '-' }}</td>
                    <td class="text-center font-mono border">{{ $item->nilai_plus }}</td>

                    <td class="border text-center">{{ $item->pelaksana_pusat }}</td>
                    <td class="border text-center">{{ $item->pelaksana_provinsi }}</td>
                    <td class="border text-center font-bold">{{ $item->pelaksana_kabupaten }}</td>
                    <td class="border text-center">{{ $item->pelaksana_desa }}</td>
                    <td class="border text-center">{{ $item->pelaksana_csr }}</td>
                    <td class="border text-center">{{ $item->pelaksana_lainnya }}</td>

                    <td class="border text-center">
                        <div class="flex justify-center gap-1">
                            <a href="{{ route('idm.detail.edit', $item->id) }}" class="btn btn-xs btn-square btn-warning"><i class="ph ph-pencil"></i></a>
                            <form action="{{ route('idm.detail.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus baris ini?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-xs btn-square btn-error text-white"><i class="ph ph-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.admin>
