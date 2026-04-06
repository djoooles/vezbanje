



@extends("layout")

@section("content")




        @foreach($ocena as $ucenikovaOcena)

            @csrf
            <p>{{ $ucenikovaOcena->predmet }} {{ $ucenikovaOcena->profesor }}: {{ $ucenikovaOcena->ocena }}</p>
            <a href="dodaj-ocenu">
                <button>Dodaj Ocene</button>
            </a>
        @endforeach

@endsection
