<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        // Kita ambil data pertama. Jika belum ada, kita buat data kosong.
        $about = About::first() ?? new About();
        return view('admin.about.index', compact('about'));
    }

    public function update(Request $request)
    {
        $about = About::first() ?? new About();

        $request->validate([
            'logo' => 'nullable|image|max:10240',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('logo')) {
            if ($about->logo) Storage::disk('public')->delete($about->logo);
            $data['logo'] = $request->file('logo')->store('uploads', 'public');
        }

        // Jika data belum ada, kita simpan baru. Jika sudah ada, kita update.
        if (!About::first()) {
            About::create($data);
        } else {
            $about->update($data);
        }

        return redirect()->back()->with('success', 'Informasi Satuan Berhasil Diperbarui!');
    }
}
