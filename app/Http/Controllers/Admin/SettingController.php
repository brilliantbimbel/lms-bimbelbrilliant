<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::firstOrCreate([], [
            'nama_bimbel' => 'Bimbel Brilliant',
            'slogan' => 'Portal Pembelajaran & Tryout Interaktif',
            'tahun_ajaran' => '2026/2027',
            'semester' => 'Ganjil',
            'no_wa_admin' => '081234567890',
            'email_admin' => 'admin@brilliant.com',
        ]);

        return view('admin.setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::first();

        $request->validate([
            'nama_bimbel' => 'required|string|max:255',
            'slogan' => 'nullable|string|max:255',
            'no_wa_admin' => 'nullable|string|max:20',
            'email_admin' => 'nullable|email|max:255',
            'tahun_ajaran' => 'required|string|max:20',
            'semester' => 'required|in:Ganjil,Genap',
        ]);

        $setting->update($request->only([
            'nama_bimbel',
            'slogan',
            'no_wa_admin',
            'email_admin',
            'tahun_ajaran',
            'semester'
        ]));

        return redirect()->back()->with('success', 'Pengaturan aplikasi berhasil diperbarui!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ], [
            'current_password.required' => 'Password saat ini wajib diisi.',
            'new_password.required' => 'Password baru wajib diisi.',
            'new_password.min' => 'Password baru minimal 8 karakter.',
            'new_password.confirmed' => 'Konfirmasi password baru tidak cocok.',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Password saat ini salah!']);
        }

        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->back()->with('success_password', 'Password berhasil diperbarui!');
    }
}
