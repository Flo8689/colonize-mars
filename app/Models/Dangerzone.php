<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dangerzone extends Model
{
    use HasFactory;

    public function minerals() 
    {
        return $this->belongsToMany(Mineral::class, 'zone_minerals', 'zone_id', 'mineral_id');
    }
}
