<?php
$host = 'localhost'; // Ganti sesuai dengan host MySQL Anda
$username = 'root'; // Ganti sesuai dengan username MySQL Anda
$password = ''; // Ganti sesuai dengan password MySQL Anda
$database = 'kuliah';

// Koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}
?>