@extends('layouts.admin')

@section('content')
<div class="space-y-6">

    @if(session('success'))
    <div class="mb-4 p-4 bg-emerald-100 border border-emerald-200 text-emerald-800 text-xs font-bold rounded-2xl flex justify-between items-center shadow-sm">
        <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
        <button onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 font-black ml-4">✕</button>
    </div>
    @endif

    @if($errors->any())
    <div class="mb-4 p-4 bg-rose-100 border border-rose-200 text-rose-800 text-xs font-bold rounded-2xl space-y-2 shadow-sm">
        <div class="flex items-center justify-between border-b border-rose-200/60 pb-2">
            <div class="flex items-center space-x-2 text-rose-700">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="font-extrabold uppercase tracking-wider">Data Gagal Disimpan!</span>
            </div>
            <button onclick="this.parentElement.parentElement.remove()" class="text-rose-600 hover:text-rose-900 font-black">✕</button>
        </div>
        <ul class="list-disc list-inside space-y-1 font-semibold text-rose-700 pl-1">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">MANAJEMEN DATA SISWA</h1>
            <p class="text-xs text-slate-500 mt-1 font-medium">Kelola akun siswa, ubah password, atur status aktif, dan edit profil.</p>
        </div>
        <button onclick="document.getElementById('modalTambahSiswa').classList.remove('hidden')" class="px-5 py-2.5 bg-emerald-500 hover:bg-emerald-600 text-white font-bold rounded-xl text-xs tracking-wider uppercase shadow-lg shadow-emerald-500/20 transition">
            + Tambah Siswa Baru
        </button>
    </div>

    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <h2 class="font-bold text-slate-800 text-base">Daftar Siswa Terdaftar</h2>

            <div class="flex items-center space-x-3">
                <div class="relative w-full sm:w-64">
                    <input type="text" id="searchSiswaTable" onkeyup="searchTableSiswa()" placeholder="🔍 Cari nama, username, email..." class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none transition">
                </div>

                <span class="text-xs font-bold px-3 py-2 bg-emerald-50 text-emerald-700 rounded-xl border border-emerald-200 whitespace-nowrap">
                    Total: {{ $siswas->count() }} Siswa
                </span>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-600">
                <thead class="bg-slate-50 border-b border-slate-100 uppercase text-[10px] font-bold text-slate-400 tracking-wider">
                    <tr>
                        <th class="py-4 px-6">No</th>
                        <th class="py-4 px-6">Nama Siswa</th>
                        <th class="py-4 px-6">Username / Email</th>
                        <th class="py-4 px-6 text-center">Status</th>
                        <th class="py-4 px-6">Tanggal Daftar</th>
                        <th class="py-4 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($siswas as $index => $siswa)
                    <tr class="siswa-row hover:bg-slate-50/50 transition" data-search="{{ strtolower($siswa->name . ' ' . $siswa->username . ' ' . $siswa->email) }}">
                        <td class="py-4 px-6 font-bold text-slate-400">{{ $index + 1 }}</td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-700 font-bold flex items-center justify-center text-xs">
                                    {{ strtoupper(substr($siswa->name, 0, 1)) }}
                                </div>
                                <div>
                                    <p class="font-bold text-slate-800 text-sm">{{ $siswa->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-semibold text-slate-700">@<span>{{ $siswa->username }}</span></p>
                            <p class="text-[11px] text-slate-400">{{ $siswa->email }}</p>
                        </td>
                        <td class="py-4 px-6 text-center">
                            <form action="{{ route('admin.siswa.toggle-status', $siswa->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('PATCH')
                                <button type="submit" onclick="return confirm('Ubah status siswa ini?')" title="Klik untuk mengubah status">
                                    @if(($siswa->status ?? 'aktif') === 'aktif')
                                        <span class="bg-emerald-100 text-emerald-700 text-[10px] font-extrabold px-2.5 py-1 rounded-full border border-emerald-200 hover:bg-emerald-200 transition">
                                            ● AKTIF
                                        </span>
                                    @else
                                        <span class="bg-rose-100 text-rose-700 text-[10px] font-extrabold px-2.5 py-1 rounded-full border border-rose-200 hover:bg-rose-200 transition">
                                            ○ NONAKTIF
                                        </span>
                                    @endif
                                </button>
                            </form>
                        </td>
                        <td class="py-4 px-6 text-slate-400">{{ $siswa->created_at->format('d M Y') }}</td>
                        <td class="py-4 px-6 text-center">
                            <div class="flex items-center justify-center space-x-2">

                                <button onclick="openModalReset('{{ $siswa->id }}', '{{ $siswa->name }}')" class="p-2 text-amber-500 hover:bg-amber-50 rounded-lg transition" title="Ganti Password">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>
                                </button>

                                <button onclick="openModalEdit('{{ $siswa->id }}', '{{ $siswa->name }}', '{{ $siswa->username }}', '{{ $siswa->email }}')" class="p-2 text-sky-500 hover:bg-sky-50 rounded-lg transition" title="Edit Data Siswa">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </button>

                                <form action="{{ route('admin.siswa.destroy', $siswa->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus siswa ini?')" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-rose-500 hover:bg-rose-50 rounded-lg transition" title="Hapus Siswa">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-8 text-center text-slate-400 font-medium">
                            Belum ada data siswa terdaftar.
                        </td>
                    </tr>
                    @endforelse

                    <tr id="notFoundRow" class="hidden">
                        <td colspan="6" class="py-8 text-center text-slate-400 font-semibold">
                            Siswa dengan kata kunci tersebut tidak ditemukan.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<div id="modalTambahSiswa" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-6">
        <div class="flex justify-between items-center border-b border-slate-100 pb-4">
            <h3 class="font-bold text-slate-800 text-base">Tambah Siswa Baru</h3>
            <button onclick="document.getElementById('modalTambahSiswa').classList.add('hidden')" class="text-slate-400 hover:text-slate-600 font-bold">✕</button>
        </div>

        <form action="{{ route('admin.siswa.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Nama Lengkap</label>
                <input type="text" name="name" required placeholder="Contoh: Budi Santoso" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Username</label>
                <input type="text" name="username" required placeholder="Contoh: budi123" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Email</label>
                <input type="email" name="email" required placeholder="budi@gmail.com" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Password</label>
                <input type="password" name="password" required placeholder="••••••••" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-slate-100">
                <button type="button" onclick="document.getElementById('modalTambahSiswa').classList.add('hidden')" class="px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:bg-slate-50">
                    Batal
                </button>
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white text-xs font-bold shadow-lg shadow-emerald-500/20">
                    Simpan Siswa
                </button>
            </div>
        </form>
    </div>
</div>

<div id="modalResetPassword" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-6">
        <div class="flex justify-between items-center border-b border-slate-100 pb-4">
            <div>
                <h3 class="font-bold text-slate-800 text-base">Ganti Password Siswa</h3>
                <p id="resetSiswaName" class="text-xs text-amber-600 font-semibold mt-0.5"></p>
            </div>
            <button onclick="document.getElementById('modalResetPassword').classList.add('hidden')" class="text-slate-400 hover:text-slate-600 font-bold">✕</button>
        </div>

        <form id="formResetPassword" method="POST" class="space-y-4">
            @csrf
            @method('PATCH')
            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Password Baru</label>
                <input type="password" name="password" required placeholder="Masukkan password baru" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-amber-500 focus:outline-none">
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-slate-100">
                <button type="button" onclick="document.getElementById('modalResetPassword').classList.add('hidden')" class="px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:bg-slate-50">
                    Batal
                </button>
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-600 text-white text-xs font-bold shadow-lg shadow-amber-500/20">
                    Update Password
                </button>
            </div>
        </form>
    </div>
</div>

<div id="modalEditSiswa" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-6">
        <div class="flex justify-between items-center border-b border-slate-100 pb-4">
            <h3 class="font-bold text-slate-800 text-base">Edit Data Siswa</h3>
            <button onclick="document.getElementById('modalEditSiswa').classList.add('hidden')" class="text-slate-400 hover:text-slate-600 font-bold">✕</button>
        </div>

        <form id="formEditSiswa" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Nama Lengkap</label>
                <input type="text" id="editName" name="name" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-sky-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Username</label>
                <input type="text" id="editUsername" name="username" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-sky-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Email</label>
                <input type="email" id="editEmail" name="email" required class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-sky-500 focus:outline-none">
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-slate-100">
                <button type="button" onclick="document.getElementById('modalEditSiswa').classList.add('hidden')" class="px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:bg-slate-50">
                    Batal
                </button>
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-sky-500 hover:bg-sky-600 text-white text-xs font-bold shadow-lg shadow-sky-500/20">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function searchTableSiswa() {
        let input = document.getElementById('searchSiswaTable').value.toLowerCase();
        let rows = document.querySelectorAll('.siswa-row');
        let visibleCount = 0;

        rows.forEach(row => {
            let searchData = row.getAttribute('data-search');
            if (searchData.includes(input)) {
                row.classList.remove('hidden');
                visibleCount++;
            } else {
                row.classList.add('hidden');
            }
        });

        let notFoundRow = document.getElementById('notFoundRow');
        if (notFoundRow) {
            if (visibleCount === 0 && rows.length > 0) {
                notFoundRow.classList.remove('hidden');
            } else {
                notFoundRow.classList.add('hidden');
            }
        }
    }

    function openModalReset(id, name) {
        document.getElementById('resetSiswaName').innerText = 'Siswa: ' + name;
        document.getElementById('formResetPassword').action = '/admin/siswa/' + id + '/reset-password';
        document.getElementById('modalResetPassword').classList.remove('hidden');
    }

    function openModalEdit(id, name, username, email) {
        document.getElementById('editName').value = name;
        document.getElementById('editUsername').value = username;
        document.getElementById('editEmail').value = email;
        document.getElementById('formEditSiswa').action = '/admin/siswa/' + id;
        document.getElementById('modalEditSiswa').classList.remove('hidden');
    }
</script>
@endsection
