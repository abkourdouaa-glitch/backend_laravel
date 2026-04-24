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
        <h3>Ajouter une piece</h3>
        <form method="POST" action="{{route('piece.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="m-2">
                <label>Image</label>
                <input type="file" name="image" class="form-control" value="{{old('image')}}">
            </div>
            <div class="m-2">
                <label>Référence</label>
                <input type="text" name="reference" class="form-control @error('reference') is-invalid @enderror" value="{{old('reference')}}">
                @error('reference')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="m-2">
                <label>Désignation</label>
                <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{old('designation')}}">
                @error('designation')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="m-2">
                <label>Statut</label>
                <select name="statut" value="{{old('statut')}}" class="form-control @error('statut') is-invalid @enderror">
                    <option value="">Choisi</option>
                    <option value="Actif">Actif</option>
                    <option value="Désactif">Désactif</option>
                    <option value="Default">Default</option>
                </select>
                @error('statut')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="m-2">
                <label>Catégorie</label>
                <input type="text" name="categorie" class="form-control @error('categorie') is-invalid @enderror" value="{{old('categorie')}}">
                @error('categorie')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="m-2">
                <label>Prix</label>
                <input type="number" name="prix" class="form-control @error('prix') is-invalid @enderror" value="{{old('prix')}}">
                @error('prix')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Ajouter</button>
        </form>
    </div>
</body>
</html>