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
        <h2 class="mt-3">Modifier annonce</h2>
        <form method="POST" action="{{ route('annonce.update', $annonce->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <label>Titre</label>
            <input type="text" name="titre" value="{{ $annonce->titre }}" class="form-control mb-3 @error('titre') is-invalid @enderror">
            @error('titre')
                <p class="invalid-feedback">
                {{$message}}
            </p>
            @enderror

            <label >Description</label>
            <textarea name="description" class="form-control mb-3 @error('description') is-invalid @enderror">{{ old('description', $annonce->description) }}</textarea>
            @error('description')
                <p class="invalid-feedback">
                {{$message}}
                </p>
            @enderror

            <div class="mb-3">
                <label>Type</label>
                <select name="type" class="form-control @error('type') is-invalid @enderror" >
                    <option value="">Choisir</option>
                    <option value="Appartement" {{old('type', $annonce->type) == 'Appartement' ? 'selected' : '' }} >Appartement</option>
                    <option value="Maison" {{old('type', $annonce->type) == 'Maison' ? 'selected' : '' }}>Maison</option>
                    <option value="Villa" {{old('type', $annonce->type) == 'Villa' ? 'selected' : '' }}>Villa</option>
                    <option value="Magasin" {{old('type', $annonce->type) == 'Magasin' ? 'selected' : '' }}>Magasin</option>
                    <option value="Terrain" {{old('type', $annonce->type) == 'Terrain' ? 'selected' : '' }}>Terrain</option>
                </select>
                @error('type')
                    <p class="invalid-feedback">
                    {{$message}}
                    </p>
                @enderror
            </div>

            <div>
                <label>Ville</label>
                <input type="text" name="ville" class="form-control mb-3 @error('ville') is-invalid @enderror" value="{{ $annonce->ville }}">
                @error('ville')
                    <p class="invalid-feedback">
                    {{$message}}
                    </p>
                @enderror
            </div>
    
            <label>Superficie</label>
            <input type="text" name="superficie" value="{{ $annonce->superficie }}" class="form-control mb-3 @error('superficie') is-invalid @enderror">
            @error('superficie')
                <p class="invalid-feedback">
                {{$message}}
                </p>
            @enderror

            <div class="@error('neuf') is-invalid @enderror">
                <label >Etat</label><br>
                <input class="mx-2" type="radio" name="neuf" value="1" {{old('neuf', $annonce->neuf) == 1 ? 'checked' : '' }} >Neuf <br>
                <input class="mx-2" type="radio" name="neuf" value="0" {{old('neuf', $annonce->neuf) == 0 ? 'checked' : '' }} >Ancien <br>
            </div>
            @error('neuf')
                <p class="invalid-feedback">
                {{$message}}
                </p>
            @enderror

            <label class="mt-3">Prix</label>
            <input type="number" name="prix" value="{{ $annonce->prix }}" class="form-control mb-3 @error('prix') is-invalid @enderror">
            @error('prix')
                <p class="invalid-feedback">
                {{$message}}
                </p>
            @enderror
            @if($annonce->photo)
                <img src="{{ asset('storage/'.$annonce->photo) }}" width="150">
            @endif
            <label class="mt-3">Photo</label>
            <input type="file" name="photo" value="{{ $annonce->photo }}" class="form-control mb-3 @error('photo') is-invalid @enderror">
            @error('photo')
                <p class="invalid-feedback">
                {{$message}}
                </p>
            @enderror

            <button class="btn btn-primary w-100 mb-3" type="submit">Modifier</button>
        </form>
    </div>
</body>
</html>