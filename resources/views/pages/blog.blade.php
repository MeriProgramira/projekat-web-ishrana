@extends('layouts.app')
@section('content')

@include('partials.nav_links')

    <div class="container  mt-5 ">

        @if ($posts->count())

            @foreach ($posts as $post)
                <div class="container post">
                    <h3 class="text-uppercase p-3">{{ $post->title }}</h3>
                    <h6 class="px-4">{{ $post->user->username }},   <span>{{ $post->created_at->diffForHumans() }}</span></h6>
                    <div class="row p-4">

                            <img src="{{ $post->image }}" alt="food image" >

                        <div class="row p-4">
                            <p>{!! $post->content !!}</p>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach

        @else
            <p>Nemate nijedan post!</p>
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
