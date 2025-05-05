<?php
session_start();
$_SESSION = []; // Kosongin semua data session
session_destroy(); // Hapus session di server
header("Location: ../login.php"); // Pastikan path ke login benar
exit();
?>
