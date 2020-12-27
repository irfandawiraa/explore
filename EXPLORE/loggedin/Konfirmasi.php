<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EXPLORE: Order</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body background="../pictures/raja ampat.jpg">
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
                <li class="nav-item">
                    <a class="nav-link" href="Order.php">Pesan Perjalanan</a>
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

    <div align="center">
        <div class="card" style="width: 30rem;">
            <div class="card-body" style="text-align: left;">
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from transaction where id='$id'");
                $d = mysqli_fetch_array($data);
                ?>
                <h1 class="card-title" style="text-align: center;"><?php echo $d['no_booking']; ?></h1>
                <h6 class="card-subtitle mb-2 text-muted" style="text-align: center;">Detail Perjalanan</h6>
                <form method="POST" action="konf_bayar.php" enctype="multipart/form-data">
                    <div class="col-md-12 mb-3">
                        <label for="nama">Name</label>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" class="form-control" value="<?php echo $d['nama']; ?>" readonly name="nama"
                            placeholder="Nama">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="orang">Jumlah Orang</label>
                        <input type="number" class="form-control" value="<?php echo $d['jmlorang']; ?>" readonly
                            name="jmlorang" placeholder="Jumlah orang">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="in">Keberangkatan</label><br>
                        <input type="date" class="form-control" value="<?php echo $d['tanggal_berangkat']; ?>"
                            name="berangkat" readonly>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="telp">Nomor Telp</label>
                        <input type="number" class="form-control" value="<?php echo $d['hp']; ?>" readonly name="telp"
                            placeholder="No HP">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="exampleFormControlSelect1">Tujuan</label>
                        <input type="text" class="form-control" value="<?php echo $d['tujuan']; ?>" readonly
                            name="tujuan" value="tujuan">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="telp">Harga</label>
                        <div class="input-group is-invalid">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validatedInputGroupPrepend">Rp</span>
                            </div>
                            <input type="text" class="form-control" value="<?php echo $d['harga']; ?>" readonly
                                name="harga" placeholder="Harga">
                        </div>
                    </div>
                    <div>
                        <input type="hidden" name="no_booking" value="<?php echo $d['no_booking'] ?>">
                        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="gambar">Upload bukti pembayaran</label>
                        <input type="file" id="gambar" name="gambar" required>
                    </div><br>
                    <div align="center">
                        <input type="submit" class="btn btn-primary" id="save" value="Upload" placeholder="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="fixed-bottom">
        <footer style="margin-top: 50px; background-color: white;">
            <div style="background: black;">
                <p align="center" style="color: white;">© EXPLORE 2020</p>
            </div>
        </footer>
    </div>

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