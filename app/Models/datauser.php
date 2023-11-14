<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datauser extends Model
{
    use HasFactory;

    protected $table = 'datauser';

    protected $fillable = [
        'profile_name',
        'profile_email',
        'profile_phone_number',
        'profile_address',
    ];

    public function assets()
    {
        return $this->hasMany(asset::class);
    }

    public function Accessories()
    {
        return $this->hasMany(accessories::class);
    }
}
