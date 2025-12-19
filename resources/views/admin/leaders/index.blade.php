<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Daftar Pimpinan / Pejabat') }}
            </h2>
            <a href="{{ route('leaders.create') }}" class="px-4 py-2 text-xs font-bold text-white uppercase bg-indigo-600 rounded hover:bg-indigo-700">
                + Tambah Pimpinan
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">Foto</th>
                            <th class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">Nama & Pangkat</th>
                            <th class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">Masa Jabatan</th>
                            <th class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-xs font-bold text-right text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($all_leaders as $leader)
                        <tr class="{{ $leader->is_current ? 'bg-blue-50' : '' }}">
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/' . $leader->image) }}" class="object-cover w-16 h-20 rounded shadow-sm">
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-bold text-gray-900">{{ $leader->name }}</div>
                                <div class="text-sm text-gray-500">{{ $leader->rank }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                {{ $leader->period }}
                            </td>
                            <td class="px-6 py-4">
                                @if($leader->is_current)
                                    <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">
                                        Sedang Menjabat
                                    </span>
                                @else
                                    <span class="px-2 py-1 text-xs font-semibold text-gray-500 bg-gray-100 rounded-full">
                                        Mantan Pimpinan
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-right">
                                <a href="{{ route('leaders.edit', $leader) }}" class="mr-3 text-indigo-600 hover:text-indigo-900">Edit</a>
                                <form action="{{ route('leaders.destroy', $leader) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus data pimpinan ini?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-10 italic text-center text-gray-500">Belum ada data pimpinan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>