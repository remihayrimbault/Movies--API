
        @extends('layout.head')
        @section('content')
    <body class="home">
    <div class="transition">
        <img src="{{ asset('images') }}/icons8-clap.gif">
    </div>
    <div class="background">
        <img class="home" src="{{ asset('images') }}/1.jpeg">
        <img class="home" src="{{ asset('images') }}/2.jpeg">
        <img class="home" src="{{ asset('images') }}/3.jpeg">
        <img class="home" src="{{ asset('images') }}/4.jpeg">
        <img class="home" src="{{ asset('images') }}/5.jpeg">
    </div>
    <div class="input">
        <input id="search_bar" type="text" placeholder="Enter your movie here">
    </div>
        @endsection
