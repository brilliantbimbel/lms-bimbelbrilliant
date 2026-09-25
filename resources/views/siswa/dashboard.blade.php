@extends('layouts.siswa')

@section('content')
<div x-data="{ tab: 'materi', selectedMapel: 'semua' }" class="space-y-6">

    @if(session('success'))
    <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-800 rounded shadow-sm">
        <div class="flex items-center">
            <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="font-bold">{{ session('success') }}</span>
        </div>
    </div>
    @endif

    <!-- HERO HEADER -->
    <div class="bg-gradient-to-r from-sky-500 via-indigo-600 to-purple-600 rounded-2xl sm:rounded-3xl p-5 sm:p-8 text-white shadow-lg shadow-indigo-500/10">
        <div class="max-w-2xl">
            <div class="flex flex-wrap items-center gap-2 mb-2">
                <span class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-full text-[10px] sm:text-xs font-bold uppercase tracking-wider">
                    Ruang Siswa 👋
                </span>

                <span class="px-3 py-1 bg-amber-400 text-slate-900 font-extrabold rounded-full text-[10px] sm:text-xs uppercase tracking-wider shadow-sm">
                    🏫 {{ $siswa->kelas->pluck('nama_kelas')->implode(', ') ?: 'Belum Ada Kelas' }}
                </span>
            </div>

            <h2 class="text-xl sm:text-3xl font-black mt-1">
                Halo, {{ $siswa->name }}!
            </h2>
            <p class="text-sky-100 text-xs sm:text-sm mt-1 font-medium">
                Pilih tab di bawah untuk mengakses Modul Materi Belajar, Latihan Soal, Kuis, atau Simulasi TKA.
            </p>
        </div>
    </div>

    <!-- FILTER TAB MATA PELAJARAN INTERAKTIF -->
    @php
        $tryoutMapels = $tryouts->pluck('mapel')->filter();
        $materiMapels = $materis->pluck('mapel')->filter();
        $allMapels = $tryoutMapels->merge($materiMapels)
            ->map(function($item) {
                return trim(strtoupper($item));
            })
            ->unique()
            ->values();
    @endphp

    @if($allMapels->count() > 0)
    <div class="bg-white rounded-2xl p-3 border border-slate-200/80 shadow-sm">
        <div class="flex items-center gap-2 overflow-x-auto pb-1 text-xs">
            <span class="font-bold text-slate-400 px-2 flex items-center gap-1 shrink-0">
                🔍 Filter Mapel:
            </span>

            <button @click="selectedMapel = 'semua'"
                :class="selectedMapel === 'semua' ? 'bg-sky-600 text-white shadow-sm font-extrabold' : 'bg-slate-100 text-slate-600 font-semibold hover:bg-slate-200'"
                class="px-3.5 py-1.5 rounded-xl transition whitespace-nowrap">
                📚 Semua Mapel
            </button>

            @foreach($allMapels as $mapel)
                <button @click="selectedMapel = '{{ $mapel }}'"
                    :class="selectedMapel === '{{ $mapel }}' ? 'bg-sky-600 text-white shadow-sm font-extrabold' : 'bg-slate-100 text-slate-600 font-semibold hover:bg-slate-200'"
                    class="px-3.5 py-1.5 rounded-xl transition whitespace-nowrap">
                    📖 {{ $mapel }}
                </button>
            @endforeach
        </div>
    </div>
    @endif

    <!-- TAB NAVIGASI UTAMA -->
    <div class="flex bg-slate-200/80 p-1 rounded-xl sm:rounded-2xl max-w-xl mx-auto sm:mx-0 overflow-x-auto">
        <button @click="tab = 'materi'"
            :class="tab === 'materi' ? 'bg-white text-emerald-600 shadow-sm font-extrabold' : 'text-slate-600 font-semibold hover:text-slate-900'"
            class="flex-1 py-2.5 px-3 text-xs sm:text-sm rounded-lg sm:rounded-xl transition text-center whitespace-nowrap">
            📚 Modul ({{ $materis->where('kategori_modul', '!=', 'latihan')->count() }})
        </button>

        <button @click="tab = 'latihan'"
            :class="tab === 'latihan' ? 'bg-white text-amber-600 shadow-sm font-extrabold' : 'text-slate-600 font-semibold hover:text-slate-900'"
            class="flex-1 py-2.5 px-3 text-xs sm:text-sm rounded-lg sm:rounded-xl transition text-center whitespace-nowrap">
            📝 Latihan Soal ({{ $materis->where('kategori_modul', 'latihan')->count() }})
        </button>

        <button @click="tab = 'kuis'"
            :class="tab === 'kuis' ? 'bg-white text-sky-600 shadow-sm font-extrabold' : 'text-slate-600 font-semibold hover:text-slate-900'"
            class="flex-1 py-2.5 px-3 text-xs sm:text-sm rounded-lg sm:rounded-xl transition text-center whitespace-nowrap">
            📑 Kuis & Tryout ({{ $tryouts->where('tipe', '!=', 'TKA')->count() }})
        </button>

        @php
    $userJenjang = $siswa->kelas->pluck('jenjang')->toArray();
    $userNamaKelas = $siswa->kelas->pluck('nama_kelas')->toArray();

    // Filter paket TKA yang cocok dengan jenjang atau nama kelas siswa
    $filteredPaketTka = $paketTka->filter(function($paket) use ($userJenjang, $userNamaKelas) {
        return in_array($paket->kelas, $userJenjang) || in_array($paket->kelas, $userNamaKelas);
    });
