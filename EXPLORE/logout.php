<?php 
session_start();
if ($_SESSION['del']=="del") {
    $time = time();
    setcookie("cookieemail", '' , $time - 43200, "/");        
    setcookie("cookiepass", '' , $time - 43200, "/"); 
}
session_unset();
session_destroy();
header("location:Login.php?pesan=logout");
exit();
?>