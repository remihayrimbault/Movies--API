@for ($i = 0; $i<10; $i++)
    <p>{{$Search->Search[$i]->Title}}</p>
    <img src="{{$Search->Search[$i]->Poster}}" alt="Poster of {{$Search->Search[$i]->Title}}">
@endfor

