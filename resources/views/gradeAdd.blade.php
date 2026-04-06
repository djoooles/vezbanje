<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>


<form action="/add-user-grade" method="POST">
    @csrf

    <div>
        <label for="predmet">Predmet:</label>
        <input type="text" name="predmet" id="predmet" required>
    </div>

    <div>
        <label for="profesor">Profesor:</label>
        <input type="text" name="profesor" id="profesor" required>
    </div>

    <div>
        <label for="ocena">Ocena:</label>
        <input type="number" name="ocena" id="ocena" min="1" max="5" required>
    </div>

    <button type="submit">Sačuvaj</button>
</form>

<a href="/">
    <button>Nazad na početnu</button>
</a>

</body>
</html>
