<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3308";
$user = "root";
$pass = "";
$dbname = "modul4";

$conn = mysqli_connect("localhost:3308","root", "", "modul4");
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$conn){
    die ("Koneksi tidak berhasil!" . mysqli_connect_error());
}
// 
 
?>