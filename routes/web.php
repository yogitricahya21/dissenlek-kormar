<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\Admin\BannerController;

// Ubah route '/' agar melewati MainController
Route::get('/', [MainController::class, 'index'])->name('home');
// Route untuk publik kirim aduan
Route::post('/kirim-pengaduan', [App\Http\Controllers\MainController::class, 'storeComplaint'])->name('public.complaint.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Rute Profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rute Admin
    Route::middleware(['role:admin'])->prefix('admin')->as('admin.')->group(function () {
        Route::resource('personnels', PersonnelController::class);
        Route::resource('activities', ActivityController::class);
        Route::resource('leaders', LeaderController::class);
        Route::resource('complaints', ComplaintController::class);
        Route::resource('banners', BannerController::class);
        Route::get('/about', [AboutController::class, 'index'])->name('about.index');
        Route::post('/about', [AboutController::class, 'update'])->name('about.update');
    });
});

require __DIR__ . '/auth.php';
