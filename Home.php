<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman home</title>
    <style>
        nav {
            background-color: #7D5FFF;
            color: white;
        }
        .kiri-jumbo {
            margin-top: 180px;
        }
        .jumbotron {
            background-color: #E2EDFF;
        }
        .kanan-about {
            margin-top: 180px;
        }
        #artikel {
            background-color: #7D5FFF;
        }
        section {
            padding-bottom: 2.5rem;
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
                        <a class="nav-link active" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#artikel">Artikel</a>
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
                <div class="col-md-6 kiri-jumbo">
                    <h1>TUTOR WEB</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque laboriosam, impedit cum deserunt tempore pariatur ex repellat? Repudiandae necessitatibus ducimus quaerat nobis asperiores beatae cum ut, illo quod nesciunt blanditiis?</p>
                </div>
                <div class="col-md-6">
                    <img src="img/Web Developer_Flatline.png">
                </div>
            </div>
        </div>

    </section>

<!-- Akhir bagian Jumbotron -->

<!-- Bagian About -->

    <section id="about">
        <div class="container">
            <div class="row text-center mb-3  pt-3">
                <div class="col-md-12">
                    <h3>ABOUT</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="img/Web Developer_Outline.png">
                </div>
                <div class="col-md-6 kanan-about">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam delectus animi cupiditate magnam earum consequuntur doloribus, similique laboriosam? Vel, tempore cupiditate accusamus earum fuga minus hic unde voluptate impedit?</p>
                </div>
            </div>
        </div>
    </section>

<!-- Akhir bagian About -->

<!-- Bagian Artikel -->

    <section id="artikel">
        <div class="container">
            <div class="row text-center mb-3  pt-3">
                <div class="col-md-12">
                    <h3>ARTIKEL</h3>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-4 mb-5">
                    <a href="front-end.php" target="_blank" style="text-decoration: none;">
                        <div class="card">
                            <img src="img/1.png" class="card-img-top" alt="projects-2">
                            <div class="card-body">
                                <p class="card-text">Belajar bagian front-end developer</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-5">
                    <a href="beck-end.php" target="_blank" style="text-decoration: none;">
                        <div class="card">
                            <img src="img/2.png" class="card-img-top" alt="projects-2">
                            <div class="card-body">
                                <p class="card-text">Belajar bagian beck-end developer</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
    </section>

<!-- Akhir bagian artikel -->

<!-- Bagian Contact -->

    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3 pt-3">
                <div class="col-md-12">
                    <h3>CONTACT</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <form action="" mehtod="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<!-- Akhir bagian contact -->

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