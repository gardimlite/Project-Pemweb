<?php
$servername = "localhost:3306"; // Gunakan port 3307
$username = "root"; // Ganti dengan username database yang benar jika perlu
$password = ""; // Ganti dengan password database yang benar jika perlu
$dbname = "tokopekita2"; // Ganti dengan nama database yang benar jika perlu

// Koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa apakah koneksi berhasil
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
