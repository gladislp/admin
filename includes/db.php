<?php
$host = "localhost";
$user = "root";
$pass = ""; // kosong kalau default
$db = "eco_treasure";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
