@extends('layouts.app')
@section('content')

@include('partials.nav_links')

    <div class="container  mt-5 ">

        @if ($producers->count())

            @foreach ($producers as $producer)
                <div class="container post">
                    <h3 class="text-uppercase p-3">{{ $producer->title }}</h3>
                    <h6 class="px-4">{{ $producer->location }} -   <span>{{ $producer->products }}</span></h6>
                    <div class="row p-4">

                            <img src="{{ $producer->image }}" alt="food image" >

                        <div class="row py-5 px-3">
                            <p>{!! $producer->about !!}</p>
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
