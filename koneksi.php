<?php
// db.php
$host = 'localhost'; // Nama host atau IP server database
$username = 'root';  // Username MySQL
$password = '';      // Password MySQL
$dbname = 'db_portopolio'; // Nama database yang digunakan

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $dbname);

// Mengecek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
