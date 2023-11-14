<?php
$servername = "localhost";  
$username = "root";     
$password = "";     
$database = "adminbpkp";  

// Koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi Gagal" . mysqli_connect_error());
}
echo "Koneksi Berhasil!";
?>