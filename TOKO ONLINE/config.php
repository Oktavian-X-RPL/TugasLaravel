// config.php - File Koneksi Database
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "toko_online";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>