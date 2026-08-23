@extends('layouts.siswa')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="bg-white rounded-2xl sm:rounded-3xl p-6 border border-slate-200/80 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <span class="px-3 py-1 bg-sky-50 text-sky-600 font-bold text-xs rounded-full uppercase tracking-wider">
                {{ $tryout->tipe ?? 'Kuis / Tryout' }}
            </span>
            <h2 class="text-xl sm:text-2xl font-black text-slate-900 mt-2">
                {{ $tryout->judul }}
            </h2>
            <p class="text-xs text-slate-500 mt-1">
                Total Soal: <span class="font-bold text-slate-700">{{ $tryout->soals->count() }} Soal</span>
            </p>
        </div>

        <div class="bg-amber-50 border border-amber-200/60 rounded-xl px-4 py-2.5 flex items-center gap-2">
            <span class="text-lg">⏱️</span>
            <div>
                <p class="text-[10px] uppercase font-bold text-amber-700 tracking-wider">Durasi Waktu</p>
                <p class="text-sm font-extrabold text-amber-900">{{ $tryout->durasi }} Menit</p>
            </div>
        </div>
    </div>

    <form action="{{ route('siswa.kuis.simpan', $tryout->id) }}" method="POST">
        @csrf

        <div class="space-y-6">
            @forelse($tryout->soals as $index => $soal)
                <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                    <div class="flex items-start gap-3">
                        <span class="flex-shrink-0 w-7 h-7 bg-sky-500 text-white font-bold text-xs rounded-lg flex items-center justify-center">
                            {{ $index + 1 }}
                        </span>
                        <div class="text-slate-800 text-sm sm:text-base font-medium leading-relaxed pt-0.5">
                            {!! nl2br(e($soal->pertanyaan)) !!}
                        </div>
                    </div>

                    @if(isset($soal->gambar) && $soal->gambar)
                        <div class="pl-10">
                            <img src="{{ asset('storage/' . $soal->gambar) }}" alt="Gambar Soal" class="max-w-full h-auto rounded-xl border border-slate-200 shadow-sm">
                        </div>
                    @endif

                    <div class="pl-0 sm:pl-10 space-y-2.5 pt-2">

    @php
        // Normalisasi teks tipe_soal menjadi huruf kecil tanpa spasi/strip/underscore
        $tipeSoal = strtolower($soal->tipe_soal ?? '');
    @endphp

    {{-- 1. PILIHAN GANDA KOMPLEKS (Mengandung kata 'kompleks' atau 'checkbox') --}}
    @if(str_contains($tipeSoal, 'kompleks') || str_contains($tipeSoal, 'checkbox'))
        <div class="mb-2">
            <span class="px-2.5 py-1 bg-amber-100 text-amber-800 text-[11px] font-bold rounded-md inline-flex items-center gap-1">
                ☑️ Pilihan Ganda Kompleks (Pilih satu atau beberapa jawaban benar)
            </span>
        </div>

        @if(is_array($soal->pilihan) || is_object($soal->pilihan))
            @foreach($soal->pilihan as $key => $val)
                @php
                    $huruf = is_numeric($key) ? chr(65 + $key) : strtoupper($key);
                @endphp
                <label class="flex items-start p-3 sm:p-3.5 rounded-xl border border-slate-200 hover:border-amber-400 hover:bg-amber-50/40 cursor-pointer transition group">
                    <input type="checkbox"
                           name="jawaban[{{ $soal->id }}][]"
                           value="{{ $huruf }}"
                           class="mt-0.5 text-amber-600 focus:ring-amber-500 border-slate-300 rounded w-4 h-4">
                    <span class="ml-3 text-xs sm:text-sm font-semibold text-slate-700 group-hover:text-amber-900">
                        <strong class="uppercase text-slate-400 group-hover:text-amber-600 mr-1">{{ $huruf }}.</strong> {{ $val }}
                    </span>
                </label>
            @endforeach
        @endif

    {{-- 2. ISIAN SINGKAT / ESSAY (Mengandung kata 'isian' atau 'essay') --}}
    @elseif(str_contains($tipeSoal, 'isian') || str_contains($tipeSoal, 'essay'))
        <div class="mt-2">
            <span class="px-2.5 py-1 bg-emerald-100 text-emerald-800 text-[11px] font-bold rounded-md inline-flex items-center gap-1 mb-2">
                ✍️ Jawaban Isian / Singkat
            </span>
            <textarea name="jawaban[{{ $soal->id }}]"
                      rows="3"
                      required
                      placeholder="Ketikkan jawaban kamu di sini..."
                      class="w-full p-3.5 border border-slate-200 rounded-xl text-sm focus:ring-sky-500 focus:border-sky-500 bg-slate-50/50 mt-1"></textarea>
        </div>

    {{-- 3. PILIHAN GANDA BIASA (RADIO BUTTON) --}}
    @else
        <div class="mb-2">
            <span class="px-2.5 py-1 bg-sky-100 text-sky-800 text-[11px] font-bold rounded-md inline-flex items-center gap-1">
                🔘 Pilihan Ganda (Pilih 1 jawaban benar)
            </span>
        </div>

        @if(is_array($soal->pilihan) || is_object($soal->pilihan))
            @foreach($soal->pilihan as $key => $val)
                @php
                    $huruf = is_numeric($key) ? chr(65 + $key) : strtoupper($key);
                @endphp
                <label class="flex items-start p-3 sm:p-3.5 rounded-xl border border-slate-200 hover:border-sky-300 hover:bg-sky-50/50 cursor-pointer transition group">
                    <input type="radio"
                           name="jawaban[{{ $soal->id }}]"
                           value="{{ $huruf }}"
                           required
                           class="mt-0.5 text-sky-600 focus:ring-sky-500 border-slate-300 w-4 h-4">
                    <span class="ml-3 text-xs sm:text-sm font-semibold text-slate-700 group-hover:text-sky-900">
                        <strong class="uppercase text-slate-400 group-hover:text-sky-600 mr-1">{{ $huruf }}.</strong> {{ $val }}
                    </span>
                </label>
            @endforeach
        @endif
    @endif

</div>

                </div>
            @empty
                <div class="bg-white rounded-2xl p-8 text-center border border-slate-200 text-slate-400 font-bold text-sm">
                    Belum ada soal pada kuis/tryout ini.
                </div>
            @endforelse
        </div>

        @if($tryout->soals->count() > 0)
            <div class="pt-4 flex justify-end">
                <button type="submit"
                        onclick="return confirm('Apakah kamu yakin ingin menyelesaikan kuis ini?')"
                        class="w-full sm:w-auto px-8 py-3.5 bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-sm rounded-xl shadow-lg shadow-emerald-600/20 transition">
                    Selesaikan & Kirim Jawaban 🚀
                </button>
            </div>
        @endif
    </form>

</div>
@endsection
