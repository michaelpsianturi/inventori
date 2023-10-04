<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datauser extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = [
        'nama_pengguna',
        'email',
        'phone_number',
        'alamat',
    ];
}
