<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EXPLORE: About Us</title>

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
                <li class="nav-item">
                    <a class="nav-link" href="Order.php">Pesan Perjalanan</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="About.php">About Us <span class="sr-only">(current)</span></a>
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

    <p align="center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ojQbArbuN4E" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </p>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Hari</th>
                            <th scope="col">Jam Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin</td>
                            <td>09.00 - 17.00</td>
                        </tr>
                        <tr>
                            <td>Selasa</td>
                            <td>09.00 - 17.00</td>
                        </tr>
                        <tr>
                            <td>Rabu</td>
                            <td>09.00 - 17.00</td>
                        </tr>
                        <tr>
                            <td>Kamis</td>
                            <td>09.00 - 17.00</td>
                        </tr>
                        <tr>
                            <td>Jumat</td>
                            <td>09.00 - 17.00</td>
                        </tr>
                        <tr>
                            <td>Sabtu</td>
                            <td>09.00 - 15.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.305434694082!2d111.89858682212538!3d-8.0677397534275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e2e08d7e45c3%3A0x650967d14cdc95cd!2sTaman%20Aloon%20Aloon%20Kota%20Tulungagung!5e0!3m2!1sid!2sid!4v1601950685318!5m2!1sid!2sid"
                    width="600" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>

    <div class="container">
        <p align="center">Progress buka hari ini</p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                aria-valuemax="100"></div>
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
</body>

</html>