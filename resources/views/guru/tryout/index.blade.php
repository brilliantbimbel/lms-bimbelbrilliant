@extends('layouts.guru')

@section('content')
<div class="space-y-6 max-w-7xl mx-auto">

    {{-- Alert Notifikasi --}}
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

    {{-- Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
        <div>
            <h1 class="text-2xl font-black text-slate-800">Kuis & Tryout 📝</h1>
            <p class="text-slate-500 text-xs sm:text-sm mt-1">Kelola ujian, kuis harian, dan simulasi untuk siswa Anda.</p>
        </div>
        <button onclick="openModal()" class="inline-flex items-center justify-center gap-2 px-5 py-3 bg-sky-600 hover:bg-sky-700 text-white font-bold rounded-2xl text-sm transition shadow-sm hover:shadow">
            <span>+ Buat Tryout Baru</span>
        </button>
    </div>

    {{-- Tabel Daftar Tryout --}}
    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex items-center justify-between">
            <h2 class="font-extrabold text-slate-800 text-base">Daftar Paket Ujian</h2>
            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total: {{ $tryouts->count() }} Paket</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-slate-600">
                <thead class="bg-slate-50/80 text-xs uppercase text-slate-400 font-bold border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-4">Judul Ujian</th>
                        <th class="px-6 py-4">Mata Pelajaran</th>
                        <th class="px-6 py-4">Kelas</th>
                        <th class="px-6 py-4">Tipe</th>
                        <th class="px-6 py-4">Durasi</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($tryouts as $t)
                        <tr class="hover:bg-slate-50/50 transition">
                            <td class="px-6 py-4 font-bold text-slate-800">
                                {{ $t->judul }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-slate-700">
                                {{ $t->mapel ?? '-' }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-sky-50 text-sky-600 font-bold text-xs rounded-full border border-sky-100">
                                    {{ $t->kelas->nama_kelas ?? 'Semua Kelas' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 uppercase text-xs font-bold">
                                <span class="px-2.5 py-1 rounded-lg {{ $t->tipe === 'kuis' ? 'bg-amber-50 text-amber-600' : 'bg-indigo-50 text-indigo-600' }}">
                                    {{ str_replace('_', ' ', $t->tipe) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 font-medium text-xs text-slate-500">
                                ⏱️ {{ $t->durasi }} Menit
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    {{-- Tombol Edit --}}
                                    <button onclick="openEditModal({{ json_encode($t) }})" class="text-amber-600 hover:text-amber-800 font-bold text-xs px-3 py-1.5 bg-amber-50 rounded-xl hover:bg-amber-100 transition">
                                        Edit
                                    </button>

                                    {{-- Tombol Hapus --}}
                                    <form action="{{ route('guru.tryout.destroy', $t->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus tryout ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-rose-500 hover:text-rose-700 font-bold text-xs px-3 py-1.5 bg-rose-50 rounded-xl hover:bg-rose-100 transition">
                                            Hapus
                                        </button>
                                    </form>

                                    {{-- Tombol Kelola Soal --}}
                                    <a href="{{ route('guru.soal.index', $t->id) }}" class="text-sky-600 hover:text-sky-800 font-bold text-xs px-3 py-1.5 bg-sky-50 rounded-xl hover:bg-sky-100 transition">
                                        📝 Soal ({{ $t->soals_count ?? $t->soals()->count() }})
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-10 text-center text-slate-400 font-medium">
                                Belum ada Kuis/Tryout yang dibuat. Klik tombol di atas untuk menambah baru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- Modal Tambah Tryout --}}
<div id="tryoutModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-lg rounded-3xl p-6 sm:p-8 shadow-2xl relative">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-extrabold text-slate-800">Buat Paket Tryout / Kuis</h3>
            <button onclick="closeModal()" class="text-slate-400 hover:text-slate-600 font-bold text-xl">&times;</button>
        </div>

        <form action="{{ route('guru.tryout.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Judul Tryout / Kuis</label>
                <input type="text" name="judul" required placeholder="Contoh: Kuis Harian Fisika Bab 1" class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Mata Pelajaran</label>
                <select name="mapel" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                    <option value="">-- Pilih Mata Pelajaran --</option>
                    @foreach($mapels as $m)
                        <option value="{{ $m }}">{{ $m }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Pilih Kelas</label>
                <select name="kelas_id" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                    <option value="">-- Pilih Kelas --</option>
                    @foreach($kelases as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Tipe Paket</label>
                    <select name="tipe" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                        <option value="kuis">Kuis</option>
                        <option value="tryout">Tryout</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Durasi (Menit)</label>
                    <input type="number" name="durasi" required min="1" placeholder="60" class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-sky-500 text-sm">
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="button" onclick="closeModal()" class="px-5 py-2.5 rounded-2xl border border-slate-200 text-slate-600 font-bold text-sm">Batal</button>
                <button type="submit" class="px-5 py-2.5 rounded-2xl bg-sky-600 hover:bg-sky-700 text-white font-bold text-sm shadow">Simpan Paket</button>
            </div>
        </form>
    </div>
</div>

{{-- Modal Edit Tryout --}}
<div id="editTryoutModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white w-full max-w-lg rounded-3xl p-6 sm:p-8 shadow-2xl relative">
        <div class="flex justify-between items-center mb-6">
            <h3 class="text-lg font-extrabold text-slate-800">Edit Paket Tryout / Kuis</h3>
            <button onclick="closeEditModal()" class="text-slate-400 hover:text-slate-600 font-bold text-xl">&times;</button>
        </div>

        <form id="editTryoutForm" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Judul Tryout / Kuis</label>
                <input type="text" id="edit_judul" name="judul" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Mata Pelajaran</label>
                <select id="edit_mapel" name="mapel" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-amber-500 text-sm">
                    <option value="">-- Pilih Mata Pelajaran --</option>
                    @foreach($mapels as $m)
                        <option value="{{ $m }}">{{ $m }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Pilih Kelas</label>
                <select id="edit_kelas_id" name="kelas_id" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-amber-500 text-sm">
                    <option value="">-- Pilih Kelas --</option>
                    @foreach($kelases as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Tipe Paket</label>
                    <select id="edit_tipe" name="tipe" required class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-amber-500 text-sm">
                        <option value="kuis">Kuis</option>
                        <option value="tryout">Tryout</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-500 mb-1">Durasi (Menit)</label>
                    <input type="number" id="edit_durasi" name="durasi" required min="1" class="w-full px-4 py-3 rounded-2xl border border-slate-200 focus:ring-2 focus:ring-amber-500 text-sm">
                </div>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="button" onclick="closeEditModal()" class="px-5 py-2.5 rounded-2xl border border-slate-200 text-slate-600 font-bold text-sm">Batal</button>
                <button type="submit" class="px-5 py-2.5 rounded-2xl bg-amber-500 hover:bg-amber-600 text-white font-bold text-sm shadow">Update Paket</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('tryoutModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('tryoutModal').classList.add('hidden');
    }

    function openEditModal(tryout) {
        document.getElementById('edit_judul').value = tryout.judul;
        document.getElementById('edit_mapel').value = tryout.mapel ?? '';
        document.getElementById('edit_kelas_id').value = tryout.kelas_id;
        document.getElementById('edit_tipe').value = tryout.tipe;
        document.getElementById('edit_durasi').value = tryout.durasi;

        document.getElementById('editTryoutForm').action = "/tentor/tryout/" + tryout.id;
        document.getElementById('editTryoutModal').classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('editTryoutModal').classList.add('hidden');
    }
</script>
@endsection
