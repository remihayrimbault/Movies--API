@extends('layout.head')
@section('content')
    <div class="transition">
        <img src="{{ asset('images') }}/icons8-clap.gif">
    </div>
    <div class="background">
        <img class="research">
    </div>
    <a class="back_button">Back</a>
    <div class="parent">
        @for ($i = 0; $i<10; $i++)
            <div id="{{$Search->Search[$i]->imdbID}}" class="result div{{$i+1}}">
                <img id="{{$Search->Search[$i]->Poster}}" src="@php
                    if ($Search->Search[$i]->Poster =="N/A") {
                        echo (asset('images')."/no_poster.png");
                    } else {
                        echo ($Search->Search[$i]->Poster);
                    }
                    @endphp" alt="Poster of {{$Search->Search[$i]->Title}}">
            </div>
        @endfor
    </div>
@endsection


