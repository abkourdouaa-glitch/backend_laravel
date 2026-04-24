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
    <div class="container d-flex justify-content-center">
        <div>
            <div class="card p-3 m-2 shadow shadow-3">
                <strong>Nom : </strong><span>{{$personne->nom}}</span>
                <strong>Email : </strong><span>{{$personne->email}}</span>
                <strong>Ville : </strong><span>{{$personne->ville}}</span>
                <strong>Catgorie : </strong><span>{{$personne->category}}</span>
                <strong>Statut : </strong><span>{{$personne->statut}}</span>
            </div>
            <a class="btn btn-secondary m-2" href="{{route('personne.index')}}">Retour</a>

        </div>
    </div>
</body>
</html>