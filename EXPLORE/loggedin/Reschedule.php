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
        <div class="row">
            <div class="col">
                <br><br>
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from transaction where id='$id'");
                while($d = mysqli_fetch_array($data)){
		        ?>
                <?php
                $tujuan = $d['tujuan'];
                    if ($tujuan == 'Bali') {
                        echo '<img src="../pictures/bali.jpg" style="width: 600px;">';
                    } else if ($tujuan =='Borobudur') {
                        echo '<img src="../pictures/borobudur.jpg" style="width: 600px;">';
                    } else if ($tujuan == 'Raja Ampat') {
                        echo '<img src="../pictures/raja ampat.jpg" style="width: 600px;">';
                    }
                ?>
            </div>
            <div class="col">
                <form method="post" action="update.php">
                    <div class="col-md-10 mb-3">
                        <label for="nama">Name</label>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" class="form-control" value="<?php echo $d['nama']; ?>" readonly name="nama"
                            placeholder="Nama">
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="orang">Jumlah Orang</label>
                        <input type="number" class="form-control" value="<?php echo $d['jmlorang']; ?>" readonly
                            name="jmlorang" placeholder="Jumlah orang">
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="in">Keberangkatan</label><br>
                        <input type="date" class="form-control" name="berangkat">
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="telp">Nomor Telp</label>
                        <input type="number" class="form-control" value="<?php echo $d['hp']; ?>" readonly name="telp"
                            placeholder="No HP">
                    </div>
                    <div class="col-md-10 mb-3">
                        <label for="exampleFormControlSelect1">Tujuan</label>
                        <input type="text" class="form-control" value="<?php echo $d['tujuan']; ?>" readonly
                            name="tujuan" value="tujuan">
                    </div>
                    <div class="col-md-10 mb-3">
                        <input type="submit" value="Ubah Jadwal" class="btn-block btn btn-primary">
                    </div>
                    <div class="col-md-10 mb-3">
                        <button type="button" class="btn-block btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            Batalkan Perjalanan
                        </button>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Batalkan perjalanan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Batalkan perjalanan?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <a action=#" class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>"
                                        role="Button">Batalkan Perjalanan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php 
                }
                ?>
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