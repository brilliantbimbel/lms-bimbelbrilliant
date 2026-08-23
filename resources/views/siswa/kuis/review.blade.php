@extends('layouts.siswa')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <!-- HEADER NAVIGATION & JUDUL -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm">
        <div>
            <a href="{{ route('siswa.dashboard') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-sky-600 hover:text-sky-700 mb-2 transition">
                ← Kembali ke Dashboard
            </a>
            <h1 class="text-xl sm:text-2xl font-black text-slate-900">
                Pembahasan: {{ $tryout->judul }}
            </h1>
            <p class="text-xs text-slate-500 font-medium mt-0.5">
                Mata Pelajaran: <span class="font-bold text-slate-700">{{ strtoupper($tryout->mapel ?? 'Umum') }}</span>
            </p>
        </div>

        <!-- STATS HASIL NILAI -->
        <div class="flex items-center gap-3 bg-slate-50 p-3 rounded-xl border border-slate-100 self-start sm:self-auto">
            <div class="text-right">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Nilai Akhir</p>
                <p class="text-2xl font-black text-emerald-600 leading-none">
                    {{ number_format($ujian->nilai ?? 0, 1) }}
                </p>
            </div>
            <div class="h-8 w-[1px] bg-slate-200"></div>
            <div class="text-xs font-bold text-slate-600">
                <span class="text-emerald-600">✓ Selesai</span>
            </div>
        </div>
    </div>

    <!-- DAFTAR PEMBAHASAN SOAL -->
    <div class="space-y-6">
        @forelse($tryout->soals as $index => $soal)
            @php
                // Mengambil jawaban siswa untuk soal ini
                $jawaban = $jawabanSiswa->where('soal_id', $soal->id)->first();
                $jawabanUser = $jawaban ? $jawaban->jawaban : null;

                // Pengecekan Kebenaran (Sesuai Struktur Pilihan Ganda / Isian)
                $isCorrect = false;
                if ($jawaban) {
                    if (isset($jawaban->is_correct)) {
                        $isCorrect = $jawaban->is_correct;
                    } else {
                        $isCorrect = (strtolower(trim($jawabanUser)) === strtolower(trim($soal->kunci_jawaban)));
                    }
                }
            @endphp

            <div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/80 shadow-sm space-y-4">

                <!-- nomor & BADGE STATUS -->
                <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                    <span class="px-3 py-1 bg-slate-100 text-slate-700 text-xs font-extrabold rounded-lg">
                        Soal No. {{ $index + 1 }}
                    </span>

                    @if(!$jawabanUser)
                        <span class="px-2.5 py-1 bg-slate-100 text-slate-500 text-xs font-bold rounded-lg">
                            ⚪ Tidak Dijawab
                        </span>
                    @elseif($isCorrect)
                        <span class="px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-lg border border-emerald-200">
                            ✓ Benar
                        </span>
                    @else
                        <span class="px-2.5 py-1 bg-rose-50 text-rose-700 text-xs font-bold rounded-lg border border-rose-200">
                            ✕ Salah
                        </span>
                    @endif
                </div>

                <!-- PERTANYAAN / PERTANYAAN SOAL -->
                <div class="text-slate-800 text-sm sm:text-base font-semibold leading-relaxed">
                    {!! $soal->pertanyaan !!}
                </div>

                <!-- PILIHAN JAWABAN (JIKA ADA OPTIONS / PILIHAN GANDA) -->
                @if(isset($soal->opsi) && is_array($soal->opsi))
                    <div class="grid grid-cols-1 gap-2 pt-2">
                        @foreach($soal->opsi as $kunci => $teksOpsi)
                            @php
                                $isUserChoice = (strtolower($jawabanUser) === strtolower($kunci));
                                $isKunci = (strtolower($soal->kunci_jawaban) === strtolower($kunci));

                                $classOpsi = 'bg-slate-50 border-slate-200 text-slate-700';
                                if ($isKunci) {
                                    $classOpsi = 'bg-emerald-50 border-emerald-300 text-emerald-900 font-bold';
                                } elseif ($isUserChoice && !$isKunci) {
                                    $classOpsi = 'bg-rose-50 border-rose-300 text-rose-900 font-bold';
                                }
                            @endphp

                            <div class="flex items-center gap-3 p-3 rounded-xl border text-xs sm:text-sm {{ $classOpsi }}">
                                <span class="w-6 h-6 flex items-center justify-center rounded-lg border font-extrabold text-xs uppercase shadow-sm bg-white">
                                    {{ $kunci }}
                                </span>
                                <div class="flex-1">{!! $teksOpsi !!}</div>

                                @if($isKunci)
                                    <span class="text-xs font-bold text-emerald-600 bg-white px-2 py-0.5 rounded-md border border-emerald-200">Kunci Jawaban</span>
                                @elseif($isUserChoice)
                                    <span class="text-xs font-bold text-rose-600 bg-white px-2 py-0.5 rounded-md border border-rose-200">Jawaban Kamu</span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- JIKA SOAL ISIAN / ESSAY -->
                    <div class="p-3 bg-slate-50 rounded-xl border border-slate-200 text-xs sm:text-sm space-y-1">
                        <p class="text-slate-500 font-medium">Jawaban Kamu: <span class="font-bold text-slate-800">{{ $jawabanUser ?? '-' }}</span></p>
                        <p class="text-emerald-700 font-medium">Kunci Jawaban: <span class="font-bold">{{ $soal->kunci_jawaban }}</span></p>
                    </div>
                @endif

                <!-- KOTAK PEMBAHASAN -->
                <div class="mt-4 p-4 bg-sky-50/70 border border-sky-100 rounded-xl space-y-1.5">
                    <div class="flex items-center gap-1.5 text-sky-800 font-bold text-xs uppercase tracking-wider">
                        <span>💡</span> Pembahasan Soal
                    </div>
                    <div class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                        {!! $soal->pembahasan ?? '<i class="text-slate-400">Tidak ada pembahasan tertulis untuk soal ini.</i>' !!}
                    </div>
                </div>

            </div>
        @empty
            <div class="bg-white rounded-2xl p-8 text-center border border-slate-200 text-slate-400 text-xs font-bold">
                Tidak ada data soal untuk ditinjau.
            </div>
        @endforelse
    </div>

</div>
@endsection
