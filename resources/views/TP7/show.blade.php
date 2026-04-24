<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container bg-light p-2">
        <div class="bg-white border rounded-4 p-3">
           <h4 class="d-inline">{{$film->titre}}</h4>
           <span class="text-muted">({{$film->annee}})</span>
           <p class="mt-3">Pays : <strong>{{$film->pays}}</strong></p>
           <p>Genre : <strong>{{$film->genre}}</strong></p>
           <p>Durée : <strong>{{$film->duree}}</strong></p>
           <a href="{{ route('TP7.acteursDetail', $film->id) }}" class="btn btn-success">Voir les acteurs</a>
        </div>
    </div>
</body>
</html>