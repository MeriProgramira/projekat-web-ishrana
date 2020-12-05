@extends('layouts.app')
@section('content')

@include('partials.nav_links')

    <div class="container  mt-5 ">

        @if ($namirnice->count())

        <main role="main" class="container">
            <div class="row">
              <div class="col-md-8 blog-main">
                <h3 class="pb-4 mb-4 font-italic border-bottom">
                  Zdrave namirnice svuda oko nas
                </h3>


                @foreach ($namirnice as $namirnica)
                <div class="blog-post">
                  <h2 class="blog-post-title">{{ $namirnica->title }}</h2>
                  <p class="blog-post-meta">{{ $namirnica->created_at->diffForHumans() }},  <a href="#">{{ $namirnica->user->username }}</a></p>

                  <p class="text-namirnica">{!! $namirnica->content !!}</p>
                  <img src="{{ $namirnica->image }}" alt="food image" >
                  <p class="text-namirnica"> {!! $namirnica->content1 !!}</p>
                  <hr>

                </div><!-- /.blog-post -->
                @endforeach

              </div><!-- /.blog-main -->

              <aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                  <h4 class="font-italic">Domaće namirnice</h4>
                  <p class="mb-0"> <b> "Zdrava ishrana" </b>se naručito trudi da pruži informacije o namirnicama sa lokalnog područija. Kupovinom i konzumacijom lokalnih
                      proizvoda, ne samo da činimo dobro sebi, nego podupiremo i domaće proizvođače. </p>
                </div>

                <div class="p-4">
                  <h4 class="font-italic">Istražite proizvode</h4>
                  <ol class="list-unstyled mb-0">
                    <li><a href="{{ route('vegetable') }}">Najzdravije povrće</a></li>
                    <li><a href="{{ route('fruits') }}">Najzdravije voće</a></li>
                    <li><a href="{{ route('vitamins') }}">Vitamini u hrani</a></li>
                    <li><a href="{{ route('drinks') }}">Napitci, zdravi a ukusni</a></li>
                  </ol>
                </div>


              </aside><!-- /.blog-sidebar -->

            </div><!-- /.row -->

          </main><!-- /.container -->



        @else
            <p>Nemate nijednu namirnicu!</p>
        @endif
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

        .text-namirnica {
            line-height: 1.7;
            color: rgb(91, 91, 94);
            padding: 15px 0;
        }

        a {
            color: #f29455;
        }

        a:hover {
            color: #bd520b;
            text-decoration: none;
        }

        img {
            max-width: 100%;
        }



    </style>


@endsection
