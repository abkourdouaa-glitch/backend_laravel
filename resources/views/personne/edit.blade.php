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
    <div class="conatiner">
        <form action="{{route('personne.update',$personne->id)}}" method="get">
            @csrf
            <h2>Ajouter</h2>
            <input type="text" name="nom" placeholder="Nom" class="form-control m-2 @error('nom') is-invalid @enderror" value="{{ $personne->nom }}">
            @error('nom')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <input type="email" name="email" placeholder="Email" class="form-control m-2 @error('email') is-invalid @enderror" value="{{ $personne->email }}">
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <input type="text" name="ville" placeholder="Ville" class="form-control m-2 @error('ville') is-invalid @enderror" value="{{ $personne->ville }}">
            @error('ville')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <div>
                <select name="category" class="form-control @error('category') is-invalid @enderror">
                    <option value="">--Choisi--</option>
                    <option value="1" {{ old('category', $personne->category) == '1' ? 'selected' : ''}}>1</option>
                    <option value="2" {{ old('category', $personne->category) == '2' ? 'selected' : ''}}>2</option>
                    <option value="3" {{old('category', $personne->category) == '3' ? 'selected' : ''}}>3</option>
                </select>
                @error('category')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <select name="statut" class="form-control @error('satut') is-invalid @enderror">
                    <option value="">--choisi--</option>
                    <option value="actif" {{old('statut', $personne->statut) == 'actif' ? 'selected' : ''}}>Actif</option>
                    <option value="inactif" {{old('statut', $personne->statut) == 'inactif' ? 'selected' : ''}}>Inactif</option>
                </select>
                @error('statut')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary w-100 m-3" type="submit">Modifier</button>
        </form>
    </div>
</body>
</html>