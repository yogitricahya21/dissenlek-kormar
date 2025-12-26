<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">Daftar Kegiatan</h2>
            <a href="{{ route('admin.activities.create') }}" class="px-4 py-2 text-xs font-bold text-white uppercase bg-blue-600 rounded hover:bg-blue-700">
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
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase">Subdis</th> {{-- Kolom Baru --}}
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
                                {{-- Menampilkan Data Subdis --}}
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    <span class="px-2 py-1 text-xs font-semibold bg-gray-100 rounded">
                                        {{ $act->subdis ?? '-' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">
                                    {{ \Carbon\Carbon::parse($act->date)->format('d M Y') }}
                                </td>
                                <td class="px-6 py-4 text-sm text-right">
                                    <a href="{{ route('admin.activities.edit', $act) }}"
                                        class="mr-2 font-bold text-blue-600">Edit</a>
                                    <form action="{{ route('admin.activities.destroy', $act) }}" method="POST"
                                        class="inline">
                                        @csrf @method('DELETE')
                                        <button class="font-bold text-red-600">Hapus</button>
                                    </form>
                                    <button
                                        {{-- Tambahkan act->subdis ke parameter modal --}}
                                        onclick="openActivityModal('{{ $act->title }}', '{{ $act->date }}', '{{ asset('storage/' . $act->image) }}', '{{ addslashes($act->description) }}', '{{ $act->subdis }}')"
                                        class="mr-3 font-bold text-green-600 hover:text-green-900">
                                        Lihat
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-10 text-center text-gray-500">Belum ada data kegiatan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal Update untuk menampilkan Subdis --}}
    <div id="activityModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 bg-gray-500 opacity-75"></div>
            <div class="overflow-hidden transition-all transform bg-white rounded-lg shadow-xl sm:max-w-2xl sm:w-full">
                <div class="p-6 bg-white">
                    <div class="flex items-center justify-between pb-2 mb-4 border-b">
                        <h3 class="text-lg font-bold" id="actTitle"></h3>
                        <span id="actSubdis" class="px-2 py-1 text-xs font-bold text-blue-600 bg-blue-100 rounded"></span>
                    </div>
                    <img id="actImg" src="" class="object-cover w-full h-64 mb-4 rounded">
                    <p class="mb-2 text-sm text-gray-500">Tanggal Pelaksanaan: <span id="actDate"></span></p>
                    <div class="prose text-gray-700 max-w-none">
                        <strong>Deskripsi:</strong>
                        <p id="actDesc" class="mt-1"></p>
                    </div>
                </div>
                <div class="px-4 py-3 text-right bg-gray-50">
                    <button onclick="closeActivityModal()"
                        class="px-4 py-2 text-white bg-blue-600 rounded">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openActivityModal(title, date, img, desc, subdis) {
            document.getElementById('actTitle').innerText = title;
            document.getElementById('actDate').innerText = date;
            document.getElementById('actDesc').innerText = desc;
            document.getElementById('actImg').src = img;
            document.getElementById('actSubdis').innerText = subdis ? subdis : '-';
            document.getElementById('activityModal').classList.remove('hidden');
        }

        function closeActivityModal() {
            document.getElementById('activityModal').classList.add('hidden');
        }
    </script>
</x-app-layout>