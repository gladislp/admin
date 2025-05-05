<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM poin WHERE id = '$id'";
    mysqli_query($conn, $query);
}

header("Location: ../pages/poin.php");
exit;
