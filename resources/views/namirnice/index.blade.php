@extends('layouts.user')
@section('content_user')

    <div class="container  mt-5 ">

    @if (auth()->user())
        <h3 class="text-uppercase">Sve namirnice</h3>
        @if ($namirnice->count())
        <table class="table mt-3">
            @foreach ($namirnice as $namirnica)
                <x-update_namirnice :namirnica="$namirnica"/>
            @endforeach
        </table>
        @else
            <p>Nemate nijednu namirnicu!</p>
        @endif
    @else
        <h3>Molimo da se logujete da bi imali pristup stranici</h3>
    @endif

    </div>

@endsection

@section('style_user')

@endsection
