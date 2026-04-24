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
        <div class="d-flex justify-content-between">
            <h2>Test</h2>
            <a href="{{route('test.create')}}" class="btn btn-primary">Ajouter</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>Age</th>
                <th>Categorie</th>
                <th>Statut</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            @foreach ($tests as $test)
            <tr>
                <td>{{$test->nom}}</td>
                <td>{{$test->age}}</td>
                <td>{{$test->categorie}}</td>
                <td>{{$test->statut}}</td>
                <td>
                    @if($test->image){
                        <img src="{{asset('storage/'.$piece->image)}}" width="100">
                    }
                    @endif
                </td>
            </tr>  
            @endforeach
        </table>
    </div>
</body>
</html>