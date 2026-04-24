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
    <div class="conatiner">
        <form action="{{route('test.store')}}" method="post" enctype="multipart/form-data">
            <input type="text" name="nom" class="form-control" value="{{old('nom')}}">
            <input type="text" name="nom" class="form-control" value="{{old('nom')}}">
            <input type="text" name="nom" class="form-control" value="{{old('nom')}}">
            <input type="text" name="nom" class="form-control" value="{{old('nom')}}">
        </form>
    </div>
    
</body>
</html>