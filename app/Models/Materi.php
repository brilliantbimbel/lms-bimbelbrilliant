<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi utama ke User (Pembuat/Guru)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Alias 'tentor' (digunakan oleh Controller Guru)
    public function tentor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Alias 'pembuat' (digunakan oleh Controller Admin)
    public function pembuat()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
