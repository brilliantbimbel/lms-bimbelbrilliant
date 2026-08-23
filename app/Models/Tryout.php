<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tryout extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'mapel',
        'kelas_id',
        'durasi',
        'tipe',
        'tentor_id',
    ];

    // Relasi ke Model Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    // Relasi ke Model User (Tentor)
    public function tentor()
    {
        return $this->belongsTo(User::class, 'tentor_id');
    }

    // Relasi yang dipanggil oleh Admin TryoutController
    public function pembuat()
    {
        return $this->belongsTo(User::class, 'tentor_id');
    }

    // Relasi ke Model Soal
    public function soals()
    {
        return $this->hasMany(Soal::class, 'tryout_id');
    }
}
