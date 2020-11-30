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
    <script src="https://cdn.tiny.cloud/1/mypjlpl0ll198jkom1nivwr7g17mj8g5oefvob9eqey6bvy5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Zdrava ishrana </title>
</head>
<body>

    <nav class="">
        <ul class="nav justify-content-center" id="links">
            @if (auth()->user())
            <li class="nav-item">
                <p>Logovani korisnik: <span>{{auth()->user()->name }}</span></p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">vrati se na pocetnu stranicu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts') }}"">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('create-post') }}"">Unosi novi post</a>
            </li>
            <li class="nav-item">
                 <form action="{{ route('logout') }}" method="POST" id="formLogout">
                    @csrf
                    <button  class="btn btn-link" type="submit">Logout</button>
                </form>
            </li>
             @else
                <li class="nav-item">
                    <a class="nav-link" href="/">vrati se na pocetnu stranicu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"">Registuj se</a>
                </li>

            @endif
        </ul>

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

        #links p {
            padding: 20px;
            font-size: 18px;


        }

        #links p span{
            font-weight: 600;
            color: #cc7a00;
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

            #formLogout {
                background: transparent;
                border: none;
                border-radius: 0;
                box-shadow: none;
                padding: 14px;
            }

            #formLogout button{

                text-transform: uppercase;
                color: #535353;
                text-decoration: none;
                font-family:'Poppins' sans-serif;
            }
    </style>
     <!-- jQuery and JS bundle w/ Popper.js -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     <script>
             tinymce.init({
               selector: 'textarea',
               plugins: [ "advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste hr" ],
             toolbar: "insertfile undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | blockquote hr | bullist numlist outdent indent | link image"
             });
     </script>
</body>
</html>
