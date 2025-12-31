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


        
        // Validasi reCAPTCHA
try {
    $secretKey = config('services.recaptcha.secret') ?? env('RECAPTCHA_SECRET_KEY');
    /** @var \Illuminate\Http\Client\Response $response */
    // Hapus withoutVerifying() agar lebih aman dan diterima Google
    $response = Http::asForm()->timeout(10)->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret'   => $secretKey,
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
    ]);

    $data = $response->json();

    if ($response->failed() || !($data['success'] ?? false)) {
        // Log detail kegagalan untuk debugging di storage/logs/laravel.log
        Log::error('reCAPTCHA Failed:', $data ?? ['no_data']);
        
        throw ValidationException::withMessages([
            'g-recaptcha-response' => 'Verifikasi reCAPTCHA gagal. Pastikan Anda mencentang box keamanan.',
        ]);
    }
} catch (\Exception $e) {
    Log::error('reCAPTCHA System Error: ' . $e->getMessage());
    throw ValidationException::withMessages([
        'g-recaptcha-response' => 'Server keamanan sedang sibuk, silakan coba beberapa saat lagi.',
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
