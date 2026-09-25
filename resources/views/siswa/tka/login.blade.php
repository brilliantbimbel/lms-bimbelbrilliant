<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi data Peserta - Bimbel Brilliant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Open Sans', sans-serif; }
        .bg-pusmendik {
            background: linear-gradient(135deg, #2b5c8f 0%, #1e3c72 100%);
        }
        .bg-pattern {
            background-color: #f8fafc;
            background-image: radial-gradient(#e2e8f0 1px, transparent 1px);
            background-size: 16px 16px;
        }
    </style>
</head>
<body class="bg-pusmendik min-h-screen flex flex-col font-sans antialiased text-gray-800">

    <!-- Header Navbar Pusmendik -->
    <header class="px-8 py-3 flex justify-between items-center text-white">
        <div class="flex items-center space-x-3">
            <!-- Logo Tut Wuri Handayani -->
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Logo_Tut_Wuri_Handayani.png" alt="Tut Wuri Handayani" class="h-12 w-auto">
            <div>
                <h1 class="font-bold text-lg tracking-wide leading-tight">Bimbel Brilliant</h1>
                <p class="text-xs tracking-wider text-blue-200 uppercase font-semibold">APLIKASI SIMULASI TKA</p>
            </div>
        </div>
        <div class="flex items-center space-x-2 text-sm font-semibold">
            <!-- Menampilkan Nama Siswa di Header Kanan -->
            <span class="uppercase">{{ Auth::user()->name ?? 'PESERTA TKA' }}</span>
            <div class="bg-blue-400/30 p-1.5 rounded">
                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-2.75-1.435A1 1 0 011 11.82v-1.424a1 1 0 01.31-.724l2-1.278zM17 11.82a8.969 8.969 0 01-2.75 1.435V9.153l2.69-1.153a1 1 0 01.31.724v1.424a1 1 0 01-.25.672z"></path>
                </svg>
            </div>
        </div>
    </header>

    <!-- Content Area -->
    <main class="flex-grow flex items-start justify-between px-8 py-6 max-w-7xl mx-auto w-full gap-8">

        <!-- Box Kiri: Display Token -->
        <div class="w-1/2 bg-white rounded-xl shadow-lg p-6 flex items-center justify-between border border-gray-100">
            <span class="text-gray-700 font-semibold text-base">Token : <strong class="font-bold text-blue-600 tracking-widest text-xl ml-2">{{ $token ?? 'QSXTHO' }}</strong></span>
            <button type="button" onclick="window.location.reload();" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold text-xs px-4 py-2 rounded-md shadow-sm transition">
                Refresh
            </button>
        </div>

        <!-- Box Kanan: Form Konfirmasi Data Peserta -->
        <div class="w-1/2 bg-white rounded-2xl shadow-2xl p-8 border border-gray-100 relative overflow-hidden">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Konfirmasi data Peserta</h2>

            <!-- Pesan Alert Error Jika Token Salah / Input Tidak Lengkap -->
            @if(session('error'))
                <div class="mb-4 p-3 bg-red-100 border-l-4 border-red-500 text-red-700 text-xs font-bold rounded">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-100 border-l-4 border-red-500 text-red-700 text-xs rounded">
                    <ul class="list-disc pl-4 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('siswa.konfirmasi_data.post') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="paket_id" value="{{ $paket->id ?? $paketId ?? 1 }}">

                <!-- Kode NIK / Username -->
                <div>
                    <label class="text-xs font-semibold text-gray-500 block mb-1">Kode NIK / NISN</label>
                    <p class="text-sm font-semibold text-gray-800">{{ Auth::user()->username ?? Auth::user()->nisn ?? 'P130100230' }}</p>
                </div>

                <!-- Nama Peserta Registered -->
                <div>
                    <label class="text-xs font-semibold text-gray-500 block mb-1">Nama Peserta</label>
                    <p class="text-sm font-semibold text-gray-800 uppercase">{{ Auth::user()->name }}</p>
                </div>

                <!-- Jenis Kelamin -->
                <div>
                    <label class="text-xs font-semibold text-gray-500 block mb-1">Jenis Kelamin</label>
                    <select class="w-full border-b-2 border-gray-200 focus:border-blue-500 bg-transparent py-1.5 text-sm font-semibold text-gray-700 focus:outline-none">
                        <option value="L" {{ (Auth::user()->jenis_kelamin ?? '') == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="P" {{ (Auth::user()->jenis_kelamin ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <!-- Mata Ujian -->
                <div>
                    <label class="text-xs font-semibold text-gray-500 block mb-1">Mata Ujian</label>
                    <p class="text-sm font-semibold text-gray-800">{{ $paket->mapel ?? 'Matematika' }} ({{ $paket->judul ?? $paket->nama_paket ?? 'Paket 1' }})</p>
                </div>

                <!-- Input Ketikkan Nama Peserta -->
                <div>
                    <label class="text-xs font-semibold text-gray-500 block mb-1">Ketikkan Nama Peserta</label>
                    <input type="text" name="nama" value="{{ old('nama', Auth::user()->name) }}" placeholder="Ketikkan Nama Peserta" required class="w-full border-b-2 border-gray-200 focus:border-blue-500 bg-transparent py-1.5 text-sm text-gray-700 placeholder-gray-400 focus:outline-none font-semibold">
                </div>

                <!-- Tanggal Lahir -->
                <div>
                    <label class="text-xs font-semibold text-gray-500 block mb-1">Tanggal Lahir</label>
                    <div class="grid grid-cols-3 gap-2">
                        <select name="hari" required class="bg-gray-100 text-gray-700 text-xs rounded px-3 py-2 border-none focus:outline-none">
                            <option value="">Hari</option>
                            @for ($i = 1; $i <= 31; $i++)
                                <option value="{{ sprintf('%02d', $i) }}" {{ old('hari') == sprintf('%02d', $i) ? 'selected' : '' }}>{{ sprintf('%02d', $i) }}</option>
                            @endfor
                        </select>

                        <select name="bulan" required class="bg-gray-100 text-gray-700 text-xs rounded px-3 py-2 border-none focus:outline-none">
                            <option value="">Bulan</option>
                            @foreach(['01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'] as $val => $namaBulan)
                                <option value="{{ $val }}" {{ old('bulan') == $val ? 'selected' : '' }}>{{ $namaBulan }}</option>
                            @endforeach
                        </select>

                        <select name="tahun" required class="bg-gray-100 text-gray-700 text-xs rounded px-3 py-2 border-none focus:outline-none">
                            <option value="">Tahun</option>
                            @for ($y = 2015; $y >= 2000; $y--)
                                <option value="{{ $y }}" {{ old('tahun') == $y ? 'selected' : '' }}>{{ $y }}</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <!-- Input Token -->
                <div class="pt-2">
                    <label class="text-xs font-bold text-blue-500 block mb-1">Token</label>
                    <input type="text" name="token" placeholder="Ketikkan token di sini" required autocomplete="off" class="w-full border-b-2 border-gray-200 focus:border-blue-500 bg-transparent py-1.5 text-sm text-gray-700 placeholder-gray-400 uppercase tracking-widest focus:outline-none font-bold">
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2.5 rounded-lg shadow-md transition duration-200 text-sm">
                        Submit
                    </button>
                </div>
            </form>
        </div>

    </main>

</body>
</html>
