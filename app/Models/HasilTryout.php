<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilTryout extends Model
{
    use HasFactory;

    protected $fillable = [
        'tryout_id',
        'user_id',
        'jumlah_benar',
        'jumlah_salah',
        'nilai',
        'waktu_mulai',
        'waktu_selesai',
    ];

    public function tryout()
    {
        return $this->belongsTo(Tryout::class, 'tryout_id');
    }

    public function siswa()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
