@extends('layouts.admin')

@section('content')
<div class="space-y-6">

    @if(session('success'))
    <div class="p-4 bg-emerald-100 border border-emerald-200 text-emerald-800 text-xs font-bold rounded-2xl flex justify-between items-center">
        <span>{{ session('success') }}</span>
        <button onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 font-black">✕</button>
    </div>
    @endif

    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">MANAJEMEN KELAS & SESI</h1>
            <p class="text-xs text-slate-500 mt-1 font-medium">Kelola rombel/kelompok belajar, wali kelas, dan pembagian siswa.</p>
        </div>
        <button onclick="document.getElementById('modalTambahKelas').classList.remove('hidden')" class="px-5 py-2.5 bg-emerald-500 hover:bg-emerald-600 text-white font-bold rounded-xl text-xs tracking-wider uppercase shadow-lg shadow-emerald-500/20 transition">
            + Buat Kelas Baru
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($kelases as $kelas)
        <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-sm space-y-4 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-3">
                    <span class="px-3 py-1 text-[10px] font-black uppercase tracking-wider rounded-full
                        {{ $kelas->jenjang == 'SD' ? 'bg-amber-100 text-amber-700' : '' }}
                        {{ $kelas->jenjang == 'SMP' ? 'bg-sky-100 text-sky-700' : '' }}
                        {{ $kelas->jenjang == 'SMA' ? 'bg-indigo-100 text-indigo-700' : '' }}
                        {{ $kelas->jenjang == 'UTBK/Alumni' ? 'bg-rose-100 text-rose-700' : '' }}">
                        {{ $kelas->jenjang }}
                    </span>
                    <span class="text-xs font-semibold text-slate-400">Thn: {{ $kelas->tahun_ajaran }}</span>
                </div>

                <h3 class="text-lg font-black text-slate-800">{{ $kelas->nama_kelas }}</h3>

                <div class="mt-3 space-y-1.5 text-xs text-slate-600">
                    <p class="flex items-center space-x-2">
                        <span class="font-bold text-slate-400">Tentor Wali:</span>
                        <span class="font-bold text-emerald-600">{{ $kelas->tentor ? $kelas->tentor->name : 'Belum Ditentukan' }}</span>
                    </p>
                    <p class="flex items-center space-x-2">
                        <span class="font-bold text-slate-400">Jumlah Siswa:</span>
                        <span class="font-bold text-slate-800">{{ $kelas->siswas->count() }} Siswa</span>
                    </p>
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                <button onclick="openModalSiswa('{{ $kelas->id }}', '{{ $kelas->nama_kelas }}', {{ json_encode($kelas->siswas->pluck('id')) }})" class="px-3 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition">
                    👥 Atur Siswa
                </button>

                <form action="{{ route('admin.kelas.destroy', $kelas->id) }}" method="POST" onsubmit="return confirm('Hapus kelas ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="p-2 text-rose-500 hover:bg-rose-50 rounded-lg transition" title="Hapus Kelas">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    </button>
                </form>
            </div>
        </div>
        @empty
        <div class="col-span-full bg-white p-8 rounded-3xl text-center border border-slate-200 text-slate-400 text-xs font-semibold">
            Belum ada kelas yang dibuat. Klik tombol "+ Buat Kelas Baru" di atas.
        </div>
        @endforelse
    </div>

</div>

