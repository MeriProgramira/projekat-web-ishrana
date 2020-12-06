<header class="row navbar navbar-expand-lg navbar-light text-uppercase px-5 " id="main-navbar">


    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset("storage/img/zdrava_ishrana.png") }}" id="logo" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav, #navbarNav1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  " id="navbarNav">

                <ul class="navbar-nav py-2">

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


                    <ul class="navbar-nav py-2">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('namirnice') }}">Zdrave namirnice</a>
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

        </div>


            <div class="collapse navbar-collapse  " id="navbarNav1">
                <form class="form-inline my-2 my-lg-0 p-1">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                <ul class="navbar-nav justify-content-end mt-3">
                    @if (auth()->user())
                        <li class="nav-item p-1">
                            <a class="nav-link" href="{{ route('dashboard', ['id' => auth()->user()->id]) }}">Dashboard</a>
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
     </div>
</header>
