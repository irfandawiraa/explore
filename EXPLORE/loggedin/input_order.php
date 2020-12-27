<?php 
session_start();
 
$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}

$rand = generate_string($permitted_chars, 6);

// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$jmlorang = $_POST['jmlorang'];
$berangkat = $_POST['berangkat'];
$telp = $_POST['telp'];
$tujuan = $_POST['tujuan'];
$harga = $_POST['harga'];
$tharga = $jmlorang * $harga;
$id_account = $_SESSION['id'];
$date_log = date("d/m/Y h:i:s");

// menginput data ke database
mysqli_query($koneksi,"insert into transaction (`id_account`,`no_booking`,`nama`,`hp`,`tanggal_berangkat`,`jmlorang`,`tujuan`,`harga`,`status`,`date_log`)
values('$id_account','$rand','$nama','$telp','$berangkat','$jmlorang','$tujuan','$tharga','Menunggu Pembayaran','$date_log')");
 
// mengalihkan halaman kembali ke index.php
header("location:MyTrip.php?pesan=upload");

?>