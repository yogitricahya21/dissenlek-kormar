<?php

namespace App\Http\Controllers\Auth;

use App\Models\LoginLog;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Cek apakah IP ini sudah gagal lebih dari 5 kali dalam 15 menit terakhir
        $failCount = \App\Models\LoginLog::where('ip_address', $request->ip())
            ->where('status', 'failed')
            ->where('created_at', '>=', now()->subMinutes(15))
            ->count();

        if ($failCount >= 5) {
            // Simpan log bahwa akses diblokir sementara
            \Log::warning("Blokir Akses: IP {$request->ip()} mencoba login berkali-kali.");

            throw ValidationException::withMessages([
                'email' => 'Terlalu banyak percobaan login. IP Anda diblokir sementara (15 menit).',
            ]);
        }

        // Validasi reCAPTCHA ke Google dengan proteksi kegagalan API
        try {
            /** @var \Illuminate\Http\Client\Response $response */
            $response = Http::withoutVerifying()->asForm()->timeout(5)->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('services.recaptcha.secret') ?: env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

            // Tambahkan log untuk melihat respon asli Google di storage/logs/laravel.log
            \Log::info('Google reCAPTCHA Response:', $response->json() ?? ['error' => 'No Response']);

            if ($response->failed() || !$response['success']) {
                throw ValidationException::withMessages([
                    'g-recaptcha-response' => 'Verifikasi bot gagal atau server Google tidak merespons.',
                ]);
            }
        } catch (\Exception $e) {
            // Jika API Google Down, log error-nya tapi beri tahu user dengan sopan
            Log::error('reCAPTCHA Error: ' . $e->getMessage());
            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Terjadi kesalahan sistem pada verifikasi keamanan.',
            ]);
        }

        
        // Proses Login
        try {
            $request->authenticate();
            $request->session()->regenerate();

            Log::info('User Login Berhasil', [
                'email' => $request->email,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent() // Tambahan info browser
            ]);

            // Simpan Log Berhasil
            LoginLog::create([
                'email' => $request->email,
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'status' => 'success'
            ]);

            return redirect()->intended(route('admin.dashboard'));
        } catch (ValidationException $e) {
            Log::warning('Login Gagal (Password Salah)', [
                'email' => $request->email,
                'ip' => $request->ip()
            ]);
            // Simpan Log Gagal
            LoginLog::create([
                'email' => $request->email,
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'status' => 'failed'
            ]);
            throw $e;
        };
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
