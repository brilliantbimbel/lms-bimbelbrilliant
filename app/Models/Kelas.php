<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan
    protected $table = 'kelas';

    protected $guarded = ['id'];

    public function tentor()
    {
        return $this->belongsTo(User::class, 'tentor_id');
    }

    public function siswas()
    {
        return $this->belongsToMany(User::class, 'kelas_siswa', 'kelas_id', 'siswa_id');
    }
}
