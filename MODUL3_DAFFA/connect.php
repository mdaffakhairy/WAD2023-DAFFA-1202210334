<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$server = "localhost:3308";
$user = "root";
$password = "";
$database = "modul3daffa";
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
// 
?>