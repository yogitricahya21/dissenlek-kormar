<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Tambah Banner Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div class="mb-4">
                            <label class="block font-bold">Judul Banner:</label>
                            <input type="text" name="title" class="w-full p-2 border rounded" placeholder="Contoh: Ensure Fire Safety" required>
                        </div>
                        <div class="mb-4">
                            <label class="block font-bold">Sub-Judul:</label>
                            <input type="text" name="subtitle" class="w-full p-2 border rounded" placeholder="Contoh: Save life & property">
                        </div>
                        <div class="mb-4">
                            <label class="block font-bold">Tipe Media:</label>
                            <select name="media_type" class="w-full p-2 border rounded">
                                <option value="image">Gambar (.jpg, .png)</option>
                                <option value="video">Video (.mp4)</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block font-bold">File Media:</label>
                            <input type="file" name="media_file" class="w-full p-1 border rounded" required>
                        </div>
                        <div class="mb-4">
                            <label class="block font-bold">Urutan Tampil:</label>
                            <input type="number" name="order_index" class="w-full p-2 border rounded" value="1">
                        </div>
                        <div class="mb-4">
                            <label class="block font-bold">Stroke Text (Background):</label>
                            <input type="text" name="stroke_text" class="w-full p-2 border rounded" value="ARMADO">
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-4 mt-4 border-t">
                        <button type="submit" class="px-6 py-2 text-white bg-green-600 rounded hover:bg-green-700">Simpan Banner</button>
                        <a href="{{ route('banners.index') }}" class="text-gray-600 hover:underline">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>