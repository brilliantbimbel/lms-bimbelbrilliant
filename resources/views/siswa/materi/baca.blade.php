@extends('layouts.siswa')

@section('content')
<div class="w-full px-2 sm:px-6 py-4 space-y-4">
    {{-- Header Navigation & Tombol Fullscreen --}}
    <div class="flex items-center justify-between bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
        <a href="{{ route('siswa.dashboard') }}" class="text-sm font-bold text-sky-600 hover:text-sky-700 flex items-center gap-1">
            ← Kembali ke Dashboard
        </a>

        <button onclick="toggleFullscreen()" class="px-4 py-2 bg-slate-800 hover:bg-slate-900 text-white text-xs font-semibold rounded-lg flex items-center gap-2 transition-all shadow-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
            </svg>
            <span id="btnText">Layar Penuh</span>
        </button>
    </div>

    {{-- Container Konten Utama (Bisa Fullscreen) --}}
    <div id="materiContainer" class="bg-white rounded-2xl p-4 sm:p-8 shadow-sm border border-slate-200/80 overflow-auto w-full min-h-[85vh]">
        <div class="border-b border-slate-100 pb-4 mb-6">
            <span class="px-3 py-1 bg-emerald-50 text-emerald-600 text-xs font-bold rounded-lg uppercase">
                {{ strtoupper($materi->tipe ?? 'MODUL BELAJAR') }}
            </span>
            <h1 class="text-2xl sm:text-3xl font-black text-slate-900 mt-2">
                {{ $materi->judul }}
            </h1>
            @if(!empty($materi->deskripsi))
                <p class="text-sm text-slate-500 mt-1">{{ $materi->deskripsi }}</p>
            @endif
        </div>

        {{-- 1. FILE PDF --}}
        @if(strtolower($materi->tipe) === 'pdf' || strtolower($materi->tipe) === 'file')
            @if(!empty($materi->file_path))
                <div class="w-full h-[80vh] rounded-xl overflow-hidden border border-slate-200">
                    <iframe src="{{ route('berkas', ['path' => $materi->file_path]) }}" class="w-full h-full"></iframe>
                </div>
            @else
                <div class="p-4 bg-amber-50 text-amber-700 border border-amber-200 rounded-xl text-sm">File PDF belum diunggah.</div>
            @endif

        {{-- 2. LINK VIDEO --}}
        @elseif(strtolower($materi->tipe) === 'video')
            @if(!empty($materi->url_video))
                <div class="aspect-video w-full rounded-xl overflow-hidden border border-slate-200 shadow-sm">
                    @php
                        $videoUrl = $materi->url_video;
                        if (str_contains($videoUrl, 'watch?v=')) {
                            $videoUrl = str_replace('watch?v=', 'embed/', $videoUrl);
                        } elseif (str_contains($videoUrl, 'youtu.be/')) {
                            $videoUrl = str_replace('youtu.be/', 'youtube.com/embed/', $videoUrl);
                        }
                    @endphp
                    <iframe src="{{ $videoUrl }}" class="w-full h-full" allowfullscreen></iframe>
                </div>
            @else
                <div class="p-4 bg-amber-50 text-amber-700 border border-amber-200 rounded-xl text-sm">Link video belum diisi.</div>
            @endif

        {{-- 3. KONTEN HTML / TEKS --}}
        @else
            @if(!empty($materi->konten_html))
                <div class="w-full min-h-[70vh] text-slate-800">
                    {!! $materi->konten_html !!}
                </div>
            @else
                <div class="p-4 bg-amber-50 text-amber-700 border border-amber-200 rounded-xl text-sm">Konten materi HTML masih kosong.</div>
            @endif
        @endif
    </div>
</div>

{{-- Script untuk Fitur Fullscreen --}}
<script>
    function toggleFullscreen() {
        const elem = document.getElementById('materiContainer');
        const btnText = document.getElementById('btnText');

        if (!document.fullscreenElement) {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }
            btnText.innerText = 'Keluar Layar Penuh';
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            }
            btnText.innerText = 'Layar Penuh';
        }
    }

    document.addEventListener('fullscreenchange', () => {
        if (!document.fullscreenElement) {
            document.getElementById('btnText').innerText = 'Layar Penuh';
        }
    });
</script>
@endsection
