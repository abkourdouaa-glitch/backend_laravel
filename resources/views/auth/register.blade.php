@extends('layouts.auth')

@section('content')

<div>
    <form action="{{route('auth.register')}}" method="post">
        @csrf
        <label class="form-label">Nom</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
        @error('name')
            <div>
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
        @error('email')
            <div>
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <label class="form-label">Mot de passe</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}">
        @error('password')
            <div>
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <label class="form-label">Confirmer le mot de passe</label>
        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{old('password_confirmation')}}">
        <button class="btn btn-primary w-100 my-3" type="submit">Se connecter</button>
    </form>
</div>
    
@endsection
