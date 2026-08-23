<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $totalSiswa = User::where('role', 'siswa')->count();
        $totalTentor = User::where('role', 'tentor')->count();

        return view('admin.dashboard', compact('totalSiswa', 'totalTentor'));
    }

    // Menampilkan Halaman Kelola Siswa
    public function siswa()
    {
        $totalSiswa = User::where('role', 'siswa')->count();
        $totalTentor = User::where('role', 'tentor')->count();

        // Ambil semua data siswa
        $siswas = User::where('role', 'siswa')->latest()->get();

        return view('admin.siswa.index', compact('siswas', 'totalSiswa', 'totalTentor'));
    }

    public function storeSiswa(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users,username',
        'email' => 'required|email|max:255|unique:users,email',
        'password' => 'required|string|min:6',
    ], [
        // Kustomisasi pesan error bahasa Indonesia
        'username.unique' => 'Username tersebut sudah digunakan oleh siswa/user lain.',
        'email.unique' => 'Email tersebut sudah terdaftar di sistem.',
        'password.min' => 'Password minimal harus 6 karakter.',
    ]);

    User::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'siswa',
        'status' => 'aktif',
    ]);

    return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
}

   public function destroySiswa($id)
{
    $siswa = User::findOrFail($id);

    // Lepaskan relasi ke tabel pivot kelas_siswa jika ada
    if (method_exists($siswa, 'kelas')) {
        $siswa->kelas()->detach();
    } elseif (method_exists($siswa, 'kelases')) {
        $siswa->kelases()->detach();
    }

    // Lepaskan relasi kelas_id langsung jika berupa kolom
    if (isset($siswa->kelas_id)) {
        $siswa->kelas_id = null;
        $siswa->save();
    }

    // Hapus user
    $siswa->delete();

    return redirect()->back()->with('success', 'Data siswa berhasil dihapus.');
}

// Toggle Status (Aktif / Nonaktif)
public function toggleStatusSiswa($id)
{
    $siswa = User::findOrFail($id);
    $siswa->status = ($siswa->status === 'nonaktif') ? 'aktif' : 'nonaktif';
    $siswa->save();

    return redirect()->back()->with('success', 'Status siswa berhasil diperbarui!');
}

// Reset / Ganti Password Siswa
public function resetPasswordSiswa(Request $request, $id)
{
    $request->validate([
        'password' => 'required|string|min:6',
    ]);

    $siswa = User::findOrFail($id);
    $siswa->password = Hash::make($request->password);
    $siswa->save();

    return redirect()->back()->with('success', 'Password siswa berhasil diubah!');
}

// Edit Data Siswa (Nama & Email)
public function updateSiswa(Request $request, $id)
{
    $siswa = User::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,'.$siswa->id,
        'username' => 'required|string|unique:users,username,'.$siswa->id,
    ]);

    $siswa->update([
        'name' => $request->name,
        'email' => $request->email,
        'username' => $request->username,
    ]);

    return redirect()->back()->with('success', 'Data siswa berhasil diperbarui!');
}
// Menampilkan Halaman Kelola Tentor
public function tentor()
{
    $totalSiswa = User::where('role', 'siswa')->count();
    $totalTentor = User::where('role', 'tentor')->count();

    // Ambil data user dengan role tentor
    $tentors = User::where('role', 'tentor')->latest()->get();

    return view('admin.tentor.index', compact('tentors', 'totalSiswa', 'totalTentor'));
}

// Menyimpan Tentor Baru
public function storeTentor(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'username' => 'required|string|max:255|unique:users',
        'password' => 'required|string|min:6',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'role' => 'tentor',
        'status' => 'aktif',
    ]);

    return redirect()->back()->with('success', 'Data tentor berhasil ditambahkan!');
}

// Edit Data Tentor
public function updateTentor(Request $request, $id)
{
    $tentor = User::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,'.$tentor->id,
        'username' => 'required|string|unique:users,username,'.$tentor->id,
    ]);

    $tentor->update([
        'name' => $request->name,
        'email' => $request->email,
        'username' => $request->username,
    ]);

    return redirect()->back()->with('success', 'Data tentor berhasil diperbarui!');
}

// Toggle Status Tentor
public function toggleStatusTentor($id)
{
    $tentor = User::findOrFail($id);
    $tentor->status = ($tentor->status === 'nonaktif') ? 'aktif' : 'nonaktif';
    $tentor->save();

    return redirect()->back()->with('success', 'Status tentor berhasil diperbarui!');
}

// Reset Password Tentor
public function resetPasswordTentor(Request $request, $id)
{
    $request->validate([
        'password' => 'required|string|min:6',
    ]);

    $tentor = User::findOrFail($id);
    $tentor->password = Hash::make($request->password);
    $tentor->save();

    return redirect()->back()->with('success', 'Password tentor berhasil diubah!');
}

// Hapus Tentor
public function destroyTentor($id)
{
    $tentor = User::findOrFail($id);
    $tentor->delete();

    return redirect()->back()->with('success', 'Data tentor berhasil dihapus!');
}
    }
