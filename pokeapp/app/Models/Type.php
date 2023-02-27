<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class, 'type_pokemon');
    }
}
