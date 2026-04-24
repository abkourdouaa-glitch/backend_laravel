@extends('layouts.master')

@section('title', 'Voir')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card m-3 shadow col-4">
            <img src="{{ asset('images/img1.jpg') }}" class="card-img-top" />
            <div class="card-body">
                <h4 class="card-title">{{ $product['title'] }}</h4>
                <strong class="text-success">Prix : {{ $product['price'] }}</strong><br>
                <p>{{ $product['desc'] }}</p>
            </div>
        </div>
    </div>

@endsection