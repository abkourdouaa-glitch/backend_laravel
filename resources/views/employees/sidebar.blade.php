<div>
    <div class="bg-dark min-vh-100">
        <div class="mx-5">
            <strong class="text-white">RH-MANAGER</strong>
        </div>
        <ul class="list-group m-1 mt-5">
            <li class="list-group-item mb-3 rounded-3" style="{{ route::is('employee.index','employee.Filtrer')? 'background-color:rgb(10, 131, 10); color:white;border:none': '' }}">
                <a href="{{route('employee.index')}}" class="nav-link"  onclick="return ">Liste des employees</a>
            </li>
            <li class="list-group-item rounded-3" style="{{ route::is('employee.create') ? 'background-color:rgb(10, 131, 10); color:white;border:none' : '' }}">
                <a href="{{route('employee.create')}}" class="nav-link">Nouvel employé </a>
            </li>
        </ul>
    </div>
</div>
