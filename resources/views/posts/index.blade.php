@extends('layouts.user')
@section('content_user')

    <div class="container  mt-5 ">

    @if (auth()->user())
        <h3 class="text-uppercase">Svi postovi</h3>
        @if ($posts->count())
        <table class="table mt-3">
            @foreach ($posts as $post)
                @if (auth()->user()->id === $post->user_id || auth()->user()->admin_role === 1)
                <tr>
                    <th colspan="3"
                        style="background-color: #e8f1e4">{{ $post->user->username }},   <span>{{ $post->created_at->diffForHumans() }}</span>

                            @can('delete', $post)
                            <form action="{{ route('delete-post', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="float-right btn-secondary btn-sm mx-1">Obrisi post</button>
                            </form>

                        @endcan
                        <button type="submit" class="float-right btn-secondary btn-sm">Azuriraj post</button>

                    </th>
                </tr>

                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{!! Str::words($post->content, $limit = 10, $end = '...')   !!}</td>
                        <td><img src="{{ $post->image }}" alt="" width="100"></td>
                    </tr>
                @endif


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
