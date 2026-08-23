@extends('layouts.guru')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Rekap Nilai Siswa</h1>
        <p class="text-gray-600 text-sm">Pilih kuis atau tryout untuk melihat daftar nilai siswa.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($tryouts as $tryout)
            <div class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 flex flex-col justify-between hover:shadow-md transition">
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-bold px-2.5 py-1 bg-sky-50 text-sky-600 rounded-lg uppercase">
                            {{ $tryout->kelas->nama_kelas ?? 'Kelas ' . $tryout->kelas_id }}
                        </span>
                        <span class="text-xs text-gray-500 font-medium">
                            {{ $tryout->soals_count }} Soal
                        </span>
                    </div>

                    <h3 class="font-bold text-gray-900 text-lg mb-1">{{ $tryout->judul }}</h3>
                    <p class="text-xs text-gray-500 mb-4">Durasi: {{ $tryout->durasi }} Menit</p>
                </div>

                <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                    <span class="text-xs font-semibold text-gray-500">
                        {{ $tryout->tipe ?? 'Tryout' }}
                    </span>
                    <a href="{{ route('guru.nilai.show', $tryout->id) }}" class="inline-flex items-center gap-1 text-sm font-bold text-sky-600 hover:text-sky-700">
                        Lihat Nilai →
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-full bg-white rounded-2xl p-12 text-center border border-gray-100">
                <p class="text-gray-500 font-medium">Belum ada kuis/tryout yang dibuat.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
