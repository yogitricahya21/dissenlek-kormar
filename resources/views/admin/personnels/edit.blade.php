<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Edit Personel: {{ $personnel->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <form action="{{ route('personnels.update', $personnel->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold">Nama Lengkap:</label>
                        <input type="text" name="name" value="{{ $personnel->name }}" class="w-full px-3 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold">NRP:</label>
                        <input type="text" name="nrp" value="{{ $personnel->nrp }}" class="w-full px-3 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold">Pangkat:</label>
                        <input type="text" name="rank" value="{{ $personnel->rank }}" class="w-full px-3 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold">Jabatan:</label>
                        <input type="text" name="position" value="{{ $personnel->position }}" class="w-full px-3 py-2 border rounded" required>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold">Foto Saat Ini:</label>
                        @if($personnel->image)
                            <img src="{{ asset('storage/' . $personnel->image) }}" class="h-20 mb-2">
                        @endif
                        <input type="file" name="image" class="w-full">
                        <p class="mt-1 text-xs text-gray-500">*Kosongkan jika tidak ingin mengganti foto</p>
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                            Simpan Perubahan
                        </button>
                        <a href="{{ route('personnels.index') }}" class="text-gray-600">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>