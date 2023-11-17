<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriLog extends Model
{
    use HasFactory;

    protected $table = 'histori_logs';

    protected $fillable = [
        'asset_id',
        'name',
        'description',
    ];

    public function asset()
    {
        return $this->hasOne(asset::class);
    }
}
