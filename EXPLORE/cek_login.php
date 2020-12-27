<?php

// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = md5($_POST['password']);
$remember = $_POST['remember'];
$time = time();
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM account where email='$email' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$data_user = mysqli_fetch_assoc($data);
	$_SESSION['id'] = $data_user['id'];
	$_SESSION['nama'] = $data_user['nama'];
	$_SESSION['email'] = $email;
	$_SESSION['status'] = true;
	
	if ($remember==true) {
		setcookie("cookieemail", $email , $time + 43200, "/");        
		setcookie("cookiepass", $_POST['password'], $time + 43200, "/");
	} else {
		$_SESSION['del'] = "del";
	}

	if($data_user['status']==1){
		header("location:loggedin/Admin.php");
	}else{
		header("location:loggedin/Home.php");
	}
	
}else{
	header("location:Login.php?pesan=gagal");
}
?>