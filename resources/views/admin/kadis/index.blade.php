<x-app-layout>
    <style>
        .ck-editor__editable {
            min-height: 150px;
        }
    </style>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Kepala Dinas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.kadis.index') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div class="space-y-4">
                            <label class="block font-bold text-gray-700">Foto Pimpinan (Kadis)</label>
                            <div class="p-4 text-center border-2 border-gray-300 border-dashed rounded-lg">
                                @if ($kadis->image)
                                    <img src="{{ asset('storage/' . $kadis->image) }}" alt="Foto Kadis"
                                        class="object-cover h-64 mx-auto mb-4 rounded-lg">
                                @else
                                    <div
                                        class="flex items-center justify-center h-64 text-gray-400 bg-gray-100 rounded-lg">
                                        Foto Belum Diunggah</div>
                                @endif
                                <input type="file" name="image"
                                    class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="mt-2 text-xs text-gray-500">Rekomendasi: Portrait (3:4), Maks 2MB</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="block mb-1 font-bold text-gray-700">Nama Lengkap</label>
                                <input type="text" name="name" value="{{ old('name', $kadis->name) }}"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label class="block mb-1 font-bold text-gray-700">Pangkat</label>
                                <input type="text" name="rank" value="{{ old('rank', $kadis->rank) }}"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500"
                                    placeholder="Contoh: Kolonel Mar" required>
                            </div>

                            <div>
                                <label class="block mb-1 font-bold text-gray-700">NRP</label>
                                <input type="text" name="nrp" value="{{ old('nrp', $kadis->nrp) }}"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500" required>
                            </div>

                            <div>
                                <label class="block mb-1 font-bold text-gray-700">Status Aktif</label>
                                <select name="is_active"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500">
                                    <option value="1" {{ $kadis->is_active ? 'selected' : '' }}>Aktif (Menjabat
                                        Sekarang)</option>
                                    <option value="0" {{ !$kadis->is_active ? 'selected' : '' }}>Tidak Aktif
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 space-y-4">
                        <div>
                            <label class="block mb-1 font-bold text-gray-700">Quote / Kata-kata Mutiara (Tampil di
                                bagian Our Leaders)</label>
                            <textarea id="editor-quote" name="quote" class="w-full border-gray-300 rounded-md">{{ $kadis->quote }}</textarea>
                        </div>

                        <div>
                            <label class="block mb-1 font-bold text-gray-700">Sejarah Singkat / Deskripsi
                                Tambahan</label>
                            <textarea id="editor-desc" name="description" class="w-full border-gray-300 rounded-md">{{ $kadis->description }}</textarea>
                        </div>
                    </div>

                    <div class="flex justify-end mt-8">
                        <button type="submit"
                            class="px-6 py-2 font-bold text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700">
                            Simpan Data Kadis
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        const editors = ['#editor-quote', '#editor-desc'];
        editors.forEach(selector => {
            ClassicEditor
                .create(document.querySelector(selector), {
                    toolbar: ['bold', 'italic', 'bulletedList', 'numberedList', 'undo', 'redo']
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</x-app-layout>
