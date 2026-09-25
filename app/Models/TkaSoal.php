<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TkaSoal extends Model
{
    use HasFactory;

    protected $table = 'tka_soals';

    protected $fillable = [
        'tka_paket_id',
        'tipe_soal',
        'stimulus',
        'stimulus_gambar',
        'pertanyaan',
        'opsi_json',
        'kunci_json',
        'bobot_nilai',
    ];

    // Konversi otomatis array/json ke data yang bisa dibaca Blade
    protected $casts = [
        'opsi_json' => 'array',
        'kunci_json' => 'array',
    ];

    public function paket()
    {
        return $this->belongsTo(TkaPaket::class, 'tka_paket_id');
    }
}
