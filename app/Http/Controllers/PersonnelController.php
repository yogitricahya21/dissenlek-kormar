<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari database urut yang terbaru
        $all_personnel = Personnel::latest()->get();
        return view('admin.personnels.index', compact('all_personnel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.personnels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'name' => 'required|string|max:255',
            'nrp' => 'required|string|unique:personnels,nrp',
            'rank' => 'required|string',
            'position' => 'required|string',
            'subdis' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // 2. Olah Foto jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('personnels', 'public');
        }

        // 3. Simpan ke Database
        Personnel::create([
            'name' => $request->name,
            'nrp' => $request->nrp,
            'rank' => $request->rank,
            'position' => $request->position,
            'subdis' => $request->subdis,
            'image' => $imagePath,
        ]);

        // 4. Kembali ke halaman utama dengan pesan sukses
        return redirect()->route('admin.personnels.index')->with('success', 'Data Personel berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Kita mengirim data personel yang dipilih ke halaman edit
        $personnel = Personnel::findOrFail($id);
        return view('admin.personnels.edit', compact('personnel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Ambil data personel dari database
        $personnel = Personnel::findOrFail($id);

        // Validasi input sama seperti saat membuat data baru
        $request->validate([
            'name' => 'required|string|max:255',
            'nrp' => 'required|string|unique:personnels,nrp,' . $personnel->id, // NRP unik kecuali untuk dirinya sendiri
            'rank' => 'required|string',
            'position' => 'required|string',
            'subdis' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Ambil semua input teks
        $data = $request->all();

        // Jika ada upload foto baru
        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada agar tidak memenuhi server
            if ($personnel->image) {
                Storage::disk('public')->delete($personnel->image);
            }
            // Simpan foto baru
            $data['image'] = $request->file('image')->store('personnels', 'public');
        }

        // Update data di database
        $personnel->update($data);

        return redirect()->route('admin.personnels.index')->with('success', 'Data Personel berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personnel $personnel)
    {
        // 1. Hapus file fotonya dari folder storage agar tidak nyampah
        if ($personnel->image) {
            Storage::disk('public')->delete($personnel->image);
        }

        // 2. Hapus data dari database
        $personnel->delete();

        // 3. Kembali ke halaman index dengan pesan sukses
        return redirect()->route('personnels.index')->with('success', 'Data Personel telah berhasil dihapus!');
    }
}
