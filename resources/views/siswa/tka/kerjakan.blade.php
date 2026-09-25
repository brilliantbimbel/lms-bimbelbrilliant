<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian ANBK / TKA - {{ $paket->judul }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Sans Inter / Roboto untuk kemiripan UI Pusmendik -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f3f4f6; }
        .font-size-small { font-size: 13px !important; }
        .font-size-medium { font-size: 15px !important; }
        .font-size-large { font-size: 18px !important; }
    </style>
</head>
<body class="bg-gray-100 flex flex-col h-screen overflow-hidden select-none">

    <!-- HEADER RESMI ANBK / TKA -->
    <header class="bg-[#1e3a8a] text-white px-6 py-3 flex justify-between items-center shadow-md">
        <div class="flex items-center space-x-3">
            <div class="bg-yellow-400 text-blue-900 font-black text-xs px-2 py-1 rounded">ANBK / TKA</div>
            <h1 class="font-bold text-sm md:text-base tracking-wide">{{ $paket->judul }}</h1>
        </div>
        <div class="flex items-center space-x-6">
            <!-- Kontrol Ukuran Teks -->
            <div class="hidden sm:flex items-center space-x-1 bg-blue-900/50 px-2 py-1 rounded border border-blue-700 text-xs">
                <span class="mr-1 text-gray-300">Ukuran Teks:</span>
                <button onclick="changeFontSize('small')" class="px-2 py-0.5 bg-blue-800 hover:bg-blue-700 rounded font-bold">A</button>
                <button onclick="changeFontSize('medium')" class="px-2 py-0.5 bg-blue-800 hover:bg-blue-700 rounded font-bold text-sm">A</button>
                <button onclick="changeFontSize('large')" class="px-2 py-0.5 bg-blue-800 hover:bg-blue-700 rounded font-bold text-base">A</button>
            </div>
            <!-- Timer Sisa Waktu -->
            <div class="bg-yellow-400 text-blue-950 font-bold px-3 py-1 rounded text-sm flex items-center space-x-2 shadow">
                <span>⏱️ Sisa Waktu:</span>
                <span id="timer" class="font-mono text-base">00:00:00</span>
            </div>
        </div>
    </header>

    <!-- AREA UTAMA UJIAN -->
    <form id="form-ujian" action="{{ route('siswa.tka.simpan', $sesi->id) }}" method="POST" class="flex-1 flex overflow-hidden">
        @csrf

        <!-- KOLOM KIRI: WACANA / STIMULUS & SOAL -->
        <div class="flex-1 flex flex-col md:flex-row overflow-hidden p-4 gap-4">

            <!-- STIMULUS / WACANA (Jika Ada) -->
            <div id="stimulus-container" class="md:w-1/2 bg-white border border-gray-300 rounded-lg p-5 overflow-y-auto shadow-sm hidden">
                <div class="border-b pb-2 mb-3 flex items-center justify-between">
                    <span class="text-xs font-bold uppercase text-blue-800 tracking-wider">📄 Wacana / Informasi Stimulus</span>
                </div>
                <div id="stimulus-text" class="text-gray-800 leading-relaxed font-size-medium whitespace-pre-line"></div>
                <img id="stimulus-image" class="mt-4 max-w-full rounded border hidden mx-auto" alt="Gambar Stimulus">
            </div>

            <!-- PERTANYAAN & OPSI JAWABAN -->
            <div id="question-container" class="w-full bg-white border border-gray-300 rounded-lg p-6 overflow-y-auto shadow-sm flex flex-col justify-between">
                <div>
                    <!-- Header Soal -->
                    <div class="flex justify-between items-center border-b pb-3 mb-4">
                        <span class="text-base font-bold text-blue-900" id="label-nomor-soal">Soal No. 1</span>
                        <span class="text-xs bg-blue-50 text-blue-700 border border-blue-200 px-2.5 py-1 rounded-full font-semibold uppercase" id="label-tipe-soal">Pilihan Ganda</span>
                    </div>

                    <!-- Teks Pertanyaan -->
                    <div id="pertanyaan-text" class="text-gray-900 font-medium mb-6 font-size-medium leading-relaxed"></div>

                    <!-- Container Opsi / Input Jawaban -->
                    <div id="opsi-container" class="space-y-3 font-size-medium"></div>
                </div>

                <!-- FOOTER NAVIGASI SOAL -->
                <div class="border-t pt-4 mt-6 flex justify-between items-center bg-white">
                    <button type="button" id="btn-prev" onclick="navigateSoal(-1)" class="px-5 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold text-sm rounded-lg transition disabled:opacity-40">
                        &laquo; Sebelumnya
                    </button>

                    <!-- Checkbox Ragu-Ragu (Ciri Khas ANBK) -->
                    <label class="flex items-center space-x-2 bg-yellow-100 hover:bg-yellow-200 text-yellow-900 px-4 py-2 rounded-lg cursor-pointer border border-yellow-300 transition">
                        <input type="checkbox" id="check-ragu" onchange="toggleRagu()" class="w-4 h-4 text-yellow-600 rounded">
                        <span class="text-sm font-bold">Ragu - Ragu</span>
                    </label>

                    <button type="button" id="btn-next" onclick="navigateSoal(1)" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm rounded-lg transition">
                        Berikutnya &raquo;
                    </button>

                    <button type="button" id="btn-finish" onclick="konfirmasiSelesai()" class="px-5 py-2 bg-green-600 hover:bg-green-700 text-white font-bold text-sm rounded-lg transition hidden">
                        Selesai Ujian ✔
                    </button>
                </div>
            </div>
        </div>

        <!-- KOLOM KANAN: NAVIGASI NOMOR SOAL (SIDEBAR ANBK) -->
        <div class="w-72 bg-white border-l border-gray-300 flex flex-col p-4 shadow-md hidden md:flex">
            <h3 class="font-bold text-sm text-gray-700 border-b pb-2 mb-3 flex items-center justify-between">
                <span>Navigasi Soal</span>
                <span class="text-xs font-normal text-gray-500" id="counter-terjawab">0 / {{ count($soals) }} Terjawab</span>
            </h3>

            <!-- Grid Nomor Soal -->
            <div class="grid grid-cols-5 gap-2 overflow-y-auto flex-1 pr-1" id="grid-nomor-soal">
                @foreach($soals as $index => $s)
                    <button type="button" id="nav-btn-{{ $index }}" onclick="jumpToSoal({{ $index }})"
                        class="h-10 border-2 rounded-lg font-bold text-xs flex flex-col items-center justify-center transition bg-white border-gray-300 text-gray-700 hover:border-blue-500">
                        <span>{{ $index + 1 }}</span>
                        <span id="nav-status-{{ $index }}" class="text-[9px] uppercase font-mono"></span>
                    </button>
                @endforeach
            </div>

            <!-- Keterangan Warna Status -->
            <div class="border-t pt-3 mt-3 text-[11px] space-y-1.5 text-gray-600">
                <div class="flex items-center space-x-2">
                    <span class="w-3 h-3 bg-blue-600 rounded"></span>
                    <span>Sudah Dijawab</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="w-3 h-3 bg-yellow-400 rounded"></span>
                    <span>Ragu-Ragu</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="w-3 h-3 bg-white border border-gray-400 rounded"></span>
                    <span>Belum Dijawab</span>
                </div>
            </div>
        </div>
    </form>

    <!-- JAVASCRIPT LOGIK ANBK -->
    <script>
        const soals = @json($soals);
        let currentIndex = 0;
        let userAnswers = @json($jawabanSiswa ?? []); // Penyimpanan jawaban sementara
        let raguStatus = {}; // Status ragu-ragu
        let totalWaktuDetik = {{ $sisaWaktuDetik ?? 7200 }}; // Default 2 jam

        document.addEventListener('DOMContentLoaded', () => {
            renderSoal(0);
            startTimer();
        });

        // 1. Timer Sisa Waktu
        function startTimer() {
            const timerEl = document.getElementById('timer');
            const interval = setInterval(() => {
                if (totalWaktuDetik <= 0) {
                    clearInterval(interval);
                    alert('Waktu ujian telah habis! Jawaban Anda akan otomatis tersimpan.');
                    document.getElementById('form-ujian').submit();
                    return;
                }
                totalWaktuDetik--;
                const hours = Math.floor(totalWaktuDetik / 3600);
                const minutes = Math.floor((totalWaktuDetik % 3600) / 60);
                const seconds = totalWaktuDetik % 60;
                timerEl.textContent =
                    `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            }, 1000);
        }

        // 2. Render Tampilan Soal
        function renderSoal(index) {
            currentIndex = index;
            const s = soals[index];

            // Render Nomor & Tipe
            document.getElementById('label-nomor-soal').textContent = `Soal No. ${index + 1}`;
            document.getElementById('label-tipe-soal').textContent = formatTipeSoal(s.tipe_soal);

            // Render Stimulus / Wacana
            const stimContainer = document.getElementById('stimulus-container');
            const qContainer = document.getElementById('question-container');

            if (s.stimulus || s.stimulus_gambar) {
                stimContainer.classList.remove('hidden');
                qContainer.classList.remove('md:w-full');
                qContainer.classList.add('md:w-1/2');
                document.getElementById('stimulus-text').textContent = s.stimulus || '';

                const imgEl = document.getElementById('stimulus-image');
                if (s.stimulus_gambar) {
                    imgEl.src = `/storage/${s.stimulus_gambar}`;
                    imgEl.classList.remove('hidden');
                } else {
                    imgEl.classList.add('hidden');
                }
            } else {
                stimContainer.classList.add('hidden');
                qContainer.classList.remove('md:w-1/2');
                qContainer.classList.add('md:w-full');
            }

            // Render Pertanyaan
            document.getElementById('pertanyaan-text').textContent = s.pertanyaan;

            // Render Opsi Jawaban Berdasarkan Tipe Soal
            renderOpsi(s);

            // Sync Checkbox Ragu-Ragu
            document.getElementById('check-ragu').checked = !!raguStatus[s.id];

            // Navigasi Tombol
            document.getElementById('btn-prev').disabled = index === 0;
            if (index === soals.length - 1) {
                document.getElementById('btn-next').classList.add('hidden');
                document.getElementById('btn-finish').classList.remove('hidden');
            } else {
                document.getElementById('btn-next').classList.remove('hidden');
                document.getElementById('btn-finish').classList.add('hidden');
            }

            highlightNavGrid();
        }

        // 3. Render Komponen Opsi (PG, Kompleks, Benar-Salah, Isian)
        function renderOpsi(s) {
            const container = document.getElementById('opsi-container');
            container.innerHTML = '';
            const savedAns = userAnswers[s.id];

            if (s.tipe_soal === 'pg') {
                Object.entries(s.opsi_json || {}).forEach(([key, val]) => {
                    const checked = savedAns === key ? 'checked' : '';
                    container.innerHTML += `
                        <label class="flex items-center space-x-3 p-3 rounded-lg border border-gray-200 hover:bg-blue-50/50 cursor-pointer transition ${checked ? 'bg-blue-50 border-blue-400' : ''}">
                            <input type="radio" name="jawaban[${s.id}]" value="${key}" ${checked} onchange="saveAnswer('${s.id}', '${key}')" class="w-4 h-4 text-blue-600">
                            <span class="font-bold text-gray-700 w-5">${key}.</span>
                            <span class="text-gray-800">${val}</span>
                        </label>`;
                });
            }
            else if (s.tipe_soal === 'pg_kompleks') {
                const arrAns = Array.isArray(savedAns) ? savedAns : [];
                Object.entries(s.opsi_json || {}).forEach(([key, val]) => {
                    const checked = arrAns.includes(key) ? 'checked' : '';
                    container.innerHTML += `
                        <label class="flex items-center space-x-3 p-3 rounded-lg border border-gray-200 hover:bg-blue-50/50 cursor-pointer transition ${checked ? 'bg-blue-50 border-blue-400' : ''}">
                            <input type="checkbox" name="jawaban[${s.id}][]" value="${key}" ${checked} onchange="saveComplexAnswer('${s.id}')" class="w-4 h-4 text-blue-600 rounded">
                            <span class="font-bold text-gray-700 w-5">${key}.</span>
                            <span class="text-gray-800">${val}</span>
                        </label>`;
                });
            }
            else if (s.tipe_soal === 'benar_salah') {
                let html = `<table class="w-full text-left border-collapse border border-gray-200 rounded-lg overflow-hidden">
                    <thead class="bg-gray-100 text-xs font-bold text-gray-600 uppercase">
                        <tr>
                            <th class="p-3 border">Pernyataan</th>
                            <th class="p-3 border text-center w-20">Benar</th>
                            <th class="p-3 border text-center w-20">Salah</th>
                        </tr>
                    </thead>
                    <tbody>`;
                (s.opsi_json || []).forEach((pernyataan, idx) => {
                    const ansVal = savedAns ? savedAns[idx] : '';
                    html += `
                        <tr class="border-t text-sm">
                            <td class="p-3 border">${pernyataan}</td>
                            <td class="p-3 border text-center">
                                <input type="radio" name="jawaban[${s.id}][${idx}]" value="B" ${ansVal === 'B' ? 'checked' : ''} onchange="saveBsAnswer('${s.id}')" class="w-4 h-4 text-blue-600">
                            </td>
                            <td class="p-3 border text-center">
                                <input type="radio" name="jawaban[${s.id}][${idx}]" value="S" ${ansVal === 'S' ? 'checked' : ''} onchange="saveBsAnswer('${s.id}')" class="w-4 h-4 text-blue-600">
                            </td>
                        </tr>`;
                });
                html += `</tbody></table>`;
                container.innerHTML = html;
            }
            else if (s.tipe_soal === 'isian') {
                container.innerHTML = `
                    <textarea name="jawaban[${s.id}]" rows="4" oninput="saveAnswer('${s.id}', this.value)"
                        class="w-full border rounded-lg p-3 text-sm focus:ring-2 focus:ring-blue-500" placeholder="Tuliskan jawaban Anda di sini...">${savedAns || ''}</textarea>`;
            }
        }

        // 4. Pengelolaan Simpan Jawaban Ke JS State
        function saveAnswer(soalId, val) {
            userAnswers[soalId] = val;
            updateCounter();
            highlightNavGrid();
        }

        function saveComplexAnswer(soalId) {
            const checkedBoxes = document.querySelectorAll(`input[name="jawaban[${soalId}][]"]:checked`);
            userAnswers[soalId] = Array.from(checkedBoxes).map(cb => cb.value);
            updateCounter();
            highlightNavGrid();
        }

        function saveBsAnswer(soalId) {
            const bsInputs = document.querySelectorAll(`input[name^="jawaban[${soalId}]"]:checked`);
            let bsObj = {};
            bsInputs.forEach((input) => {
                const match = input.name.match(/\[(\d+)\]$/);
                if (match) bsObj[match[1]] = input.value;
            });
            userAnswers[soalId] = bsObj;
            updateCounter();
            highlightNavGrid();
        }

        function toggleRagu() {
            const s = soals[currentIndex];
            raguStatus[s.id] = document.getElementById('check-ragu').checked;
            highlightNavGrid();
        }

        // 5. Navigasi & Helper UI
        function navigateSoal(step) {
            const nextIdx = currentIndex + step;
            if (nextIdx >= 0 && nextIdx < soals.length) {
                renderSoal(nextIdx);
            }
        }

        function jumpToSoal(idx) {
            renderSoal(idx);
        }

        function highlightNavGrid() {
            soals.forEach((s, idx) => {
                const btn = document.getElementById(`nav-btn-${idx}`);
                const isCurrent = idx === currentIndex;
                const hasAnswer = userAnswers[s.id] && Object.keys(userAnswers[s.id]).length > 0;
                const isRagu = !!raguStatus[s.id];

                btn.className = "h-10 border-2 rounded-lg font-bold text-xs flex items-center justify-center transition ";

                if (isCurrent) {
                    btn.classList.add('ring-2', 'ring-blue-500', 'ring-offset-1');
                }

                if (isRagu) {
                    btn.classList.add('bg-yellow-400', 'border-yellow-500', 'text-blue-950');
                } else if (hasAnswer) {
                    btn.classList.add('bg-blue-600', 'border-blue-600', 'text-white');
                } else {
                    btn.classList.add('bg-white', 'border-gray-300', 'text-gray-700');
                }
            });
        }

        function updateCounter() {
            const count = Object.keys(userAnswers).filter(k => userAnswers[k] && Object.keys(userAnswers[k]).length > 0).length;
            document.getElementById('counter-terjawab').textContent = `${count} / ${soals.length} Terjawab`;
        }

        function changeFontSize(size) {
            const qText = document.getElementById('pertanyaan-text');
            const opsiCont = document.getElementById('opsi-container');
            const stimText = document.getElementById('stimulus-text');

            [qText, opsiCont, stimText].forEach(el => {
                if (el) {
                    el.classList.remove('font-size-small', 'font-size-medium', 'font-size-large');
                    el.classList.add(`font-size-${size}`);
                }
            });
        }

        function formatTipeSoal(tipe) {
            const map = {
                'pg': 'Pilihan Ganda',
                'pg_kompleks': 'PG Kompleks',
                'benar_salah': 'Benar / Salah',
                'isian': 'Isian / Uraian'
            };
            return map[tipe] || tipe;
        }

        function konfirmasiSelesai() {
            if (confirm('Apakah Anda yakin ingin menyelesaikan ujian ini? Pastikan semua soal telah diperiksa.')) {
                document.getElementById('form-ujian').submit();
            }
        }
    </script>
</body>
</html>
