@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 border border-primary rounded">
                <h1 class="text-primary text-center ">Older Messages</h1>
                <div class="d-flex justify-content-around px-5 py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 70px; height: 70px" alt="">
                    <div class="px-3">
                        <p class="font-weight-bold">Tom Hanks</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore adipisci atque dolores et, quisq...</p>
                    </div>
                </div>

                <div class="d-flex justify-content-around px-5 py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 70px; height: 70px" alt="">
                    <div class="px-3">
                        <p class="font-weight-bold">Christopher Nolan</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore adipisci atque dolores et, quisq...</p>
                    </div>
                </div>

                <div class="d-flex justify-content-around px-5 py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 70px; height: 70px" alt="">
                    <div class="px-3">
                        <p class="font-weight-bold">Rui Patricio</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore adipisci atque dolores et, quisq...</p>
                    </div>
                </div>

                <div class="d-flex justify-content-around px-5 py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 70px; height: 70px" alt="">
                    <div class="px-3">
                        <p class="font-weight-bold">David Luiz</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore adipisci atque dolores et, quisq...</p>
                    </div>
                </div>

                <div class="d-flex justify-content-around px-5 py-3">
                    <img src="../image/australia.jpeg" class="rounded-circle" style="width: 70px; height: 70px" alt="">
                    <div class="px-3">
                        <p class="font-weight-bold">Anatoly Karpov</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore adipisci atque dolores et, quisq...</p>
                    </div>
                </div>

            </div>

            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                <i class="fa fa-paper-plane fa-4x text-primary border border-primary rounded-circle p-4" aria-hidden="true"></i>
                <h3>Your Messages</h3>
                <p>Send private photos and messages to a friend or group.</p>
                <button class="btn btn-primary">Compose new</button>
            </div>
        </div>
    </div>
    <br><br>
@endsection
