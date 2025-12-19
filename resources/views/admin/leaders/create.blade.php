<x-app-layout>
    <x-slot name="header"><h2 class="text-xl font-semibold text-gray-800">Tambah Pimpinan</h2></x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                <form action="{{ route('leaders.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block font-bold">Nama Lengkap:</label>
                        <input type="text" name="name" class="w-full p-2 border rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold">Pangkat:</label>
                        <input type="text" name="rank" class="w-full p-2 border rounded" placeholder="Kolonel Laut..." required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold">Masa Jabatan:</label>
                        <input type="text" name="period" class="w-full p-2 border rounded" placeholder="Contoh: 2021 - 2023" required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold">Foto:</label>
                        <input type="file" name="image" class="w-full" required>
                    </div>
                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="is_current" value="1" class="text-indigo-600 border-gray-300 rounded shadow-sm">
                            <span class="ml-2 font-bold">Tandai sebagai Pimpinan Saat Ini (Sedang Menjabat)</span>
                        </label>
                    </div>

                    <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>