@endphp

<button @click="tab = 'tka'"
    :class="tab === 'tka' ? 'bg-white text-indigo-600 shadow-sm font-extrabold' : 'text-slate-600 font-semibold hover:text-slate-900'"
    class="flex-1 py-2.5 px-3 text-xs sm:text-sm rounded-lg sm:rounded-xl transition text-center whitespace-nowrap">
    🎯 TKA ({{ $filteredPaketTka->count() }})
</button>
    </div>

    <!-- TAB 1: MODUL MATERI -->
    <div x-show="tab === 'materi'" class="space-y-4">
        <h3 class="text-lg font-bold text-slate-800">Modul & Bahan Ajar Materi</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            @forelse($materis->where('kategori_modul', '!=', 'latihan') as $materi)
                @php
                    $isSelesai = in_array($materi->id, $materiSelesaiIds ?? []);
                    $mapel = strtoupper($materi->mapel ?? 'UMUM');
                @endphp

                <div x-show="selectedMapel === 'semua' || selectedMapel === '{{ $mapel }}'"
                     class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-1.5">
                                <span class="px-2.5 py-1 bg-emerald-50 text-emerald-600 text-[10px] sm:text-xs font-bold rounded-lg uppercase">
                                    Modul Belajar
                                </span>
                                @if($materi->mapel)
                                    <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] font-extrabold rounded-md border border-slate-200">
                                        {{ strtoupper($materi->mapel) }}
                                    </span>
                                @endif
                            </div>
                            @if($isSelesai)
                                <span class="px-2 py-0.5 bg-emerald-100 text-emerald-700 text-[10px] font-bold rounded-md">
                                    ✓ Selesai Dibaca
                                </span>
                            @endif
                        </div>

                        <h4 class="font-extrabold text-slate-900 text-base mb-1 line-clamp-2">
                            {{ $materi->judul }}
                        </h4>

                        <p class="text-xs text-slate-500 mb-4 line-clamp-2">
                            {{ Str::limit(strip_tags($materi->deskripsi ?? 'Klik untuk mempelajari materi ini.'), 80) }}
                        </p>
                    </div>

                    <div class="pt-3 border-t border-slate-100">
                        <a href="{{ route('siswa.materi.baca', $materi->id) }}" class="w-full inline-flex justify-center items-center px-4 py-2 {{ $isSelesai ? 'bg-slate-100 text-slate-700 hover:bg-slate-200' : 'bg-emerald-600 hover:bg-emerald-700 text-white' }} rounded-xl text-xs font-bold transition">
                            {{ $isSelesai ? 'Baca Ulang Materi 📖' : 'Buka & Pelajari 📖' }}
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-white rounded-2xl p-8 text-center border border-slate-200 text-slate-400 text-xs font-bold">
                    Belum ada modul materi yang diunggah.
                </div>
            @endforelse
        </div>
    </div>

    <!-- TAB 2: LATIHAN SOAL -->
    <div x-show="tab === 'latihan'" class="space-y-4" x-cloak>
        <h3 class="text-lg font-bold text-slate-800">Latihan Soal Interaktif</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            @forelse($materis->where('kategori_modul', 'latihan') as $latihan)
                @php
                    $isSelesai = in_array($latihan->id, $materiSelesaiIds ?? []);
                    $mapel = strtoupper($latihan->mapel ?? 'UMUM');
                @endphp

                <div x-show="selectedMapel === 'semua' || selectedMapel === '{{ $mapel }}'"
                     class="bg-white rounded-2xl p-5 border border-amber-200/80 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-1.5">
                                <span class="px-2.5 py-1 bg-amber-50 text-amber-600 text-[10px] sm:text-xs font-bold rounded-lg uppercase">
                                    Latihan Soal
                                </span>
                                @if($latihan->mapel)
                                    <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] font-extrabold rounded-md border border-slate-200">
                                        {{ strtoupper($latihan->mapel) }}
                                    </span>
                                @endif
                            </div>
                            @if($isSelesai)
                                <span class="px-2 py-0.5 bg-emerald-100 text-emerald-700 text-[10px] font-bold rounded-md">
                                    ✓ Selesai
                                </span>
                            @endif
                        </div>

                        <h4 class="font-extrabold text-slate-900 text-base mb-1 line-clamp-2">
                            {{ $latihan->judul }}
                        </h4>

                        <p class="text-xs text-slate-500 mb-4 line-clamp-2">
                            {{ Str::limit(strip_tags($latihan->deskripsi ?? 'Kerjakan latihan soal interaktif untuk menguji pemahaman Anda.'), 80) }}
                        </p>
                    </div>

                    <div class="pt-3 border-t border-slate-100">
                        <a href="{{ route('siswa.materi.baca', $latihan->id) }}" class="w-full inline-flex justify-center items-center px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-xl text-xs font-bold shadow-md transition">
                            Kerjakan Latihan 📝
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-white rounded-2xl p-8 text-center border border-slate-200 text-slate-400 text-xs font-bold">
                    Belum ada latihan soal yang tersedia.
                </div>
            @endforelse
        </div>
    </div>

    <!-- TAB 3: KUIS & TRYOUT -->
    <div x-show="tab === 'kuis'" class="space-y-4" x-cloak>
        <h3 class="text-lg font-bold text-slate-800">Daftar Kuis & Tryout Regular</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            @forelse($tryouts->where('tipe', '!=', 'TKA') as $tryout)
                @php
                    $ujian = $riwayatUjian[$tryout->id] ?? null;
                    $status = $ujian ? $ujian->status : null;
                    $nilai = $ujian ? $ujian->nilai : 0;
                    $mapel = strtoupper($tryout->mapel ?? 'UMUM');
                @endphp

                <div x-show="selectedMapel === 'semua' || selectedMapel === '{{ $mapel }}'"
                     class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center gap-1.5">
                                <span class="px-2.5 py-1 bg-sky-50 text-sky-600 text-[10px] sm:text-xs font-bold rounded-lg uppercase">
                                    {{ $tryout->tipe ?? 'Kuis' }}
                                </span>
                                @if($tryout->mapel)
                                    <span class="px-2 py-0.5 bg-slate-100 text-slate-600 text-[10px] font-extrabold rounded-md border border-slate-200">
                                        {{ strtoupper($tryout->mapel) }}
                                    </span>
                                @endif
                            </div>
                            <span class="text-xs font-semibold text-slate-400">
                                ⏱️ {{ $tryout->durasi }} Menit
                            </span>
                        </div>

                        <h4 class="font-extrabold text-slate-900 text-base mb-1 line-clamp-2">
                            {{ $tryout->judul }}
                        </h4>

                        <p class="text-xs text-slate-500 mb-4">📝 {{ $tryout->soals_count }} Soal</p>
                    </div>

                    <div class="pt-3 border-t border-slate-100">
                        @if($status === 'selesai')
                            <div class="space-y-2.5">
                                <div class="flex items-center justify-between bg-gradient-to-r from-emerald-500 to-teal-600 text-white p-3 rounded-xl shadow-sm">
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg">🏆</span>
                                        <div>
                                            <p class="text-[9px] uppercase tracking-wider font-extrabold text-emerald-100">Nilai Kamu</p>
                                            <p class="text-[10px] font-bold text-emerald-50">✓ Selesai</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-xl font-black tracking-tight">{{ number_format($nilai, 1) }}</span>
                                    </div>
                                </div>

                                <a href="{{ route('siswa.tryout.review', $tryout->id) }}"
                                   class="w-full inline-flex justify-center items-center gap-1.5 px-4 py-2 bg-sky-50 hover:bg-sky-100 text-sky-700 border border-sky-200 rounded-xl text-xs font-bold transition shadow-sm">
                                    <span>👁️ Review & Pembahasan Soal</span>
                                </a>
                            </div>
                        @elseif(in_array($status, ['perlu_pemeriksaan', 'menunggu_koreksi']))
                            <div class="p-2.5 bg-amber-50 border border-amber-200 text-amber-800 rounded-xl text-xs font-bold text-center flex items-center justify-center gap-1.5 shadow-sm">
                                <span>⏳</span> Jawaban Dikirim (Menunggu Koreksi)
                            </div>
                        @elseif($status === 'sedang_mengerjakan')
                            <a href="{{ route('siswa.kuis.mulai', $tryout->id) }}" class="w-full inline-flex justify-center items-center px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-xl text-xs font-bold shadow-md transition">
                                Lanjutkan Pengerjaan ⚡
                            </a>
                        @else
                            <a href="{{ route('siswa.kuis.mulai', $tryout->id) }}" class="w-full inline-flex justify-center items-center px-4 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded-xl text-xs font-bold shadow-md transition">
                                Mulai Kerjakan 🚀
                            </a>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-white rounded-2xl p-8 text-center border border-slate-200 text-slate-400 text-xs font-bold">
                    Belum ada kuis/tryout yang tersedia untuk kelas/sesi kamu.
                </div>
            @endforelse
        </div>
    </div>

    <!-- TAB 4: SIMULASI TKA -->
