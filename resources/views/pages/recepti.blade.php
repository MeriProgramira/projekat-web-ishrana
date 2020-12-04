@extends('layouts.app')
@section('content')

@include('partials.nav_links')

    <div class="container  mt-5 ">

        @if ($recepti->count())

            @foreach ($recepti as $recept)
                <div class="container post">
                    <h3 class="text-uppercase p-3">{{ $recept->title }}</h3>
                    <h6 class="px-4">{{ $recept->complexity }} -   <span>{{ $recept->dish_type }}</span></h6>
                    <div class="row p-4">

                            <img src="{{ $recept->image }}" alt="food image" >

                        <div class="row py-5 px-3">
                            <p>{{$recept->ingredients}}</p>
                            <p>{!! $recept->preparation !!}</p>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach

        @else
            <p>Nemate nijednog lokalnog proizvodjaca unesenog u bazu podataka!</p>
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



    </style>


@endsection
