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
        <div><strong>{{$film->titre}}</strong></div>
        <table class="table">
            <tr>
                <th>Acteur</th>
                <th>Role</th>
                <th>Type</th>
            </tr>
            @foreach($acteurs as $acteur)
            <tr>
                <td>{{$acteur->nom}} {{$acteur->prenom}}</td>
                <td>{{$acteur->role}}</td>
                <td>{{$acteur->typeRole}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>