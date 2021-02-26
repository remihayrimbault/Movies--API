<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SpaceXController;
use App\Http\Controllers\PokemonsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('', function () {
    return view('home');
});

Route::get('/cars', function() {
   return view('cars');
});

Route::get('/cars/{id}/', [CarController::class, 'index']);
Route::get('/add', [CarController::class, 'add']);

Route::get('/update/{id}', [CarController::class, 'update']);

Route::get('/spacex/roadster', [SpaceXController::class, 'roadster']);

Route::get('/pokemons', [PokemonsController::class, 'pokemons']);
Route::get('/pokemon/{name}', [PokemonsController::class, 'pokemon']);
