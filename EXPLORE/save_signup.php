<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama=$_POST["nama"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$password1=md5($_POST["password1"]);

//Query input menginput data kedalam tabel account
if ($password == $password1) {
    $sql="insert into account (nama,email,password) values ('$nama','$email','$password')";
} else {
    header("location:Signup.php?pesan=gagal");
}

//Mengeksekusi/menjalankan query diatas	
$hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
	header("location:Login.php");
}
else {
	header("location:Signup.php?pesan=gagal");
}  

?>