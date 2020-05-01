@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 bg-primary border rounded py-3">
                <h1 class="text-center text-white">Followers</h1>
                <div class="d-flex justify-content-around align-items-center py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 100px; height: 100px" alt="">
                    <p class="font-weight-bold text-white">Tom Hanks</p>
                    <div>
                        <button class="btn btn-warning" style="padding-left: 20px;padding-right: 20px">Following</button>
                    </div>
                </div>

                <div class="d-flex justify-content-around align-items-center py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 100px; height: 100px" alt="">
                    <p class="font-weight-bold text-white">Bradley Cooper</p>
                    <div>
                        <button class="btn btn-warning" style="padding-left: 20px;padding-right: 20px">Following</button>
                    </div>
                </div>

                <div class="d-flex justify-content-around align-items-center py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 100px; height: 100px" alt="">
                    <p class="font-weight-bold text-white">Brad Pit</p>
                    <div>
                        <button class="btn btn-danger">Follow back</button>
                    </div>
                </div>

                <div class="d-flex justify-content-around align-items-center py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 100px; height: 100px" alt="">
                    <p class="font-weight-bold text-white">Jennifer Aniston</p>
                    <div>
                        <button class="btn btn-danger">Follow back</button>
                    </div>
                </div>

                <div class="d-flex justify-content-around align-items-center py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 100px; height: 100px" alt="">
                    <p class="font-weight-bold text-white">Eva Wesley</p>
                    <div>
                        <button class="btn btn-warning" style="padding-left: 20px;padding-right: 20px">Following</button>
                    </div>
                </div>
            </div>

            <div class="col-6 bg-danger border rounded py-3">
                <h1 class="text-center text-white">Following</h1>
                <div class="d-flex justify-content-around align-items-center py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 100px; height: 100px" alt="">
                    <p class="font-weight-bold text-white">Lionel Messi</p>
                    <div>
                        <button class="btn btn-primary">Unfollow</button>
                    </div>
                </div>

                <div class="d-flex justify-content-around align-items-center py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 100px; height: 100px" alt="">
                    <p class="font-weight-bold text-white">Andres Iniesta</p>
                    <div>
                        <button class="btn btn-primary"> Unfollow</button>
                    </div>
                </div>

                <div class="d-flex justify-content-around align-items-center py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 100px; height: 100px" alt="">
                    <p class="font-weight-bold text-white">Xavi Hernandez</p>
                    <div>
                        <button class="btn btn-primary">Unfollow</button>
                    </div>
                </div>

                <div class="d-flex justify-content-around align-items-center py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 100px; height: 100px" alt="">
                    <p class="font-weight-bold text-white">Louis Suarez</p>
                    <div>
                        <button class="btn btn-primary">Unfollow</button>
                    </div>
                </div>

                <div class="d-flex justify-content-around align-items-center py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 100px; height: 100px" alt="">
                    <p class="font-weight-bold text-white">Gerrard Pique</p>
                    <div>
                        <button class="btn btn-primary">Unfollow</button>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

    </div>
@endsection