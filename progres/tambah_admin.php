<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO admin (nama, email) VALUES ('$nama', '$email')";
    mysqli_query($conn, $query);

    header("Location: ../pages/pusat_admin.php");
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<div class="content">
    <h2>Tambah Admin</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Simpan</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
