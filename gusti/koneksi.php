<?php
// Mengatur data koneksi
$host = "localhost"; // Alamat server MySQL (biasanya localhost)
$user = "root"; // Username MySQL (default: root)
$pass = ""; // Password MySQL (default: kosong)
$dbname = "belajar_php_kelase"; // Nama Database

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>