@extends('layouts.app')
@section('content')

    @include('partials.nav_main')

    <div class="hero">

    </div>
    <div class="container-fluid mx-0">

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
       /*  * {
  border: 1px solid #f00 !important;
  background-color: blue;
} */

    </style>

@endsection





