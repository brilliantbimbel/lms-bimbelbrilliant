@extends('layouts.admin')

@section('content')
<div class="space-y-6">

    @if(session('success'))
    <div class="p-4 bg-teal-100 border border-teal-200 text-teal-800 text-xs font-bold rounded-2xl flex justify-between items-center">
        <span>{{ session('success') }}</span>
        <button onclick="this.parentElement.remove()" class="text-teal-600 hover:text-teal-900 font-black">✕</button>
    </div>
    @endif

    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">MANAJEMEN DATA TENTOR / PENGAJAR</h1>
            <p class="text-xs text-slate-500 mt-1 font-medium">Kelola akun pengajar, atur status aktif, dan reset password tentor Bimbel.</p>
        </div>
        <button onclick="document.getElementById('modalTambahTentor').classList.remove('hidden')" class="px-5 py-2.5 bg-teal-600 hover:bg-teal-700 text-white font-bold rounded-xl text-xs tracking-wider uppercase shadow-lg shadow-teal-600/20 transition">
            + Tambah Tentor Baru
        </button>
    </div>

    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex items-center justify-between">
            <h2 class="font-bold text-slate-800 text-base">Daftar Pengajar Terdaftar</h2>
            <span class="text-xs font-bold px-3 py-1 bg-teal-50 text-teal-700 rounded-full border border-teal-200">
                Total: {{ $tentors->count() }} Tentor
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-600">
                <thead class="bg-slate-50 border-b border-slate-100 uppercase text-[10px] font-bold text-slate-400 tracking-wider">
                    <tr>
                        <th class="py-4 px-6">No</th>
                        <th class="py-4 px-6">Nama Pengajar</th>
                        <th class="py-4 px-6">Username / Email</th>
                        <th class="py-4 px-6 text-center">Status</th>
                        <th class="py-4 px-6">Tanggal Bergabung</th>
                        <th class="py-4 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($tentors as $index => $tentor)
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="py-4 px-6 font-bold text-slate-400">{{ $index + 1 }}</td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-full bg-teal-100 text-teal-700 font-bold flex items-center justify-center text-xs">
                                    {{ strtoupper(substr($tentor->name, 0, 1)) }}
                                </div>
                                <div>
                                    <p class="font-bold text-slate-800 text-sm">{{ $tentor->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <p class="font-semibold text-slate-700">@<span>{{ $tentor->username }}</span></p>
                            <p class="text-[11px] text-slate-400">{{ $tentor->email }}</p>
                        </td>
                        <td class="py-4 px-6 text-center">
                            <form action="{{ route('admin.tentor.toggle-status', $tentor->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('PATCH')
                                <button type="submit" onclick="return confirm('Ubah status tentor ini?')" title="Klik untuk mengubah status">
                                    @if(($tentor->status ?? 'aktif') === 'aktif')
                                        <span class="bg-teal-100 text-teal-700 text-[10px] font-extrabold px-2.5 py-1 rounded-full border border-teal-200 hover:bg-teal-200 transition">
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
                        <td class="py-4 px-6 text-slate-400">{{ $tentor->created_at->format('d M Y') }}</td>
                        <td class="py-4 px-6 text-center">
                            <div class="flex items-center justify-center space-x-2">

                                <button onclick="openModalReset('{{ $tentor->id }}', '{{ $tentor->name }}')" class="p-2 text-amber-500 hover:bg-amber-50 rounded-lg transition" title="Ganti Password">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/></svg>
                                </button>

                                <button onclick="openModalEdit('{{ $tentor->id }}', '{{ $tentor->name }}', '{{ $tentor->username }}', '{{ $tentor->email }}')" class="p-2 text-sky-500 hover:bg-sky-50 rounded-lg transition" title="Edit Data Tentor">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                </button>

                                <form action="{{ route('admin.tentor.destroy', $tentor->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus tentor ini?')" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-rose-500 hover:bg-rose-50 rounded-lg transition" title="Hapus Tentor">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-8 text-center text-slate-400">
                            Belum ada data tentor terdaftar.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

<div id="modalTambahTentor" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-6">
        <div class="flex justify-between items-center border-b border-slate-100 pb-4">
            <h3 class="font-bold text-slate-800 text-base">Tambah Tentor Baru</h3>
            <button onclick="document.getElementById('modalTambahTentor').classList.add('hidden')" class="text-slate-400 hover:text-slate-600 font-bold">✕</button>
        </div>

        <form action="{{ route('admin.tentor.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Nama Lengkap</label>
                <input type="text" name="name" required placeholder="Contoh: Dr. Herman M.Pd" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-teal-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Username</label>
                <input type="text" name="username" required placeholder="Contoh: tentor_herman" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-teal-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Email</label>
                <input type="email" name="email" required placeholder="herman@gmail.com" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-teal-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Password</label>
                <input type="password" name="password" required placeholder="••••••••" class="w-full px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-teal-500 focus:outline-none">
            </div>

            <div class="flex justify-end space-x-3 pt-4 border-t border-slate-100">
                <button type="button" onclick="document.getElementById('modalTambahTentor').classList.add('hidden')" class="px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:bg-slate-50">
                    Batal
                </button>
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-teal-600 hover:bg-teal-700 text-white text-xs font-bold shadow-lg shadow-teal-600/20">
                    Simpan Tentor
                </button>
            </div>
        </form>
    </div>
</div>

<div id="modalResetPassword" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-6">
        <div class="flex justify-between items-center border-b border-slate-100 pb-4">
            <div>
                <h3 class="font-bold text-slate-800 text-base">Ganti Password Tentor</h3>
                <p id="resetTentorName" class="text-xs text-amber-600 font-semibold mt-0.5"></p>
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

<div id="modalEditTentor" class="hidden fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 shadow-2xl border border-slate-100 space-y-6">
        <div class="flex justify-between items-center border-b border-slate-100 pb-4">
            <h3 class="font-bold text-slate-800 text-base">Edit Data Tentor</h3>
            <button onclick="document.getElementById('modalEditTentor').classList.add('hidden')" class="text-slate-400 hover:text-slate-600 font-bold">✕</button>
        </div>

        <form id="formEditTentor" method="POST" class="space-y-4">
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
                <button type="button" onclick="document.getElementById('modalEditTentor').classList.add('hidden')" class="px-4 py-2.5 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:bg-slate-50">
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
    function openModalReset(id, name) {
        document.getElementById('resetTentorName').innerText = 'Tentor: ' + name;
        document.getElementById('formResetPassword').action = '/admin/tentor/' + id + '/reset-password';
        document.getElementById('modalResetPassword').classList.remove('hidden');
    }

    function openModalEdit(id, name, username, email) {
        document.getElementById('editName').value = name;
        document.getElementById('editUsername').value = username;
        document.getElementById('editEmail').value = email;
        document.getElementById('formEditTentor').action = '/admin/tentor/' + id;
        document.getElementById('modalEditTentor').classList.remove('hidden');
    }
</script>
@endsection
