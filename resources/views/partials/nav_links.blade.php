<header class="row navbar navbar-expand-lg navbar-light text-uppercase" id="main-navbar">
    <div class="col-md-3 " id="logo-container">
        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset("storage/img/zdrava_ishrana-removebg-preview.png") }}" id="logo" alt="logo"></a>
    </div>

    <div class="col-md-6">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  " id="navbarNav">
            <nav class="">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
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
                            <a class="nav-link" href="#">Zdrave namjernice <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Recepti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trendovi u ishrani</a>
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
                        <a class="nav-link" href="{{ route('posts') }}">Dashboard</a>
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

<style>
    #main-navbar {
         background-color: #CDDCDC;
        background-image: radial-gradient(at 50% 100%, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%), linear-gradient(to bottom, rgba(255,255,255,0.25) 0%, rgba(0,0,0,0.25) 100%);
        background-blend-mode: screen, overlay;
        /* background: linear-gradient(to bottom, #D5DEE7 0%, #E8EBF2 50%, #E2E7ED 100%), linear-gradient(to bottom, rgba(0,0,0,0.02) 50%, rgba(255,255,255,0.02) 61%, rgba(0,0,0,0.02) 73%), linear-gradient(33deg, rgba(255,255,255,0.20) 0%, rgba(0,0,0,0.20) 100%);
        background-blend-mode: normal,color-burn; */
    }
</style>
