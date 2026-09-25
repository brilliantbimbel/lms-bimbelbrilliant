<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TkaPaket extends Model
{
    protected $guarded = ['id'];

    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }

    public function soals()
    {
        return $this->hasMany(TkaSoal::class);
    }

    public function sesis()
    {
        return $this->hasMany(TkaSesi::class);
    }
}
