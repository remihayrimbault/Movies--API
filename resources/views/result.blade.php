@extends('layout.head')
@section('content')
    <div class="transition"></div>
    <div class="background" style="background: top/100% url('{{$Search->Poster}}')"></div>
    <a class="back_button">Back</a>
    <h2>{{$Search->Title}}</h2>
    <div class="content">
        <div class="left">
            <div><img src="{{ asset('images') }}/emoji/director.png"><p>{{$Search->Director}}</p></div>
            <div><img src="{{ asset('images') }}/emoji/writer.png"><p>{{$Search->Writer}}</p></div>
            <div><img src="{{ asset('images') }}/emoji/actors.png"><p>{{$Search->Actors}}</p></div>
            <div><img src="{{ asset('images') }}/emoji/plot.png"><p>{{$Search->Plot}}</p></div>
            <div><img src="{{ asset('images') }}/emoji/awards.png"><p>{{$Search->Awards}}</p></div>
        </div>
        <div class="right">
            <div><img src="{{ asset('images') }}/emoji/genre.png"><p>{{$Search->Genre}}</p></div>
            <div><img src="{{ asset('images') }}/emoji/released.png"><p>{{$Search->Released}}</p></div>
            <div><img src="{{ asset('images') }}/emoji/runtime.png"><p>{{$Search->Runtime}}</p></div>
        </div>
        <img src="{{$Search->Poster}}">
    </div>
@endsection
