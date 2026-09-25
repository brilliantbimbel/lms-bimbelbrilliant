<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Guru - Bimbel Brilliant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="h-full text-slate-800 antialiased">

    <div class="min-h-screen flex bg-slate-100">

        <aside class="w-72 bg-white border-r border-slate-200 flex flex-col fixed inset-y-0 z-50 shadow-sm">
            <div class="h-20 flex items-center px-6 border-b border-slate-100 justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-2xl bg-sky-600 text-white flex items-center justify-center font-black text-xl shadow-lg shadow-sky-600/30">
                        B
                    </div>
                    <div>
                        <h1 class="font-extrabold text-base tracking-wider text-slate-800">BRILLIANT</h1>
                        <p class="text-[10px] font-bold text-sky-600 tracking-widest uppercase">Portal Guru</p>
                    </div>
                </div>
            </div>

            <div class="flex-1 overflow-y-auto px-4 py-6 space-y-6">
                <div>
                    <p class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-3">Utama</p>
                    <nav class="space-y-1">
                        <a href="{{ route('guru.dashboard') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl bg-sky-50 text-sky-600 font-bold border border-sky-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                            <span class="text-sm">Dashboard Guru</span>
                        </a>
                    </nav>
                </div>

                <div>
                    <p class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-3">Materi & Soal</p>
                    <nav class="space-y-1">
                        <a href="{{ route('guru.materi.index') }}"\ class="flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 hover:text-sky-600 hover:bg-slate-50 transition group font-medium">
                            <svg class="w-5 h-5 group-hover:text-sky-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            <span class="text-sm">Modul & Materi</span>
                        </a>
                        <a href="{{ route('guru.tryout.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 hover:text-sky-600 hover:bg-slate-50 transition group font-medium">
                            <svg class="w-5 h-5 group-hover:text-sky-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                            <span class="text-sm">Kuis & Tryout</span>
                        </a>
                        <a href="{{ route('guru.tka.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 hover:text-indigo-600 hover:bg-indigo-50 transition group font-medium">
                            <svg class="w-5 h-5 group-hover:text-indigo-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            <span class="text-sm font-bold text-slate-700 group-hover:text-indigo-600">Simulasi TKA</span>
                        </a>
                    </nav>
                </div>

                <div>
                    <p class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-3">Evaluasi</p>
                    <nav class="space-y-1">
                        <a href="{{ route('guru.nilai.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 hover:text-sky-600 hover:bg-slate-50 transition group font-medium">
                            <svg class="w-5 h-5 group-hover:text-sky-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                            <span class="text-sm">Nilai Siswa</span>
                        </a>
                    </nav>
                </div>
            </div>

            <div class="p-4 border-t border-slate-100 bg-slate-50/50">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3 overflow-hidden">
                        <div class="w-9 h-9 rounded-full bg-sky-600 text-white flex items-center justify-center font-bold flex-shrink-0">
                            {{ strtoupper(substr(Auth::user()->name ?? 'G', 0, 1)) }}
                        </div>
                        <div class="overflow-hidden">
                            <p class="text-xs font-bold text-slate-800 truncate">{{ Auth::user()->name ?? 'Pengajar' }}</p>
                            <p class="text-[10px] font-bold text-sky-600 truncate">Guru / Pengajar</p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" title="Keluar" class="p-2 text-rose-500 hover:text-rose-700 hover:bg-rose-50 rounded-xl transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <div class="pl-72 flex-1 flex flex-col min-w-0">
            <header class="h-20 border-b border-slate-200 bg-white/80 backdrop-blur-md sticky top-0 z-40 flex items-center justify-between px-8">
                <div>
                    <h2 class="text-sm font-bold text-slate-700 uppercase tracking-wider">Ruang Kerja Guru</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-xs font-bold px-3 py-1.5 rounded-full bg-sky-50 text-sky-700 border border-sky-200">
                        Semester Ganjil 2026/2027
                    </span>
                </div>
            </header>

            <main class="flex-1 p-8">
                @yield('content')
            </main>
        </div>

    </div>

</body>
</html>
