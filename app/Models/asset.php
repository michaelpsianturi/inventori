<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $table = 'asset';

    protected $fillable = [
        'product_name',
        'product_price',
        'product_serial_number',
        'product_stock',
        'description',
    ];

    public function HistoriLogs()
    {
        return $this->belongsTo(HistoriLog::class);
    }
}
