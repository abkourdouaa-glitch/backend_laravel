
<div class="bg-dark p-3">
    <div class="d-flex justify-content-between">
        <h4 class="text-white">Navbar</h4>
        @auth
        <div class="d-flex">
            <p class="text-white m-2"><strong>{{Auth::user()->name}}</strong></p>
            <form action="{{'logout'}}" method="post">
                @csrf
                <button class="btn btn-danger" type="submit">Se déconnecter</button>
            </form>
        </div>  
        @endauth

        @guest
        <div>
            <a href="{{route('auth.login')}}" class="btn btn-outline-primary">Connexion</a>
            <a href="{{route('auth.register')}}" class="btn btn-outline-warning">Inscription</a>
        </div>
        @endguest
    </div>
</div>