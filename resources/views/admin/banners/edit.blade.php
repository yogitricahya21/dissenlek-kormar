<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl italic font-semibold text-gray-800">Edit Banner: {{ $banner->title }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <div class="mb-4">
                            <label class="block font-bold text-gray-700">Judul Banner:</label>
                            <input type="text" name="title" value="{{ $banner->title }}" class="w-full p-2 border rounded focus:ring-blue-500" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block font-bold text-gray-700">Sub-Judul:</label>
                            <input type="text" name="subtitle" value="{{ $banner->subtitle }}" class="w-full p-2 border rounded focus:ring-blue-500">
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold text-gray-700">Tipe Media:</label>
                            <select name="media_type" class="w-full p-2 border rounded">
                                <option value="image" {{ $banner->media_type == 'image' ? 'selected' : '' }}>Gambar (.jpg, .png)</option>
                                <option value="video" {{ $banner->media_type == 'video' ? 'selected' : '' }}>Video (.mp4)</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block font-bold text-gray-700">Urutan Tampil:</label>
                            <input type="number" name="order_index" value="{{ $banner->order_index }}" class="w-full p-2 border rounded">
                        </div>
                    </div>

                    <div class="mt-4 mb-4">
                        <label class="block font-bold text-gray-700">Media Saat Ini:</label>
                        <div class="p-2 mt-2 border rounded bg-gray-50">
                            @if($banner->media_type == 'video')
                                <span class="font-semibold text-blue-600">Video aktif: {{ $banner->media_file }}</span>
                            @else
                                <img src="{{ asset('assets/img/banner/' . $banner->media_file) }}" class="h-32 rounded shadow-md">
                            @endif
                        </div>
                        <label class="block mt-4 text-sm italic font-bold text-gray-700 underline">Ganti File (Kosongkan jika tidak ingin mengubah):</label>
                        <input type="file" name="media_file" class="w-full p-1 mt-1 border rounded">
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold text-gray-700">Stroke Text (Background):</label>
                        <input type="text" name="stroke_text" value="{{ $banner->stroke_text }}" class="w-full p-2 border rounded">
                    </div>

                    <div class="flex items-center justify-between pt-4 mt-6 border-t">
                        <button type="submit" class="px-6 py-2 text-white transition bg-blue-600 rounded-lg hover:bg-blue-700">
                            Perbarui Banner
                        </button>
                        <a href="{{ route('banners.index') }}" class="text-gray-500 hover:text-gray-800">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>