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
        <div class="d-flex justify-content-between my-3">
            <h2 class="text-primary">SpareParts Manager</h2>
            <a class="btn btn-primary" href="{{route('piece.create')}}">+Ajouter</a>
        </div>
        <div class="d-flex justify-content-between">
            <h3>Inventaire des pieces</h3>
            <strong>piece(s)</strong>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{session('succss')}}
        </div>
        @endif
        <table class="table">
            <tr>
                <th>Image</th>
                <th>Référence</th>
                <th>Désignation</th>
                <th>Catégorie</th>
                <th>Prix(DH)</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            @foreach ($pieces as $piece)
            <tr>
                <td>
                    @if($piece->image)
                        <img src="{{asset('storage/'.$piece->image)}}" width="100">
                    @endif
                </td>
                <td>{{$piece->reference}}</td>
                <td>{{$piece->designation}}</td>
                <td>{{$piece->categorie}}</td>
                <td>{{$piece->prix}}</td>
                <td>{{$piece->statut}}</td>
                <td class="d-flex">
                    <a class="btn btn-success" href="{{route('piece.show',$piece->id)}}">Détail</a>
                    <a class="btn btn-warning mx-2" href="{{route('piece.edit',$piece->id)}}">Modifier</a>
                    <form method="POST" action="{{route('piece.destroy', $piece->id)}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Do you want to delete?')">Supprimer</button>
                    </form>
                </td>
            </tr>  
            @endforeach
        </table>
    </div>
    
</body>
</html>