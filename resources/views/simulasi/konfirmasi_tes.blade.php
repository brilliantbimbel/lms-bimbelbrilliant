@extends('layouts.simulasi_layout')

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-lg border border-gray-100">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Konfirmasi Tes</h2>

    <div class="space-y-4 text-xs md:text-sm">
        <div>
            <p class="text-gray-500 font-semibold">Nama Tes</p>
            <p class="font-bold text-gray-800 border-b pb-1">{{ $paket->judul }}</p>
        </div>
        <div>
            <p class="text-gray-500 font-semibold">Status Tes</p>
            <p class="font-bold text-gray-800 border-b pb-1">Tes Baru</p>
        </div>
        <div>
            <p class="text-gray-500 font-semibold">Waktu Tes</p>
            <p class="font-bold text-gray-800 border-b pb-1">{{ now()->format('m/d/Y H:i') }}</p>
        </div>
        <div>
            <p class="text-gray-500 font-semibold">Alokasi Waktu Tes</p>
            <p class="font-bold text-gray-800 border-b pb-1">{{ $paket->durasi_menit ?? 75 }} Menit</p>
        </div>
    </div>

    <form action="{{ route('simulasi.start_tes') }}" method="POST" class="mt-8">
        @csrf
        <button type="submit" class="w-full bg-[#007bff] hover:bg-blue-600 text-white font-semibold py-3 rounded-full shadow-lg transition">
            Mulai
        </button>
    </form>
</div>
@endsection
