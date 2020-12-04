@props(['recept' =>$recept])
@if (auth()->user()->id === $recept->user_id || auth()->user()->admin_role === 1)
                <tr>
                    <th colspan="4"
                        style="background-color: #e8f1e4">{{ $recept->user->username }},   <span>{{ $recept->created_at->diffForHumans() }}</span>


                            @can('delete', $recept)
                            <form action="{{ route('delete-recept', $recept) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="float-right btn-secondary btn-sm mx-1">Obrisi recept</button>
                            </form>
                            @endcan

                            {{-- Update form --}}
                            @can('update', $recept)
                                <a href="{{ route('update-recept', $recept) }}" class="float-right btn-secondary btn-sm">Azuriraj recept</a>
                            @endcan


                    </th>
                </tr>


                    <tr>
                        <td>{{ $recept->title }}</td>
                        <td>{{ $recept->ingredients }}</td>
                        <td>{!! Str::words($recept->short_description, $limit = 10, $end = '...')   !!}</td>
                        <td><img src="{{ $recept->image }}" alt="" width="100"></td>
                    </tr>
@endif

