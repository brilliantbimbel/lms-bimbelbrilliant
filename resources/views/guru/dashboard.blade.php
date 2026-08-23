@extends('layouts.guru')

@section('content')
<div class="space-y-8 max-w-7xl">

    <div class="bg-gradient-to-r from-sky-600 to-indigo-600 rounded-3xl p-8 text-white shadow-lg relative overflow-hidden">
        <div class="relative z-10">
            <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-extrabold uppercase tracking-widest text-sky-100">Portal Pengajar</span>
            <h1 class="text-3xl font-extrabold mt-3 tracking-tight">Selamat Datang, {{ Auth::user()->name }}! 👋</h1>
            <p class="text-sky-100 text-xs sm:text-sm mt-2 max-w-xl font-medium">Kelola modul pembelajaran, kuis harian, hingga pelaksanaan Simulasi TKA untuk para siswa Bimbel Brilliant.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm flex items-center justify-between">
            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Modul Diunggah</p>
                <h3 class="text-3xl font-black text-slate-800 mt-1">{{ $totalModul }}</h3>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-sky-100 text-sky-600 flex items-center justify-center font-bold">
                📖
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm flex items-center justify-between">
            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Kuis / Tryout</p>
                <h3 class="text-3xl font-black text-slate-800 mt-1">{{ $totalTryout }}</h3>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center font-bold">
                ✏️
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm flex items-center justify-between">
            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Simulasi TKA</p>
                <h3 class="text-3xl font-black text-indigo-600 mt-1">{{ $totalSimulasiTka }}</h3>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold">
                ⚡
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm flex items-center justify-between">
            <div>
                <p class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Siswa Diajar</p>
                <h3 class="text-3xl font-black text-emerald-600 mt-1">{{ $totalSiswa }}</h3>
            </div>
            <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold">
                👥
            </div>
        </div>
    </div>

</div>
@endsection
