<?php

include 'function.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman Front-end</title>
    <style>
        nav {
            background-color: #7D5FFF;
            color: white;
        }

        .kiri-jumbo {
            margin-top: 170px;
        }

        .jumbotron {
            background-color: #E2EDFF;
        }
        .kanan-jumbo {
            margin-top: 40px;
        }
    </style>
</head>

<body id="home">

    <!-- Bagian Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">TUTOR WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" href="Home.php" target="_blank">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Akhir bagian Navbar -->

    <!-- Bagian Jumbotron -->

    <section class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-8 kiri-jumbo">
                    <h1 >FRONT-END</h1>
                </div>
                <div class="col-md-4 kanan-jumbo">
                    <img src="img/Landing Page_Outline.png" width="300px">
                </div>
            </div>
        </div>

    </section>

    <!-- Akhir bagian Jumbotron -->

    <!-- Bagian isi content -->

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="card mb-3" style="width: 30rem;">
                        <img src="img/1.png" class="card-img-top" width="100px" alt="projects-1">
                        <div class="card-body">
                            <a href="isi.php?id=1"><p class="card-text">HTML</p></a>
                        </div>
                    </div>
                    <div class="card mb-3" style="width: 30rem;">
                        <img src="img/1.png" class="card-img-top" width="100px" alt="projects-1">
                        <div class="card-body">
                            <a href="isi.php?id=2"><p class="card-text">CSS</p></a>
                        </div>
                    </div>
                    <div class="card mb-3" style="width: 30rem;">
                        <img src="img/1.png" class="card-img-top" width="100px" alt="projects-1">
                        <div class="card-body">
                            <a href="isi.php?id=3"><p class="card-text">JAVASCRIPT</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem; height: 1000px;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Akhir bagian isi content -->


    <!-- Bagian footer -->

    <footer class="bg-primary text-white text-center pt-5 pb-4">
        <p style="font-weight: bold;">&copy;Copyright2021</p>
    </footer>


    <!-- Akhir bagian footer -->


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>