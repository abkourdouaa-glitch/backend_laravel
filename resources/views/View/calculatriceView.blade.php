<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources\css\app.css','resources\js\app.js'])
</head>
<body>
    <form action="/calculer" method="post">
        @csrf
        <h2>Calculatrice</h2>
        <input type="number" name="a"/>
        <select name="op" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="b"/>
        <button type="submit" class="btn btn-primary">Calculer</button>
        @if(isset($result))
        <strong>Le résultat: {{$result}}</strong>
        @endif
    </form>
</body>
</html>