@extends('layout.head')
@section('content')
    <div class="transition"></div>
    <div class="background"></div>
    <a class="back_button">Back</a>
    <div class="parent">
        @for ($i = 0; $i<10; $i++)
            <div id="{{$Search->Search[$i]->imdbID}}" class="result div{{$i+1}}">
                <img id="{{$Search->Search[$i]->Poster}}" src="{{$Search->Search[$i]->Poster}}" alt="Poster of {{$Search->Search[$i]->Title}}">
            </div>
        @endfor
    </div>
@endsection