<div x-show="tab === 'tka'" class="space-y-4" x-cloak>
    <h3 class="text-lg font-bold text-slate-800">Simulasi TKA (Tes Kemampuan Akademik)</h3>
    <div class="space-y-4">
        @php
            $userJenjang = $siswa->kelas->pluck('jenjang')->toArray();
            $userNamaKelas = $siswa->kelas->pluck('nama_kelas')->toArray();

            // Saring paket TKA dengan pembersihan string (bebas spasi & huruf kapital)
            $filteredPaketTka = $paketTka->filter(function($paket) use ($userJenjang, $userNamaKelas) {
                $kelasPaket = strtoupper(trim($paket->kelas ?? ''));

                foreach ($userJenjang as $j) {
                    if (strtoupper(trim($j)) === $kelasPaket) return true;
                }
                foreach ($userNamaKelas as $nk) {
                    $cleanNk = strtoupper(trim(str_replace('KELAS', '', $nk)));
                    if ($cleanNk === $kelasPaket || strtoupper(trim($nk)) === $kelasPaket) return true;
                }
                return false;
            });
        @endphp

        @forelse($filteredPaketTka as $paket)
            @php
                $sesi = $paket->sesis->where('user_id', auth()->id())->first();
                $sudahSelesai = $sesi && $sesi->status === 'selesai';
            @endphp

            <div class="p-5 bg-white border border-gray-100 rounded-2xl shadow-sm flex items-center justify-between">
                <div>
                    <span class="inline-block px-2.5 py-0.5 bg-blue-50 text-blue-600 text-xs font-semibold rounded-md mb-2">
                        {{ $paket->kelas ?? 'IX' }}
                    </span>

                    <h4 class="text-base font-bold text-gray-800">
                        {{ $paket->judul ?? $paket->nama_paket ?? $paket->nama ?? 'Paket TKA' }}
                    </h4>

                    <p class="text-xs text-gray-500 mt-1">
                        Mapel: {{ $paket->mapel ?? 'Bahasa Indonesia' }} | Durasi: {{ $paket->durasi ?? 60 }} Menit
                    </p>
                </div>

                <div class="flex items-center gap-3">
                    @if($sudahSelesai)
                        <div class="text-right mr-2">
                            <span class="block text-xs text-gray-400 font-medium">Nilai Akhir</span>
                            <span class="text-lg font-extrabold text-emerald-600">{{ $sesi->nilai_akhir }}</span>
                        </div>

                        <a href="{{ route('siswa.tka.pembahasan', ['paket_id' => $paket->id]) }}"
                           class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition flex items-center gap-2">
                            🔍 Pembahasan
                        </a>
                    @else
                        <a href="{{ route('siswa.konfirmasi_data', ['paket_id' => $paket->id]) }}"
                           class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl transition flex items-center gap-2 shadow-md shadow-blue-500/20">
                            🚀 Mulai Simulasi
                        </a>
                    @endif
                </div>
            </div>
        @empty
            <div class="bg-white rounded-2xl p-8 text-center border border-slate-200 text-slate-400 text-xs font-bold">
                Belum ada paket TKA yang tersedia untuk kelas kamu.
            </div>
        @endforelse
    </div>
</div>

</div>
@endsection
