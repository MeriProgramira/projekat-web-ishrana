<nav class="">
    <ul class="nav justify-content-center" id="links">
        @if (auth()->user())
        <li class="nav-item">
            <p>Logovani korisnik: <span>{{auth()->user()->username }}</span></p>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">vrati se na pocetnu stranicu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('posts') }}"">Posts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('create-post') }}"">Unesi novi post</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('svi-recepti') }}"">Recepti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('create-recept') }}"">Unesi novi recept</a>
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

{{-- Check if user is admin --}}
@if (auth()->user() && auth()->user()->admin_role === 1)

 <ul class="nav justify-content-center text-uppercase" id="admin-nav">
    <li class="nav-item">
      <a class="nav-link " href="{{ route('producers') }}">Svi proizvodaci</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('create-producer') }}">Unesi proidvodaca</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Unesi namirnicu</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Sve namirnicu</a>
      </li>
  </ul>

@endif


<style>
    body {
        margin:0;
        padding: o;
        box-sizing: border-box;
    }

     #links {
      padding: 5px;
      background-color: #31e063;
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

        #links a, #admin-nav a {
            padding: 20px;
            text-transform: uppercase;
            color: #535353;
            text-decoration: none;
            font-family:'Poppins' sans-serif;

        }

        #links a:hover, #admin-nav a:hover {
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

        #admin-nav {
            background-color: #ced3d0;
            margin: 0;
            padding: 3px;
        }
</style>
