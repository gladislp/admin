<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM sampah WHERE id = '$id'";
    mysqli_query($conn, $query);
}

header("Location: ../pages/sampah.php");
exit;
