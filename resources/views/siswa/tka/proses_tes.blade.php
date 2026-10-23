<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Online - {{ $paket->judul ?? 'TKA' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Open Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-between select-none">

    <!-- Top Navbar Header -->
    <header class="bg-blue-900 text-white px-8 py-3 flex justify-between items-center shadow-md">
        <div class="flex items-center space-x-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9c/Logo_Tut_Wuri_Handayani.png" alt="Tut Wuri Handayani" class="h-10 w-auto">
            <div>
                <h1 class="font-bold text-base tracking-wide">PUSMENDIK - ANBK</h1>
                <p class="text-xs text-blue-200 uppercase font-semibold">{{ $paket->mapel ?? 'Mata Ujian' }}</p>
            </div>
        </div>
        <div class="flex items-center space-x-4 text-sm font-semibold">
            <span class="uppercase font-bold">{{ Auth::user()->name ?? 'PESERTA' }}</span>
            <div class="bg-blue-800 px-3 py-1 rounded text-xs">
                Sisa Waktu: <span id="timer" class="font-bold text-yellow-300">00:00:00</span>
            </div>
        </div>
    </header>

    <!-- Main Content Soal Area -->
    <main class="flex-grow max-w-7xl mx-auto w-full px-8 py-6 flex gap-6">

        @if($paket && $paket->soals && $paket->soals->count() > 0)

            <!-- Form Submit Semua Jawaban -->
            <form id="form-ujian" action="{{ route('siswa.tka.simpan', $paket->id) }}" method="POST" class="w-3/4 flex flex-col justify-between">
                @csrf
                <div class="bg-white rounded-xl shadow p-6 border border-gray-200 flex-grow">
                    @foreach($paket->soals as $idx => $soal)
                        <div class="soal-item {{ $idx === 0 ? '' : 'hidden' }}" id="soal-box-{{ $idx }}" data-index="{{ $idx }}">
                            <div class="flex justify-between items-center border-b pb-4 mb-4">
                                <h2 class="text-lg font-bold text-gray-800">SOAL NO: <span class="text-blue-600">{{ $idx + 1 }}</span></h2>
                                <span class="text-xs font-semibold px-2.5 py-1 bg-gray-100 text-gray-600 rounded">
                                    {{ strtoupper(str_replace('_', ' ', $soal->tipe_soal)) }}
                                </span>
                            </div>

                           {{-- Cek apakah kolom stimulus_gambar terisi --}}
@if (!empty($soal->stimulus_gambar))
    <div class="mb-4 flex justify-center bg-gray-50 p-2 border border-gray-200 rounded-lg">
        <img src="{{ route('berkas', ['path' => $soal->stimulus_gambar]) }}"
             alt="Gambar Stimulus"
             class="max-w-full max-h-96 rounded object-contain"
             onerror="this.onerror=null; this.src='{{ asset($soal->stimulus_gambar) }}';">
    </div>
@endif

                            <!-- Teks Stimulus / Wacana (Jika Ada) -->
                            @if(!empty($soal->stimulus))
                                <div class="text-gray-700 text-sm mb-4 bg-gray-50 p-4 rounded-lg border border-gray-200 leading-relaxed">
                                    {!! $soal->stimulus !!}
                                </div>
                            @endif

                            <!-- Pertanyaan Soal -->
                            <div class="text-gray-900 text-base leading-relaxed mb-6 font-semibold">
                                {!! $soal->pertanyaan !!}
                            </div>

                            @php
                                $opsiData = $soal->opsi_json;
                                if (is_string($opsiData)) {
                                    $opsiData = json_decode($opsiData, true);
                                }
                            @endphp

                            <!-- 1. TIPE SOAL: BENAR / SALAH -->
                            @if($soal->tipe_soal === 'benar_salah')
                                <p class="text-xs text-blue-600 font-semibold mb-3 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    Tentukan status Benar atau Salah untuk setiap pernyataan di bawah ini.
                                </p>

                                <div class="overflow-x-auto border rounded-xl border-gray-200">
                                    <table class="w-full text-sm text-left text-gray-700">
                                        <thead class="text-xs uppercase bg-gray-100 text-gray-700 border-b">
                                            <tr>
                                                <th class="py-3 px-4">Pernyataan</th>
                                                <th class="py-3 px-4 text-center w-24">Benar</th>
                                                <th class="py-3 px-4 text-center w-24">Salah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            @if(!empty($opsiData) && is_array($opsiData))
                                                @foreach($opsiData as $pKey => $pernyataan)
                                                    @php
                                                        $teksPernyataan = is_array($pernyataan) ? ($pernyataan['teks'] ?? reset($pernyataan)) : $pernyataan;
                                                    @endphp
                                                    <tr class="hover:bg-blue-50/40">
                                                        <td class="py-3 px-4 font-medium">{!! $teksPernyataan !!}</td>
                                                        <td class="py-3 px-4 text-center">
                                                            <input type="radio" name="jawaban[{{ $soal->id }}][{{ $pKey }}]" value="B" class="input-jawaban w-4 h-4 text-blue-600 border-gray-300">
                                                        </td>
                                                        <td class="py-3 px-4 text-center">
                                                            <input type="radio" name="jawaban[{{ $soal->id }}][{{ $pKey }}]" value="S" class="input-jawaban w-4 h-4 text-red-600 border-gray-300">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>

                            <!-- 2. TIPE SOAL: ISIAN -->
                            @elseif($soal->tipe_soal === 'isian')
                                <div class="mt-4">
                                    <textarea name="jawaban[{{ $soal->id }}]" class="input-jawaban w-full border border-gray-300 rounded-xl p-4 text-sm focus:ring-2 focus:ring-blue-500 outline-none" rows="4" placeholder="Ketikkan jawaban Anda di sini..."></textarea>
                                </div>

                            <!-- 3. TIPE SOAL: PG / PG KOMPLEKS -->
                            @elseif(!empty($opsiData) && is_array($opsiData))
                                @if($soal->tipe_soal === 'pg_kompleks')
                                    <p class="text-xs text-blue-600 font-semibold mb-3 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        Pilih lebih dari satu jawaban yang menurut Anda benar.
                                    </p>
                                @endif

                                <div class="space-y-3">
                                    @foreach($opsiData as $key => $val)
                                        @php
                                            $label = is_numeric($key) ? chr(65 + $key) : strtoupper($key);
                                            $teksOpsi = is_array($val) ? ($val['teks'] ?? $val['opsi'] ?? reset($val)) : $val;
                                        @endphp
                                        <label class="flex items-center p-4 border rounded-xl hover:bg-blue-50 cursor-pointer transition border-gray-200 shadow-sm">
                                            @if($soal->tipe_soal === 'pg_kompleks')
                                                <input type="checkbox" name="jawaban[{{ $soal->id }}][]" value="{{ $label }}" class="input-jawaban rounded w-4 h-4 text-blue-600 border-gray-300">
                                            @else
                                                <input type="radio" name="jawaban[{{ $soal->id }}]" value="{{ $label }}" class="input-jawaban w-4 h-4 text-blue-600 border-gray-300">
                                            @endif
                                            <span class="ml-3 text-sm text-gray-800">
                                                <strong class="mr-1.5 text-blue-900">{{ $label }}.</strong> {!! $teksOpsi !!}
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <!-- Nav Bawah -->
                <div class="flex justify-between items-center pt-4 mt-6 bg-white p-4 rounded-xl border border-gray-200 shadow">
                    <button type="button" id="btn-prev" onclick="changeSoal(-1)" class="bg-gray-500 text-white px-5 py-2 rounded-lg text-sm font-semibold hover:bg-gray-600 transition">
                        &laquo; Soal Sebelumnya
                    </button>
                    <label class="flex items-center space-x-2 bg-yellow-400 text-yellow-900 px-4 py-2 rounded-lg text-sm font-semibold cursor-pointer">
                        <input type="checkbox" id="chk-ragu" onchange="toggleRagu()" class="w-4 h-4 rounded text-yellow-600 border-gray-300">
                        <span>Ragu-Ragu</span>
                    </label>
                    <button type="button" id="btn-next" onclick="changeSoal(1)" class="bg-blue-600 text-white px-5 py-2 rounded-lg text-sm font-semibold hover:bg-blue-700 transition">
                        Soal Berikutnya &raquo;
                    </button>
                </div>
            </form>

            <!-- Right: Navigasi Nomor Soal -->
            <div class="w-1/4 bg-white rounded-xl shadow p-5 border border-gray-200 flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-sm text-gray-700 mb-4 border-b pb-2">Navigasi Soal</h3>
                    <div class="grid grid-cols-4 gap-2 max-h-[400px] overflow-y-auto pr-1">
                        @foreach($paket->soals as $idx => $s)
                            <button type="button"
                                    id="nav-btn-{{ $idx }}"
                                    onclick="goToSoal({{ $idx }})"
                                    class="nav-btn w-full py-2 text-xs font-bold border rounded text-center transition bg-gray-50 text-gray-700 border-gray-200 hover:bg-gray-200">
                                {{ sprintf('%02d', $idx + 1) }}
                            </button>
                        @endforeach
                    </div>
                </div>

                <div class="pt-6 border-t mt-4">
                    <button type="button" onclick="submitUjian()" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2.5 rounded-lg shadow text-xs transition">
                        Selesai Ujian
                    </button>
                </div>
            </div>
        @else
            <div class="w-full text-center py-12 bg-white rounded-xl border p-6">
                <p class="text-gray-500">Tidak ada soal yang tersedia pada paket ini.</p>
            </div>
        @endif

    </main>

    <script>
        let currentSoalIndex = 0;
        const totalSoal = {{ ($paket && $paket->soals) ? $paket->soals->count() : 0 }};
        const raguState = new Array(totalSoal).fill(false);

        // Timer Setup
        let durasiDetik = {{ ($paket->durasi_menit ?? 60) * 60 }};
        const timerElement = document.getElementById('timer');

        function startTimer() {
            const interval = setInterval(() => {
                let jam = Math.floor(durasiDetik / 3600);
                let menit = Math.floor((durasiDetik % 3600) / 60);
                let detik = durasiDetik % 60;

                jam = jam < 10 ? '0' + jam : jam;
                menit = menit < 10 ? '0' + menit : menit;
                detik = detik < 10 ? '0' + detik : detik;

                if (timerElement) {
                    timerElement.textContent = `${jam}:${menit}:${detik}`;
                }

                if (durasiDetik <= 0) {
                    clearInterval(interval);
                    alert('Waktu ujian telah habis!');
                    document.getElementById('form-ujian').submit();
                }
                durasiDetik--;
            }, 1000);
        }

        function showSoal(index) {
            if (index < 0 || index >= totalSoal) return;

            document.querySelectorAll('.soal-item').forEach(el => el.classList.add('hidden'));

            const currentBox = document.getElementById(`soal-box-${index}`);
            if (currentBox) {
                currentBox.classList.remove('hidden');
            }

            currentSoalIndex = index;

            const chkRagu = document.getElementById('chk-ragu');
            if (chkRagu) chkRagu.checked = raguState[currentSoalIndex];

            const btnPrev = document.getElementById('btn-prev');
            const btnNext = document.getElementById('btn-next');

            if (btnPrev) {
                btnPrev.disabled = (currentSoalIndex === 0);
                btnPrev.classList.toggle('opacity-50', currentSoalIndex === 0);
            }

            if (btnNext) {
                btnNext.disabled = (currentSoalIndex === totalSoal - 1);
                btnNext.classList.toggle('opacity-50', currentSoalIndex === totalSoal - 1);
            }

            updateNavButtons();
        }

        function changeSoal(step) {
            goToSoal(currentSoalIndex + step);
        }

        function goToSoal(index) {
            showSoal(index);
        }

        function toggleRagu() {
            raguState[currentSoalIndex] = document.getElementById('chk-ragu').checked;
            updateNavButtons();
        }

        function updateNavButtons() {
            for (let i = 0; i < totalSoal; i++) {
                const btn = document.getElementById(`nav-btn-${i}`);
                if (!btn) continue;

                btn.className = 'nav-btn w-full py-2 text-xs font-bold border rounded text-center transition ';

                const isCurrent = (i === currentSoalIndex);
                const isRagu = raguState[i];

                const hasRadio = document.querySelector(`#soal-box-${i} input[type="radio"]:checked`);
                const hasCheckbox = document.querySelector(`#soal-box-${i} input[type="checkbox"]:checked`);
                const hasTextarea = document.querySelector(`#soal-box-${i} textarea`) && document.querySelector(`#soal-box-${i} textarea`).value.trim() !== '';

                const hasAnswer = hasRadio || hasCheckbox || hasTextarea;

                if (isRagu) {
                    btn.className += 'bg-yellow-400 text-yellow-900 border-yellow-500 ';
                } else if (hasAnswer) {
                    btn.className += 'bg-green-600 text-white border-green-600 ';
                } else {
                    btn.className += 'bg-gray-50 text-gray-700 border-gray-200 hover:bg-gray-200 ';
                }

                if (isCurrent) {
                    btn.className += 'ring-2 ring-offset-1 ring-blue-600 ';
                }
            }
        }

        function submitUjian() {
            if (confirm('Apakah Anda yakin ingin menyelesaikan ujian ini?')) {
                document.getElementById('form-ujian').submit();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.input-jawaban').forEach(input => {
                input.addEventListener('change', updateNavButtons);
                input.addEventListener('input', updateNavButtons);
            });
            showSoal(0);
            startTimer();
        });
    </script>
</body>
</html>
