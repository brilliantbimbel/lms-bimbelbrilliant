<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $fillable = [
        'tryout_id',
        'pertanyaan',
        'tipe_soal',
        'pilihan',
        'kunci_jawaban',
        'bobot',
        'pembahasan',
    ];

    protected $casts = [
        'pilihan' => 'array',
    ];

    public function tryout()
    {
        return $this->belongsTo(Tryout::class);
    }
}

