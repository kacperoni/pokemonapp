<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get("https://pokeapi.co/api/v2/pokemon?limit=20");
        $pokemons = $response['results'];

        foreach($pokemons as $pokemon){
            $pokemonDetails = Http::get($pokemon['url'])->json();
            $pokemonTypes = $this->getPokemonTypes($pokemonDetails['types']);
            Pokemon::create([
                'name' => $pokemonDetails['name'],
                'image_url' => $pokemonDetails['sprites']['front_default'],
                'pokedex_id' => $pokemonDetails['id'],
                'height' => $pokemonDetails['height']/10,
                'weight' => $pokemonDetails['weight']/10,
            ])->types()->attach($pokemonTypes);
        }
    }

    protected function getPokemonTypes($typesUrls): array
    {   
        $pokemonTypes = [];
        foreach($typesUrls as $url){
            $url = $url['type']['url'];
            $response = Http::get($url)->json();
            $pokemonTypes[] = $response['id'];
        }

        return $pokemonTypes;
    }
}
