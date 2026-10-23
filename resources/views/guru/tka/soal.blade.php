@extends('layouts.guru')

















@section('content')
<div class="p-6">
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 text-xs rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 text-xs rounded-lg space-y-1">
            <p class="font-bold">Gagal menyimpan soal:</p>
            <ul class="list-disc pl-4">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <a href="{{ route('guru.tka.index') }}" class="text-xs text-blue-600 hover:underline">&laquo; Kembali ke Paket</a>
            <h1 class="text-xl font-bold text-gray-800">Soal: {{ $paket->judul }}</h1>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Form Input Soal (Kiri - 2 Kolom) -->
        <div class="lg:col-span-2 bg-white border rounded-xl p-5 shadow-sm">
            <h2 class="font-bold text-base mb-4 border-b pb-2">Tambah Soal Baru</h2>

            <form action="{{ route('guru.tka.soal.store', $paket->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Tipe Soal ANBK</label>
                    <select name="tipe_soal" id="select-tipe" onchange="switchTipeSoal(this.value)" class="w-full border rounded-lg p-2 text-sm font-semibold text-blue-900 bg-blue-50">
                        <option value="pg">Pilihan Ganda Biasa</option>
                        <option value="pg_kompleks">Pilihan Ganda Kompleks (Centang Banyak)</option>
                        <option value="benar_salah">Tabel Benar / Salah</option>
                        <option value="isian">Isian Singkat / Uraian</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Stimulus / Wacana Teks (Opsional)</label>
                    <textarea name="stimulus" rows="2" class="w-full border rounded-lg p-2 text-sm" placeholder="Teks wacana, bacaan, atau informasi stimulus..."></textarea>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Upload Gambar Stimulus / Infografis (Opsional)</label>
                    <input type="file" name="stimulus_gambar" accept="image/*" class="w-full border rounded-lg p-2 text-xs text-gray-600 bg-white">
                    <p class="text-[10px] text-gray-400 mt-1">*Format: JPG, PNG, WEBP. Maksimal 2MB.</p>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Pertanyaan</label>
                    <textarea name="pertanyaan" required rows="3" class="w-full border rounded-lg p-2 text-sm" placeholder="Tuliskan pertanyaan di sini..."></textarea>
                </div>

                <!-- OPSI DYNAMIC CONTAINER -->
                <div id="dynamic-opsi-container" class="border p-4 rounded-lg bg-gray-50 space-y-3">
                    <p class="text-xs font-bold text-gray-700">Pilihan Jawaban & Kunci PG</p>
                    <div class="space-y-2">
                        @foreach(['A', 'B', 'C', 'D'] as $opt)
                        <div class="flex items-center space-x-2">
                            <input type="radio" name="kunci_pg" value="{{ $opt }}" required>
                            <span class="text-xs font-bold w-4">{{ $opt }}</span>
                            <input type="text" name="opsi_pg[{{ $opt }}]" class="flex-1 border rounded p-1.5 text-sm" placeholder="Opsi {{ $opt }}">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex justify-between items-center pt-2">
                    <div class="w-1/3">
                        <label class="block text-xs font-semibold text-gray-600 mb-1">Bobot Nilai</label>
                        <input type="number" name="bobot_nilai" value="1" min="1" class="w-full border rounded-lg p-2 text-sm">
                    </div>
                    <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg text-sm hover:bg-blue-700">Simpan Soal</button>
                </div>
            </form>
        </div>

        <!-- Daftar Soal Terbuat (Kanan - 1 Kolom) -->
        <div class="bg-white border rounded-xl p-5 shadow-sm">
            <div class="flex justify-between items-center mb-4 border-b pb-2">
                <h2 class="font-bold text-base text-gray-800">Daftar Soal ({{ $soals->count() }})</h2>
                <span class="text-[10px] bg-blue-50 text-blue-600 px-2 py-0.5 rounded-full font-semibold">Monitor</span>
            </div>

            <div class="space-y-2 max-h-[550px] overflow-y-auto pr-1">
                @forelse($soals as $index => $s)
                    <div class="border rounded-lg p-2.5 bg-gray-50 hover:bg-white hover:shadow-sm transition text-xs space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="font-bold text-gray-800">Soal #{{ $index + 1 }} <span class="text-[10px] text-blue-600 uppercase font-mono">({{ $s->tipe_soal }})</span></span>

                            <div class="flex items-center space-x-1">
                                <button type="button" onclick="document.getElementById('modalDetail-{{ $s->id }}').classList.remove('hidden')" class="bg-blue-50 text-blue-600 hover:bg-blue-100 p-1.5 rounded" title="Lihat Detail">👁️</button>
                                <button type="button" onclick="document.getElementById('modalEdit-{{ $s->id }}').classList.remove('hidden')" class="bg-amber-50 text-amber-600 hover:bg-amber-100 p-1.5 rounded" title="Edit Soal">✏️</button>
                                <form action="{{ route('guru.tka.soal.destroy', $s->id) }}" method="POST" onsubmit="return confirm('Hapus soal ini?')" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="bg-red-50 text-red-600 hover:bg-red-100 p-1.5 rounded" title="Hapus Soal">🗑️</button>
                                </form>
                            </div>
                        </div>

                        <p class="text-gray-600 truncate font-medium">{{ $s->pertanyaan }}</p>
                    </div>

                    <!-- MODAL DETAIL SOAL -->
                    <div id="modalDetail-{{ $s->id }}" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center z-50 p-4">
                        <div class="bg-white rounded-xl p-6 w-full max-w-xl max-h-[85vh] overflow-y-auto space-y-4 shadow-xl">
                            <div class="flex justify-between items-center border-b pb-2">
                                <h3 class="font-bold text-base text-gray-800">Detail Soal #{{ $index + 1 }}</h3>
                                <button type="button" onclick="document.getElementById('modalDetail-{{ $s->id }}').classList.add('hidden')" class="text-gray-400 hover:text-gray-600 font-bold text-lg">&times;</button>
                            </div>

                            @if($s->stimulus)
                                <div class="p-3 bg-amber-50 border border-amber-200 rounded-lg text-xs text-amber-900">
                                    <span class="font-bold block mb-1">Stimulus Teks:</span>
                                    <p class="whitespace-pre-line">{{ $s->stimulus }}</p>
                                </div>
                            @endif

                            @if($s->stimulus_gambar)
                                <div class="p-3 bg-gray-50 border rounded-lg text-center">
                                    <span class="font-bold block text-xs text-gray-600 mb-2 text-left">Gambar / Infografis:</span>
                                    <img src="{{ route('berkas', ['path' => $s->stimulus_gambar]) }}" class="max-h-64 mx-auto rounded border shadow-sm">
                                </div>
                            @endif

                            <div class="p-3 bg-blue-50/50 border border-blue-100 rounded-lg text-xs">
                                <span class="font-bold block text-blue-900 mb-1">Pertanyaan:</span>
                                <p class="font-semibold text-gray-800 whitespace-pre-line">{{ $s->pertanyaan }}</p>
                            </div>

                            <!-- PREVIEW OPSI & KUNCI JAWABAN -->
                            <div class="p-3 border rounded-lg bg-gray-50 text-xs space-y-2">
                                <span class="font-bold text-gray-700 block">Pilihan Jawaban & Kunci:</span>

                                @if(is_array($s->opsi_json))
                                    <div class="space-y-1.5">
                                        @foreach($s->opsi_json as $key => $val)
                                            @php
                                                $isKunci = is_array($s->kunci_json) ? in_array($key, $s->kunci_json) : ($s->kunci_json == $key);
                                            @endphp
                                            <div class="p-2 rounded border text-xs flex items-center justify-between {{ $isKunci ? 'bg-green-50 border-green-300 font-semibold text-green-900' : 'bg-white border-gray-200 text-gray-700' }}">
                                                <span><strong class="mr-1">{{ is_numeric($key) ? ($key+1) : $key }}.</strong> {{ $val }}</span>
                                                @if($isKunci)
                                                    <span class="text-[10px] bg-green-200 text-green-800 px-1.5 py-0.5 rounded font-bold">Kunci Jawaban</span>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="p-2 bg-green-50 border border-green-200 rounded text-green-900 font-medium">
                                        {{ is_array($s->kunci_json) ? json_encode($s->kunci_json) : $s->kunci_json }}
                                    </div>
                                @endif
                            </div>

                            <div class="flex justify-end pt-2 border-t">
                                <button type="button" onclick="document.getElementById('modalDetail-{{ $s->id }}').classList.add('hidden')" class="px-4 py-1.5 bg-gray-200 text-gray-700 text-xs font-semibold rounded-lg hover:bg-gray-300">Tutup</button>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL EDIT SOAL -->
                    <div id="modalEdit-{{ $s->id }}" class="fixed inset-0 bg-black/50 hidden flex items-center justify-center z-50 p-4">
                        <div class="bg-white rounded-xl p-6 w-full max-w-xl max-h-[85vh] overflow-y-auto space-y-4 shadow-xl text-left">
                            <div class="flex justify-between items-center border-b pb-2">
                                <h3 class="font-bold text-base text-gray-800">Edit Soal #{{ $index + 1 }}</h3>
                                <button type="button" onclick="document.getElementById('modalEdit-{{ $s->id }}').classList.add('hidden')" class="text-gray-400 hover:text-gray-600 font-bold text-lg">&times;</button>
                            </div>

                            <form action="{{ route('guru.tka.soal.update', $s->id) }}" method="POST" enctype="multipart/form-data" class="space-y-3 text-xs">
                                @csrf
                                @method('PUT')

                                <div>
                                    <label class="block font-semibold text-gray-600 mb-1">Stimulus / Wacana Teks</label>
                                    <textarea name="stimulus" rows="2" class="w-full border rounded-lg p-2 text-xs">{{ $s->stimulus }}</textarea>
                                </div>

                                <div>
                                    <label class="block font-semibold text-gray-600 mb-1">Ganti Gambar Stimulus (Opsional)</label>
                                    <input type="file" name="stimulus_gambar" accept="image/*" class="w-full border rounded p-1.5 text-xs bg-white">
                                    @if($s->stimulus_gambar)
                                        <p class="text-[10px] text-gray-500 mt-1">*Gambar saat ini ada. Unggah baru jika ingin mengganti.</p>
                                    @endif
                                </div>

                                <div>
                                    <label class="block font-semibold text-gray-600 mb-1">Pertanyaan</label>
                                    <textarea name="pertanyaan" required rows="3" class="w-full border rounded-lg p-2 text-xs">{{ $s->pertanyaan }}</textarea>
                                </div>

                                <!-- FORM EDIT OPSI & KUNCI (DISESUAIKAN DENGAN TIPE SOAL) -->
                                <div class="border p-3 rounded-lg bg-gray-50 space-y-2">
                                    <p class="font-bold text-gray-700 mb-1">Edit Opsi Jawaban & Kunci</p>

                                    @if($s->tipe_soal == 'pg')
                                        @foreach(['A', 'B', 'C', 'D'] as $opt)
                                            <div class="flex items-center space-x-2">
                                                <input type="radio" name="kunci_pg" value="{{ $opt }}" {{ $s->kunci_json == $opt ? 'checked' : '' }} required>
                                                <span class="font-bold w-4">{{ $opt }}</span>
                                                <input type="text" name="opsi_pg[{{ $opt }}]" value="{{ $s->opsi_json[$opt] ?? '' }}" class="flex-1 border rounded p-1 text-xs" required>
                                            </div>
                                        @endforeach
                                    @elseif($s->tipe_soal == 'pg_kompleks')
                                        @foreach(['A', 'B', 'C', 'D'] as $opt)
                                            @php
                                                $isChecked = is_array($s->kunci_json) && in_array($opt, $s->kunci_json);
                                            @endphp
                                            <div class="flex items-center space-x-2">
                                                <input type="checkbox" name="kunci_kompleks[]" value="{{ $opt }}" {{ $isChecked ? 'checked' : '' }}>
                                                <span class="font-bold w-4">{{ $opt }}</span>
                                                <input type="text" name="opsi_kompleks[{{ $opt }}]" value="{{ $s->opsi_json[$opt] ?? '' }}" class="flex-1 border rounded p-1 text-xs" required>
                                            </div>
                                        @endforeach
                                    @elseif($s->tipe_soal == 'benar_salah')
                                        @if(is_array($s->opsi_json))
                                            @foreach($s->opsi_json as $i => $pernyataan)
                                                @php
                                                    $kunciBs = is_array($s->kunci_json) ? ($s->kunci_json[$i] ?? 'B') : 'B';
                                                @endphp
                                                <div class="flex items-center space-x-2 bg-white p-1.5 rounded border">
                                                    <input type="text" name="pernyataan_bs[{{ $i }}]" value="{{ $pernyataan }}" class="flex-1 border rounded p-1 text-xs" required>
                                                    <label class="font-semibold"><input type="radio" name="kunci_bs[{{ $i }}]" value="B" {{ $kunciBs == 'B' ? 'checked' : '' }}> B</label>
                                                    <label class="font-semibold"><input type="radio" name="kunci_bs[{{ $i }}]" value="S" {{ $kunciBs == 'S' ? 'checked' : '' }}> S</label>
                                                </div>
                                            @endforeach
                                        @endif
                                    @elseif($s->tipe_soal == 'isian')
                                        <textarea name="kunci_isian" rows="2" class="w-full border rounded p-1.5 text-xs" required>{{ is_array($s->kunci_json) ? json_encode($s->kunci_json) : $s->kunci_json }}</textarea>
                                    @endif
                                </div>

                                <div>
                                    <label class="block font-semibold text-gray-600 mb-1">Bobot Nilai</label>
                                    <input type="number" name="bobot_nilai" value="{{ $s->bobot_nilai }}" min="1" class="w-full border rounded-lg p-2 text-xs">
                                </div>

                                <div class="flex justify-end space-x-2 pt-3 border-t">
                                    <button type="button" onclick="document.getElementById('modalEdit-{{ $s->id }}').classList.add('hidden')" class="px-4 py-1.5 border rounded-lg hover:bg-gray-100">Batal</button>
                                    <button type="submit" class="px-4 py-1.5 bg-amber-600 text-white font-semibold rounded-lg hover:bg-amber-700">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="text-xs text-gray-400 text-center py-6">Belum ada soal.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

