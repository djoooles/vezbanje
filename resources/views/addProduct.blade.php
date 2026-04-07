@extends("layout")

@section("naslovStranice")
    Add Product Page
@endsection

@section("content")
    <form method="POST" action="/admin/save-product">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Unesite Ime">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Unesite Opis Proizvoda">
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price" placeholder="Unesite Cenu">
        </div>
        <div>
            <label>Kolicina</label>
            <input type="number" name="kolicina" placeholder="Unestie kolicinu">
        </div>
        <div>
            <label>Image</label>
            <input type="text" name="image" placeholder="Unesite Sliku">

            <button type="submit">Unesi</button>
        </div>
    </form>
@endsection
