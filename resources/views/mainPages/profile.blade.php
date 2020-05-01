@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row background pt-4">
            <div class="col-4 d-flex justify-content-center">
            <i class="fa fa-instagram fa-5x" aria-hidden="true"></i>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <img src="../image/MYpic.jpg" class="rounded-circle w-50" alt="">
                </div>
                <h1 class="text-white" style="text-align: center">{{$user->username}}</h1>
                <p class="text-center">{{$user->email}}</p>
                <p class="text-center">Bio description</p>
                <div class="d-flex">
                    <div class="pl-4"><strong>{{$user->posts->count()}}</strong> Posts</div>
                    <div class="pl-4"><strong>144K</strong> Followers</div>
                    <div class="pl-4"><strong>2000</strong> Following</div>
                </div>
            </div>
            <div class="col-4 pl-5">
                <!-- <button type="button" class="btn btn-danger">Follow</button> -->
               <follow-button user-id="{{$user->id}}"></follow-button>
            </div>
        </div>
        <br>
        <div class="container previous">
            <h1>Previous Posts</h1>
            <div class="previous-posts">
                @foreach($user->posts as $post)
                    @include('components.posts')
                @endforeach


            </div>
        </div>
    </div>

@endsection
