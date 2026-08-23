<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    use HasFactory;

    protected $table = 'ujians';

    protected $fillable = [
    'user_id',
    'tryout_id',
    'status',
    'nilai',
];

    public function siswa()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tryout()
    {
        return $this->belongsTo(Tryout::class, 'tryout_id');
    }

    public function jawabanSiswas()
    {
        return $this->hasMany(JawabanSiswa::class, 'ujian_id');
    }
}
