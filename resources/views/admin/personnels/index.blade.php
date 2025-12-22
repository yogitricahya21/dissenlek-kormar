<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
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
                                    <button
                                        onclick="openModal('{{ $person->name }}', '{{ $person->position }}', '{{ $person->subdis }}', '{{ asset('storage/' . $person->image) }}', '{{ $person->nrp }}')"
                                        class="mr-3 font-bold text-green-600 hover:text-green-900">
                                        Lihat
                                    </button>
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
    <div id="viewModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="pb-2 mb-4 text-lg font-bold leading-6 text-gray-900 border-b" id="modalTitle">
                                Detail Personel</h3>
                            <div class="flex flex-col items-center mb-4">
                                <img id="modalImage" src=""
                                    class="object-cover w-32 h-40 mb-4 rounded shadow-md">
                            </div>
                            <div class="space-y-2">
                                <p><strong>Nama:</strong> <span id="modalName"></span></p>
                                <p><strong>NRP:</strong> <span id="modalNrp"></span></p>
                                <p><strong>Jabatan:</strong> <span id="modalPosition"></span></p>
                                <p><strong>Bagian (Subdis):</strong> <span id="modalSubdis"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" onclick="closeModal()"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none sm:ml-3 sm:w-auto sm:text-sm">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openModal(name, position, subdis, image, nrp) {
            document.getElementById('modalName').innerText = name;
            document.getElementById('modalPosition').innerText = position;
            document.getElementById('modalSubdis').innerText = subdis;
            document.getElementById('modalNrp').innerText = nrp;
            document.getElementById('modalImage').src = image;

            document.getElementById('viewModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('viewModal').classList.add('hidden');
        }

        // Menutup modal jika klik di luar kotak modal
        window.onclick = function(event) {
            let modal = document.getElementById('viewModal');
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>
</x-app-layout>
