@extends('layouts.siswa')

@section('content')
<div class="max-w-4xl mx-auto space-y-6 py-6">
    <!-- Header Informasi Nilai -->
    <div class="flex items-center justify-between bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
        <div>
            <h2 class="text-xl font-bold text-slate-800">Pembahasan: {{ $paket->nama_paket ?? $paket->judul }}</h2>
            <p class="text-sm text-slate-500 mt-1">
                Nilai Akhir: <span class="font-extrabold text-emerald-600 text-lg">{{ $sesi->nilai_akhir }}</span> / 100
            </p>
        </div>
        <a href="{{ route('siswa.dashboard') }}" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold rounded-xl text-xs transition">
            ← Kembali ke Dashboard
        </a>
    </div>

    <!-- Daftar Soal dan Jawaban -->
    <div class="space-y-4">
        @foreach($paket->soals as $index => $soal)
            @php
                $jawabanUser = $jawabanSiswa[$soal->id] ?? null;
                // Decode jika data berupa string JSON
                if (is_string($jawabanUser)) {
                    $jawabanUser = json_decode($jawabanUser, true) ?? $jawabanUser;
                }
                $kunci = is_string($soal->kunci_json) ? json_decode($soal->kunci_json, true) : $soal->kunci_json;
            @endphp

            <div class="p-6 bg-white rounded-2xl border border-slate-200 shadow-sm space-y-4">
                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                    <span class="font-bold text-slate-800">Soal No. {{ $index + 1 }}</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-slate-100 text-slate-600 font-semibold uppercase">
                        {{ str_replace('_', ' ', $soal->tipe_soal) }}
                    </span>
                </div>

                <div class="text-sm text-slate-800 leading-relaxed">
                    {!! $soal->pertanyaan !!}
                </div>

                <!-- Informasi Jawaban -->
<div class="p-4 rounded-xl text-xs space-y-2 bg-slate-50 border border-slate-200">
    <div>
        <strong class="text-slate-500 block mb-1">Jawaban Anda:</strong>
        <span class="font-semibold text-slate-800">
            @php
                $userAns = $jawabanUser;
                if (is_string($userAns)) {
                    $decoded = json_decode($userAns, true);
                    if (json_last_error() === JSON_ERROR_NONE) {
                        $userAns = $decoded;
                    }
                }
            @endphp
            @if(is_array($userAns))
                {{ implode(', ', $userAns) }}
            @else
                {{ $userAns ?? 'Tidak dijawab' }}
            @endif
        </span>
    </div>

    <div class="pt-2 border-t border-slate-200">
        <strong class="text-emerald-600 block mb-1">Kunci Jawaban:</strong>
        <span class="font-semibold text-emerald-700">
            @php
                $kunciVal = $soal->kunci_json;
                if (is_string($kunciVal)) {
                    $decodedKunci = json_decode($kunciVal, true);
                    if (json_last_error() === JSON_ERROR_NONE) {
                        $kunciVal = $decodedKunci;
                    }
                }
            @endphp

            @if(is_array($kunciVal))
                {{ implode(', ', $kunciVal) }}
            @elseif(!empty($kunciVal))
                {{ $kunciVal }}
            @else
                <span class="text-slate-400 italic">Kunci jawaban tidak tersedia</span>
            @endif
        </span>
    </div>
</div>

                <!-- Pembahasan/Penjelasan Soal -->
                @if(!empty($soal->pembahasan))
                    <div class="p-4 bg-sky-50 border border-sky-200 rounded-xl text-xs text-sky-900 space-y-1">
                        <strong class="font-bold text-sky-900 block">💡 Pembahasan Soal:</strong>
                        <div class="leading-relaxed">{!! $soal->pembahasan !!}</div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
