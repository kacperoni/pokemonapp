<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PokemonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/login', [WelcomeController::class, 'login'])->name('login');
Route::get('/register', [WelcomeController::class, 'register'])->name('register');
Route::middleware(['auth'])->group(function(){
    Route::get('/pokemons',[PokemonController::class, 'index'])->name('pokemons.index');
});