@extends('layouts.admin')

@section('content')
<div class="space-y-6">

    @if(session('success'))
    <div class="p-4 bg-emerald-100 border border-emerald-200 text-emerald-800 text-xs font-bold rounded-2xl flex justify-between items-center shadow-sm">
        <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
        <button onclick="this.parentElement.remove()" class="text-emerald-600 hover:text-emerald-900 font-black">✕</button>
    </div>
    @endif

    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight uppercase">Monitoring Modul & Materi</h1>
            <p class="text-xs text-slate-500 mt-1 font-medium">Pantau seluruh materi pembelajaran (PDF, HTML Interaktif, Video) yang diunggah oleh Tentor.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="p-5 bg-white rounded-3xl border border-slate-200/80 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-emerald-50 rounded-2xl flex items-center justify-center text-emerald-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C20.832 18.477 19.247 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
            </div>
            <div>
                <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-wider">Total Modul</p>
                <p class="text-xl font-extrabold text-slate-800">{{ $materis->count() }}</p>
            </div>
        </div>

        <div class="p-5 bg-white rounded-3xl border border-slate-200/80 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-sky-50 rounded-2xl flex items-center justify-center text-sky-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
            </div>
            <div>
                <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-wider">HTML Interaktif</p>
                <p class="text-xl font-extrabold text-slate-800">{{ $materis->where('tipe', 'html')->count() }}</p>
            </div>
        </div>

        <div class="p-5 bg-white rounded-3xl border border-slate-200/80 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-rose-50 rounded-2xl flex items-center justify-center text-rose-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
            </div>
            <div>
                <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-wider">Dokumen PDF</p>
                <p class="text-xl font-extrabold text-slate-800">{{ $materis->where('tipe', 'pdf')->count() }}</p>
            </div>
        </div>

        <div class="p-5 bg-white rounded-3xl border border-slate-200/80 shadow-sm flex items-center space-x-4">
            <div class="w-12 h-12 bg-amber-50 rounded-2xl flex items-center justify-center text-amber-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
            </div>
            <div>
                <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-wider">Video Pembelajaran</p>
                <p class="text-xl font-extrabold text-slate-800">{{ $materis->where('tipe', 'video')->count() }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <h2 class="font-bold text-slate-800 text-base">Semua Unggahan Materi</h2>

            <div class="flex items-center space-x-3">
                <div class="relative w-full sm:w-64">
                    <input type="text" id="searchMateri" onkeyup="filterMateri()" placeholder="🔍 Cari judul, tentor, kelas..." class="w-full px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:ring-2 focus:ring-emerald-500 focus:outline-none">
                </div>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs text-slate-600">
                <thead class="bg-slate-50 border-b border-slate-100 uppercase text-[10px] font-bold text-slate-400 tracking-wider">
                    <tr>
                        <th class="py-4 px-6">Modul / Materi</th>
                        <th class="py-4 px-6">Kelas</th>
                        <th class="py-4 px-6">Pengunggah (Tentor)</th>
                        <th class="py-4 px-6 text-center">Tipe Content</th>
                        <th class="py-4 px-6">Tanggal Upload</th>
                        <th class="py-4 px-6 text-center">Aksi (Admin)</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($materis as $materi)
                    <tr class="materi-row hover:bg-slate-50/50 transition" data-search="{{ strtolower($materi->judul . ' ' . optional($materi->pembuat)->name . ' ' . optional($materi->kelas)->nama_kelas) }}">
                        <td class="py-4 px-6 max-w-xs">
                            <p class="font-bold text-slate-800 text-sm">{{ $materi->judul }}</p>
                            <p class="text-[11px] text-slate-400 truncate">{{ \Illuminate\Support\Str::limit(strip_tags($materi->deskripsi), 50, '...') ?: 'Tidak ada deskripsi' }}</p>
                        </td>
                        <td class="py-4 px-6 font-semibold text-slate-700">
                            {{ $materi->kelas->nama_kelas ?? 'Semua Kelas' }}
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-2">
                                <div class="w-6 h-6 rounded-full bg-slate-200 text-slate-700 text-[10px] font-bold flex items-center justify-center">
                                    {{ strtoupper(substr(optional($materi->pembuat)->name ?? 'T', 0, 1)) }}
                                </div>
                                <span class="font-semibold text-slate-700">{{ optional($materi->pembuat)->name ?? 'Tentor' }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if($materi->tipe === 'pdf')
                                <span class="px-3 py-1 bg-sky-50 text-sky-700 font-bold rounded-full text-[10px] border border-sky-100">📄 PDF</span>
                            @elseif($materi->tipe === 'html')
                                <span class="px-3 py-1 bg-emerald-50 text-emerald-700 font-bold rounded-full text-[10px] border border-emerald-100">🌐 HTML Interaktif</span>
                            @elseif($materi->tipe === 'video')
                                <span class="px-3 py-1 bg-rose-50 text-rose-700 font-bold rounded-full text-[10px] border border-rose-100">▶️ Video</span>
                            @else
                                <span class="text-slate-400 text-xs italic">-</span>
                            @endif
                        </td>
                        <td class="py-4 px-6 text-slate-400">{{ $materi->created_at->format('d M Y, H:i') }}</td>
                        <td class="py-4 px-6 text-center">
                            <div class="flex items-center justify-center space-x-2">
                                @if($materi->tipe === 'html')
                                    <template id="html-materi-{{ $materi->id }}">{!! $materi->konten_html !!}</template>

                                    <button type="button" onclick="previewHtml('{{ $materi->id }}', '{{ addslashes($materi->judul) }}')" class="inline-flex items-center gap-1 text-emerald-600 font-bold hover:bg-emerald-50 px-3 py-1.5 rounded-xl border border-emerald-200 transition text-xs cursor-pointer" title="Lihat Tampilan Interaktif">
                                        👁️ Review HTML
                                    </button>
                                @elseif($materi->tipe === 'pdf')
                                    <a href="{{ asset('storage/' . $materi->file_path) }}" target="_blank" class="inline-flex items-center gap-1 text-sky-600 font-bold hover:bg-sky-50 px-3 py-1.5 rounded-xl border border-sky-200 transition text-xs" title="Buka File PDF">
                                        📄 Buka PDF
                                    </a>
                                @elseif($materi->tipe === 'video')
                                    <a href="{{ $materi->url_video }}" target="_blank" class="inline-flex items-center gap-1 text-rose-600 font-bold hover:bg-rose-50 px-3 py-1.5 rounded-xl border border-rose-200 transition text-xs" title="Tonton Video">
                                        ▶️ Tonton Video
                                    </a>
                                @endif

                                <form action="{{ route('admin.materi.destroy', $materi->id) }}" method="POST" onsubmit="return confirm('Admin: Yakin ingin menghapus materi ini dari sistem?')" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition" title="Hapus Modul Ini">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-12 text-center text-slate-400 font-medium">
                            Belum ada materi/modul yang diunggah oleh Tentor.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="modalPreviewHtml" class="hidden fixed inset-0 z-50 bg-slate-900/60 backdrop-blur-sm flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-4xl w-full h-[85vh] flex flex-col shadow-2xl border border-slate-100 overflow-hidden">
        <div class="p-4 border-b border-slate-100 flex justify-between items-center bg-slate-50">
            <div>
                <span class="text-[10px] font-extrabold px-2.5 py-0.5 bg-emerald-100 text-emerald-700 rounded-full">PRATINJAU HTML INTERAKTIF</span>
                <h3 id="modalHtmlTitle" class="font-bold text-slate-800 text-sm mt-1"></h3>
            </div>
            <button type="button" onclick="closeModalPreview()" class="text-slate-400 hover:text-slate-600 font-bold p-2">✕</button>
        </div>
        <div class="p-4 flex-1 bg-slate-100 overflow-hidden">
            <iframe id="modalHtmlFrame" class="w-full h-full border-0 bg-white rounded-2xl shadow-inner"></iframe>
        </div>
    </div>
</div>

<script>
    function filterMateri() {
        let input = document.getElementById('searchMateri').value.toLowerCase();
        let rows = document.querySelectorAll('.materi-row');

        rows.forEach(row => {
            let searchData = row.getAttribute('data-search');
            if (searchData.includes(input)) {
                row.classList.remove('hidden');
            } else {
                row.classList.add('hidden');
            }
        });
    }

    function previewHtml(id, title) {
        let tpl = document.getElementById('html-materi-' + id);
        if (!tpl) return;

        document.getElementById('modalHtmlTitle').innerText = title;

        let iframe = document.getElementById('modalHtmlFrame');
        let iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

        iframeDoc.open();
        iframeDoc.write(tpl.innerHTML);
        iframeDoc.close();

        document.getElementById('modalPreviewHtml').classList.remove('hidden');
    }

    function closeModalPreview() {
        document.getElementById('modalPreviewHtml').classList.add('hidden');
    }
</script>
@endsection
