<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Tryout;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoalController extends Controller
{
    public function index($tryout_id)
    {
        $tryout = Tryout::where('tentor_id', Auth::id())->findOrFail($tryout_id);
        $soals = Soal::where('tryout_id', $tryout_id)->latest()->get();

        return view('guru.soal.index', compact('tryout', 'soals'));
    }

    public function store(Request $request, $tryout_id)
    {
        $request->validate([
            'pertanyaan' => 'required|string',
            'tipe_soal'  => 'required|in:pg,pg_kompleks,isian,uraian',
            'bobot'      => 'required|numeric|min:1',
        ]);

        $pilihan = null;
        $kunciJawaban = null;

        if ($request->tipe_soal === 'pg') {
            $pilihan = [
                'A' => $request->pilihan_a,
                'B' => $request->pilihan_b,
                'C' => $request->pilihan_c,
                'D' => $request->pilihan_d,
            ];
            $kunciJawaban = $request->kunci_pg;
        } elseif ($request->tipe_soal === 'pg_kompleks') {
            $pilihan = [
                'A' => $request->pilihan_a,
                'B' => $request->pilihan_b,
                'C' => $request->pilihan_c,
                'D' => $request->pilihan_d,
            ];
            // Kunci disimpan berupa JSON string dari array checklist misal ["A","C"]
            $kunciJawaban = json_encode($request->kunci_pg_kompleks ?? []);
        } elseif ($request->tipe_soal === 'isian') {
            $kunciJawaban = trim($request->kunci_isian);
        } else {
            // Uraian
            $kunciJawaban = $request->kunci_uraian;
        }

        Soal::create([
            'tryout_id'    => $tryout_id,
            'pertanyaan'   => $request->pertanyaan,
            'tipe_soal'    => $request->tipe_soal,
            'pilihan'      => $pilihan,
            'kunci_jawaban'=> $kunciJawaban,
            'bobot'        => $request->bobot,
            'pembahasan'   => $request->pembahasan,
        ]);

        return redirect()->back()->with('success', 'Soal berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $soal = Soal::findOrFail($id);
        $soal->delete();

        return redirect()->back()->with('success', 'Soal berhasil dihapus!');
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'pertanyaan' => 'required',
        'tipe_soal' => 'required',
        'bobot' => 'required|numeric',
    ]);

    $soal = Soal::findOrFail($id);

    $pilihan = null;
    if (in_array($request->tipe_soal, ['pg', 'pg_kompleks'])) {
        $pilihan = [
            'A' => $request->pilihan_a,
            'B' => $request->pilihan_b,
            'C' => $request->pilihan_c,
            'D' => $request->pilihan_d,
        ];
    }

    // Jika PG Kompleks, simpan kunci jawaban sebagai array/json
    $kunci_jawaban = $request->kunci_jawaban;
    if ($request->tipe_soal === 'pg_kompleks' && is_array($request->kunci_jawaban)) {
        $kunci_jawaban = json_encode($request->kunci_jawaban);
    }

    $soal->update([
        'pertanyaan' => $request->pertanyaan,
        'tipe_soal' => $request->tipe_soal,
        'pilihan' => $pilihan ? json_encode($pilihan) : null,
        'kunci_jawaban' => $kunci_jawaban,
        'bobot' => $request->bobot,
        'pembahasan' => $request->pembahasan,
    ]);

    return back()->with('success', 'Soal berhasil diperbarui!');
}
}
