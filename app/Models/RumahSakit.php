<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;

    // Tambahkan field yang diizinkan untuk mass assignment
    protected $fillable = [
        'nama',
        'alamat',
        'no_telepon'
    ];
}
