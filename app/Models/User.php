<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Kolom yang boleh diisi secara massal (Mass Assignment)
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'status',
        'kelas_id',
    ];

    /**
     * Kolom yang disembunyikan saat data di-convert ke Array/JSON
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casting tipe data otomatis
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ==========================================
    // RELASI UNTUK SISWA (Milik Banyak/Satu Kelas via Pivot kelas_siswa)
    // ==========================================
    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_siswa', 'siswa_id', 'kelas_id');
    }

    // ==========================================
    // RELASI UNTUK GURU / TENTOR (Memiliki Banyak Kelas)
    // ==========================================
    public function kelases()
    {
        return $this->hasMany(Kelas::class, 'tentor_id');
    }
}
