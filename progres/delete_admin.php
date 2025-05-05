<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `admin` WHERE id = '$id'";
    mysqli_query($conn, $query);
}

header("Location: ../pages/pusat_admin.php");
exit;
