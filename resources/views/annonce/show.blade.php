<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h2 class="m-3">Détails d'annonce</h2>
        <div class="border rounded-3 shadow-sm p-3">
            <p><strong>Titre</strong> : {{$annonce->titre}}</p>
            <p><strong>Description</strong> : {{$annonce->description}}</p>
            <p><strong>Type</strong> : {{$annonce->type}}</p>
            <p><strong>Ville</strong> : {{$annonce->ville}}</p>
            <p><strong>Superficie</strong> : {{$annonce->superficie}}</p>
            <p><strong>Etat</strong> : {{$annonce->neuf}}</p>
            <p><strong>Prix</strong> : {{$annonce->prix}}</p>
            <a class="btn btn-secondary mt-2" href="{{ route('annonce.index') }}">Retour</a>
        </div>
    </div>
    
</body>
</html>