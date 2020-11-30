@extends('layouts.user')
@section('content_user')

    <div class="container  mt-5 ">
        <h3 class="text-uppercase">Svi postovi</h3>
        @if ($posts->count())
        <table class="table mt-3">
            @foreach ($posts as $post)
                <tr>
                    <th colspan="3"
                        style="background-color: #e8f1e4">{{ $post->user->username }},   <span>{{ $post->created_at->diffForHumans() }}</span></th>
                </tr>

                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{!! Str::words($post->content, $limit = 10, $end = '...')   !!}</td>
                        <td><img src="{{ $post->image }}" alt="" width="100"></td>

                    </tr>

            @endforeach
        </table>
        @else
            <p>Nemate nijedan post!</p>
        @endif
    </div>

@endsection

@section('style_user')

@endsection
