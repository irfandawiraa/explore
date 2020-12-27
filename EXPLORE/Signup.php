<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EXPLORE: Sign-up</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body background="pictures/borobudur.jpg">
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
                    <a class="nav-link" href="Order.php">Pesan Perjalanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
            echo '<div class="alert alert-danger" role="alert">Pendaftaran gagal! Password tidak sama!</div>';
		}
	}
	?>

    <div class="container" style="margin-top: 8%;">
        <div class="row">
            <div class="col" style="filter: blur(5); filter: invert(100%);">
                    <img src="pictures/logo.png" style="height: 320px; margin-top: 11%;">
            </div>
            <div class="col">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Daftar</h5>
                        <form action="save_signup.php" method="post">
                            <div class="form-group">
                                <label for="InputName1">Nama</label>
                                <input type="text" class="form-control" name="nama" id="InputName1" aria-describedby="emailHelp" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="leInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" id="InputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="InputPassword2">Ulangi Password</label>
                                <input type="password" class="form-control" name="password1" id="InputPassword2" placeholder="Password">
                            </div><br>
                            <div align="right">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </form><br>
                    </div>
                </div>
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