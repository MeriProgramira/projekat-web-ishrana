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
