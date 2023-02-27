<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon?limit=20");
        $pokemons = $response['results'];
        $pokemonsToAdd = [];
        foreach($pokemons as $pokemon){
            $pokemonDetails = Http::get($pokemon['url'])->json();
            $newPokemon = [
                'name' => $pokemonDetails['name'],
                'pokedex_id' => $pokemonDetails['id'],
                'height' => $pokemonDetails['height'],
                'weight' => $pokemonDetails['weight'],
                'type' => $pokemonDetails['types'][0]['type']['name']
            ];

            $pokemonsToAdd[] = $newPokemon;
        }

        DB::table('pokemons')->insert($pokemonsToAdd);
    }
}
