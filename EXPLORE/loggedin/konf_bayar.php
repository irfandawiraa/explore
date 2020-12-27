<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$no_booking = $_POST['no_booking'];
$date_log = date("d/m/Y h:i:s");

// proses gambar
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// update data ke database
$gambar = $no_booking.'_'.$filename;
move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$no_booking.'_'.$filename);
mysqli_query($koneksi,"UPDATE `transaction` SET `status` = 'Menunggu Konfirmasi', `buktibayar` = '$gambar', `date_log` = '$date_log' WHERE `transaction`.`id` = '$id';");

// mengalihkan halaman kembali ke index.php
header("location:MyTrip.php");
 
?>