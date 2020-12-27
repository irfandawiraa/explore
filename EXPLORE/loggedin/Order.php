<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EXPLORE: Pesan Perjalanan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <?php
        include('../koneksi.php');
        $query = "SELECT * FROM triplist";
        $data = mysqli_query($koneksi, $query);
        $cek = mysqli_num_rows($data);
    ?>
</head>

<body>
    <?php 
    session_start();
    if($_SESSION['status']!=true){
        header("location:../Login.php?pesan=belum_login");
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="Home.php">
            <img src="../pictures/logo.png" height="60px" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="Order.php">Pesan Perjalanan <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About Us</a>
                </li>
            </ul>
            <span class="nav-item">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;"><?php echo $_SESSION['nama']; ?></a>
                    </li>
                    <li></li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Logout</a>
                    </li>
                </ul>
            </span>
        </div>
    </nav>

    <div class="container" style="margin-top: 100px; margin-bottom: 200px;">
        <?php if($cek==0) {  ?>
        <p>Data Not Found</p>
        <?php } else { ?>
        <?php $no=1;?>

        <div class="row row-cols-1 row-cols-md-3">
            <?php foreach( $data as $card ) : ?>
            <div class="col mb-4">
                <div class="card">
                    <img src="../gambar/trip/<?php echo $card['img'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $card['tujuan'] ?></h5>
                        <p class="card-text"><?php echo $card['deskripsi'] ?></p>
                        <h6 class="card-text">Rp <?php echo $card['harga'] ?></h6><br>
                        <a type="button" class="btn btn-primary btn-block"
                            href="Inorder.php?id=<?php echo $card['id']; ?>">Order Now</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php }?>
        </div>
    </div>

    <footer style="margin-top: 50px;">
        <div class="container" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-sm">
                    <p align="center" style="margin-right: 150px;">
                        <img src="../pictures/logo.png" width="250px">
                    </p>
                </div>
                <div class="col-sm">
                    <h5>Navigation</h5>
                    <a href="Home.php" style="color: black;">Home</a><br>
                    <a href="Order.php" style="color: black;">Pemesanan</a><br>
                    <a href="About.php" style="color: black;">About Us</a>
                </div>
                <div class="col-sm">
                    <h5>Kunjungi Kami</h5>
                    <p>Jl. RA Kartini, Kampungdalem, Kec. Tulungagung, Kabupaten Tulungagung, Jawa Timur 66212</p>
                </div>
            </div>
        </div>
        <div style="background: black;">
            <p align="center" style="color: white;">© EXPLORE 2020</p>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>