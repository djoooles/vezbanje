@extends("layout")

@section("naslovStranice")

    Admin Add Grade Page
    @endsection

    @section("content")
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Dodaj novu ocenu</h3>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/add-user-grade" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="predmet" class="form-label">Predmet:</label>
                            <input type="text" name="predmet" id="predmet" class="form-control" value="{{ old('predmet') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="profesor" class="form-label">Profesor:</label>
                            <input type="text" name="profesor" id="profesor" class="form-control" value="{{ old('profesor') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="ocena" class="form-label">Ocena:</label>
                            <input type="number" name="ocena" id="ocena" class="form-control" min="1" max="5" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Sačuvaj</button>
                        <a href="/" class="btn btn-secondary">Nazad na početnu</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@endsection
