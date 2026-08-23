<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Siswa - Bimbel Brilliant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col pb-20 sm:pb-0">

    <header class="bg-white/90 backdrop-blur-md border-b border-slate-200 sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-tr from-sky-500 to-indigo-600 rounded-xl flex items-center justify-center text-white font-extrabold text-lg shadow-md shadow-sky-500/20">
                    🎓
                </div>
                <div>
                    <h1 class="font-extrabold text-slate-900 leading-tight text-sm sm:text-base">Ruang Brilliant Siswa</h1>
                    <p class="text-[10px] sm:text-xs text-sky-600 font-bold">
                        <p class="text-xs text-sky-600 font-semibold">
    {{ Auth::user()->kelas->pluck('nama_kelas')->implode(', ') ?: 'Siswa Active' }}
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-bold text-slate-800">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-slate-400">Siswa</p>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="p-2 sm:px-3 sm:py-1.5 bg-rose-50 text-rose-600 hover:bg-rose-100 rounded-xl text-xs font-bold transition flex items-center gap-1">
                        <span>🚪</span>
                        <span class="hidden sm:inline">Keluar</span>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="flex-1 max-w-7xl w-full mx-auto px-3 sm:px-6 lg:px-8 py-4 sm:py-8">
        @yield('content')
    </main>

    <footer class="hidden sm:block bg-white border-t border-slate-200 py-4 text-center text-xs text-slate-400 font-medium">
        &copy; {{ date('Y') }} Platform Bimbel & Tryout Online.
    </footer>

</body>
</html>
