<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EXPLORE: Daftar Perjalanan</title>

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
        <a class="navbar-brand" href="Admin.php">
            <img src="../pictures/logo.png" height="60px" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Acc.php">Acc Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Triplist.php">Daftar Perjalanan</a>
                </li>
            </ul>
            <span class="nav-item">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <b class="navbar-text">
                            ADMIN
                        </b>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php" style="margin-left: 20px;">Logout</a>
                    </li>
                </ul>
            </span>
        </div>
    </nav>

    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "upload"){
            echo '<div class="alert alert-info" role="alert">Silahkan segera upload foto bukti pembayaran</div>';
		}
	}
	?>
    <br><br>

    <div class="container-lg">
        <div class="card">
            <div class="card-header">
                Daftar Pembayaran
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama</th>
                                <th>Tujuan</th>
                                <th>Jumlah Orang</th>
                                <th>Tanggal</th>
                                <th>Kode Booking</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            include '../koneksi.php';
                            $idakun = $_SESSION['id'];
                            $data = mysqli_query($koneksi,"select * from transaction where status='Dibayar'");
                            while($d = mysqli_fetch_array($data)){
                            ?>
                            <tr>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['tujuan']; ?></td>
                                <td><?php echo $d['jmlorang']; ?></td>
                                <td><?php echo $d['tanggal_berangkat']; ?></td>
                                <td><?php echo $d['no_booking']; ?></td>
                            </tr>
                            <?php 
                            }
                            ?>
                        </tbody>
                    </table>
                </blockquote>
            </div>
        </div>
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