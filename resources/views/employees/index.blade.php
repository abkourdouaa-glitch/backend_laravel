@extends('layouts.employees')

@section('content')
<div>
    <form method="get" action="{{ route('employee.Filtrer') }}" class="d-flex col-10 mb-4">
        <input type="text" name="nom" placeholder="Rechercher par nom..." class="form-control m-3" value="{{ request('nom') }}">
        <button class="btn btn-primary m-3" type="submit">Filtrer</button>
    </form>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
    <div>
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Poste</th>
                <th>Salaire</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            @foreach ($employees as $employee)
            <tr>
                <td>{{$employee->nom}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->poste}}</td>
                <td>{{$employee->salaire}}</td>
                <td>
                    @if($employee->statut == 'actif')
                        <span class="badge bg-success">Actif</span>
                    @else
                        <span class="badge bg-danger">Inactif</span>
                    @endif
                </td>
                <td class="d-flex">
                    <a href="{{route('employee.changeStatut',$employee->id)}}" class="btn btn-outline-warning mx-2">ChangeS</a>
                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Voulez vous supprimer?')">Delete</button>
                    </form>
                </td>
            </tr>   
            @endforeach
        </table>
    </div>
</div>
@endsection