
@extends("layout")

    @section("naslovStranice")
        Admin Page
    @endsection

        @section("content")

            <table class="table">

                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($allProducts as $product)
                        <td> {{ $product->id }} </td>
                        <td> {{ $product->name }} </td>
                        <td> {{ $product->description }}</td>
                        <td> {{ $product->price }} </td>
                        <td> {{ $product->image }} </td>
                     <td>
                        <a href="/admin/delete-product/{{ $product->id }}" class="btn btn-danger" >Obrisi</a>
                        <a class="btn btn-primary">Edituj</a>
                    </td>
                </tr>
                </tbody>
                @endforeach
            </table>

        @endsection


