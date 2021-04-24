<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\ResultController;

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


Route::get('/research/{name}', [ResearchController::class, 'research']);

Route::get('/result/{id}', [ResultController::class, 'result']);
