<x-layouts.admin>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Capaian SDGs Desa</h1>
        <a href="{{ route('sdgs.create') }}" class="btn btn-primary text-white">Tambah Goal</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success mb-4 text-white">{{ session('success') }}</div>
    @endif

    <div class="card bg-white shadow p-4">
        <table class="table w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th>Goal #</th>
                    <th>Icon</th>
                    <th>Nama Goal</th>
                    <th width="30%">Nilai Capaian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sdgs as $item)
                <tr class="hover">
                    <td class="font-bold text-lg text-center">{{ $item->goal_number }}</td>
                    <td>
                        @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="w-12 h-12 object-contain bg-gray-50 rounded p-1">
                        @else
                        <span class="text-xs text-gray-400">No Icon</span>
                        @endif
                    </td>
                    <td class="font-bold">{{ $item->title }}</td>
                    <td>
                        <div class="flex items-center gap-2">
                            <progress class="progress progress-success w-full" value="{{ $item->score }}" max="100"></progress>
                            <span class="font-bold text-sm">{{ $item->score }}%</span>
                        </div>
                    </td>
                    <td class="flex gap-2">
                        <a href="{{ route('sdgs.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('sdgs.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus goal ini?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-error text-white">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.admin>
