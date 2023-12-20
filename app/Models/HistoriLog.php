<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriLog extends Model
{
    use HasFactory;

    protected $table = 'histori_logs';

    protected $fillable = [
        'group_id',
        'name',
    ];

    public function users()
    {
        return $this->belongsToMany(datauser::class, 'users');
    }

    public function assets()
    {
        return $this->belongsToMany(asset::class, 'assets');
    }

    public function Accessories()
    {
        return $this->belongsToMany(accessories::class, 'Accessories');
    }
}