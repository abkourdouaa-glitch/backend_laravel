@extends('layouts.auth')
@section('content')

<div>
    <form action="{{route('auth.login')}}" method="post">
        @csrf
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control " value="{{old('email')}}">
        @error('email')
            <div>
                <span class="text-danger">{{$message}}</span>
            </div>
        @enderror
        <label class="form-label">Mot de passe</label>
        <input type="password" name="password" class="form-control">
        <button class="btn btn-primary w-100 my-3" type="submit">Se connecter</button>
    </form>
</div>

@endsection

        