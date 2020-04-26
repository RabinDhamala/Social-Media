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
                            <a class="nav-link" href="/home"><i class="fa fa-user fa-2x" aria-hidden="true"></i>Profile</a>
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

        <div class="row background pt-4">
            <div class="col-4 d-flex justify-content-center">
            <i class="fa fa-instagram fa-5x" aria-hidden="true"></i>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <img src="../image/MYpic.jpg" class="rounded-circle w-50" alt="">
                </div>
                <h1 class="text-white" style="text-align: center">Rabin Dhamala</h1>
                <div class="d-flex">
                    <div class="pl-4"><strong>109</strong> Posts</div>
                    <div class="pl-4"><strong>144K</strong> Followers</div>
                    <div class="pl-4"><strong>2000</strong> Following</div>
                </div>
            </div>
            <div class="col-4 pl-5">
                <button type="button" class="btn btn-danger">Follow</button>
            </div>
        </div>
        <br>
        <div class="container previous">
            <h1>Previous Posts</h1>
            <div class="previous-posts">
                <div class="card" style="width: 18rem;">
                    <img src="../image/berlin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Berlin</h5>
                    </div>
                </div>


                <div class="card" style="width: 18rem;">
                    <img src="../image/brussels.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Brussels</h5>

                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="../image/denver.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Denver</h5>

                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="../image/australia.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sydney</h5>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="../image/london.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">London</h5>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="../image/stockholm.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Stockholm</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright @ Rabin Dhamala; All Rights Reserved 2020</p>
    </footer>




    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>