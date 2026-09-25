<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TkaSesi extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paket()
    {
        return $this->belongsTo(TkaPaket::class, 'tka_paket_id');
    }

    public function jawabans()
    {
        return $this->hasMany(TkaJawaban::class);
    }
}
