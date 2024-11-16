<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAnggota extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'anggota_id',
    ];

    public function user()
    {
        return $this->belongsTo(Murid::class);
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}
