<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EXPLORE: Log-in</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body background="pictures/raja ampat.jpg">
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
            echo '<div class="alert alert-danger" role="alert">Login gagal! username dan password salah!</div>';
		}else if($_GET['pesan'] == "logout"){
            echo '<div class="alert alert-success" role="alert">Anda telah berhasil logout</div>';
		}else if($_GET['pesan'] == "belum_login"){
			echo '<div class="alert alert-danger" role="alert">Anda harus login untuk mengakses halaman</div>';
		}else if($_GET['pesan'] == "logindulu"){
			echo '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu</div>';
		}
	}
	?>

    <div class="container" style="margin-top: 10%;">
        <div class="row">
            <div class="col" style="filter: blur(5); filter: invert(100%);">
                <div class="align-middle">
                    <img src="pictures/logo.png" style="height: 320px; margin-top: 4%;">
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Masuk</h5>
                        <form method="post" action="cek_login.php">
                            <div class="form-group">
                                <label>E-mail</label>
                                <?php
                                if (isset($_COOKIE['cookieemail'])) { ?>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan E-mail"
                                    value="<?php echo $_COOKIE['cookieemail'] ?>">
                                <?php } else {?>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan E-mail">
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi</label>
                                <?php
                                if (isset($_COOKIE['cookieemail'])) { ?>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Masukkan Kata Sandi" value="<?php echo $_COOKIE['cookiepass'] ?>">
                                <?php } else {?>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Masukkan Kata Sandi">
                                <?php } ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" value=true
                                    id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Remember me
                                </label>
                            </div><br>
                            <div align="center">
                                <button type="submit" class="btn btn-primary" value="LOGIN">Masuk</button>
                            </div>
                        </form><br>
                        <p align="center">
                            Belum memiliki akun? <a href="Signup.php">Daftar Sekarang</a>
                        </p>
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