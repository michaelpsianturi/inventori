<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    protected $table = 'asset';
    protected $fillable = ['nama', 'harga', 'Qty'];
}
