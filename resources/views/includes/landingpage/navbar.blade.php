<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Travelin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ url('featured_destination') }}" class="nav-link">Featured
                        Destination</a></li>
                @guest
                    <li class="nav-item cta">
                        <a href="{{ url('login') }}" class="nav-link">
                            <span>Login</span>
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a href="{{ route('my_package', ['id'=>auth()->user()->id]) }}" class="nav-link">My Packages</a>
                    </li>
                    <li class="nav-item cta">
                    <form action="{{ url('logout') }}" method="POST" class="nav-link">
                        @csrf
                        <button class="btn btn-sm" type="submit">Logout</button>
                    </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<script src="{{ url('landingpage/js/jquery.min.js') }}"></script>
