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
        <form action="{{route('piece.update', $piece->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="m-2">
                <label>Image</label>
                <input type="file" name="image" class="form-control" value="{{$piece->image}}">
            </div>
            <div class="m-2">
                <label>Référence</label>
                <input type="text" name="reference" class="form-control @error('reference') is-invalid @enderror" value="{{$piece->reference}}">
            </div>
            <div class="m-2">
                <label>Prix</label>
                <input type="number" name="prix" class="form-control @error('prix') is-invalid @enderror" value="{{$piece->prix}}">
            </div>
            <div class="m-2">
                <select name="categorie" class="form-control @error('categorie') is-invalid @enderror" value="{{$piece->categorie}}">
                    <option value="" >Choisi</option>
                    <option value="Actif" {{old('categorie', $piece->categorie)== 'Actif'? 'selected':''}}>Actif</option>
                    <option value="Désactif" {{old('categorie', $piece->categorie)== 'Désactif'? 'selected':''}}>Désactif</option>
                    <option value="Default" {{old('categorie', $piece->categorie)== 'Actif'? 'Default':''}}>Default</option>
                </select>
            </div>
            <div class="m-2">
                <label>Statut</label>
                <input type="text" name="statut" class="form-control @error('statut') is-invalid @enderror" value="{{$piece->statut}}">
            </div>
            <button class="btn btn-primary" type="submit">Modifier</button>
        </form>
    </div>
</body>
</html>