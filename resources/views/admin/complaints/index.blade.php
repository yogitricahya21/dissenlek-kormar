<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">Daftar Pengaduan Masuk</h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase">Pelapor</th>
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase">Pesan</th>
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase">Status</th>
                            <th class="px-6 py-3 text-xs font-bold text-right uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($all_complaints as $item)
                        <tr>
                            <td class="px-6 py-4">
                                <div class="font-bold">{{ $item->reporter_name }}</div>
                                <div class="text-xs text-gray-500">{{ $item->email_or_phone }}</div>
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <p class="text-gray-900">{{ Str::limit($item->message, 100) }}</p>
                                @if($item->attachment)
                                    <a href="{{ asset('storage/' . $item->attachment) }}" target="_blank" class="text-xs text-blue-500 underline">Lihat Lampiran</a>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('complaints.update', $item) }}" method="POST">
                                    @csrf @method('PUT')
                                    <select name="status" onchange="this.form.submit()" class="text-xs border-gray-300 rounded">
                                        <option value="pending" {{ $item->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="process" {{ $item->status == 'process' ? 'selected' : '' }}>Diproses</option>
                                        <option value="resolved" {{ $item->status == 'resolved' ? 'selected' : '' }}>Selesai</option>
                                    </select>
                                </form>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <form action="{{ route('complaints.destroy', $item) }}" method="POST" onsubmit="return confirm('Hapus aduan ini?')">
                                    @csrf @method('DELETE')
                                    <button class="text-sm text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="py-10 text-center text-gray-500">Tidak ada pengaduan masuk.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>