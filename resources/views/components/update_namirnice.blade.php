@props(['namirnica' =>$namirnica])
@if (auth()->user()->id === $namirnica->user_id || auth()->user()->admin_role === 1)
                <tr>
                    <th colspan="3"
                        style="background-color: #e8f1e4">{{ $namirnica->user->username }},   <span>{{ $namirnica->created_at->diffForHumans() }}</span>

                            @can('delete', $namirnica)
                            <form action="{{ route('delete-namirnica', $namirnica) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="float-right btn-secondary btn-sm mx-1">Obrisi namirnicu</button>
                            </form>
                            @endcan

                            {{-- Update form --}}
                            @can('update', $namirnica)
                                <a href="{{ route('update-namirnica', $namirnica) }}" class="float-right btn-secondary btn-sm">Azuriraj namirnicu</a>
                            @endcan


                    </th>
                </tr>


                    <tr>

                        <td>{{ $namirnica->title }}</td>
                        <td>{!! Str::words($namirnica->content, $limit = 10, $end = '...')   !!}</td>
                        <td><img src="{{ $namirnica->image }}" alt="" width="100"></td>
                    </tr>
@endif

