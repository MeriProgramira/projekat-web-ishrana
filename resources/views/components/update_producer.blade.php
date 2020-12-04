@props(['producer' =>$producer])
@if (auth()->user()->id === $producer->user_id || auth()->user()->admin_role === 1)
                <tr>
                    <th colspan="5"
                        style="background-color: #e8f1e4">{{ $producer->user->username }},   <span>{{ $producer->created_at->diffForHumans() }}</span>


                            @can('delete', $producer)
                            <form action="{{ route('delete-producer', $producer) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="float-right btn-secondary btn-sm mx-1">Obrisi proizvodjaca</button>
                            </form>
                            @endcan

                            {{-- Update form --}}
                            @can('update', $producer)
                                <a href="{{ route('update-producer', $producer) }}" class="float-right btn-secondary btn-sm">Azuriraj proizvodjaca</a>
                            @endcan


                    </th>
                </tr>


                    <tr>
                        <td>{{ $producer->title }}</td>
                        <td>{{ $producer->location }}</td>
                        <td>{{ $producer->products }}</td>
                        <td>{!! Str::words($producer->about, $limit = 10, $end = '...')   !!}</td>
                        <td><img src="{{ $producer->image }}" alt="" width="100"></td>
                    </tr>
@endif

