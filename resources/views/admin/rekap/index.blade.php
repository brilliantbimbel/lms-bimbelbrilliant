@extends('layouts.admin')

@section('content')
<div class="space-y-6">

    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight uppercase">Rekap Nilai Siswa</h1>
            <p class="text-xs text-slate-500 mt-1 font-medium">Monitoring perolehan nilai kuis dan tryout seluruh siswa.</p>
        </div>
        <button onclick="window.print()" class="inline-flex items-center space-x-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-4 py-2.5 rounded-2xl text-xs transition shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
            <span>Cetak / Export Laporan</span>
        </button>
    </div>

    <div class="bg-white p-5 rounded-3xl border border-slate-200/80 shadow-sm">
        <form method="GET" action="{{ route('admin.rekap-nilai.index') }}" class="grid grid-cols-1 sm:grid-cols-3 gap-4 items-end">
            <div>
                <label class="block text-[10px] font-extrabold uppercase text-slate-400 mb-1">Filter Kelas</label>
                <select name="kelas_id" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-semibold text-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    <option value="">Semua Kelas</option>
                    @foreach($kelases as $kelas)
                        <option value="{{ $kelas->id }}" {{ request('kelas_id') == $kelas->id ? 'selected' : '' }}>
                            {{ $kelas->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-[10px] font-extrabold uppercase text-slate-400 mb-1">Filter Tryout</label>
                <select name="tryout_id" class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-semibold text-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    <option value="">Semua Tryout / Kuis</option>
                    @foreach($tryouts as $tryout)
                        <option value="{{ $tryout->id }}" {{ request('tryout_id') == $tryout->id ? 'selected' : '' }}>
                            {{ $tryout->judul }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="w-full bg-slate-800 hover:bg-slate-900 text-white font-bold py-2 px-4 rounded-xl text-xs transition">
                    Terapkan Filter
                </button>
                <a href="{{ route('admin.rekap-nilai.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold py-2 px-4 rounded-xl text-xs transition flex items-center justify-center">
                    Reset
                </a>
            </div>
        </form>
    </div>

    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
            <h2 class="font-bold text-slate-800 text-base">Hasil Pengerjaan Siswa</h2>
            <span class="text-xs font-bold text-slate-400">Total Entry: {{ $recaps->count() }}</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-600">
                <thead class="bg-slate-50 border-b border-slate-100 uppercase text-[10px] font-bold text-slate-400 tracking-wider">
                    <tr>
                        <th class="py-4 px-6">Nama Siswa</th>
                        <th class="py-4 px-6">Kuis / Tryout</th>
                        <th class="py-4 px-6 text-center">Benar / Salah</th>
                        <th class="py-4 px-6 text-center">Nilai Akhir</th>
                        <th class="py-4 px-6 text-center">Status</th>
                        <th class="py-4 px-6">Tanggal Selesai</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($recaps as $recap)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="py-4 px-6 font-bold text-slate-800">
                            {{ optional($recap->siswa)->name ?? 'Siswa' }}
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-semibold text-slate-700">{{ optional($recap->tryout)->judul }}</p>
                            <p class="text-[10px] text-slate-400">{{ optional($recap->tryout->kelas)->nama_kelas ?? 'Umum' }}</p>
                        </td>
                        <td class="py-4 px-6 text-center">
                            <span class="text-emerald-600 font-bold">✔ {{ $recap->jumlah_benar }}</span> /
                            <span class="text-rose-500 font-bold">✖ {{ $recap->jumlah_salah }}</span>
                        </td>
                        <td class="py-4 px-6 text-center">
                            <span class="text-sm font-black {{ $recap->nilai >= 75 ? 'text-emerald-600' : 'text-rose-600' }}">
                                {{ number_format($recap->nilai, 1) }}
                            </span>
                        </td>
                        <td class="py-4 px-6 text-center">
                            @if($recap->nilai >= 75)
                                <span class="bg-emerald-50 text-emerald-700 font-extrabold text-[10px] px-2.5 py-1 rounded-full border border-emerald-200">
                                    LULUS
                                </span>
                            @else
                                <span class="bg-rose-50 text-rose-700 font-extrabold text-[10px] px-2.5 py-1 rounded-full border border-rose-200">
                                    REMIDIAL
                                </span>
                            @endif
                        </td>
                        <td class="py-4 px-6 text-slate-400">
                            {{ $recap->created_at ? $recap->created_at->format('d M Y, H:i') : '-' }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-12 text-center text-slate-400 font-medium">
                            Belum ada rekap nilai pengerjaan kuis/tryout.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
