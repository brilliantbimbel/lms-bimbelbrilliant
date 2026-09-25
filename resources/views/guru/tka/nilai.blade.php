@extends('layouts.guru')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <a href="{{ route('guru.tka.index') }}" class="text-xs text-blue-600 hover:underline">&laquo; Kembali ke Paket</a>
            <h1 class="text-xl font-bold text-gray-800">Rekap Nilai: {{ $paket->judul }}</h1>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-50 border border-green-200 text-green-700 text-xs rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white border rounded-xl overflow-hidden shadow-sm">
        <table class="w-full text-left text-sm">
            <thead class="bg-gray-50 border-b text-xs text-gray-600 uppercase">
                <tr>
                    <th class="p-4">Nama Siswa</th>
                    <th class="p-4">Waktu Mulai</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Nilai Akhir</th>
                    <th class="p-4 text-center">Aksi / Koreksi</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @forelse($sesis as $sesi)
                    <tr>
                        <td class="p-4 font-semibold text-gray-800">{{ $sesi->user->name }}</td>
                        <td class="p-4 text-xs text-gray-500">{{ $sesi->waktu_mulai }}</td>
                        <td class="p-4">
                            @if($sesi->status === 'selesai')
                                <span class="bg-green-100 text-green-800 text-xs px-2.5 py-1 rounded-full font-semibold">Selesai</span>
                            @else
                                <span class="bg-yellow-100 text-yellow-800 text-xs px-2.5 py-1 rounded-full font-semibold">Menunggu Koreksi</span>
                            @endif
                        </td>
                        <td class="p-4 font-bold text-base text-blue-900">{{ $sesi->nilai_akhir ?? '-' }}</td>
                        <td class="p-4 text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <!-- Tombol Periksa Jawaban -->
                                <button onclick="document.getElementById('modalKoreksi-{{ $sesi->id }}').classList.remove('hidden')" class="bg-blue-600 text-white text-xs px-3 py-1.5 rounded hover:bg-blue-700">
                                    Periksa Jawaban
                                </button>

                                <!-- Tombol Reset Pengerjaan -->
                                <form action="{{ route('guru.tka.sesi.reset', $sesi->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin mereset pengerjaan {{ $sesi->user->name }}? Semua jawaban dan nilai akan dihapus.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-50 text-red-600 border border-red-200 text-xs px-3 py-1.5 rounded hover:bg-red-100 font-semibold transition">
                                        🗑️ Reset
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Koreksi Per Sesi -->
                    <div id="modalKoreksi-{{ $sesi->id }}" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center z-50">
                        <div class="bg-white rounded-xl p-6 w-full max-w-2xl max-h-[80vh] overflow-y-auto">
                            <h3 class="font-bold text-lg mb-4">Koreksi Jawaban - {{ $sesi->user->name }}</h3>

                            <form action="{{ route('guru.tka.koreksi', $sesi->id) }}" method="POST" class="space-y-4">
                                @csrf
                                @foreach($sesi->jawabans as $j)
                                    <div class="border p-3 rounded-lg text-left text-xs space-y-2 bg-gray-50">
                                        <p class="font-bold text-gray-800">{{ $j->soal->pertanyaan }}</p>
                                        <p class="text-blue-900">Jawaban Siswa: <span class="font-semibold">{{ is_array($j->jawaban_siswa) ? json_encode($j->jawaban_siswa) : $j->jawaban_siswa }}</span></p>

                                        @if($j->soal->tipe_soal === 'isian')
                                            <div class="pt-2 border-t">
                                                <label class="block font-semibold text-gray-600 mb-1">Input Skor Manual (Max: {{ $j->soal->bobot_nilai }})</label>
                                                <input type="number" name="skor_manual[{{ $j->id }}]" value="{{ $j->skor_manual ?? 0 }}" max="{{ $j->soal->bobot_nilai }}" class="w-full border rounded p-1.5 text-xs bg-white">
                                            </div>
                                        @else
                                            <p class="text-gray-500">Skor Otomatis: {{ $j->skor_otomatis }}</p>
                                        @endif
                                    </div>
                                @endforeach

                                <div class="flex justify-end space-x-2 pt-2">
                                    <button type="button" onclick="document.getElementById('modalKoreksi-{{ $sesi->id }}').classList.add('hidden')" class="px-4 py-2 text-xs border rounded-lg">Tutup</button>
                                    <button type="submit" class="px-4 py-2 text-xs bg-blue-600 text-white rounded-lg">Simpan Nilai</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="5" class="p-4 text-center text-xs text-gray-400">Belum ada siswa yang mengerjakan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
