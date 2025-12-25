<?php

namespace App\Http\Controllers;

use App\Models\Kadis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KadisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil pimpinan yang aktif untuk ditampilkan di form edit
        $kadis = kadis::where('is_active', true)->first() ?? new kadis();
        return view('admin.kadis.index', compact('kadis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Gunakan logika update or create agar data Kadis hanya satu yang aktif
        $kadis = Kadis::where('is_active', true)->first() ?? new Kadis();

        $request->validate([
            'name'  => 'required',
            'rank'  => 'required',
            'nrp'   => 'required',
            'quote' => 'required',
            'image' => 'nullable|image|max:2048',
            'is_active' => 'required|boolean', // Tambahkan ini untuk validasi is_active
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($kadis->image) Storage::disk('public')->delete($kadis->image);
            $data['image'] = $request->file('image')->store('kadis', 'public');
        }

        if (!$kadis->exists) {
            Kadis::create($data);
        } else {
            $kadis->update($data);
        }

        return redirect()->back()->with('success', 'Data Pimpinan Berhasil Diperbarui');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
