<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between my-3">
            <h2 >Liste des annonces</h2>
            <div>
                <a class="btn btn-primary " href="{{ route('annonce.create') }}">Nouvelle annonce</a>
                <a href="{{ route('annonce.dashboard') }}" class="btn btn-warning ">Dashboard</a>
            </div>
        </div>
        <div class="mb-3 border rounded-3">
            <div>
                <label>Nom du bien</label>
                <input type="text" class="form-control" />
            </div>
            <div>
                <label>Type</label>
                <select>
                    <option></option>
                </select>
            </div>
            <div>
                <label>Ville</label>
                <select>
                    <option></option>
                </select>
            </div>
            <div>
                <label>Surface(m²)</label>
                <div class="d-flex">
                    <input type="number" placeholder="Min" />
                    <input type="number" placeholder="Max" />
                </div>
            </div>
            <div>
                <label>Prix Max</label>
                <input type="number" placeholder="DH" />
            </div>
            <div>
                <label>Etat</label>
                <div>
                    <input type="radio" />
                    <input type="radio" />
                </div>
            </div>
            <button class="btn btn-primary">APPLIQUER<button>
            <button class="btn ">RESET<button>
        </div>

            <button class="btn btn-success">Filtrer</button>
        </div>
       @if(session('success'))
       <div class="alert alert-success">
           {{session('success')}}
       </div>
       @endif
       <table class="table">
            <tr>
                <th>Photo</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Type</th>
                <th>Ville</th>
                <th>Superficie (m²)</th>
                <th>Etat</th>
                <th>Prix(dhs)</th>
                <th>Action</th>
            </tr>
            @foreach($annonces as $annonce)
            <tr>
                <td>
                    @if($annonce->photo)
                        <img src="{{ asset('storage/'.$annonce->photo) }}" width="100">
                    @endif
                </td>
                <td>{{$annonce->titre}}</td>
                <td>{{$annonce->description}}</td>
                <td>{{$annonce->type}}</td>
                <td>{{$annonce->ville}}</td>
                <td>{{$annonce->superficie}}</td>
                <td>{{$annonce->neuf}}</td>
                <td>{{$annonce->prix}}</td>
                <td class="d-flex">
                    <a class="btn btn-info" href="{{ route('annonce.show', $annonce->id) }}">Affiacher</a>
                    <a class="btn btn-success mx-2" href="{{ route('annonce.edit', $annonce->id) }}">Modifier</a>
                    <form method="post" action="{{ route('annonce.destroy', $annonce->id) }}" >
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Voulez vous supprimer?') ">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
       </table>
    </div>
</body>
</html>

<!-- md file -->