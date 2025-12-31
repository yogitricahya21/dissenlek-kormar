<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">Riwayat Login Terakhir</h3>

                    <form action="{{ route('admin.logs.destroy') }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus semua log?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-4 py-2 text-xs font-bold text-white bg-red-500 rounded hover:bg-red-700">
                            Bersihkan Semua Log
                        </button>
                    </form>
                </div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">Waktu</th>
                            <th class="px-4 py-2 border">Email</th>
                            <th class="px-4 py-2 border">IP Address</th>
                            <th class="px-4 py-2 border">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($logs as $log)
                            <tr>
                                <td class="px-4 py-2 text-center border">{{ $log->created_at->diffForHumans() }}</td>
                                <td class="px-4 py-2 text-center border">{{ $log->email }}</td>
                                <td class="px-4 py-2 text-sm text-center border">{{ $log->ip_address }}</td>
                                <td class="px-4 py-2 text-center border">
                                    <span
                                        class="px-2 py-1 rounded text-xs {{ $log->status == 'success' ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' }}">
                                        {{ strtoupper($log->status) }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-4 py-2 text-center border">Belum ada data log.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $logs->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
