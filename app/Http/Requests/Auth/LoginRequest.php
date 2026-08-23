<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    public function authenticate(): void
{
    $this->ensureIsNotRateLimited();

    // Hapus spasi di awal/akhir input login
    $inputLogin = trim($this->input('username'));

    // 1. Cari User (Abaikan huruf besar/kecil)
    $user = User::whereRaw('LOWER(username) = ?', [strtolower($inputLogin)])
                ->orWhereRaw('LOWER(email) = ?', [strtolower($inputLogin)])
                ->first();

    if (! $user) {
        throw ValidationException::withMessages([
            'username' => 'Username tidak terdaftar dalam sistem.',
        ]);
    }

    // 2. Cek Password
    if (! Hash::check($this->password, $user->password)) {
        throw ValidationException::withMessages([
            'password' => 'Password yang Anda masukkan salah.',
        ]);
    }

    // 3. Cek Status Akun
    if (isset($user->status) && $user->status === 'nonaktif') {
        throw ValidationException::withMessages([
            'username' => 'Akun Anda telah dinonaktifkan oleh Admin. Silakan hubungi pengelola.',
        ]);
    }

    Auth::login($user, $this->boolean('remember'));

    RateLimiter::clear($this->throttleKey());
}

    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'username' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('username')).'|'.$this->ip());
    }
}
