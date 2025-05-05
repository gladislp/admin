<?php
session_start();
include '../includes/db.php'; // pastiin path ini sesuai

$email = $_POST['email'];
$password = $_POST['password'];

// Cek ke database
$query = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");
$data = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {
    $_SESSION['admin'] = $data['id']; // atau simpan info lain kalau mau
    header("Location: ../pages/dashboard.php");
    exit();
} else {
    echo "<script>alert('Email atau password salah');window.location.href='../login.php';</script>";
}
?>
