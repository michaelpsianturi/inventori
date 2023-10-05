<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accessories extends Model
{
    use HasFactory;

    protected $table = 'accessories';

    protected $fillable = [
        'nama_barang',
        'harga_barang',
        'nomor_seri_barang',
        'jumlah_barang',
    ];
}
