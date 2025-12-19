<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Daftar Kegiatan</h2>
            <a href="{{ route('activities.create') }}" class="px-4 py-2 text-xs text-white bg-blue-600 rounded">
                + Tambah Kegiatan
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase">Foto</th>
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase">Kegiatan</th>
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase">Tanggal</th>
                            <th class="px-6 py-3 text-xs font-bold text-right uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($all_activities as $act)
                            <tr>
                                <td class="px-6 py-4">
                                    @if ($act->image)
                                        <img src="{{ asset('storage/' . $act->image) }}"
                                            class="object-cover w-24 h-16 rounded">
                                    @else
                                        <span class="text-gray-400">No Image</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-bold text-gray-900">{{ $act->title }}</div>
                                    <div class="text-sm text-gray-500">{{ Str::limit($act->description, 50) }}</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{ \Carbon\Carbon::parse($act->date)->format('d M Y') }}
                                </td>
                                <td class="px-6 py-4 text-sm text-right">
                                    <a href="{{ route('activities.edit', $act) }}"
                                        class="mr-2 font-bold text-blue-600">Edit</a>
                                    <form action="{{ route('activities.destroy', $act) }}" method="POST"
                                        class="inline">
                                        @csrf @method('DELETE')
                                        <button class="font-bold text-red-600">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-10 text-center text-gray-500">Belum ada data kegiatan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
