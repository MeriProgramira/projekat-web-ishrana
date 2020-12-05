<header class="row navbar navbar-expand-lg navbar-light text-uppercase" id="main-navbar">
    <div class="col-md-3 " id="logo-container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset("storage/img/zdrava_ishrana.png") }}" id="logo" alt="logo"></a>
    </div>

    <div class="col-md-6">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  " id="navbarNav">
            <nav class="">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#aboutUs">O nama <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontakt">Kontakt</a>
                    </li>
                </ul>
            </nav>
            <nav class="">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Zdrave namirnice <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('recepti') }}">Recepti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('trendovi-hrana') }}">Trendovi u ishrani</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('proizvodjaci') }}">Lokalni proizvodaci</a>
                        </li>
                    </ul>
            </nav>
        </div>
    </div>

    <div class="col-md-3 h-100" id="signLink">
            <ul class="navbar-nav justify-content-start mt-3">
                @if (auth()->user())
                    <li class="nav-item p-1">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                @else
                    <li class="nav-item p-1">
                        <a class="nav-link" href="{{ route('login') }}">Log in <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link" href="{{ route('register') }}">Sign up</a>
                    </li>
                @endif
            </ul>
     </div>
</header>
