<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Manajemen Banner Slider</h2>
            <a href="{{ route('banners.create') }}" class="px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                + Tambah Banner
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-x-auto bg-white shadow-sm sm:rounded-lg">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-3 border">Urutan</th>
                            <th class="p-3 border">Media</th>
                            <th class="p-3 border">Judul</th>
                            <th class="p-3 border">Tipe</th>
                            <th class="p-3 text-center border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $banner)
                        <tr>
                            <td class="p-3 text-center border">{{ $banner->order_index }}</td>
                            <td class="p-3 border">
                                @if($banner->media_type == 'video')
                                    <span class="text-sm italic font-bold text-blue-600">File Video</span>
                                @else
                                    <img src="{{ asset('assets/img/banner/' . $banner->media_file) }}" class="object-cover w-20 h-12 rounded">
                                @endif
                            </td>
                            <td class="p-3 font-bold border">{{ $banner->title }}</td>
                            <td class="p-3 text-xs uppercase border">{{ $banner->media_type }}</td>
                            <td class="p-3 text-center border">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('banners.edit', $banner->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" onsubmit="return confirm('Hapus banner ini?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>