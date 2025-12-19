<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_leaders = Leader::orderBy('is_current', 'desc')->get();
        return view('admin.leaders.index', compact('all_leaders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.leaders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rank' => 'required',
            'period' => 'required',
            'message', 'nullable|string',
            'image' => 'required|image|max:2048',
        ]);

        // Jika yang diinput adalah pimpinan saat ini (is_current = true), 
        // maka kita reset pimpinan lain menjadi false dulu
        if ($request->has('is_current')) {
            Leader::where('is_current', true)->update(['is_current' => false]);
        }

        $imagePath = $request->file('image')->store('leaders', 'public');

        Leader::create([
            'name' => $request->name,
            'rank' => $request->rank,
            'period' => $request->period,
            'message' => $request->message,
            'image' => $imagePath,
            'is_current' => $request->has('is_current') ? true : false,
        ]);

        return redirect()->route('leaders.index')->with('success', 'Data Pimpinan berhasil disimpan!');
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
    public function update(Request $request, Leader $leader)
    {
        $request->validate([
            'name' => 'required',
            'rank' => 'required',
            'period' => 'required',
            'message' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        // Logika is_current: Jika di-centang, yang lain di-set false
        if ($request->has('is_current')) {
            Leader::where('id', '!=', $leader->id)->update(['is_current' => false]);
            $data['is_current'] = true;
        } else {
            $data['is_current'] = false;
        }

        if ($request->hasFile('image')) {
            if ($leader->image) Storage::disk('public')->delete($leader->image);
            $data['image'] = $request->file('image')->store('leaders', 'public');
        }

        $leader->update($data);

        return redirect()->route('leaders.index')->with('success', 'Data pimpinan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leader $leader)
    {
        if ($leader->image) {
            Storage::disk('public')->delete($leader->image);
        }
        $leader->delete();
        return redirect()->route('leaders.index')->with('success', 'Data pimpinan berhasil dihapus!');
    }
}
