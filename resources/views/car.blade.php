<h1>Page d'une voiture : {{ $car->name }}</h1>
<ul>
    <li>Pays : {{ $car->country }}</li>
    <li>Puissance : {{ $car->din }}ch</li>
    <li>Vitesse : {{ $car->speed }}km/h</li>
    <li>Points : {{ $car->points }}</li>
</ul>
<img src="{{ $images_path }}/{{ $image_name ?? '' }}.svg" height="300px" alt="{{ $car->name }}">
