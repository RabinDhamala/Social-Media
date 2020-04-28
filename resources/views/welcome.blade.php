@extends('layouts.app')

@section('content')
    <div class="container">
            <h1  class="text-center" style="align-text:center">User: {{$user->name}}</h1>
            <div class="d-flex justify-content-center">
                <p class="pr-2">Following: {{$user->following->count()}}</p>
                <p>Followers: {{$user->followers->count()}}</p>
            </div>
    </div>

@endsection