<div id="modalTambahKelas" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-6">
        <div class="flex justify-between items-center border-b border-slate-100 pb-4">
            <h3 class="font-bold text-slate-800 text-base">Buat Kelas Baru</h3>
            <button onclick="document.getElementById('modalTambahKelas').classList.add('hidden')" class="text-slate-400 hover:text-slate-600 font-bold">✕</button>
        </div>

        <form action="{{ route('admin.kelas.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Nama Kelas</label>
                <input type="text" name="nama_kelas" required placeholder="Contoh: 12 SMA - IPA 1" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Jenjang</label>
                    <select name="jenjang" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA" selected>SMA</option>
                        <option value="UTBK/Alumni">UTBK/Alumni</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" required value="2026/2027" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Tentor Wali / Pengampu</label>
                <select name="tentor_id" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
                    <option value="">-- Pilih Tentor (Opsional) --</option>
                    @foreach($tentors as $tentor)
                        <option value="{{ $tentor->id }}">{{ $tentor->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-slate-100">
                <button type="button" onclick="document.getElementById('modalTambahKelas').classList.add('hidden')" class="px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:bg-slate-50">Batal</button>
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white text-xs font-bold shadow-lg shadow-emerald-500/20">Simpan Kelas</button>
            </div>
        </form>
    </div>
</div>

<div id="modalAturSiswa" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-lg w-full p-6 shadow-2xl border border-slate-100 space-y-4">
        <div class="flex justify-between items-center border-b border-slate-100 pb-3">
            <div>
                <h3 class="font-bold text-slate-800 text-base">Atur Siswa Kelas</h3>
                <p id="namaKelasTitle" class="text-xs text-emerald-600 font-bold mt-0.5"></p>
            </div>
            <button onclick="document.getElementById('modalAturSiswa').classList.add('hidden')" class="text-slate-400 hover:text-slate-600 font-bold">✕</button>
        </div>

        <div class="relative">
            <input type="text" id="searchSiswaInput" onkeyup="filterSiswaSearch()" placeholder="🔍 Cari nama atau username siswa..." class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
        </div>

        <form id="formAturSiswa" method="POST" class="space-y-4">
            @csrf
            <div class="max-h-60 overflow-y-auto space-y-2 pr-2">
                <label class="block text-[11px] font-bold text-slate-400 uppercase mb-1">Pilih Siswa Yang Masuk Kelas Ini:</label>

                @foreach($siswas as $siswa)
                <label class="siswa-item flex items-center space-x-3 p-2.5 bg-slate-50 hover:bg-slate-100 rounded-xl cursor-pointer transition"
                    data-search="{{ strtolower($siswa->name . ' ' . $siswa->username) }}"
                    data-assigned-kelas="{{ $siswa->kelass ? $siswa->kelass->pluck('id')->implode(',') : '' }}">
                    <input type="checkbox" name="siswa_ids[]" value="{{ $siswa->id }}" class="siswa-checkbox rounded border-slate-300 text-emerald-600 focus:ring-emerald-500 w-4 h-4">
                    <span class="text-xs font-bold text-slate-700">{{ $siswa->name }} <span class="text-slate-400 font-normal">(@<span>{{ $siswa->username }}</span>)</span></span>
                </label>
                @endforeach

                <p id="emptySiswaMessage" class="hidden text-xs text-center text-slate-400 py-4 font-semibold">
                    Tidak ada siswa yang ditemukan atau semua siswa terdaftar di kelas lain.
                </p>
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-slate-100">
                <button type="button" onclick="document.getElementById('modalAturSiswa').classList.add('hidden')" class="px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:bg-slate-50">Batal</button>
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white text-xs font-bold shadow-lg shadow-emerald-500/20">Simpan Anggota Kelas</button>
            </div>
        </form>
    </div>
</div>

<script>
    let currentKelasId = null;
    let currentSelectedSiswaIds = [];

    function openModalSiswa(kelasId, namaKelas, selectedSiswaIds) {
        currentKelasId = kelasId;
        currentSelectedSiswaIds = selectedSiswaIds;

        document.getElementById('namaKelasTitle').innerText = 'Kelas: ' + namaKelas;
        document.getElementById('formAturSiswa').action = '/admin/kelas/' + kelasId + '/siswa';
        document.getElementById('searchSiswaInput').value = ''; // Reset input pencarian

        renderSiswaList();
        document.getElementById('modalAturSiswa').classList.remove('hidden');
    }

    function renderSiswaList() {
        let searchQuery = document.getElementById('searchSiswaInput').value.toLowerCase();
        let visibleCount = 0;

        document.querySelectorAll('.siswa-item').forEach(item => {
            let checkbox = item.querySelector('.siswa-checkbox');
            let searchData = item.getAttribute('data-search');
            let assignedKelas = item.getAttribute('data-assigned-kelas');
            let kelasArray = assignedKelas ? assignedKelas.split(',') : [];

            // Siswa terdaftar di kelas lain jika punya kelas dan bukan kelas yang sedang dibuka
            let isInOtherKelas = kelasArray.length > 0 && !kelasArray.includes(currentKelasId.toString());
            let matchesSearch = searchData.includes(searchQuery);

            if (!isInOtherKelas && matchesSearch) {
                item.classList.remove('hidden');
                checkbox.checked = currentSelectedSiswaIds.includes(parseInt(checkbox.value));
                visibleCount++;
            } else {
                item.classList.add('hidden');
                checkbox.checked = false;
            }
        });

        let emptyMsg = document.getElementById('emptySiswaMessage');
        if (visibleCount === 0) {
            emptyMsg.classList.remove('hidden');
        } else {
            emptyMsg.classList.add('hidden');
        }
    }

    function filterSiswaSearch() {
        renderSiswaList();
    }
</script>
@endsection
