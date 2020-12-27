<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$tujuan = $_POST['tujuan'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];

// proses gambar
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$rand = rand();

// update data ke databases
$img = $rand.'_'.$filename;
move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/trip/'.$rand.'_'.$filename);
mysqli_query($koneksi,"insert into triplist (`tujuan`,`deskripsi`,`harga`,`img`) values('$tujuan','$deskripsi','$harga','$img')");
 
// mengalihkan halaman kembali ke index.php
header("location:NewTriplist.php");
 
?>