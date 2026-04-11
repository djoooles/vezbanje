@extends("layout")

@section("naslovStranice")
    Edituj Proizvod
@endsection

@section("content")



    <form >
        @csrf
        @method('PUT')

        <label>Ime proizvoda</label>
        <input type="text" name="name" value="{{ $product->name }}">

        <label>Opis</label>
        <textarea name="description">{{ $product->description }}</textarea>

        <label>Cena</label>
        <input type="text" name="price" value="{{ $product->price }}">

        <label>Kolicina</label>
        <input type="text" name="kolicina" value="{{ $product->kolicina }}">

        <label>Slika</label>
        <input type="text" name="slika" value="{{ $product->image }}">

        <button type="submit">Sačuvaj izmene</button>
    </form>

@endsection
