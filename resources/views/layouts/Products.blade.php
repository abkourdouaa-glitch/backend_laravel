<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="d-flex flex-column min-vh-100">
        @include('partials.navbar')
        <div class="container-fluid flex-grow-1">
            <div class="row">
                <div class="col-2 p-3">
                    @include('partials.sidebar')
                </div>
                <div class="col-10 p-4 d-flex">
                    @foreach($products as $product)
                    <x-product-card :id="$product['id']" :title="$product['title']" :price="$product['price']" />
                    @endforeach
                </div>
            </div>
        </div>
        @include('partials.footer')
    </div>
</body>
</html>

