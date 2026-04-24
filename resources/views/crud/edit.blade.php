@extends('layouts.master')

@section('title','edit')

@section('content')

<div>
    <h2>Modifier stagiaire</h2>
    <form method="post" action="{{ route('stagiaire.update', $stagiaire->id) }}">
        @method('PUT')
        @csrf
        <input type="text" value="{{ $stagiaire->nom }}" name="nom" placeholder="Nom complet" class="form-control m-2 @error('nom') is-invalid @enderror" />
        @error('nom')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <input type="text" value="{{ $stagiaire->genre }}" name="genre" placeholder="Genre" class="form-control m-2 @error('genre') is-invalid @enderror" />
        @error('genre')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <input type="date" value="{{ $stagiaire->date }}" name="date"  class="form-control m-2 @error('date') is-invalid @enderror" />
        @error('date')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <input type="number" value="{{ $stagiaire->note }}" name="note" placeholder="Note" class="form-control m-2 @error('note') is-invalid @enderror" />
        @error('note')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <input type="text" value="{{ $stagiaire->groupe }}" name="groupe" placeholder="Groupe" class="form-control m-2 @error('groupe') is-invalid @enderror" />
        @error('groupe')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <button class="btn btn-success my-2" type="submit">Save</button>
    </form>
</div>


@endsection