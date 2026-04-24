<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>        
    <div class="container bg-light p-2 d-flex mt-3">
        @foreach($films as $film)
        <div class="border border rounded-4 p-3 m-2 bg-white w-50">
            <strong class="text-primary">{{$film->titre}}</strong><br>
            <p>{{$film->genre}} *  {{$film->annee}}</p> 
            <p> {{$film->pays}} |  {{$film->duree}}</p>
            <a  href="{{ route('TP7.show', $film->id) }}" class="btn btn-primary">Détails</a>
        </div>
        @endforeach
    </div>
</body>
</html>