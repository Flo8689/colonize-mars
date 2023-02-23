<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mineral extends Model
{
    use HasFactory;

    public function dangerzones() 
    {
        return $this->belongsToMany(Dangerzone::class, 'zone_minerals', 'mineral_id', 'zone_id');
    }
}
