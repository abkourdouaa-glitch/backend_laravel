@extends('layouts.master')

@section('title','create')

@section('content')

<div>
    <h2>Ajouter stagiaire</h2>
    <form method="post" action="{{ route('stagiaire.store') }}">
        @csrf
        <input type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom complet" class="form-control m-2 mt-3 @error('nom') is-invalid @enderror" />
        @error('nom')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <input type="text" name="genre" value="{{ old('genre') }}" placeholder="Genre" class="form-control m-2  @error('genre') is-invalid @enderror" />
        @error('genre')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <input type="date" name="date" value="{{ old('date') }}" class="form-control m-2  @error('date') is-invalid @enderror" />
        @error('date')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <input type="number" name="note" value="{{ old('note') }}" placeholder="Note" class="form-control m-2  @error('note') is-invalid @enderror" />
        @error('note')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <input type="text" name="groupe" value="{{ old('groupe') }}" placeholder="Groupe" class="form-control m-2  @error('groupe') is-invalid @enderror" />
        @error('groupe')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <button class="btn btn-success m-2" type="submit">Save</button>
    </form>
</div>


@endsection