<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EXPLORE: Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="Home.php">
            <img src="pictures/logo.png" height="60px" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php?pesan=logindulu">Pesan Perjalanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About Us</a>
                </li>
            </ul>
            <span class="nav-item">
                <a class="nav-link" href="Login.php">Login</a>
            </span>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pictures/bali.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 25%;">
                    <h1>PULAU BALI</h1>
                    <p>Suasana budaya yang kental bercampur dengan keindahan alam tropis</p>
                    <a href="Order.php" class="btn btn-outline-light" role="button" aria-pressed="true" style="font-size: 30px;">Pesan Sekarang</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pictures/borobudur.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 25%;">
                    <h1>CANDI BOROBUDUR</h1>
                    <p>Salah satu bangunan peninggalan kuno yang termasuk keajaiban dunia</p>
                    <a href="Order.php" class="btn btn-outline-light" role="button" aria-pressed="true" style="font-size: 30px;">Pesan Sekarang</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pictures/raja ampat.jpg" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 25%;">
                    <h1>RAJA AMPAT</h1>
                    <p>Deretan pulau yang menawan, pulau-pulau menyatu dengan indahnya laut</p>
                    <a href="Order.php" class="btn btn-outline-light" role="button" aria-pressed="true" style="font-size: 30px;">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <footer style="margin-top: 50px;">
        <div class="container" style="margin-bottom: 50px;">
            <div class="row">
                <div class="col-sm">
                    <p align="center" style="margin-right: 150px;">
                        <img src="pictures/logo.png" width="250px">
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
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>