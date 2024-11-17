<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilMpk extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mpk_id',
    ];

    public function user()
    {
        return $this->belongsTo(Murid::class);
    }

    public function anggota()
    {
        return $this->belongsTo(Mpk::class);
    }
}
