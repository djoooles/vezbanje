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
            <label>Name</label>
            <input type="text" name="name" placeholder="Unesite Ime" value="{{ old("name") }}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Unesite Opis Proizvoda" value="{{ old("description") }}">
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price" placeholder="Unesite Cenu" value="{{ old("price") }}">
        </div>
        <div>
            <label>Kolicina</label>
            <input type="number" name="kolicina" placeholder="Unestie kolicinu" value="{{ old("kolicina") }}">
        </div>
        <div>
            <label>Image</label>
            <input type="text" name="image" placeholder="Unesite Sliku" value="{{ old("image") }}">

            <button type="submit">Unesi</button>
        </div>
    </form>
@endsection
