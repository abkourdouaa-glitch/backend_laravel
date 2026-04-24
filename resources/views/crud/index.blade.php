@extends('layouts.master')

@section('title','index')

@section('content')

<div>
    <h2>Liste des stagiaires</h2>
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
    <a href="{{ route('stagiaire.create') }}" class="btn btn-primary my-2">Ajouter</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Genre</th>
            <th>Note</th>
            <th>Action</th>
        </tr>
        @foreach($stagiaires as $stagiaire)
        <tr>
            <td>{{$stagiaire->id}}</td>
            <td>{{$stagiaire->nom}}</td>
            <td>{{$stagiaire->genre}}</td>
            <td>{{$stagiaire->note}}</td>
            <td>
                <a href="{{ route('stagiaire.show', $stagiaire->id) }}" class="btn btn-info">Afficher</a>
                <a href="{{ route('stagiaire.edit', $stagiaire->id) }}" class="btn btn-warning">Modifier</a>
                <form method="post" action="{{ route('stagiaire.destroy', $stagiaire->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Supprimer ce stagiaire ?')">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</div>

@endsection