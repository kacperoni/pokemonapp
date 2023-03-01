@extends('layouts.auth')
@section('content')
<div class="card-container">
    @foreach ($pokemons as $pokemon)
    <div class="card">
        <img class="card-image" src="{{$pokemon->image_url}}" alt="pokemon">
        <div class="card-content">
            Ndex: <br>
            {{$pokemon->getNdex()}} <br><br>
            Name: <br>
            {{Str::ucfirst($pokemon->name)}} <br><br>
            Type: <br>
            <ul class="types-list">
            @foreach($pokemon->types as $type)
                <li>{{$type['name']}}</li>
            @endforeach
            </ul><br>
            Height: <br>
            {{$pokemon->height}}m <br><br>
            Weight: <br>
            {{$pokemon->weight}}kg
        </div>
    </div>
    @endforeach
</div>
@endsection