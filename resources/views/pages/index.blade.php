@extends('layouts.app')
@section('content')

    @include('partials.nav_main')

    <div class="hero">

    </div>
    <div class="container-fluid">

        @include('partials.aboutUs')

        @include('partials.food')

        @include('partials.recipes')

        @include('partials.health')

    </div>


    <div class="footer-full">
        @include('partials.footer')
    </div>

@endsection

@section('style')

    <style>

    </style>

@endsection





