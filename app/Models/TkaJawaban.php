<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TkaJawaban extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'jawaban_siswa' => 'array',
    ];

    public function soal()
    {
        return $this->belongsTo(TkaSoal::class, 'tka_soal_id');
    }
}
