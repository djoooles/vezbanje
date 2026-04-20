@extends("layout")

@section("naslovStranice")
    Edituj Proizvod
@endsection

@section("content")

    <form method="POST" action="{{ route("product.save", ['product' => $product->id]) }}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="exampleInputEmail1">Ime Proizvoda</label>
            <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" value="{{ $product->name  }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Opis Proizvoda</label>
            <input type="text" name="description" class="form-control"  aria-describedby="emailHelp" value="{{ $product->description  }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Cena Proizvoda</label>
            <input type="text" name="price" class="form-control"  aria-describedby="emailHelp" value="{{ $product->price  }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Kolicina Proizvoda</label>
            <input type="number" name="kolicina" class="form-control"  aria-describedby="emailHelp" value="{{ $product->kolicina  }}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Slika Proizvoda</label>
            <input type="text" name="image" class="form-control"  aria-describedby="emailHelp"  value="{{ $product->image  }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection



