@extends('layouts.master')

@section('title','show')

@section('content')

<div class="border rounded-4 p-4 shadow-sm">
    <h2 class="mb-4">Détails stagiaire </h2>
    <ul >
        <li>
            <p><strong>Nom :</strong> {{$stagiaire->nom}}</p>
        </li>
        <li>
            <p><strong>Genre :</strong> {{$stagiaire->genre}}</p>
        </li>
        <li>
            <p><strong>Note :</strong> {{$stagiaire->note}}</p>
        </li>
        <li>
            <p><strong>Date : </strong> {{$stagiaire->date}}</p>
        </li>
        <li>
            <p><strong>Groupe :</strong> {{$stagiaire->groupe}}</p>
        </li>
    </ul>
    <a class="btn btn-secondary" href="{{ route('stagiaire.index') }}">Retour</a>
</div>


@endsection