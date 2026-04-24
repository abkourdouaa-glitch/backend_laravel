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
        <div class="d-flex justify-content-between mx-2 my-3">
            <h2>Tableau Prsonne</h2>
            <a class="btn btn-success" href="{{route('personne.create')}}">+ Ajouter un nouveau</a>
        </div>
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Ville</th>
                <th>Categorie</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            @foreach ($personnes as $personne)
            <tr>
                <td>{{$personne->nom}}</td>
                <td>{{$personne->email}}</td>
                <td>{{$personne->ville}}</td>
                <td>{{$personne->categry}}</td>
                <td>
                    @if ($personne->statut == 'actif')
                        <span class="badge bg-success">Actif</span>                    
                    @else
                        <span class="badge bg-danger">Inactif</span>      
                    @endif
                </td>
                <td class="d-flex">
                    <button class="btn btn-info">ChangeS</button>
                    <a class="btn btn-warning mx-2" href="{{route('personne.edit', $personne->id)}}">Modifier</a>
                    <a class="btn btn-primary" href="{{route('personne.show',$personne->id)}}">Show</a>
                    <form action="{{route('personne.destroy', $personne->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger mx-2" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>