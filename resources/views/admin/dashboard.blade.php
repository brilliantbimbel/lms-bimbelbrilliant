@extends('layouts.admin')

@section('content')
<div class="space-y-8">

    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">PORTAL ADMIN</h1>
            <p class="text-xs text-slate-500 mt-1 font-medium">Pantau seluruh performa akademik & aktivitas portal Bimbel Brilliant.</p>
        </div>
        <a href="#" class="px-5 py-2.5 bg-emerald-500 hover:bg-emerald-600 text-white font-bold rounded-xl text-xs tracking-wider uppercase shadow-lg shadow-emerald-500/20 transition">
            + Tambah Siswa / Tentor
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Total Siswa Aktif</p>
                    <h3 class="text-3xl font-black text-slate-800 mt-2">{{ $totalSiswa }}</h3>
                    <p class="text-xs text-emerald-600 mt-2 font-semibold">Data dari Database</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Pengajar / Tentor</p>
                    <h3 class="text-3xl font-black text-slate-800 mt-2">{{ $totalTentor }}</h3>
                    <p class="text-xs text-teal-600 mt-2 font-semibold">Data dari Database</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-teal-50 text-teal-600 flex items-center justify-center font-bold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Materi Ter-Upload</p>
                    <h3 class="text-3xl font-black text-slate-800 mt-2">0</h3>
                    <p class="text-xs text-cyan-600 mt-2 font-semibold">Modul, PDF & Video</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-cyan-50 text-cyan-600 flex items-center justify-center font-bold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Tryout & Kuis</p>
                    <h3 class="text-3xl font-black text-slate-800 mt-2">0</h3>
                    <p class="text-xs text-indigo-600 mt-2 font-semibold">Tryout Berlangsung</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <div class="lg:col-span-2 bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <h2 class="font-bold text-slate-800 text-base">Monitor Unggahan Tentor Terbaru</h2>
                <a href="#" class="text-xs font-bold text-emerald-600 hover:underline">Lihat Semua →</a>
            </div>

            <div class="p-6 text-center text-slate-400 text-xs">
                Belum ada aktivitas unggahan materi terbaru.
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm space-y-4">
            <h2 class="font-bold text-slate-800 text-base border-b border-slate-100 pb-4">Aktivitas Sistem</h2>
            <ul class="space-y-4 text-xs">
                <li class="flex items-start space-x-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 mt-1"></span>
                    <div>
                        <p class="text-slate-800 font-bold">Server Database Normal</p>
                        <p class="text-slate-500">Koneksi lancar tanpa gangguan</p>
                    </div>
                </li>
            </ul>
        </div>

    </div>

</div>
@endsection
