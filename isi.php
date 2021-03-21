<?php

include 'function.php';
$content = query("SELECT * FROM tb_blog");

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman Isi</title>
    <style>
        nav {
            background-color: #7D5FFF;
            color: white;
        }

    </style>
</head>

<body id="home">

    <!-- Bagian Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#home">TUTOR WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="Home.php" target="_blank">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Home.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Akhir bagian Navbar -->

    <!-- Bagian isi content -->

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="card" style="width: 35rem; height: 100%;">
                    <?php  
                    if( isset($_GET['id']) ){
                        $id = $_GET['id'];
                    }
                    else  {
                        $id = 1;
                    }
                    $dataSatuan = query("SELECT * FROM tb_blog WHERE id_blog = '$id' ");
                    $dataSatuan = $dataSatuan[0];
                    ?>
                        <h3><?= $dataSatuan['judul_blog']; ?></h3>
                        <br><br>
                        <img src="<?= $dataSatuan['gambar_blog'] ?>">
                        <br><br>
                        <p><?= $dataSatuan['isi_blog']; ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem; height: 1000px;">
                        <ul class="list-group list-group-flush">
                            <?php 
                            foreach ($content as $cont) {
                            ?>
                            <a href="?id=<?= $cont['id_blog']; ?>"><li class="list-group-item"><?= $cont['judul_blog']; ?></li></a>
                            <?php } ?>
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