<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Leader;
use App\Models\Activity;
use App\Models\Complaint;
use App\Models\Personnel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $about = About::first();
        // Ambil pimpinan yang is_current = true
        $current_leader = Leader::where('is_current', true)->first();
        // Ambil 3 kegiatan terbaru
        $activities = Activity::latest()->take(3)->get();
        // Ambil semua personel
        $personnels = Personnel::all();

        return view('welcome', compact('about', 'current_leader', 'activities', 'personnels'));
    }

    public function storeComplaint(Request $request)
    {
        $request->validate([
            'reporter_name' => 'required',
            'email_or_phone' => 'required',
            'message' => 'required',
            'attachment' => 'nullable|file|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('attachment')) {
            $data['attachment'] = $request->file('attachment')->store('complaints', 'public');
        }

        Complaint::create($data);

        return redirect()->back()->with('success_complaint', 'Laporan Anda telah kami terima. Terima kasih.');
    }
}
