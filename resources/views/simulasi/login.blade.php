@extends('layouts.simulasi_layout')

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
    <h2 class="text-xl font-bold text-gray-800 mb-1">Selamat Datang</h2>
    <p class="text-sm text-gray-500 mb-6">Silakan login dengan menggunakan username dan password yang anda miliki</p>

    <form action="{{ route('simulasi.login.post') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <div class="flex items-center border-b-2 border-gray-200 py-2 focus-within:border-blue-500">
                <span class="text-gray-500 mr-3">👤</span>
                <input type="text" name="username" value="P130100230" required class="w-full text-sm outline-none bg-transparent" placeholder="Username">
            </div>
        </div>
        <div>
            <div class="flex items-center border-b-2 border-gray-200 py-2 focus-within:border-blue-500">
                <span class="text-gray-500 mr-3">🔒</span>
                <input type="password" name="password" value="12345" required class="w-full text-sm outline-none bg-transparent" placeholder="Password">
            </div>
        </div>
        <button type="submit" class="w-full bg-[#007bff] hover:bg-blue-600 text-white font-semibold py-2.5 rounded-full shadow-md transition">
            Login
        </button>
    </form>
</div>
@endsection
