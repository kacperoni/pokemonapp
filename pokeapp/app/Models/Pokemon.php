<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';

    public function types()
    {
        return $this->belongsToMany(Type::class, 'type_pokemon');
    }

    public function getNdex(){
        $id = strval($this->id);
        $ndex = "#";
        for($i=0; $i<4-strlen($id); $i++){
            $ndex .= "0";
        }
        
        return $ndex . $id;
    }
}
