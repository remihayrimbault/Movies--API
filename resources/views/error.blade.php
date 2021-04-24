
    @extends('layout.head')
    @section('content')

        <div class="transition">
            <img src="{{ asset('images') }}/icons8-clap.gif">
        </div>
        <div class="try_again">
            <p>Sorry, we couldn't find your search. Please try again with a different spelling</p>
            <a class="try">Try again</a>
        </div>

    @endsection
