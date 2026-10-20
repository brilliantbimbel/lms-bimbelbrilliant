@extends('layouts.guru')

@section('content')
<div class="space-y-6 max-w-7xl mx-auto">

    @if(session('success'))
        <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl text-sm font-semibold flex items-center justify-between shadow-sm">
            <div class="flex items-center gap-2">
                <span class="text-lg">✅</span>
                <span>{{ session('success') }}</span>
            </div>
            <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-800 font-bold">✕</button>
        </div>
    @endif

    @if(session('error'))
        <div class="p-4 bg-rose-50 border border-rose-200 text-rose-800 rounded-2xl text-sm font-semibold flex items-center justify-between shadow-sm">
            <div class="flex items-center gap-2">
                <span class="text-lg">❌</span>
                <span>{{ session('error') }}</span>
            </div>
            <button onclick="this.parentElement.remove()" class="text-rose-500 hover:text-rose-800 font-bold">✕</button>
        </div>
    @endif

    @if($errors->any())
        <div class="p-4 bg-amber-50 border border-amber-200 text-amber-800 rounded-2xl text-sm shadow-sm">
            <div class="flex items-center gap-2 font-bold mb-1 text-amber-900">
                <span class="text-lg">⚠️</span>
                <span>Gagal Menyimpan! Periksa kembali inputan Anda:</span>
            </div>
            <ul class="list-disc list-inside text-xs space-y-1 text-amber-700 pl-6">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
        <div>
            <h1 class="text-2xl font-black text-slate-800">Modul & Materi Pembelajaran 📖</h1>
            <p class="text-slate-500 text-xs sm:text-sm mt-1">Unggah dan kelola bahan ajar untuk siswa Anda.</p>
        </div>
        <button onclick="openModal()" class="inline-flex items-center justify-center gap-2 px-5 py-3 bg-sky-600 hover:bg-sky-700 text-white font-bold rounded-2xl text-sm transition shadow-sm hover:shadow">
            <span>+ Tambah Materi Baru</span>
        </button>
    </div>

    <!-- PANEL FILTER PER KELAS & PER MAPEL -->
    <div class="bg-white p-5 rounded-3xl border border-slate-200/80 shadow-sm space-y-3">
        <div class="flex items-center justify-between">
            <span class="text-xs font-bold uppercase tracking-wider text-slate-400">🔍 Filter Tampilan Materi</span>
            <button onclick="resetFilter()" class="text-xs font-semibold text-rose-500 hover:underline">Reset Filter</button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
            <div>
                <select id="filterKelas" onchange="filterTable()" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm font-medium text-slate-700 bg-slate-50/50">
                    <option value="">-- Semua Kelas --</option>
                    @foreach($kelases as $k)
                        <option value="{{ strtolower($k->nama_kelas) }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select id="filterMapel" onchange="filterTable()" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm font-medium text-slate-700 bg-slate-50/50">
                    <option value="">-- Semua Mata Pelajaran --</option>
                    <option value="ipa">IPA</option>
                    <option value="ips">IPS</option>
                    <option value="matematika">Matematika</option>
                    <option value="bahasa indonesia">Bahasa Indonesia</option>
                    <option value="bahasa inggris">Bahasa Inggris</option>
                    <option value="fisika">Fisika</option>
                    <option value="kimia">Kimia</option>
                    <option value="biologi">Biologi</option>
                </select>
            </div>
            <div>
                <input type="text" id="filterSearch" onkeyup="filterTable()" placeholder="Cari judul materi..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm font-medium text-slate-700 bg-slate-50/50">
            </div>
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex items-center justify-between">
            <h2 class="font-extrabold text-slate-800 text-base">Daftar Modul Diunggah</h2>
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total: {{ $materis->count() }} Modul</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-600">
                <thead class="bg-slate-50/80 text-xs uppercase text-slate-400 font-bold border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-4">Judul Materi</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4">Mata Pelajaran</th>
                        <th class="px-6 py-4">Kelas</th>
                        <th class="px-6 py-4">Tipe</th>
                        <th class="px-6 py-4">Akses</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody id="materiTableBody" class="divide-y divide-slate-100">
                    @forelse($materis as $m)
                        <tr class="materi-row hover:bg-slate-50/50 transition"
                            data-kelas="{{ strtolower($m->kelas->nama_kelas ?? '') }}"
                            data-mapel="{{ strtolower($m->mapel ?? '') }}">
                            <td class="px-6 py-4 font-bold text-slate-800 judul-col">
                                {{ $m->judul }}
                                @if($m->deskripsi)
                                    <p class="text-xs font-normal text-slate-400 mt-0.5 line-clamp-1">{{ $m->deskripsi }}</p>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if(($m->kategori_modul ?? 'modul') === 'latihan')
                                    <span class="px-3 py-1 bg-amber-50 text-amber-600 font-bold text-xs rounded-full border border-amber-100 whitespace-nowrap">
                                        📝 Latihan Soal
                                    </span>
                                @else
                                    <span class="px-3 py-1 bg-emerald-50 text-emerald-600 font-bold text-xs rounded-full border border-emerald-100 whitespace-nowrap">
                                        📚 Modul Belajar
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-indigo-50 text-indigo-600 font-bold text-xs rounded-full border border-indigo-100 whitespace-nowrap">
                                    {{ $m->mapel ?? 'Umum' }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-sky-50 text-sky-600 font-bold text-xs rounded-full border border-sky-100 whitespace-nowrap">
                                    {{ $m->kelas->nama_kelas ?? 'Semua Kelas' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 uppercase text-xs font-bold text-slate-500">
                                {{ $m->tipe }}
                            </td>
                            <td class="py-4 px-6">
                                @if($m->tipe === 'pdf')
                                    <a href="{{ asset('storage/' . $m->file_path) }}" target="_blank" class="inline-flex items-center gap-2 text-sky-600 font-bold hover:bg-sky-50 px-3 py-1.5 rounded-xl border border-sky-100 transition text-xs whitespace-nowrap">
                                        📄 Buka PDF
                                    </a>
                                @elseif($m->tipe === 'html')
                                    <button type="button"
        onclick="previewHtml('{{ route('guru.materi.preview', $m->id) }}', @js($m->judul))"
        class="...">
    👁️ Review HTML
</button

                                @elseif($m->tipe === 'video')
                                    <a href="{{ $m->url_video }}" target="_blank" class="inline-flex items-center gap-2 text-rose-600 font-bold hover:bg-rose-50 px-3 py-1.5 rounded-xl border border-rose-100 transition text-xs whitespace-nowrap">
                                        ▶️ Tonton Video
                                    </a>
                                @else
                                    <span class="text-slate-400 italic text-[10px]">Belum ada akses</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <button onclick="openEditModal({{ json_encode($m) }})" class="px-3 py-1.5 bg-amber-50 text-amber-600 hover:bg-amber-100 rounded-xl text-xs font-bold transition">
                                        ✏️ Edit
                                    </button>

                                    <form action="{{ route('guru.materi.destroy', $m->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus materi ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-rose-500 hover:text-rose-700 font-bold text-xs px-3 py-1.5 bg-rose-50 rounded-xl hover:bg-rose-100 transition">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-10 text-center text-slate-400 font-medium">
                                Belum ada materi yang diunggah. Klik tombol di atas untuk menambah materi baru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- MODAL PREVIEW HTML --}}
<div id="modalPreviewHtml" class="hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-4xl w-full h-[85vh] flex flex-col shadow-2xl border border-slate-100 overflow-hidden">
        <div class="p-4 border-b border-slate-100 flex justify-between items-center bg-slate-50">
            <div>
                <span class="text-[10px] font-extrabold px-2.5 py-0.5 bg-emerald-100 text-emerald-700 rounded-full uppercase tracking-widest">Teacher Review Mode</span>
                <h3 id="modalHtmlTitle" class="font-bold text-slate-800 text-sm mt-1"></h3>
            </div>
            <button type="button" onclick="closeModalPreview()" class="text-slate-400 hover:text-slate-600 font-bold p-2 transition-transform hover:scale-110">✕</button>
        </div>
        <div class="p-4 flex-1 bg-slate-100 overflow-hidden">
            <iframe id="modalHtmlFrame" sandbox="allow-scripts" class="w-full h-full border-0 bg-white rounded-2xl shadow-inner"></iframe>
        </div>
    </div>
</div>

{{-- MODAL TAMBAH MATERI --}}
<div id="materiModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-lg rounded-3xl p-6 sm:p-8 shadow-2xl relative max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-extrabold text-slate-800">Unggah Materi Pembelajaran</h3>
            <button onclick="closeModal()" class="text-slate-400 hover:text-slate-600 font-bold text-xl">&times;</button>
        </div>

        <form action="{{ route('guru.materi.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Judul Materi</label>
                <input type="text" name="judul" required placeholder="Contoh: Modul Fisika Bab 1" class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Kategori Konten <span class="text-rose-500">*</span></label>
                <select name="kategori_modul" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                    <option value="modul">📚 Modul Belajar</option>
                    <option value="latihan">📝 Latihan Soal Interaktif</option>
                </select>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Pilih Kelas</label>
                    <select name="kelas_id" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                        <option value="">-- Pilih Kelas --</option>
                        @foreach($kelases as $k)
                            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Mata Pelajaran</label>
                    <select name="mapel" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                        <option value="">-- Pilih Mapel --</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Biologi">Biologi</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Tipe Materi</label>
                <select name="tipe" id="tipeMateri" onchange="toggleInputType()" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                    <option value="pdf">File PDF</option>
                    <option value="video">Link Video (YouTube/Drive)</option>
                    <option value="html">Teks Rangkuman / HTML</option>
                </select>
            </div>

            <div id="inputPdfGroup">
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">File PDF (Maks. 10MB)</label>
                <input type="file" name="file" accept="application/pdf" class="w-full px-4 py-2.5 rounded-2xl border border-slate-200 text-sm">
            </div>

            <div id="inputVideoGroup" class="hidden">
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">URL / Link Video</label>
                <input type="url" name="url_video" placeholder="https://youtube.com/watch?v=..." class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm">
            </div>

            <div id="inputHtmlGroup" class="hidden space-y-3">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Metode Input HTML</label>
                    <div class="flex gap-4">
                        <label class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-700">
                            <input type="radio" name="html_input_type" value="text" checked onchange="toggleHtmlSubInput()" class="text-sky-600 focus:ring-sky-500">
                            Tempel Kode HTML
                        </label>
                        <label class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-700">
                            <input type="radio" name="html_input_type" value="file" onchange="toggleHtmlSubInput()" class="text-sky-600 focus:ring-sky-500">
                            Upload File (.html)
                        </label>
                    </div>
                </div>

                <div id="subInputHtmlText">
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Konten Teks / HTML</label>
                    <textarea name="konten_html" rows="4" placeholder="<p>Tuliskan rangkuman materi atau kode HTML di sini...</p>" class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm font-mono"></textarea>
                </div>

                <div id="subInputHtmlFile" class="hidden">
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Upload File HTML (.html / .htm)</label>
                    <input type="file" name="file_html" accept=".html,.htm" class="w-full px-4 py-2.5 rounded-2xl border border-slate-200 text-sm">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Deskripsi Singkat (Opsional)</label>
                <textarea name="deskripsi" rows="2" placeholder="Catatan singkat..." class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="button" onclick="closeModal()" class="px-5 py-2.5 rounded-2xl border border-slate-200 text-slate-600 font-bold text-sm">Batal</button>
                <button type="submit" class="px-5 py-2.5 rounded-2xl bg-sky-600 hover:bg-sky-700 text-white font-bold text-sm shadow">Simpan & Unggah</button>
            </div>
        </form>
    </div>
</div>

{{-- MODAL EDIT MATERI --}}
<div id="editMateriModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-xl rounded-3xl p-6 sm:p-8 shadow-2xl relative max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center mb-6 border-b pb-4">
            <h3 class="text-lg font-extrabold text-slate-800">✏️ Edit Materi Pembelajaran</h3>
            <button onclick="closeEditModal()" class="text-slate-400 hover:text-slate-600 font-bold text-xl">&times;</button>
        </div>

        <form id="editMateriForm" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Judul Materi</label>
                <input type="text" id="edit_judul" name="judul" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Kategori Konten <span class="text-rose-500">*</span></label>
                <select id="edit_kategori_modul" name="kategori_modul" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                    <option value="modul">📚 Modul Belajar</option>
                    <option value="latihan">📝 Latihan Soal Interaktif</option>
                </select>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Pilih Kelas</label>
                    <select id="edit_kelas_id" name="kelas_id" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                        @foreach($kelases as $k)
                            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Mata Pelajaran</label>
                    <select id="edit_mapel" name="mapel" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                        <option value="">-- Pilih Mapel --</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Biologi">Biologi</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Tipe Materi</label>
                <select id="edit_tipe" name="tipe" onchange="toggleEditInputType()" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                    <option value="pdf">File PDF</option>
                    <option value="video">Link Video (YouTube/Drive)</option>
                    <option value="html">Teks Rangkuman / HTML</option>
                </select>
            </div>

            <div id="editPdfGroup">
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Ganti File PDF (Kosongkan jika tidak ingin ganti)</label>
                <input type="file" name="file" accept="application/pdf" class="w-full px-4 py-2.5 rounded-2xl border border-slate-200 text-sm">
            </div>

            <div id="editVideoGroup" class="hidden">
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">URL / Link Video</label>
                <input type="url" id="edit_url_video" name="url_video" class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm">
            </div>

            <div id="editHtmlGroup" class="hidden">
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Konten Teks / HTML</label>
                <textarea id="edit_konten_html" name="konten_html" rows="6" class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm font-mono"></textarea>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Deskripsi Singkat (Opsional)</label>
                <textarea id="edit_deskripsi" name="deskripsi" rows="2" class="w-full px-4 py-3 rounded-2xl border border-slate-200 text-sm"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-4 border-t">
                <button type="button" onclick="closeEditModal()" class="px-5 py-2.5 rounded-2xl border border-slate-200 text-slate-600 font-bold text-sm">Batal</button>
                <button type="submit" class="px-5 py-2.5 rounded-2xl bg-amber-500 hover:bg-amber-600 text-white font-bold text-sm shadow">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal() { document.getElementById('materiModal').classList.remove('hidden'); }
    function closeModal() { document.getElementById('materiModal').classList.add('hidden'); }

    function openEditModal(materi) {
        let form = document.getElementById('editMateriForm');

        form.action = "{{ route('guru.materi.update', ':id') }}".replace(':id', materi.id);

        document.getElementById('edit_judul').value = materi.judul;
        document.getElementById('edit_kategori_modul').value = materi.kategori_modul || 'modul';
        document.getElementById('edit_kelas_id').value = materi.kelas_id;
        document.getElementById('edit_mapel').value = materi.mapel || '';
        document.getElementById('edit_tipe').value = materi.tipe;
        document.getElementById('edit_deskripsi').value = materi.deskripsi || '';
        document.getElementById('edit_url_video').value = materi.url_video || '';
        document.getElementById('edit_konten_html').value = materi.konten_html || '';

        toggleEditInputType();
        document.getElementById('editMateriModal').classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('editMateriModal').classList.add('hidden');
    }

    function toggleInputType() {
        const tipe = document.getElementById('tipeMateri').value;
        document.getElementById('inputPdfGroup').classList.toggle('hidden', tipe !== 'pdf');
        document.getElementById('inputVideoGroup').classList.toggle('hidden', tipe !== 'video');
        document.getElementById('inputHtmlGroup').classList.toggle('hidden', tipe !== 'html');
    }

    function toggleEditInputType() {
        const tipe = document.getElementById('edit_tipe').value;
        document.getElementById('editPdfGroup').classList.toggle('hidden', tipe !== 'pdf');
        document.getElementById('editVideoGroup').classList.toggle('hidden', tipe !== 'video');
        document.getElementById('editHtmlGroup').classList.toggle('hidden', tipe !== 'html');
    }

    function toggleHtmlSubInput() {
        const inputType = document.querySelector('input[name="html_input_type"]:checked').value;
        document.getElementById('subInputHtmlText').classList.toggle('hidden', inputType !== 'text');
        document.getElementById('subInputHtmlFile').classList.toggle('hidden', inputType !== 'file');
    }

    function previewHtml(url, title) {
    document.getElementById('modalHtmlTitle').innerText = title;
    document.getElementById('modalHtmlFrame').src = url;
    document.getElementById('modalPreviewHtml').classList.remove('hidden');
}

    function closeModalPreview() {
        document.getElementById('modalPreviewHtml').classList.add('hidden');
        document.getElementById('modalHtmlFrame').src = "about:blank";
    }

    // JS FILTER UNTUK MENYARING MAPEL & KELAS INSTAN
    function filterTable() {
        const selectedKelas = document.getElementById('filterKelas').value.toLowerCase();
        const selectedMapel = document.getElementById('filterMapel').value.toLowerCase();
        const searchQuery = document.getElementById('filterSearch').value.toLowerCase();

        const rows = document.querySelectorAll('.materi-row');

        rows.forEach(row => {
            const rowKelas = row.getAttribute('data-kelas');
            const rowMapel = row.getAttribute('data-mapel');
            const rowJudul = row.querySelector('.judul-col').textContent.toLowerCase();

            const matchKelas = !selectedKelas || rowKelas === selectedKelas;
            const matchMapel = !selectedMapel || rowMapel === selectedMapel;
            const matchSearch = !searchQuery || rowJudul.includes(searchQuery);

            if (matchKelas && matchMapel && matchSearch) {
                row.classList.remove('hidden');
            } else {
                row.classList.add('hidden');
            }
        });
    }

    function resetFilter() {
        document.getElementById('filterKelas').value = '';
        document.getElementById('filterMapel').value = '';
        document.getElementById('filterSearch').value = '';
        filterTable();
    }
</script>
@endsection
