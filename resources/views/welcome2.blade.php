<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Satuan Kerja</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="text-gray-800 bg-gray-50">

    <nav class="sticky top-0 z-50 bg-white shadow-md">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('storage/' . $about->logo) }}" alt="Logo" class="h-10">
                    <span class="text-xl font-bold tracking-tight text-blue-900 uppercase">Dissenlek</span>
                </div>
                <div class="items-center hidden space-x-8 font-medium md:flex">
                    <a href="#home" class="hover:text-blue-600">Beranda</a>
                    <a href="#about" class="hover:text-blue-600">Profil</a>
                    <a href="#leaders" class="hover:text-blue-600">Pimpinan</a>
                    <a href="#personnels" class="hover:text-blue-600">Personel</a>
                    <a href="#activities" class="hover:text-blue-600">Kegiatan</a>
                    <a href="#complaint" class="hover:text-blue-600">Pengaduan</a>
                </div>
            </div>
        </div>
    </nav>

    <header id="home" class="py-24 text-center text-white bg-blue-900">
        <div class="max-w-4xl px-4 mx-auto">
            <h1 class="mb-4 text-4xl font-extrabold tracking-wider uppercase md:text-6xl">Selamat Datang</h1>
            <p class="text-xl italic opacity-90">"{{ $about->visi ?? 'Visi belum diisi' }}"</p>
        </div>
    </header>

    <section id="about" class="py-20 border-gray-100 bg-gray-50 border-y">
        <div class="px-4 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2 class="text-3xl font-bold tracking-widest text-gray-900 uppercase">Profil Satuan</h2>
                <div class="w-20 h-1 mx-auto mt-4 bg-blue-900"></div>
            </div>

            <div class="grid gap-12 md:grid-cols-2">
                <div class="space-y-8">
                    <div class="p-8 bg-white border-t-4 border-blue-900 shadow-sm rounded-2xl">
                        <h3 class="flex items-center mb-4 text-xl font-bold text-blue-900">
                            <span class="mr-2">🎯</span> VISI
                        </h3>
                        <p class="leading-relaxed text-gray-700">
                            {{ $about->visi ?? 'Data visi belum diisi.' }}
                        </p>
                    </div>

                    <div class="p-8 bg-white border-t-4 border-blue-900 shadow-sm rounded-2xl">
                        <h3 class="flex items-center mb-4 text-xl font-bold text-blue-900">
                            <span class="mr-2">🚀</span> MISI
                        </h3>
                        <div class="leading-relaxed text-gray-700 whitespace-pre-line">
                            {{ $about->misi ?? 'Data misi belum diisi.' }}
                        </div>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="p-8 bg-white border-t-4 border-blue-900 shadow-sm rounded-2xl">
                        <h3 class="flex items-center mb-4 text-xl font-bold text-blue-900">
                            <span class="mr-2">📋</span> TUGAS POKOK
                        </h3>
                        <p class="leading-relaxed text-gray-700 whitespace-pre-line">
                            {{ $about->tugas_pokok ?? 'Data tugas pokok belum diisi.' }}
                        </p>
                    </div>

                    <div class="p-8 bg-white border-t-4 border-blue-900 shadow-sm rounded-2xl">
                        <h3 class="flex items-center mb-4 text-xl font-bold text-blue-900">
                            <span class="mr-2">📜</span> SEJARAH SINGKAT
                        </h3>
                        <p class="leading-relaxed text-gray-700 whitespace-pre-line">
                            {{ $about->sejarah ?? 'Data sejarah belum diisi.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="leaders" class="py-16 bg-white">
        <div class="grid items-center max-w-6xl gap-12 px-4 mx-auto md:grid-cols-2">
            <div class="text-center">
                @if ($current_leader)
                    <img src="{{ asset('storage/' . $current_leader->image) }}"
                        class="w-64 mx-auto border-4 border-blue-900 shadow-2xl rounded-xl">
                    <h3 class="mt-4 text-xl font-bold">{{ $current_leader->name }}</h3>
                    <p class="font-medium text-blue-600">{{ $current_leader->rank }}</p>
                @endif
            </div>
            <div class="p-8 border-l-8 border-blue-900 shadow-sm bg-gray-50 rounded-2xl">
                <h2 class="mb-4 text-2xl italic font-bold text-blue-900">Kata Sambutan</h2>
                <p class="italic leading-relaxed text-gray-700">
                    "{{ $current_leader->message ?? 'Selamat datang di website resmi kami.' }}"
                </p>
            </div>
        </div>
    </section>

    <section id="personnels" class="py-20 bg-white">
        <div class="px-4 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2 class="text-3xl font-bold tracking-widest text-gray-900 uppercase">Personel Satuan</h2>
                <p class="mt-2 text-gray-500">Daftar prajurit dan personel profesional kami</p>
                <div class="w-20 h-1 mx-auto mt-4 bg-blue-900"></div>
            </div>

            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                @forelse($personnels as $person)
                    <div class="text-center group">
                        <div class="relative overflow-hidden rounded-2xl mb-4 shadow-md aspect-[3/4]">
                            <img src="{{ asset('storage/' . $person->image) }}" alt="{{ $person->name }}"
                                class="object-cover w-full h-full transition duration-500 grayscale group-hover:grayscale-0">
                            <div
                                class="absolute bottom-0 left-0 right-0 p-4 transition duration-300 opacity-0 bg-gradient-to-t from-blue-900 to-transparent group-hover:opacity-100">
                                <p class="text-xs font-bold text-white uppercase">{{ $person->subdis }}</p>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900">{{ $person->name }}</h3>
                        <p class="text-sm text-gray-500">{{ $person->position }}</p>
                        <p class="mt-1 font-mono text-xs text-blue-600">NRP: {{ $person->nrp }}</p>
                    </div>
                @empty
                    <div class="col-span-4 italic text-center text-gray-400">Data personel belum tersedia.</div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="activities" class="py-20 bg-gray-50">
        <div class="px-4 mx-auto max-w-7xl">
            <div class="mb-16 text-center">
                <h2 class="text-3xl font-bold tracking-widest text-gray-900 uppercase">Kegiatan Terbaru</h2>
                <div class="w-20 h-1 mx-auto mt-4 bg-blue-900"></div>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                @forelse($activities as $act)
                    <div
                        class="overflow-hidden transition-transform bg-white border border-gray-100 shadow-lg rounded-xl hover:-translate-y-2">
                        <img src="{{ asset('storage/' . $act->image) }}" alt="Kegiatan"
                            class="object-cover w-full h-56">
                        <div class="p-6">
                            <span
                                class="text-xs font-bold text-blue-600 uppercase">{{ \Carbon\Carbon::parse($act->date)->format('d M Y') }}</span>
                            <h3 class="mb-3 text-xl font-bold text-gray-800">{{ $act->title }}</h3>
                            <p class="mb-4 text-sm leading-relaxed text-gray-600">
                                {{ Str::limit($act->description, 100) }}
                            </p>
                            <button class="text-sm font-bold text-blue-900 hover:underline">Baca Selengkapnya →</button>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 italic text-center text-gray-500">Belum ada dokumentasi kegiatan.</div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="complaint" class="py-20 bg-white">
        <div class="max-w-4xl px-4 mx-auto">
            <div class="flex flex-col overflow-hidden bg-blue-900 shadow-2xl rounded-3xl md:flex-row">
                <div class="p-10 text-white md:w-1/3">
                    <h2 class="mb-4 text-2xl font-bold">Layanan Pengaduan</h2>
                    <p class="text-sm leading-relaxed text-blue-100">
                        Punya keluhan atau aspirasi? Sampaikan kepada kami melalui form ini secara resmi.
                    </p>
                    <div class="mt-8 space-y-4 text-sm">
                        <p>📍 Markas Disenlek</p>
                        <p>📧 support@disenlek.go.id</p>
                    </div>
                </div>

                <div class="p-10 bg-white md:w-2/3">
                    @if (session('success_complaint'))
                        <div class="p-4 mb-4 text-sm font-bold text-green-700 bg-green-100 rounded-lg">
                            {{ session('success_complaint') }}
                        </div>
                    @endif

                    <form action="{{ route('public.complaint.store') }}" method="POST"
                        enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                            <input type="text" name="reporter_name" placeholder="Nama Lengkap"
                                class="w-full border-gray-200 rounded-lg focus:ring-blue-500" required>
                            <input type="text" name="email_or_phone" placeholder="WhatsApp / Email"
                                class="w-full border-gray-200 rounded-lg focus:ring-blue-500" required>
                        </div>
                        <textarea name="message" rows="4" placeholder="Apa yang ingin Anda laporkan?"
                            class="w-full border-gray-200 rounded-lg focus:ring-blue-500" required></textarea>

                        <div>
                            <label
                                class="block mb-1 text-xs font-bold tracking-tighter text-gray-500 uppercase">Lampiran
                                (Foto/Dokumen)</label>
                            <input type="file" name="attachment"
                                class="text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-blue-50 file:text-blue-700">
                        </div>

                        <button type="submit"
                            class="w-full py-3 font-bold text-white transition bg-blue-900 rounded-lg shadow-lg hover:bg-blue-800">
                            Kirim Laporan Sekarang
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-8 text-sm text-center text-white bg-gray-900">
        <p>&copy; 2025 Disenlek. All rights reserved.</p>
    </footer>

</body>

</html>
