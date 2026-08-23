@extends('layouts.guru')

@section('content')
<div class="p-6">
    <div class="mb-6 flex justify-between items-center">
        <div>
            <a href="{{ route('guru.nilai.index') }}" class="text-sm font-bold text-sky-600 hover:text-sky-700 flex items-center gap-1 mb-2">
                ← Kembali ke Rekap Nilai
            </a>
            <h1 class="text-2xl font-bold text-gray-900">{{ $tryout->judul }}</h1>
            <p class="text-gray-600 text-sm">
                Kelas: {{ $tryout->kelas->nama_kelas ?? 'Kelas ' . $tryout->kelas_id }} | Durasi: {{ $tryout->durasi }} Menit
            </p>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl text-sm font-semibold">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h3 class="font-bold text-gray-800">Daftar Hasil Siswa</h3>
            <span class="text-xs font-bold px-3 py-1 bg-sky-50 text-sky-600 rounded-full">
                {{ $ujians->count() }} Siswa Mengerjakan
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-gray-50 text-gray-500 font-semibold border-b border-gray-100">
                        <th class="p-4 pl-6">No</th>
                        <th class="p-4">Nama Siswa</th>
                        <th class="p-4">Waktu Selesai</th>
                        <th class="p-4 text-center">Status</th>
                        <th class="p-4 text-center">Nilai Akhir</th>
                        <th class="p-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-gray-700">
                    @forelse($ujians as $index => $ujian)
                        <tr class="hover:bg-gray-50/50 transition">
                            <td class="p-4 pl-6 font-bold text-gray-400">{{ $index + 1 }}</td>
                            <td class="p-4 font-semibold text-gray-900">
                                {{ $ujian->siswa->name ?? 'Siswa Tanpa Nama' }}
                            </td>
                            <td class="p-4 text-gray-500">
                                {{ $ujian->updated_at ? \Carbon\Carbon::parse($ujian->updated_at)->format('d M Y, H:i') : '-' }}
                            </td>
                            <td class="p-4 text-center">
                                @if($ujian->status === 'selesai')
                                    <span class="px-2.5 py-1 bg-emerald-50 text-emerald-600 font-bold text-xs rounded-lg">✓ Selesai</span>
                                @elseif(in_array($ujian->status, ['menunggu_koreksi', 'perlu_pemeriksaan']))
                                    <span class="px-2.5 py-1 bg-amber-50 text-amber-600 font-bold text-xs rounded-lg">⏳ Menunggu Koreksi</span>
                                @else
                                    <span class="px-2.5 py-1 bg-blue-50 text-blue-600 font-bold text-xs rounded-lg">Sedang Mengerjakan</span>
                                @endif
                            </td>
                            <td class="p-4 text-center">
    @if($ujian->status === 'selesai' || !is_null($ujian->nilai))
        <span class="font-extrabold text-base text-sky-600">
            {{ number_format($ujian->nilai ?? 0, 1) }}
        </span>
    @else
        <span class="text-xs font-semibold text-gray-400 italic">Belum Keluar</span>
    @endif
</td>
                            <td class="p-4 text-center">
                                <div class="flex justify-center items-center gap-2">
                                    {{-- Tombol Edit / Koreksi Nilai --}}
                                    @if(in_array($ujian->status, ['menunggu_koreksi', 'perlu_pemeriksaan', 'selesai']))
                                        <a href="{{ route('guru.nilai.koreksi', $ujian->id) }}"
                                           class="inline-flex items-center gap-1 px-3 py-1.5 {{ $ujian->status === 'selesai' ? 'bg-gray-100 text-gray-700 hover:bg-gray-200' : 'bg-amber-500 text-white hover:bg-amber-600' }} font-bold text-xs rounded-lg transition shadow-sm">
                                            ✏️ {{ $ujian->status === 'selesai' ? 'Edit Nilai' : 'Koreksi' }}
                                        </a>
                                    @endif

                                    {{-- Tombol Reset Pengerjaan Siswa --}}
                                    <form action="{{ route('guru.nilai.reset', $ujian->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin mereset pengerjaan siswa ini? Semua jawaban dan nilainya akan dihapus agar siswa bisa ujian ulang.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center gap-1 px-3 py-1.5 bg-rose-50 text-rose-600 font-bold text-xs rounded-lg hover:bg-rose-100 transition shadow-sm">
                                            🔄 Reset
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-gray-400">
                                Belum ada siswa yang mengerjakan kuis/tryout ini.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
