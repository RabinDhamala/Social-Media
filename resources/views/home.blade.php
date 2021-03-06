@extends('layouts.app')

@section('content')
<!-- {{dd($user->followers)}} -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <table>
                        <tr>
                            <th> 
                                name
                            </th>
                            <th>
                                created_at
                            </th>
                            <th>
                                Followers
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        @foreach($user as $u)
                            <tr>
                                <td>
                                    {{  $u->name }}
                                </td>
                                <td>
                                    {{ $u->created_at }}
                                </td>
                                <!-- <td>
                                    @foreach($u->followers as $follower) 
                                        
                                        <span>{{ $follower->user->name }}, </span>
                                    @endforeach
                                </td> -->
                                <td>
                                    @if(auth()->user()->follows($u))
                                    <form action="{{ route('unfollow') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$u->id}}" name="user_id">
                                        <button type="submit">UnFollow</button>
                                    </form>
                                    @else
                                    <form action="{{ route('follow') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$u->id}}" name="user_id">
                                        <button type="submit">Follow</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>

            </div>
        </div>
    </div>
</div>
@endsection
