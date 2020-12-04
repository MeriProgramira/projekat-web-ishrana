
@extends('layouts.user')
@section('content_user')

    <div class="container  mt-5 ">

    @if (auth()->user())
        <h3 class="text-uppercase">Svi recepti</h3>
        @if ($recepti->count())
        <table class="table mt-3">
            @foreach ($recepti as $recept)
                <x-update_recept :recept="$recept"/>
            @endforeach
        </table>
        @else
            <p>Nijedan recept nije unesen!</p>
        @endif
    @else
        <h3>Molimo da se logujete da bi imali pristup stranici</h3>
    @endif

    </div>

@endsection

@section('style_user')

@endsection
