<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::orderBy('order_index')->get();
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'media_file' => 'required|mimes:jpg,jpeg,png,mp4|max:20480', // Max 20MB
            'media_type' => 'required'
        ]);

        $data = $request->all();

        // Logika Upload File
        if ($request->hasFile('media_file')) {
            $file = $request->file('media_file');
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Simpan ke public/assets/img/banner atau video
            $subFolder = ($request->media_type == 'video') ? 'video' : 'img/banner';
            $file->move(public_path('assets/' . $subFolder), $filename);
            
            $data['media_file'] = $filename;
        }

        Banner::create($data);
        return redirect()->route('banners.index')->with('success', 'Banner berhasil ditambahkan');
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
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $data = $request->all();

        if ($request->hasFile('media_file')) {
            // Hapus file lama jika ada (opsional)
            $filename = time() . '_' . $request->file('media_file')->getClientOriginalName();
            $subFolder = ($request->media_type == 'video') ? 'video' : 'img/banner';
            $request->file('media_file')->move(public_path('assets/' . $subFolder), $filename);
            $data['media_file'] = $filename;
        }

        $banner->update($data);
        return redirect()->route('banners.index')->with('success', 'Banner diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index')->with('success', 'Banner dihapus');
    }
}
