<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Edit Kegiatan</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                <form action="{{ route('activities.update', $activity) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label class="block font-bold">Judul Kegiatan:</label>
                        <input type="text" name="title" value="{{ $activity->title }}" class="w-full p-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Tanggal Kegiatan:</label>
                        <input type="date" name="date" value="{{ $activity->date }}" class="w-full p-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Deskripsi:</label>
                        <textarea name="description" class="w-full p-2 border rounded" rows="4" required>{{ $activity->description }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block font-bold">Foto Saat Ini:</label>
                        @if($activity->image)
                            <img src="{{ asset('storage/' . $activity->image) }}" class="h-32 mb-2 rounded">
                        @endif
                        <input type="file" name="image" class="w-full">
                    </div>

                    <button type="submit" class="px-4 py-2 text-white bg-blue-600 rounded">Update Kegiatan</button>
                    <a href="{{ route('activities.index') }}" class="ml-2 text-gray-600">Batal</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>