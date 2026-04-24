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
        <h2>Nouvelle Client</h2>
        <form method="POST" action="{{ route('client.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" name="nom" placeholder="Nom" value="{{old('nom')}}" class="form-control m-2  @error('nom') is-invalid @enderror" >
            @error('nom')
                <p class="invalid-feedback">
                    {{$message}}
                </p>
            @enderror
            <input type="email" name="email" placeholder="Email" value="{{old('email')}}" class="form-control m-2 @error('email') is-invalid @enderror">
            @error('email')
                <p class="invalid-feedback">
                    {{$message}}
                </p>
            @enderror
            <input type="password" name="password" placeholder="Password" value="{{old('password')}}" class="form-control m-2 @error('password') is-invalid @enderror">
            @error('password')
                <p class="invalid-feedback">
                    {{$message}}
                </p>
            @enderror
            <select name="type" class="form-control m-2 @error('type') is-invalid @enderror">
                <option value="">choisi le type</option>
                <option value="old" {{old('type') == 'old' ? 'selected' : ''}}>Old</option>
                <option value="new" {{old('type') == 'new' ? 'selected' : ''}}>New</option>
            </select>
            @error('type')
                <p class="invalid-feedback">
                    {{$message}}
                </p>
            @enderror
            <input type="file" name="image" value="{{ old('image') }}" class="form-control m-2 @error('image') is-invalid @enderror">
            @error('image')
                <p class="invalid-feedback">
                    {{ $message }}
                </p>
            @enderror
            <button class="btn btn-primary" type="submit">Ajouter</button>
        </form>
    </div>
    
</body>
</html>