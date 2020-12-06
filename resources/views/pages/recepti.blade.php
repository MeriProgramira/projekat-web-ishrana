@extends('layouts.app')
@section('content')

@include('partials.nav_links')

    <div class="container  mt-5 ">

        {{-- Carousel --}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/uploads/kruh1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Volite domaći hljeb</h5>
                    <p>Naučite kako da napravite ukusan, zdrav i mirisan hljeb</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/uploads/meso1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sočno a topi se...</h5>
                    <p>Bilo da je riječ o junetini, piletini, ribi... pronađite recept za Vas</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/uploads/kolac1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>I kolači mogu biti zdravi</h5>
                    <p>Kada dodamo orahe, voće ko kaže da kolač ne mođe biti zdrav</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          @if ($recepti->count())

          <div class="row my-5 d-flex justify-content-center">
            @foreach ($recepti as $recept)

            <div class="card mx-3" style="width: 21rem;">
                <img src="{{ $recept->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $recept->title }}</h5>
                  <p class=" " id="user-time">{{ $recept->user->username }}, {{ $recept->created_at->diffForHumans() }}</p>
                  <p class="card-text">{{ $recept->short_description }}.</p>
                  <a href="{{ route('recept', $recept) }}" class="stretched-link read-more">vise o receptu</a>
                </div>
            </div>

            @endforeach
        </div>

        @else
            <p>Nemate nijedan recept.!</p>
        @endif


    </div>

    <div class="footer-full">
        @include('partials.footer_links')
    </div>

@endsection

@section('style')

    <style>
        h6 {
            color: rgb(138, 138, 139);
            font-style: italic;
        }
        .post img {
            max-width: 100%;
        }

        .read-more {
            color:  #31e063;
        }

        img {
            max-width: 100%;
        }

        #user-time {
            font-size: 14px;
            color: rgb(157, 158, 167);
        }



    </style>


@endsection

<script>
    $('.carousel').carousel({
  interval: 3000
})
</script>
