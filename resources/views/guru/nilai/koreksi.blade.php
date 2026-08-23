@extends('layouts.guru')

@section('content')
<div class="p-6 max-w-5xl mx-auto">
    <div class="mb-6 flex justify-between items-center">
        <div>
            <a href="{{ route('guru.nilai.show', $ujian->tryout_id) }}" class="text-sm font-bold text-sky-600 hover:text-sky-700 flex items-center gap-1 mb-2">
                ← Kembali ke Detail Ujian
            </a>
            <h1 class="text-2xl font-bold text-gray-900">Koreksi Jawaban Siswa</h1>
            <p class="text-gray-600 text-sm">
                Siswa: <strong>{{ $ujian->siswa->name ?? 'Siswa' }}</strong> | Kuis: <strong>{{ $ujian->tryout->judul }}</strong>
            </p>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl text-sm font-semibold">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('guru.nilai.simpan-koreksi', $ujian->id) }}" method="POST">
        @csrf

        @foreach($ujian->tryout->soals as $index => $soal)
            @php
                $jawabanSiswa = $ujian->jawabanSiswas->where('soal_id', $soal->id)->first();
                $tipeSoal = strtolower($soal->tipe_soal ?? '');
                $isIsian = str_contains($tipeSoal, 'isian') || str_contains($tipeSoal, 'essay') || str_contains($tipeSoal, 'uraian');
            @endphp

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 mb-4">
                <div class="flex justify-between items-start mb-3">
                    <span class="text-xs font-bold px-3 py-1 bg-slate-100 text-slate-700 rounded-full">
                        Soal #{{ $index + 1 }} - {{ strtoupper($soal->tipe_soal) }}
                    </span>
                    <span class="text-xs font-bold text-gray-500">
                        Bobot Maksimal: {{ $soal->bobot }} Poin
                    </span>
                </div>

                <p class="text-gray-800 font-semibold mb-4">{{ $soal->pertanyaan }}</p>

                {{-- Tampilan Jawaban Siswa --}}
                <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 mb-4">
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-wider block mb-1">Jawaban Siswa:</span>
                    <p class="text-gray-900 font-bold text-sm">
                        {{ $jawabanSiswa->jawaban ?? 'Tidak Menjawab' }}
                    </p>
                </div>

                @if($isIsian)
                    {{-- Kunci / Acuan Jawaban Guru --}}
                    @if($soal->kunci_jawaban)
                        <div class="bg-emerald-50/60 p-3 rounded-xl border border-emerald-100/80 mb-4">
                            <span class="text-xs font-bold text-emerald-700 block mb-0.5">Kunci / Acuan Jawaban:</span>
                            <p class="text-xs text-emerald-900 font-semibold">{{ $soal->kunci_jawaban }}</p>
                        </div>
                    @endif

                    {{-- Form Input Skor Isian Guru --}}
                    <div class="mt-4 pt-4 border-t border-gray-100 flex items-center gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1">
                                Beri Poin (0 - {{ $soal->bobot }}):
                            </label>
                            <input type="number"
                                   name="skor_isian[{{ $soal->id }}]"
                                   max="{{ $soal->bobot }}"
                                   min="0"
                                   step="0.1"
                                   value="{{ $jawabanSiswa->nilai ?? 0 }}"
                                   class="w-32 border-gray-300 rounded-xl text-sm p-2.5 focus:ring-sky-500 focus:border-sky-500 font-bold"
                                   required>
                        </div>
                    </div>
                @else
                    {{-- Tampilan Skor Otomatis PG --}}
                    <div class="mt-2 text-xs font-bold {{ ($jawabanSiswa->is_benar ?? false) ? 'text-emerald-600' : 'text-rose-600' }}">
                        Skor Otomatis Sistem: {{ $jawabanSiswa->nilai ?? 0 }} / {{ $soal->bobot }} Poin
                    </div>
                @endif
            </div>
        @endforeach

        <div class="mt-6 flex justify-end">
            <button type="submit" class="px-6 py-3 bg-sky-600 text-white font-bold rounded-xl text-sm shadow-md hover:bg-sky-700 transition">
                Simpan Penilaian & Update Nilai Akhir 🚀
            </button>
        </div>
    </form>
</div>
@endsection
