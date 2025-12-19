<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Daftar Personel') }}
            </h2>
            <a href="{{ route('personnels.create') }}"
                class="px-4 py-2 text-xs font-bold text-white uppercase bg-blue-600 rounded hover:bg-blue-700">
                + Tambah Personel
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Foto</th>
                            <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Nama / NRP</th>
                            <th class="px-6 py-3 text-xs font-medium text-left text-gray-500 uppercase">Pangkat /
                                Jabatan</th>
                            <th class="px-6 py-3 text-xs font-medium text-right text-gray-500 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($all_personnel as $person)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($person->image)
                                        <img src="{{ asset('storage/' . $person->image) }}"
                                            class="object-cover w-12 h-12 rounded-full">
                                    @else
                                        <div
                                            class="flex items-center justify-center w-12 h-12 text-xs text-gray-500 bg-gray-200 rounded-full">
                                            No Photo</div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-bold text-gray-900">{{ $person->name }}</div>
                                    <div class="text-sm text-gray-500">NRP: {{ $person->nrp }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">{{ $person->rank }}</div>
                                    <div class="text-sm text-gray-500">{{ $person->position }}</div>
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right">
                                    <a href="{{ route('personnels.edit', $person) }}"
                                        class="mr-3 font-bold text-indigo-600 hover:text-indigo-900">Edit</a>

                                    <form action="{{ route('personnels.destroy', $person) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus personel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-bold text-red-600 hover:text-red-900">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-10 italic text-center text-gray-500">
                                    Belum ada data personel yang tersimpan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
