@extends('layouts.employees')

@section('content')
<div>
    <h2></h2>
    <form action="{{route('employee.store')}}" method="post">
        @csrf
        <div class="row m-1">
            <div class="col-6">
                <label for="nom">Nom Complet</label>
                <input type="text" name="nom" value="{{old('nom')}}" class="form-control @error('nom') is-invalid @enderror">
                @error('nom')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-6 ">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="m-3">
            <label for="poste">Poste</label>
            <input type="text" name="poste" value="{{old('poste')}}" class="form-control @error('poste') is-invalid @enderror">
                @error('poste')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>
        <div class="row m-1">
            <div class="col-6">
                <label for="salaire">Salaire</label>
                <input type="text" name="salaire" value="{{old('salaire')}}" class="form-control @error('salaire') is-invalid @enderror">
                @error('salaire')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="col-6">
                <label for="statut">Statut</label>
                <select name="statut" class="form-control @error('statut') is-invalid @enderror" value="{{old('statut')}}">
                    <option value="actif">Actif</option>
                    <option value="inactif">Inactif</option>
                </select>
                @error('statut')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="row mt-5 ml-5">
            <a class="btn btn-secondary col-2 mx-2" href="{{route('employee.index')}}">Retour a la liste</a>
            <button class="btn btn-primary col-2" type="submit">Ajouter employe</button>
        </div>
    </form>
</div>
@endsection