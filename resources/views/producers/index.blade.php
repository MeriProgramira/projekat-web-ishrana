
@extends('layouts.user')
@section('content_user')

    <div class="container  mt-5 ">

    @if (auth()->user())
        <h3 class="text-uppercase">Svi proizvodjaci</h3>
        @if ($producers->count())
        <table class="table mt-3">
            @foreach ($producers as $producer)
                <x-update_producer :producer="$producer"/>
            @endforeach
        </table>
        @else
            <p>Nemate unesenog nijednog proizvodjaca!</p>
        @endif
    @else
        <h3>Molimo da se logujete da bi imali pristup stranici</h3>
    @endif

    </div>

@endsection

@section('style_user')

@endsection
