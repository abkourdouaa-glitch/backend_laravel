<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-light">
    <div class="container">
        <div class="d-flex justify-content-between my-4">
            <h2>Gestion Immobiliere</h2>
            <a class="btn btn-primary mb-3" href="{{ route('annonce.create') }}">Nouvelle annonce</a>
        </div>

        <div class="card p-3 mb-3 shadow-sm">
            <h5>Total Annonces</h5>
            <strong>{{ $stats['total'] }}</strong>
        </div>

        <div class="card p-3 mb-3 shadow-sm">
            <h5>Valeur Total(DHS) </h5>
            <strong>{{ number_format($stats['prix_total'], 2) }} M</strong>
        </div>

        <div class="card p-3 mb-3 shadow-sm">
            <h5>Prix Moyen </h5>
            <strong>{{ number_format($stats['prix_moyen'], 2) }} K</strong>
        </div>

        <div class="card p-3 mb-3 shadow-sm">
            <h5>Surface (m²)</h5>
            <strong>{{ $stats['surface_total'] }} </strong>
        </div>
    </div>
</body>
</html>