<script>
function switchTipeSoal(tipe) {
    const container = document.getElementById('dynamic-opsi-container');

    if(tipe === 'pg') {
        container.innerHTML = `
            <p class="text-xs font-bold text-gray-700">Pilihan Jawaban & Kunci PG</p>
            <div class="space-y-2">
                ${['A','B','C','D'].map(opt => `
                    <div class="flex items-center space-x-2">
                        <input type="radio" name="kunci_pg" value="${opt}" required>
                        <span class="text-xs font-bold w-4">${opt}</span>
                        <input type="text" name="opsi_pg[${opt}]" required class="flex-1 border rounded p-1.5 text-sm" placeholder="Opsi ${opt}">
                    </div>
                `).join('')}
            </div>`;
    }
    else if(tipe === 'pg_kompleks') {
        container.innerHTML = `
            <p class="text-xs font-bold text-gray-700">Pilihan Kompleks (Centang semua jawaban benar)</p>
            <div class="space-y-2">
                ${['A','B','C','D'].map(opt => `
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" name="kunci_kompleks[]" value="${opt}">
                        <span class="text-xs font-bold w-4">${opt}</span>
                        <input type="text" name="opsi_kompleks[${opt}]" required class="flex-1 border rounded p-1.5 text-sm" placeholder="Opsi ${opt}">
                    </div>
                `).join('')}
            </div>`;
    }
    else if(tipe === 'benar_salah') {
        container.innerHTML = `
            <p class="text-xs font-bold text-gray-700 mb-2">Tabel Pernyataan Benar / Salah</p>
            <div class="space-y-2">
                ${[0, 1, 2].map(i => `
                    <div class="flex items-center space-x-2 bg-white p-2 rounded border">
                        <input type="text" name="pernyataan_bs[${i}]" required class="flex-1 border rounded p-1.5 text-xs" placeholder="Pernyataan ${i+1}">
                        <label class="text-xs font-semibold"><input type="radio" name="kunci_bs[${i}]" value="B" required> Benar</label>
                        <label class="text-xs font-semibold"><input type="radio" name="kunci_bs[${i}]" value="S" required> Salah</label>
                    </div>
                `).join('')}
            </div>`;
    }
    else if(tipe === 'isian') {
        container.innerHTML = `
            <p class="text-xs font-bold text-gray-700">Kunci Acuan Jawaban (Untuk Pedoman Koreksi Guru)</p>
            <textarea name="kunci_isian" required rows="2" class="w-full border rounded p-2 text-sm" placeholder="Tuliskan kunci/pedomannya..."></textarea>`;
    }
}
</script>
@endsection
