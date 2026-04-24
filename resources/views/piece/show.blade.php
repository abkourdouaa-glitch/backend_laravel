<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h2>Détail de piece</h2>
        <h3>Reference : {{$piece->reference}}</h3>
        <h3>Désignation : {{$piece->designation}}</h3>
        <h3>Categorie : {{$piece->categorie}}</h3>
        <h3>statut : {{$piece->statut}}</h3>
        <h4>Prix : {{$piece->prix}}</h3>
        <a class="btn btn-secondary" href="{{route('piece.index')}}">Retour</a>
    </div>
</body>
</html>