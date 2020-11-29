<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600&family=Poppins:wght@300;400;600&family=Roboto:ital,wght@0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Zdrava ishrana</title>
</head>
<body>
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
                                <a class="nav-link" href="#">Zdrave namjernice <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Recepti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Trendovi u ishrani</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Lokalni proizvodaci</a>
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

    @yield('content')

    @yield('style')


    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
