<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">Tambah Kegiatan Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.activities.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block font-bold">Judul Kegiatan:</label>
                        <input type="text" name="title" class="w-full p-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Tanggal Kegiatan:</label>
                        <input type="date" name="date" class="w-full p-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Keterangan/Deskripsi:</label>
                        <textarea name="description" class="w-full p-2 border rounded" rows="4" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Foto Kegiatan:</label>
                        <input type="file" name="image" class="w-full">
                    </div>

                    <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded">Simpan Kegiatan</button>
                    <a href="{{ route('admin.activities.index') }}" class="ml-2 text-gray-600">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
