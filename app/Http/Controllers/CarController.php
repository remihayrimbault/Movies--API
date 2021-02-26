<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Car;

class CarController extends Controller
{
    public function index($id) {
        $car = Car::find($id);
        $images_path = asset('images');
        $image_name = Str::snake($car->name);

        return view('car', [
            'id' => $id,
            'car' => $car,
            'image_name' => $image_name,
            'images_path' => $images_path
        ]);
    }

    public function add() {
        $car = new Car;
        $car->name = 'McLaren';
        $car->country = 'UK';
        $car->color = 'Orange';
        $car->din = '1000';
        $car->speed = '330';
        $car->points = '1';
        $car->save();
    }

    public function delete() {
        echo('CarController - Delete');
    }

    public function update($id) {
    	$car = Car::find($id);
    	$car->din = '1100';
    	$car->speed = '340';
    	$car->save();
    	dd($car);
    }
}
