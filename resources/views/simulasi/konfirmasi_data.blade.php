@extends('layouts.simulasi_layout')

@section('content')
<div class="w-full max-w-5xl flex flex-col md:flex-row gap-6">
    <!-- Box Token Simulasi -->
    <div class="w-full md:w-1/3 bg-white p-6 rounded-xl shadow-md h-fit border border-gray-100">
        <div class="flex justify-between items-center">
            <span class="text-sm font-semibold text-gray-700">Token : <b class="text-lg text-blue-900 tracking-widest">{{ session('simulasi_token') }}</b></span>
            <a href="" class="bg-blue-500 hover:bg-blue-600 text-white text-xs px-3 py-1.5 rounded-md font-medium">Refresh</a>
        </div>
    </div>

    <!-- Form Data Peserta -->
    <div class="w-full md:w-2/3 bg-white p-8 rounded-xl shadow-md border border-gray-100">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Konfirmasi data Peserta</h2>

        <form action="{{ route('simulasi.konfirmasi_data.post') }}" method="POST" class="space-y-4 text-xs md:text-sm">
            @csrf
            <div>
                <label class="block text-gray-600 font-semibold mb-1">Kode NIK</label>
                <input type="text" value="{{ session('simulasi_user.username') }}" readonly class="w-full bg-gray-100 border-b p-2 outline-none">
            </div>

            <div>
                <label class="block text-gray-600 font-semibold mb-1">Nama Peserta</label>
                <input type="text" value="{{ session('simulasi_user.nama') }}" readonly class="w-full bg-gray-100 border-b p-2 outline-none">
            </div>

            <div>
                <label class="block text-gray-600 font-semibold mb-1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="w-full border-b p-2 outline-none bg-gray-50">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-600 font-semibold mb-1">Mata Ujian</label>
                <input type="text" value="{{ $paket->judul }}" readonly class="w-full bg-gray-100 border-b p-2 outline-none">
            </div>

            <div>
                <label class="block text-gray-600 font-semibold mb-1">Ketikkan Nama Peserta</label>
                <input type="text" name="nama_konfirmasi" required placeholder="Ketikkan Nama Peserta" class="w-full border-b p-2 outline-none focus:border-blue-500">
            </div>

            <div>
                <label class="block text-gray-600 font-semibold mb-1">Tanggal Lahir</label>
                <div class="grid grid-cols-3 gap-2">
                    <select name="tgl" class="border-b p-2 bg-gray-50"><option>15</option></select>
                    <select name="bln" class="border-b p-2 bg-gray-50"><option>Agustus</option></select>
                    <select name="thn" class="border-b p-2 bg-gray-50"><option>2008</option></select>
                </div>
            </div>

            <div>
                <label class="block font-bold text-blue-600 mb-1">Token</label>
                <input type="text" name="token" required placeholder="Ketikkan token di sini" class="w-full border-b p-2 outline-none uppercase font-mono tracking-widest focus:border-blue-500">
            </div>

            <button type="submit" class="w-full bg-[#007bff] hover:bg-blue-600 text-white font-semibold py-3 rounded-lg shadow mt-4">
                Submit
            </button>
        </form>
    </div>
</div>
@endsection
