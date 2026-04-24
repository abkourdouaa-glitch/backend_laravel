<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div>
        @include('auth.navbar')
        <div class="d-flex justify-content-center mt-5">
            <div class="w-50 border rounded-3 p-4 shadow shadow-3">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>