<x-layouts.admin>
    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
        <div>
            <h1 class="text-2xl font-bold">Capaian SDGs Desa</h1>
            <p class="text-gray-500 text-sm">Data Tahun Anggaran {{ $tahun_pilih }}</p>
        </div>

        <div class="flex items-center gap-3">
            <form action="{{ route('sdgs.index') }}" method="GET">
                <select name="tahun" onchange="this.form.submit()" class="select select-bordered select-sm w-32">
                    @forelse($list_tahun as $thn)
                    <option value="{{ $thn }}" {{ $tahun_pilih == $thn ? 'selected' : '' }}>
                        {{ $thn }}
                    </option>
                    @empty
                    <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                    @endforelse
                </select>
            </form>

            <a href="{{ route('sdgs.create', ['tahun' => $tahun_pilih]) }}" class="btn btn-primary text-white btn-sm">
                + Tambah Goal
            </a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        <span>{{ session('success') }}</span>
    </div>
    @endif

    <div class="card bg-white shadow-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead class="bg-gray-100 text-gray-600">
                    <tr>
                        <th class="w-16 text-center">No</th>
                        <th class="w-20 text-center">Icon</th>
                        <th>Nama Goal (SDGs)</th>
                        <th width="25%">Nilai Capaian</th>
                        <th width="15%" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sdgs as $item)
                    <tr class="hover border-b">
                        <td class="font-bold text-lg text-center text-gray-700">
                            {{ $item->goal_number }}
                        </td>

                        <td class="text-center">
                            @if($item->image)
                            <div class="avatar">
                                <div class="w-10 h-10 rounded bg-gray-50 p-1 border">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Icon">
                                </div>
                            </div>
                            @else
                            <span class="text-xs text-gray-400 italic">No Icon</span>
                            @endif
                        </td>

                        <td>
                            <div class="font-bold text-gray-800">{{ $item->title }}</div>
                            <div class="text-xs text-gray-500 truncate max-w-xs">{{ $item->description }}</div>
                        </td>

                        <td>
                            <div class="flex items-center gap-3">
                                <progress class="progress w-full h-3
                                    {{ $item->score < 40 ? 'progress-error' : ($item->score < 70 ? 'progress-warning' : 'progress-success') }}" value="{{ $item->score }}" max="100">
                                </progress>
                                <span class="font-bold text-sm text-gray-600 w-12 text-right">{{ $item->score }}%</span>
                            </div>
                        </td>

                        <td class="flex justify-center gap-2 py-4">
                            <a href="{{ route('sdgs.edit', $item->id) }}" class="btn btn-square btn-sm btn-warning text-white tooltip" data-tip="Edit">
                                <i class="icon-edit">✎</i> </a>

                            <form action="{{ route('sdgs.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus Goal {{ $item->goal_number }} ini?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-square btn-sm btn-error text-white tooltip" data-tip="Hapus">
                                    <i class="icon-trash">🗑</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-8 text-gray-500">
                            <div class="flex flex-col items-center">
                                <span class="text-4xl mb-2">📂</span>
                                <p>Belum ada data SDGs untuk tahun <strong>{{ $tahun_pilih }}</strong>.</p>
                                <a href="{{ route('sdgs.create', ['tahun' => $tahun_pilih]) }}" class="btn btn-link btn-sm">Buat Data Sekarang</a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin>
