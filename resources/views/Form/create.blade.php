@extends('layouts.master')

@section('title', 'Ajouter Un Produit')

@section('content')

<form action="{{route('Form.store')}}" method="post">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3>Ajouter un produit</h3>
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
        </div>
            <div class="card-body">
                <div class="mb-2">
                    <label for="title" class="form-label">Title : </label>
                    <input type="text" name="title" value="{{ old('title') }}"  class="form-control  @error('title') is-invalid @enderror">
                    @error('title')
                       <div class="invalid-feedback">
                           {{$message}}
                       </div>
                    @enderror
                </div>
    
                <div class="mb-2">
                    <label for="price" class="form-label">Price : </label>
                    <input type="number" name="price" value="{{ old('price') }}" class="form-control  @error('price') is-invalid @enderror">
                    @error('price')
                       <div class="invalid-feedback">
                           {{$message}}
                       </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="desc" class="form-label">Description : </label>
                    <textarea name="desc" value="{{ old('desc') }}" class="form-control @error('desc') is-invalid @enderror"></textarea>
                    @error('desc')
                       <div class="invalid-feedback">
                           {{$message}}
                       </div>
                    @enderror
                </div>
                <button class="btn btn-primary w-100 mt-3" type="submit">Ajouter</button>
            </div>
        </div>
</form>

@endsection