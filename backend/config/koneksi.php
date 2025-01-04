<!-- 

// $host     = "localhost";
// $user     = "root";
// $pass     = "";
// $database = "kampus_web";

// $koneksi = mysqli_connect($host, $user, $pass, $database); -->


<?php
$koneksi = mysqli_connect('localhost','root','') or die('gagal');
mysqli_select_db($koneksi,'test_kampus_web') or die('gagal');
?>

