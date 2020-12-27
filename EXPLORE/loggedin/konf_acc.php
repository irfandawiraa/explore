<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$date_log = date("d/m/Y h:i:s");
 
// update data ke database
mysqli_query($koneksi,"UPDATE `transaction` SET `status` = 'Dibayar', `date_log` = '$date_log' WHERE `transaction`.`id` = '$id';");
 
// mengalihkan halaman kembali ke index.php
header("location:Acc.php");
 
?>