@extends("layout")

@section("naslovStranice")
    Add Product Page
@endsection

@section("content")
    <form method="POST" action="{{route("snimanjeOglasa")}}">
        @csrf

        <div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
        </div>
        <div>
            <label for="exampleInputEmail1">Ime Proizvoda</label>
            <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="Unesite Ime Proizvoda" value="{{ old("name") }}">
        </div>
        <div>
            <label for="exampleInputEmail1">Opis Proizvoda</label>
            <input type="text" name="description" class="form-control"  aria-describedby="emailHelp" placeholder="Unesite Opis Proizvoda" value="{{ old("description") }}">
        </div>
        <div>
            <label for="exampleInputEmail1">Cena Proizvoda</label>
            <input type="number" name="price" class="form-control"  aria-describedby="emailHelp" placeholder="Unestite Cenu Proizvoda" value="{{ old("price") }}">
        </div>
        <div>
            <label for="exampleInputEmail1">Kolicina Proizvoda</label>
            <input type="number" name="kolicina" class="form-control"  aria-describedby="emailHelp" placeholder="Unesite Kolicinu Proizvoda" value="{{ old("kolicina") }}">
        </div>
        <div>
            <label for="exampleInputEmail1">Slika Proizvoda</label>
            <input type="text" name="image" class="form-control"  aria-describedby="emailHelp" placeholder="Slika" value="{{ old("image") }}">

            <button type="submit" class="btn btn-primary">Unesi</button>
        </div>
    </form>
@endsection
