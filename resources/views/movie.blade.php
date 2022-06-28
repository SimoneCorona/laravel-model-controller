<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($movies as $movie)
        <div class= "card">
            <h1>Titolo: {{ $movie->title }}</h1>
            <h2>Titolo originale: {{ $movie->original_title }}</h2>
            <h3>Nazionalità: {{ $movie->nationality }}</h3>
            <h3>Data: {{ $movie->date }}</h3>
            <h3>Voto: {{ $movie->vote }}</h3>
        </div>
    @endforeach
</body>
</html>