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
        <form action="{{ route('FormController.store2') }}" method="post">
        @csrf
            <h1 class="my-3">Créer un compte</h1>
            <div class="mb-2">
                <label for="nom" class="form-label">Nom d'utilisateur</label>
                <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror">
                @error('nom')
                <div class="invalid-feedback">
                    {{$massage}}
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="mp" class="form-label">Mot de passe</label>
                <input type="password" name="mp" class="form-control  @error('mp') is-invalid @enderror">
                @error('mp')
                <div class="invalid-feedback">
                    {{$massage}}
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label for="c_mp" class="form-label">Confirmer le mot de passe</label>
                <input type="password" name="c_mp" class="form-control  @error('c_mp') is-invalid @enderror">
                @error('c_mp')
                <div class="invalid-feedback">
                    {{$massage}}
                </div>
                @enderror
            </div>
            <button class="btn btn-primary mt-2 w-100">S'inscrire</button>
        </form>
    </div>
</body>
</html>