



@extends("layout")

@section("content")






            @csrf

            <ul class="list-group">
                @foreach($ocena as $ucenikovaOcena)
                    <li class="list-group-item list-group-item-danger">
                        <strong>{{ $ucenikovaOcena->predmet }}</strong> - {{ $ucenikovaOcena->profesor }}: {{ $ucenikovaOcena->ocena }}
                    </li>
                @endforeach
            </ul>


            <a href="dodaj-ocenu">
                <button class="btn btn-primary">Dodaj Ocene</button>
            </a>


@endsection
