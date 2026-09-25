@extends('layouts.guru')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Simulasi TKA (ANBK)</h1>
            <p class="text-sm text-gray-500">Kelola paket simulasi, tipe soal kompleks, dan evaluasi nilai.</p>
        </div>
        <button onclick="document.getElementById('modalPaket').classList.remove('hidden')" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg text-sm transition">
            + Buat Paket Baru
        </button>
    </div>

    <!-- Alert Success -->
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 text-sm">
            {{ session('success') }}
        </div>
    @endif

    <!-- Grid List Paket -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($pakets as $paket)
            <div class="bg-white border rounded-xl p-5 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xs font-semibold bg-blue-100 text-blue-800 px-2.5 py-1 rounded-full">Kelas {{ $paket->kelas }}</span>
                        <span class="text-xs text-gray-400">{{ $paket->soals_count }} Soal</span>
                    </div>
                    <h2 class="font-bold text-lg text-gray-800 mb-1">{{ $paket->judul }}</h2>
                    <p class="text-xs text-gray-500 mb-4">Mapel: {{ $paket->mapel }} | Durasi: {{ $paket->durasi_menit }} Menit</p>
                </div>
                <div class="flex space-x-2 border-t pt-4">
                    <a href="{{ route('guru.tka.soal', $paket->id) }}" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-semibold py-2 rounded-lg">
                        Kelola Soal
                    </a>
                    <a href="{{ route('guru.tka.nilai', $paket->id) }}" class="flex-1 text-center bg-blue-50 hover:bg-blue-100 text-blue-700 text-xs font-semibold py-2 rounded-lg">
                        Lihat Nilai
                    </a>
                    <!-- Tombol Hapus Paket -->
    <form action="{{ route('guru.tka.destroy', $paket->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus paket ini beserta seluruh soal dan data nilainya?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="p-2 bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 rounded-lg text-xs font-bold transition" title="Hapus Paket">
            🗑️
        </button>
    </form>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-12 bg-white rounded-xl border border-dashed">
                <p class="text-gray-400 text-sm">Belum ada paket TKA yang dibuat.</p>
            </div>
        @endforelse
    </div>
</div>

<!-- Modal Tambah Paket -->
<div id="modalPaket" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-full max-w-md">
        <h3 class="font-bold text-lg mb-4">Tambah Paket Simulasi TKA</h3>
        <form action="{{ route('guru.tka.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1">Judul Ujian</label>
                <input type="text" name="judul" required class="w-full border rounded-lg p-2 text-sm focus:ring-blue-500">
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Mata Pelajaran</label>
                    <input type="text" name="mapel" required class="w-full border rounded-lg p-2 text-sm">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Kelas</label>
                    <input type="text" name="kelas" placeholder="misal: VIII" required class="w-full border rounded-lg p-2 text-sm">
                </div>
            </div>
            <div>
                <label class="block text-xs font-semibold text-gray-600 mb-1">Durasi (Menit)</label>
                <input type="number" name="durasi_menit" value="60" required class="w-full border rounded-lg p-2 text-sm">
            </div>
            <div class="flex justify-end space-x-2 pt-2">
                <button type="button" onclick="document.getElementById('modalPaket').classList.add('hidden')" class="px-4 py-2 text-xs border rounded-lg">Batal</button>
                <button type="submit" class="px-4 py-2 text-xs bg-blue-600 text-white rounded-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
