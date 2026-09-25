<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSMENDIK - APLIKASI ANBK</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col font-sans select-none">
    <!-- Header -->
    <header class="bg-[#2B6CB0] text-white px-8 py-3 flex justify-between items-center shadow-md">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-[#2B6CB0] font-bold text-xs p-1">
                LOGO
            </div>
            <div>
                <h1 class="font-bold text-base tracking-wide leading-tight">PUSMENDIK</h1>
                <p class="text-xs text-blue-200">APLIKASI ANBK</p>
            </div>
        </div>
        @if(session()->has('simulasi_user'))
        <div class="flex items-center space-x-2 text-xs md:text-sm bg-blue-800/40 px-3 py-1.5 rounded">
            <span>{{ session('simulasi_user.username') }} - {{ session('simulasi_user.nama') }}</span>
            <span class="bg-blue-400 p-1 rounded-full text-white">🎓</span>
        </div>
        @endif
    </header>

    <!-- Content Area -->
    <main class="flex-1 flex items-center justify-center p-4">
        @yield('content')
    </main>
</body>
</html>
