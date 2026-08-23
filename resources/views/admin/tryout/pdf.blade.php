<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Soal - {{ $tryout->judul }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media print {
            .no-print {
                display: none !important;
            }
            body {
                background: #ffffff !important;
                padding: 0 !important;
            }
            .print-container {
                box-shadow: none !important;
                max-width: 100% !important;
                padding: 0 !important;
                border: none !important;
            }
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen py-8 text-gray-800">

    <div class="max-w-4xl mx-auto mb-6 flex justify-between items-center px-4 no-print">
        <a href="{{ url()->previous() }}" class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-lg font-bold text-gray-700 shadow-sm border hover:bg-gray-50 transition">
            ← Kembali
        </a>
        <div class="flex gap-2">
            <button onclick="window.print()" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-5 py-2 rounded-lg shadow transition flex items-center gap-2">
                🖨️ Cetak / Simpan ke PDF
            </button>
        </div>
    </div>

    <div class="max-w-4xl mx-auto bg-white p-10 rounded-xl shadow-md border border-gray-200 print-container">

        <div class="text-center border-b-2 border-gray-800 pb-4 mb-6">
            <h1 class="text-2xl font-black uppercase tracking-wide text-gray-900">LEMBAR SOAL UJIAN / TRYOUT</h1>
            <h2 class="text-xl font-bold text-sky-600 mt-1">{{ $tryout->judul }}</h2>

            <div class="flex justify-center flex-wrap gap-x-6 gap-y-1 text-sm font-semibold text-gray-600 mt-3">
                <span>Kelas: <strong class="text-gray-900">{{ $tryout->kelas->nama_kelas ?? $tryout->kelas_id }}</strong></span>
                <span>•</span>
                <span>Durasi: <strong class="text-gray-900">{{ $tryout->durasi }} Menit</strong></span>
                <span>•</span>
                <span>Pengajar: <strong class="text-gray-900">{{ $tryout->pembuat->name ?? $tryout->tentor->name ?? 'Pengajar' }}</strong></span>
            </div>
        </div>

        <div class="space-y-6">
            @forelse($tryout->soals as $index => $soal)
                <div class="border-b border-gray-200 pb-5 last:border-b-0">

                    <div class="flex justify-between items-start gap-4 mb-3">

                        <div class="table w-full">
                            <div class="table-row">
                                <div class="table-cell w-8 font-bold text-base text-gray-900 align-top pr-2 select-none">
                                    {{ $index + 1 }}.
                                </div>
                                <div class="table-cell font-medium text-base text-gray-900 align-top leading-normal whitespace-pre-line">
                                    {{ trim($soal->pertanyaan) }}
                                </div>
                            </div>
                        </div>

                        <span class="text-xs px-2.5 py-1 rounded-md h-fit uppercase font-bold border no-print shrink-0 whitespace-nowrap
                            @if($soal->tipe_soal === 'pg') bg-blue-50 text-blue-700 border-blue-200
                            @elseif($soal->tipe_soal === 'pg_kompleks') bg-purple-50 text-purple-700 border-purple-200
                            @elseif($soal->tipe_soal === 'isian') bg-amber-50 text-amber-700 border-amber-200
                            @else bg-gray-50 text-gray-700 border-gray-200 @endif">
                            @if($soal->tipe_soal === 'pg') Pilihan Ganda
                            @elseif($soal->tipe_soal === 'pg_kompleks') PG Kompleks
                            @else {{ strtoupper($soal->tipe_soal) }} @endif
                            ({{ $soal->bobot ?? 1 }} PT)
                        </span>
                    </div>

                    @php
                        $pilihan = is_string($soal->pilihan) ? json_decode($soal->pilihan, true) : $soal->pilihan;
                    @endphp

                    @if(($soal->tipe_soal === 'pg' || $soal->tipe_soal === 'pg_kompleks') && $pilihan && is_array($pilihan))
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-2 pl-8">
                            @foreach($pilihan as $kunci => $opsi)
                                <div class="flex items-start gap-2 text-sm text-gray-700">
                                    @if($soal->tipe_soal === 'pg_kompleks')
                                        <span class="text-purple-600 font-bold select-none">[ ]</span>
                                    @else
                                        <span class="text-blue-600 font-bold select-none">( )</span>
                                    @endif

                                    <span class="font-bold uppercase min-w-[16px]">{{ $kunci }}.</span>
                                    <span class="flex-1">{{ $opsi }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif

                    @if(!empty($soal->kunci_jawaban) || !empty($soal->pembahasan))
                        @php
                            $kunciFormatted = $soal->kunci_jawaban;
                            if (is_string($kunciFormatted)) {
                                $decoded = json_decode($kunciFormatted, true);
                                if (is_array($decoded)) {
                                    $kunciFormatted = implode(', ', $decoded);
                                }
                            } elseif (is_array($kunciFormatted)) {
                                $kunciFormatted = implode(', ', $kunciFormatted);
                            }
                        @endphp

                        <div class="mt-3 ml-8 p-3 bg-amber-50 border border-amber-200 rounded-lg text-xs no-print">
                            @if(!empty($soal->kunci_jawaban))
                                <p class="font-bold text-amber-900">
                                    🔑 Kunci Jawaban:
                                    <span class="uppercase text-emerald-700 font-extrabold bg-emerald-100 px-2 py-0.5 rounded">
                                        {{ $kunciFormatted }}
                                    </span>
                                </p>
                            @endif
                            @if(!empty($soal->pembahasan))
                                <p class="text-amber-800 mt-1.5">
                                    <strong>💡 Pembahasan:</strong> {{ $soal->pembahasan }}
                                </p>
                            @endif
                        </div>
                    @endif

                </div>
            @empty
                <div class="text-center py-12 text-gray-400">
                    <p class="text-lg font-semibold">Belum ada soal yang ditambahkan pada paket ujian ini.</p>
                </div>
            @endforelse
        </div>

    </div>

</body>
</html>
