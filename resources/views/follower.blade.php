@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h2 class="text-center">Followers</h2>
    <hr>
    <table class="table table-bordered mt-4">
                        <tr class="bg-dark text-light">
                            <th> 
                                NAME
                            </th>
                           
                            <!-- <th>
                                Followers
                            </th> -->
                            <th>
                                Action
                            </th>
                        </tr>
                        @foreach($user as $u)
                            <tr>
                                <td>
                                    <i class="fa fa-user"></i>&emsp;{{  $u->name }}
                                </td>
                             
                               <!-- <td>
                                    @foreach($u->followers as $follower) 
                                        
                                        <span>{{ $follower->user->name }} </span>
                                    @endforeach
                                </td> -->
                                <td>
                                    @if(auth()->user()->follows($u))
                                    <form action="{{ route('unfollow') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$u->id}}" name="user_id">
                                        <button type="submit" class="btn btn-outline-secondary">Following</button>
                                    </form>
                                    @else
                                    <form action="{{ route('follow') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$u->id}}" name="user_id">
                                        <button type="submit" class="btn btn-secondary">Follow</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $user->links() }}
</div>

@endsection