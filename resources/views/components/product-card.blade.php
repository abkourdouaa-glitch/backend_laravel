
@props(['id', 'title', 'price'])
<div class="card m-3">
    <img src="{{asset ('images/img1.jpg') }}" class="card-img-top " />
    <div class="card-body">
        <h4 class="card-title">{{ $title }}</h4>
        <strong>{{ $price }}</strong><br>
        <a class="btn btn-primary mt-3 w-100" href="{{ route('layouts.voir', ['id' => $id]) }}">Voir</a>
    </div>
</div>
