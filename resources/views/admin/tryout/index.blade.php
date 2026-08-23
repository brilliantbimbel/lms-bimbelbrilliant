@extends('layouts.admin')

@section('content')
<div class="space-y-6">

    @if(session('success'))
    <div class="p-4 bg-emerald-100 border border-emerald-200 text-emerald-800 text-xs font-bold rounded-2xl flex justify-between items-center shadow-sm">
        <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            <span>{{ session('success') }}</span>
        </div>
        <button onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 font-black">✕</button>
    </div>
    @endif

    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight uppercase">Monitoring Kuis & Tryout</h1>
            <p class="text-xs text-slate-500 mt-1 font-medium">Pantau kuis/tryout interaktif buatan tentor dan cetak versi PDF soal secara otomatis.</p>
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
            <h2 class="font-bold text-slate-800 text-base">Daftar Kuis & Tryout</h2>
            <span class="text-xs font-bold text-slate-400">Total: {{ $tryouts->count() }} Paket</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-600">
                <thead class="bg-slate-50 border-b border-slate-100 uppercase text-[10px] font-bold text-slate-400 tracking-wider">
                    <tr>
                        <th class="py-4 px-6">Judul Kuis / Tryout</th>
                        <th class="py-4 px-6">Kelas</th>
                        <th class="py-4 px-6">Pembuat (Tentor)</th>
                        <th class="py-4 px-6 text-center">Jumlah Soal</th>
                        <th class="py-4 px-6 text-center">Durasi</th>
                        <th class="py-4 px-6 text-center">Export / Cetak</th>
                        <th class="py-4 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($tryouts as $tryout)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="py-4 px-6">
                            <p class="font-bold text-slate-800 text-sm">{{ $tryout->judul }}</p>
                            <p class="text-[11px] text-slate-400 line-clamp-1">{{ $tryout->deskripsi ?? 'Tidak ada deskripsi' }}</p>
                        </td>
                        <td class="py-4 px-6 font-semibold text-slate-700">
                            {{ $tryout->kelas->nama_kelas ?? 'Semua Kelas' }}
                        </td>
                        <td class="py-4 px-6 font-semibold text-slate-700">
                            {{ optional($tryout->pembuat)->name ?? 'Tentor' }}
                        </td>
                        <td class="py-4 px-6 text-center">
                            <span class="bg-indigo-50 text-indigo-700 font-extrabold px-3 py-1 rounded-full text-[11px]">
                                {{ $tryout->soals->count() }} Soal
                            </span>
                        </td>
                        <td class="py-4 px-6 text-center font-bold text-slate-700">
                            {{ $tryout->durasi_menit }} Menit
                        </td>
                        <td class="py-4 px-6 text-center">
                            <a href="{{ route('admin.tryout.pdf', $tryout->id) }}" target="_blank" class="inline-flex items-center space-x-1 text-rose-600 bg-rose-50 hover:bg-rose-100 font-bold px-3 py-1.5 rounded-xl text-xs transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                <span>Cetak / PDF Soal</span>
                            </a>
                        </td>
                        <td class="py-4 px-6 text-center">
                            <form action="{{ route('admin.tryout.destroy', $tryout->id) }}" method="POST" onsubmit="return confirm('Hapus tryout ini beserta seluruh soalnya?')" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-slate-400 hover:text-rose-600 rounded-lg transition" title="Hapus Tryout">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="py-12 text-center text-slate-400 font-medium">
                            Belum ada Kuis/Tryout yang dibuat oleh Tentor.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
