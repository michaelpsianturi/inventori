<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriLog extends Model
{
    use HasFactory;

    protected $table = 'historilogs';

    protected $fillable = [
        'asset_id',
        'name',
    ];

    // public function assets()
    // {
    //     return $this->belongsToMany(asset::class, 'assets');
    // }

    // public function Accessories()
    // {
    //     return $this->belongsToMany(accessories::class, 'Accessories');
    // }
}
