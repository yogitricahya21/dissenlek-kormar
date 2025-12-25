<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
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
        // Khusus pimpinan saat ini
        $current_leader = Leader::where('is_current', true)->first();
        // Khusus mantan pimpinan
        $old_leaders = Leader::where('is_current', false)->get();
        // Ambil 4 kegiatan terbaru
        $activities = Activity::latest()->take(4)->get();
        // Ambil semua personel
        $personnels = Personnel::all();
        // Ambil semua banner urut berdasarkan order_index
        $banners = Banner::orderBy('order_index', 'asc')->get();
        // Mengambil satu data Kadis yang sedang aktif
        $kadis = \App\Models\Kadis::where('is_active', true)->first();

        return view('welcome', compact('about', 'current_leader', 'old_leaders', 'activities', 'personnels', 'banners', 'kadis'));
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
