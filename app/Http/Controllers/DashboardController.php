<?php

namespace App\Http\Controllers;

use App\Models\LoginLog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil 10 data log terbaru
        $logs = LoginLog::latest()->take(10)->get();
        // Mengambil data dengan pagination (5 data per halaman)
        $logs = \App\Models\LoginLog::latest()->paginate(5);

        // Mengirim data $logs ke view dashboard
        return view('dashboard', compact('logs'));
    }

    public function destroyAll()
    {
        // Menghapus semua data di tabel login_logs
        \App\Models\LoginLog::truncate();

        return redirect()->back()->with('success', 'Semua riwayat login telah dibersihkan.');
    }
}
