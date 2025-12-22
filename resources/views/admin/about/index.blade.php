<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Pengaturan Profil Satuan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div class="space-y-4">
                            <label class="block font-bold text-gray-700">Logo Satuan Kerja</label>
                            <div class="p-4 text-center border-2 border-gray-300 border-dashed rounded-lg">
                                @if($about->logo)
                                    <img src="{{ asset('storage/' . $about->logo) }}" alt="Logo Satuan" class="h-40 mx-auto mb-4">
                                @else
                                    <div class="flex items-center justify-center h-40 text-gray-400">Belum ada logo</div>
                                @endif
                                <input type="file" name="logo" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="mt-2 text-xs text-gray-500">Format: JPG, PNG (Maks 2MB)</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="block mb-1 font-bold text-gray-700">Visi</label>
                                <textarea name="visi" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ $about->visi }}</textarea>
                            </div>
                            
                            <div>
                                <label class="block mb-1 font-bold text-gray-700">Misi</label>
                                <textarea name="misi" rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ $about->misi }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 space-y-4">
                        <div>
                            <label class="block mb-1 font-bold text-gray-700">Tugas Pokok</label>
                            <textarea name="tugas_pokok" rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ $about->tugas_pokok }}</textarea>
                        </div>

                        <div>
                            <label class="block mb-1 font-bold text-gray-700">Sejarah Singkat (Opsional)</label>
                            <textarea name="sejarah" rows="5" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ $about->sejarah }}</textarea>
                        </div>
                    </div>

                    <div class="flex justify-end mt-8">
                        <button type="submit" class="px-6 py-2 font-bold text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700">
                            Simpan Perubahan Profil
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>