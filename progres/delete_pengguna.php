<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM pengguna WHERE id = '$id'";
    mysqli_query($conn, $query);
}

header("Location: ../pages/pengguna.php");
exit;
