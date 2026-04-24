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
        <div class="m-2 d-flex justify-content-between">
            <h2>Liste des voiture</h2>
            <button>Ajouter une nouvelle voiture</button>
        </div>
        <table class="table">
            <tr>
                <th>Matricule</th>
                <th>Marque</th>
                <th>Couleur</th>
                <th>Date mise en circulation</th>
                <th>Actions</th>
            </tr>
            @foreach ($voitures as $voiture)
            <tr>
                <td>{{$voiture->matricule}}</td>
                <td>{{$voiture->marque}}</td>
                <td>{{$voiture->couleur}}</td>
                <td>{{$voiture->dateMiseEnCirculation}}</td>
                <td>
                    <form action="{{route('')}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
    
</body>
</html>