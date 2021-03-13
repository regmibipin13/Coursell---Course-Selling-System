<section id="navbar">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">COURSELL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    
                    @if(Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="{{ asset('img/user.jpeg') }}" width="40" height="40" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{ route('watchlists') }}">My Washlists</a>
                          <a class="dropdown-item" href="{{ route('home') }}">Edit Profile</a>
                          <a class="dropdown-item" href="#" onclick="document.getElementById('logout').submit();">Log Out</a>
                            <form action="{{ route('logout') }}" method="POST" id="logout">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link login" href="{{ url('/login') }}">Login</a>
                    </li>
                    &nbsp;
                    &nbsp;
                    <li class="nav-item">
                        <a class="nav-link btn btn-custom-primary register" href="{{ url('/register') }}">Join Pro</a>
                    </li>
                    @endif
                </ul>
                
            </div>
        </nav>
    </div>
</section>