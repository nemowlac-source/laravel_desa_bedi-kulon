<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Administrasi Penduduk</h1>
        <a href="{{ route('penduduk.create') }}" class="btn btn-primary text-white">Tambah Wilayah/Dusun</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4 overflow-x-auto">
        <table class="table w-full table-zebra">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th rowspan="2" class="text-center align-middle border-r border-gray-600">Wilayah / Dusun</th>
                    <th rowspan="2" class="text-center align-middle border-r border-gray-600">KK</th>
                    <th colspan="3" class="text-center border-b border-gray-600 border-r">Penduduk Tetap</th>
                    <th rowspan="2" class="text-center align-middle border-r border-gray-600 bg-yellow-900">Sementara</th>
                    <th colspan="4" class="text-center border-b border-gray-600 bg-blue-900">Mutasi</th>
                    <th rowspan="2" class="text-center align-middle">Aksi</th>
                </tr>
                <tr>
                    <th class="text-center text-xs">L</th>
                    <th class="text-center text-xs">P</th>
                    <th class="text-center text-xs font-bold">Total</th>

                    <th class="text-center text-xs bg-blue-800">Lahir</th>
                    <th class="text-center text-xs bg-blue-800">Mati</th>
                    <th class="text-center text-xs bg-blue-800">Masuk</th>
                    <th class="text-center text-xs bg-blue-800">Keluar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penduduks as $item)
                <tr class="hover">
                    <td class="font-bold">{{ $item->nama_wilayah }}</td>
                    <td class="text-center">{{ number_format($item->kk) }}</td>
                    <td class="text-center">{{ number_format($item->laki_laki) }}</td>
                    <td class="text-center">{{ number_format($item->perempuan) }}</td>
                    <td class="text-center font-bold bg-gray-50">{{ number_format($item->total_jiwa) }}</td>
                    <td class="text-center text-yellow-700 font-bold">{{ number_format($item->penduduk_sementara) }}</td>

                    <td class="text-center text-green-600">+{{ $item->kelahiran }}</td>
                    <td class="text-center text-red-600">-{{ $item->kematian }}</td>
                    <td class="text-center text-blue-600">In: {{ $item->mutasi_masuk }}</td>
                    <td class="text-center text-orange-600">Out: {{ $item->mutasi_keluar }}</td>

                    <td class="flex justify-center gap-2">
                        <a href="{{ route('penduduk.edit', $item->id) }}" class="btn btn-xs btn-warning">Edit</a>
                        <form action="{{ route('penduduk.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus data wilayah ini?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-xs btn-error text-white">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="bg-gray-100 font-bold">
                <tr>
                    <td>TOTAL DESA</td>
                    <td class="text-center">{{ number_format($penduduks->sum('kk')) }}</td>
                    <td class="text-center">{{ number_format($penduduks->sum('laki_laki')) }}</td>
                    <td class="text-center">{{ number_format($penduduks->sum('perempuan')) }}</td>
                    <td class="text-center">{{ number_format($penduduks->sum('laki_laki') + $penduduks->sum('perempuan')) }}</td>
                    <td class="text-center">{{ number_format($penduduks->sum('penduduk_sementara')) }}</td>
                    <td class="text-center">{{ $penduduks->sum('kelahiran') }}</td>
                    <td class="text-center">{{ $penduduks->sum('kematian') }}</td>
                    <td class="text-center">{{ $penduduks->sum('mutasi_masuk') }}</td>
                    <td class="text-center">{{ $penduduks->sum('mutasi_keluar') }}</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
</x-layouts.admin>
