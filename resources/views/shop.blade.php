@extends("layout")

@section("naslovStranice")
    Shop Page
@endsection

@section("content")
    <div class="container mt-5">
        <h2 class="mb-4 text-center">🛒 Naši proizvodi</h2>

        <div class="row">
            @foreach($allProducts as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">

                        {{-- Placeholder slika --}}
                        <img src="https://via.placeholder.com/300x200"
                             class="card-img-top"
                             alt="product image">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $product->name }}</h5>

                            <p class="card-text text-muted">
                                {{ Str::limit($product->description, 80) }}
                            </p>

                            <div class="mt-auto">
                                <h4 class="text-success">
                                    {{ number_format($product->price, 2) }} RSD
                                </h4>

                                <div class="d-flex justify-content-between mt-3">
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        View
                                    </a>

                                    <a href="#" class="btn btn-success btn-sm">
                                        Add to Cart
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
