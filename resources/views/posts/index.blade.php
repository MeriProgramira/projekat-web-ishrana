@extends('layouts.user')
@section('content_user')

    <div class="container  mt-5 ">

    @if (auth()->user())
        <h3 class="text-uppercase">Svi postovi</h3>
        @if ($posts->count())
        <table class="table mt-3">
            @foreach ($posts as $post)
                <x-update_post :post="$post"/>
            @endforeach
        </table>
        @else
            <p>Nemate nijedan post!</p>
        @endif
    @else
        <h3>Molimo da se logujete da bi imali pristup stranici</h3>
    @endif

    </div>

@endsection

@section('style_user')

@endsection
