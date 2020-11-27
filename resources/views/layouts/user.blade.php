<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600&family=Poppins:wght@300;400;600&family=Roboto:ital,wght@0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <title>Zdrava ishrana</title>
</head>
<body>

    <nav >
        <div id="links" class="d-flex justify-content-center">
            @if (auth()->user())
                <p>{{session('name') }}</p>
                <a href="/">vrati se na pocetnu stranicu</a>
                 <a href="{{ route('logout') }}">Logout</a>
            @else
                <a href="/">vrati se na pocetnu stranicu</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Registruj se</a>
            @endif

        </div>
    </nav>

    @yield('content_user')

    @yield('style_user')

    <style>
        body {
            margin:0;
            padding: o;
            box-sizing: border-box;
        }

         #links {
          padding: 7px;
          background-color: #90e332;
          margin: 0px;
      }

        #links a {
            padding: 20px;
            text-transform: uppercase;
            color: #535353;
            text-decoration: none;
            font-family:'Poppins' sans-serif;

        }

        #links a:hover {
            color:#f9faf8;
            text-decoration: none;

        }
    </style>

</body>
</html>
