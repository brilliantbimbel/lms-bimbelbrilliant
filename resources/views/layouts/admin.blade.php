<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal - Bimbel Brilliant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="h-full text-slate-800 antialiased">

    <div class="min-h-screen flex bg-slate-100">

        <aside class="w-72 bg-white border-r border-slate-200 flex flex-col fixed inset-y-0 z-50 shadow-sm">
            <div class="h-20 flex items-center px-6 border-b border-slate-100 justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-2xl bg-emerald-500 text-white flex items-center justify-center font-black text-xl shadow-lg shadow-emerald-500/30">
                        B
                    </div>
                    <div>
                        <h1 class="font-extrabold text-base tracking-wider text-slate-800">BRILLIANT</h1>
                        <p class="text-[10px] font-bold text-emerald-600 tracking-widest uppercase">Admin</p>
                    </div>
                </div>
            </div>

            <div class="flex-1 overflow-y-auto px-4 py-6 space-y-6">
                <div>
                    <p class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-3">Utama</p>
                    <nav class="space-y-1">
                        <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl bg-emerald-50 text-emerald-600 font-bold border border-emerald-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                            <span class="text-sm">Dashboard</span>
                        </a>
                    </nav>
                </div>

                <div>
                    <p class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-3">Manajemen Pengguna</p>
                    <nav class="space-y-1">
                        <a href="{{ route('admin.siswa.index') }}" class="flex items-center justify-between px-3 py-2.5 rounded-xl text-slate-600 hover:text-emerald-600 hover:bg-slate-50 transition group font-medium">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 group-hover:text-emerald-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                                <span class="text-sm">Data Siswa</span>
                            </div>
                            <span class="bg-emerald-100 text-emerald-700 text-xs px-2.5 py-0.5 rounded-full font-bold">{{ $globalCountSiswa ?? 0 }}</span>
                        </a>
                        <a href="{{ route('admin.tentor.index') }}" class="flex items-center justify-between px-3 py-2.5 rounded-xl text-slate-600 hover:text-emerald-600 hover:bg-slate-50 transition group font-medium">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 group-hover:text-emerald-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <span class="text-sm">Data Guru / Pengajar</span>
                            </div>
                            <span class="bg-teal-100 text-teal-700 text-xs px-2.5 py-0.5 rounded-full font-bold">{{ $globalCountTentor ?? 0 }}</span>
                        </a>
                        <a href="{{ route('admin.kelas.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 hover:text-emerald-600 hover:bg-slate-50 transition group font-medium">
                            <svg class="w-5 h-5 group-hover:text-emerald-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            <span class="text-sm">Kelas & Sesi</span>
                        </a>
                    </nav>
                </div>

                <div>
                    <p class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-3">Monitoring Akademik</p>
                    <nav class="space-y-1">
                        <a href="{{ route('admin.materi.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 hover:text-emerald-600 hover:bg-slate-50 transition group font-medium">
                            <svg class="w-5 h-5 group-hover:text-emerald-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            <span class="text-sm">Modul & Materi</span>
                        </a>
                        <a href="{{ route('admin.tryout.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 hover:text-emerald-600 hover:bg-slate-50 transition group font-medium">
                            <svg class="w-5 h-5 group-hover:text-emerald-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                            <span class="text-sm">Kuis & Tryout</span>
                        </a>
                        <a href="{{ route('admin.rekap-nilai.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 hover:text-emerald-600 hover:bg-slate-50 transition group font-medium">
                            <svg class="w-5 h-5 group-hover:text-emerald-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                            <span class="text-sm">Rekap Nilai</span>
                        </a>
                    </nav>
                </div>

                <div>
                    <p class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-3">Sistem</p>
                    <nav class="space-y-1">
                        <a href="{{ route('admin.setting.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-xl text-slate-600 hover:text-emerald-600 hover:bg-slate-50 transition group font-medium">
                            <svg class="w-5 h-5 group-hover:text-emerald-600 transition text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span class="text-sm">Pengaturan App</span>
                        </a>
                    </nav>
                </div>
            </div>

            <div class="p-4 border-t border-slate-100 bg-slate-50/50">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-9 h-9 rounded-full bg-emerald-500 text-white flex items-center justify-center font-bold">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        <div class="overflow-hidden">
                            <p class="text-xs font-bold text-slate-800 truncate">{{ Auth::user()->name }}</p>
                            <p class="text-[10px] font-medium text-slate-500 truncate">@<span>{{ Auth::user()->username }}</span></p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" title="Logout" class="p-2 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <div class="pl-72 flex-1 flex flex-col min-w-0">

            <header class="h-20 border-b border-slate-200 bg-white/80 backdrop-blur-md sticky top-0 z-40 flex items-center justify-between px-8">
                @if(request()->routeIs('admin.siswa.*'))
        <div class="w-96 relative">
            <input type="text" placeholder="Cari nama siswa..." class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:bg-white transition">
            <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
    @else
        <div></div>
    @endif

                <div class="flex items-center space-x-4">
                    <span class="text-xs font-bold px-3 py-1.5 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200">
                        Semester Ganjil 2026/2027
                    </span>
                    <button class="w-9 h-9 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center text-slate-600 hover:text-emerald-600 hover:bg-emerald-50 transition relative">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 01-6 0v-1m6 0H9"/></svg>
                        <span class="w-2 h-2 rounded-full bg-emerald-500 absolute top-2 right-2"></span>
                    </button>
                </div>
            </header>

            <main class="flex-1 p-8">
                @yield('content')
            </main>
        </div>

    </div>

</body>
</html>
