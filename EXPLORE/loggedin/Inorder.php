<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EXPLORE: Order</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
    </nav><br><br>

    <div class="container">
        <?php
        include '../koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from triplist where id='$id'");
        $d = mysqli_fetch_array($data);
        ?>
        <div class="row">
            <div class="col">
                <br><br>
                <img src="../gambar/trip/<?php echo $d['img'] ?>" style="width: 600px;">
            </div>
            <div class="col">
                <form method="post" action="input_order.php">
                    <fieldset>
                        <div class="col-md-10 mb-3">
                            <label for="nama">Name</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                        </div>
                        <div class="col-md-10 mb-3">
                            <label for="orang">Jumlah Orang</label>
                            <input type="number" class="form-control" name="jmlorang" placeholder="Jumlah orang">
                        </div>
                        <div class="col-md-10 mb-3">
                            <label for="in">Keberangkatan</label><br>
                            <input type="date" class="form-control" name="berangkat">
                        </div>
                        <div class="col-md-10 mb-3">
                            <label for="telp">Nomor Telp</label>
                            <input type="number" class="form-control" name="telp" placeholder="No HP">
                        </div>
                        <div class="col-md-10 mb-3">
                            <label for="exampleFormControlSelect1">Tujuan</label>
                            <input type="text" class="form-control" value="<?php echo $d['tujuan'] ?>" readonly
                                name="tujuan">
                        </div>
                        <div>
                            <input type="hidden" name="harga" value="<?php echo $d['harga'] ?>">
                        </div>
                        <div class="col-md-10 mb-3">
                            <input type="submit" value="Daftar Perjalanan" class="btn-block btn btn-primary">
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <div class="fixed-bottom">
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
    </div>
</body>

</html>