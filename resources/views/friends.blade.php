<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container-flex">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="d-flex flex-column align-items-center">
                    <a class="navbar-brand" href="welcome.blade.php">
                        <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                    </a>
                    <h3>ChintaHaram</h3>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/home"><i class="fa fa-home fa-2x" aria-hidden="true"></i>Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home"><i class="fa fa-user fa-2x" aria-hidden="true"></i>Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-folder-open fa-2x" aria-hidden="true"></i>New Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/messages"><i class="fa fa-comments fa-2x" aria-hidden="true"></i>Messages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-bell fa-2x" aria-hidden="true"></i>Notifications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/connections"><i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i>Connections</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>

        </header>
    </div>

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
    <footer>
        <p>Copyright @ Rabin Dhamala; All Rights Reserved 2020</p>
    </footer>
</body>