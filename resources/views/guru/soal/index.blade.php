@extends('layouts.guru')

@section('content')
<div class="space-y-6 max-w-7xl mx-auto">

    @if(session('success'))
        <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl text-sm font-semibold flex items-center justify-between shadow-sm">
            <span>✅ {{ session('success') }}</span>
            <button onclick="this.parentElement.remove()" class="text-emerald-500 font-bold">✕</button>
        </div>
    @endif

    {{-- Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
        <div>
            <div class="flex items-center gap-2">
                <a href="{{ route('guru.tryout.index') }}" class="text-xs font-bold text-sky-600 hover:underline">← Kembali ke Tryout</a>
            </div>
            <h1 class="text-2xl font-black text-slate-800 mt-1">Bank Soal: {{ $tryout->judul }}</h1>
            <p class="text-slate-500 text-xs sm:text-sm">Kelas: {{ $tryout->kelas->nama_kelas ?? '-' }} | Durasi: {{ $tryout->durasi }} Menit</p>
        </div>
        <button onclick="openModal()" class="px-5 py-3 bg-sky-600 hover:bg-sky-700 text-white font-bold rounded-2xl text-sm transition shadow-sm">
            + Tambah Soal Baru
        </button>
    </div>

    {{-- Daftar Soal --}}
    <div class="space-y-4">
        @forelse($soals as $index => $s)
            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm relative">
                <div class="flex items-center justify-between border-b border-slate-100 pb-3 mb-4">
                    <div class="flex items-center gap-2">
                        <span class="px-3 py-1 bg-slate-100 text-slate-700 font-black text-xs rounded-xl">Soal #{{ $soals->count() - $index }}</span>
                        <span class="px-2.5 py-1 text-xs font-bold rounded-lg uppercase
                            {{ $s->tipe_soal === 'pg' ? 'bg-sky-50 text-sky-600' : '' }}
                            {{ $s->tipe_soal === 'pg_kompleks' ? 'bg-indigo-50 text-indigo-600' : '' }}
                            {{ $s->tipe_soal === 'isian' ? 'bg-amber-50 text-amber-600' : '' }}
                            {{ $s->tipe_soal === 'uraian' ? 'bg-rose-50 text-rose-600' : '' }}">
                            {{ str_replace('_', ' ', $s->tipe_soal) }}
                        </span>
                        <span class="text-xs text-slate-400 font-bold">Bobot: {{ $s->bobot }} Pt</span>
                    </div>

                    {{-- Tombol Aksi: Edit & Hapus --}}
                    <div class="flex items-center gap-2">
                        <button onclick="openEditSoalModal({{ json_encode($s) }})" class="text-amber-600 hover:text-amber-800 text-xs font-bold bg-amber-50 px-3 py-1.5 rounded-xl transition">
                            ✏️ Edit
                        </button>

                        <form action="{{ route('guru.soal.destroy', $s->id) }}" method="POST" onsubmit="return confirm('Hapus soal ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-rose-500 hover:text-rose-700 text-xs font-bold bg-rose-50 px-3 py-1.5 rounded-xl transition">Hapus</button>
                        </form>
                    </div>
                </div>

                <div class="text-slate-800 font-medium text-sm mb-4">
                    {!! nl2br(e($s->pertanyaan)) !!}
                </div>

                {{-- Tampilan Pilihan Jawaban jika PG / PG Kompleks --}}
                @if(in_array($s->tipe_soal, ['pg', 'pg_kompleks']) && $s->pilihan)
                    @php
                        $pilihanArr = is_string($s->pilihan) ? json_decode($s->pilihan, true) : $s->pilihan;
                    @endphp
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mb-4 text-xs">
                        @foreach($pilihanArr as $key => $val)
                            @php
                                $isKunci = false;
                                if($s->tipe_soal === 'pg' && $s->kunci_jawaban === $key) $isKunci = true;
                                if($s->tipe_soal === 'pg_kompleks' && in_array($key, json_decode($s->kunci_jawaban ?? '[]', true))) $isKunci = true;
                            @endphp
                            <div class="p-3 rounded-2xl border {{ $isKunci ? 'bg-emerald-50 border-emerald-300 text-emerald-900 font-bold' : 'border-slate-100 bg-slate-50/50 text-slate-600' }}">
                                <span>{{ $key }}. {{ $val }}</span>
                                @if($isKunci) <span class="ml-1 text-emerald-600">✓ (Kunci)</span> @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="p-3 bg-slate-50 border border-slate-100 rounded-2xl text-xs text-slate-600 mb-4">
                        <strong>Kunci / Acuan Jawaban:</strong> {{ $s->kunci_jawaban ?? '-' }}
                    </div>
                @endif

                @if($s->pembahasan)
                    <div class="p-3 bg-amber-50/50 border border-amber-100 rounded-2xl text-xs text-amber-800">
                        💡 <strong>Pembahasan:</strong> {{ $s->pembahasan }}
                    </div>
                @endif
            </div>
        @empty
            <div class="bg-white p-12 text-center rounded-3xl border border-slate-200/80 text-slate-400 font-medium">
                Belum ada soal untuk kuis ini. Klik tombol di atas untuk membuat soal.
            </div>
        @endforelse
    </div>

</div>

{{-- Modal Tambah Soal --}}
<div id="soalModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-2xl rounded-3xl p-6 sm:p-8 shadow-2xl relative max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-extrabold text-slate-800">Tambah Soal Baru</h3>
            <button onclick="closeModal()" class="text-slate-400 font-bold text-xl">&times;</button>
        </div>

        <form action="{{ route('guru.soal.store', $tryout->id) }}" method="POST" class="space-y-4">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Tipe Soal</label>
                    <select id="tipe_soal" name="tipe_soal" onchange="toggleFormTipe()" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm font-semibold">
                        <option value="pg">Pilihan Ganda (ABCD)</option>
                        <option value="pg_kompleks">Pilihan Ganda Kompleks (>1 Benar)</option>
                        <option value="isian">Isian Singkat</option>
                        <option value="uraian">Uraian / Essay</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Bobot Nilai</label>
                    <input type="number" name="bobot" value="1" min="1" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Pertanyaan Soal</label>
                <textarea name="pertanyaan" rows="3" required placeholder="Tuliskan pertanyaan soal..." class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm"></textarea>
            </div>

            {{-- Form Opsi Pilihan (A, B, C, D) --}}
            <div id="section_pilihan" class="space-y-3 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                <label class="block text-xs font-bold uppercase text-slate-600">Pilihan Jawaban</label>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <input type="text" name="pilihan_a" placeholder="Pilihan A" class="px-4 py-2.5 rounded-xl border border-slate-200 text-sm">
                    <input type="text" name="pilihan_b" placeholder="Pilihan B" class="px-4 py-2.5 rounded-xl border border-slate-200 text-sm">
                    <input type="text" name="pilihan_c" placeholder="Pilihan C" class="px-4 py-2.5 rounded-xl border border-slate-200 text-sm">
                    <input type="text" name="pilihan_d" placeholder="Pilihan D" class="px-4 py-2.5 rounded-xl border border-slate-200 text-sm">
                </div>
            </div>

            {{-- Kunci PG Tunggal --}}
            <div id="section_kunci_pg">
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Kunci Jawaban Benar</label>
                <select name="kunci_pg" class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>

            {{-- Kunci PG Kompleks --}}
            <div id="section_kunci_pg_kompleks" class="hidden">
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Kunci Jawaban Benar (Centang >1)</label>
                <div class="flex gap-4 p-3 bg-slate-50 rounded-2xl border border-slate-100">
                    <label class="inline-flex items-center gap-1.5 text-sm font-bold text-slate-700">
                        <input type="checkbox" name="kunci_pg_kompleks[]" value="A" class="rounded"> A
                    </label>
                    <label class="inline-flex items-center gap-1.5 text-sm font-bold text-slate-700">
                        <input type="checkbox" name="kunci_pg_kompleks[]" value="B" class="rounded"> B
                    </label>
                    <label class="inline-flex items-center gap-1.5 text-sm font-bold text-slate-700">
                        <input type="checkbox" name="kunci_pg_kompleks[]" value="C" class="rounded"> C
                    </label>
                    <label class="inline-flex items-center gap-1.5 text-sm font-bold text-slate-700">
                        <input type="checkbox" name="kunci_pg_kompleks[]" value="D" class="rounded"> D
                    </label>
                </div>
            </div>

            {{-- Kunci Isian --}}
            <div id="section_kunci_isian" class="hidden">
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Kunci Isian Singkat</label>
                <input type="text" name="kunci_isian" placeholder="Contoh: Photosynthesis / 120 / Paris" class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm">
            </div>

            {{-- Kunci Uraian --}}
            <div id="section_kunci_uraian" class="hidden">
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Acuan / Kunci Jawaban Uraian (Untuk Guru)</label>
                <textarea name="kunci_uraian" rows="2" placeholder="Masukkan poin-poin acuan penilaian guru..." class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm"></textarea>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Pembahasan (Opsional)</label>
                <textarea name="pembahasan" rows="2" placeholder="Penjelasan cara penyelesaian..." class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="button" onclick="closeModal()" class="px-5 py-2.5 rounded-2xl border border-slate-200 text-slate-600 font-bold text-sm">Batal</button>
                <button type="submit" class="px-5 py-2.5 rounded-2xl bg-sky-600 hover:bg-sky-700 text-white font-bold text-sm shadow">Simpan Soal</button>
            </div>
        </form>
    </div>
</div>

{{-- Modal Edit Soal --}}
<div id="editSoalModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-2xl rounded-3xl p-6 sm:p-8 shadow-2xl relative max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-extrabold text-slate-800">Edit Soal</h3>
            <button onclick="closeEditSoalModal()" class="text-slate-400 font-bold text-xl">&times;</button>
        </div>

        <form id="editSoalForm" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Tipe Soal</label>
                    <select id="edit_tipe_soal" name="tipe_soal" onchange="toggleEditFormTipe()" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm font-semibold">
                        <option value="pg">Pilihan Ganda (ABCD)</option>
                        <option value="pg_kompleks">Pilihan Ganda Kompleks</option>
                        <option value="isian">Isian Singkat</option>
                        <option value="uraian">Uraian / Essay</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Bobot Nilai</label>
                    <input type="number" id="edit_bobot" name="bobot" required min="1" class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Pertanyaan Soal</label>
                <textarea id="edit_pertanyaan" name="pertanyaan" rows="3" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm"></textarea>
            </div>

            {{-- Input Pilihan Jawaban (khusus PG) --}}
            <div id="edit_container_pilihan" class="space-y-3 p-4 bg-slate-50 rounded-2xl border border-slate-100">
                <label class="block text-xs font-bold uppercase text-slate-500">Pilihan Jawaban</label>
                <div class="grid grid-cols-2 gap-3">
                    <input type="text" id="edit_pilihan_a" name="pilihan_a" placeholder="Pilihan A" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-sm">
                    <input type="text" id="edit_pilihan_b" name="pilihan_b" placeholder="Pilihan B" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-sm">
                    <input type="text" id="edit_pilihan_c" name="pilihan_c" placeholder="Pilihan C" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-sm">
                    <input type="text" id="edit_pilihan_d" name="pilihan_d" placeholder="Pilihan D" class="w-full px-3 py-2 rounded-xl border border-slate-200 text-sm">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Kunci Jawaban / Acuan</label>
                <input type="text" id="edit_kunci_jawaban" name="kunci_jawaban" class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Pembahasan (Opsional)</label>
                <textarea id="edit_pembahasan" name="pembahasan" rows="2" class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="button" onclick="closeEditSoalModal()" class="px-5 py-2.5 rounded-2xl border border-slate-200 text-slate-600 font-bold text-sm">Batal</button>
                <button type="submit" class="px-5 py-2.5 rounded-2xl bg-amber-500 hover:bg-amber-600 text-white font-bold text-sm shadow">Update Soal</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal() { document.getElementById('soalModal').classList.remove('hidden'); }
    function closeModal() { document.getElementById('soalModal').classList.add('hidden'); }

    function toggleFormTipe() {
        const tipe = document.getElementById('tipe_soal').value;
        document.getElementById('section_pilihan').classList.toggle('hidden', !['pg', 'pg_kompleks'].includes(tipe));
        document.getElementById('section_kunci_pg').classList.toggle('hidden', tipe !== 'pg');
        document.getElementById('section_kunci_pg_kompleks').classList.toggle('hidden', tipe !== 'pg_kompleks');
        document.getElementById('section_kunci_isian').classList.toggle('hidden', tipe !== 'isian');
        document.getElementById('section_kunci_uraian').classList.toggle('hidden', tipe !== 'uraian');
    }

    function openEditSoalModal(soal) {
    // Sesuaikan URL-nya dengan route /tentor/soal/{id}
    document.getElementById('editSoalForm').action = "/tentor/soal/" + soal.id;

    document.getElementById('edit_pertanyaan').value = soal.pertanyaan;
    document.getElementById('edit_tipe_soal').value = soal.tipe_soal;
    document.getElementById('edit_bobot').value = soal.bobot;
    document.getElementById('edit_kunci_jawaban').value = soal.kunci_jawaban ?? '';
    document.getElementById('edit_pembahasan').value = soal.pembahasan ?? '';

    if (soal.pilihan) {
        let pilihanObj = typeof soal.pilihan === 'string' ? JSON.parse(soal.pilihan) : soal.pilihan;
        document.getElementById('edit_pilihan_a').value = pilihanObj.A ?? '';
        document.getElementById('edit_pilihan_b').value = pilihanObj.B ?? '';
        document.getElementById('edit_pilihan_c').value = pilihanObj.C ?? '';
        document.getElementById('edit_pilihan_d').value = pilihanObj.D ?? '';
    }

    toggleEditFormTipe();
    document.getElementById('editSoalModal').classList.remove('hidden');
}

    function closeEditSoalModal() {
        document.getElementById('editSoalModal').classList.add('hidden');
    }

    function toggleEditFormTipe() {
        let tipe = document.getElementById('edit_tipe_soal').value;
        let container = document.getElementById('edit_container_pilihan');
        if (tipe === 'pg' || tipe === 'pg_kompleks') {
            container.classList.remove('hidden');
        } else {
            container.classList.add('hidden');
        }
    }
</script>
@endsection
