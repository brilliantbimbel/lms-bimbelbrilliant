<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bimbel',
        'slogan',
        'logo_path',
        'no_wa_admin',
        'email_admin',
        'tahun_ajaran',
        'semester',
    ];
}
