<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class asset extends Model
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

    public function histori_logs()
    {
        return $this->hasOne(HistoriLog::class);
    }
}
