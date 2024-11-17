<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'classroom',
        'Password',
        'classroom_encoded',
        'unique_number',
    ];
}
