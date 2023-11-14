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

<?php

$query = "INSERT INTO user_admin (nama, id, email, statusUser) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ssss", $nama, $id, $email, $status);

$nama = $_POST['nama'];
$id = $_POST['id'];
$email = $_POST['email'];
$status = $_POST['statusUser'];

mysqli_stmt_execute($stmt);

?>