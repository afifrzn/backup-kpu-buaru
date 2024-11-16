<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPaslon extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'paslon_id',
    ];

    public function user()
    {
        return $this->belongsTo(Murid::class);
    }

    public function paslon()
    {
        return $this->belongsTo(Paslon::class);
    }
}
