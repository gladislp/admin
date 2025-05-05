<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $rt = $_POST['rt'];
    $email = $_POST['email'];

    $query = "INSERT INTO pengguna (nama, rt, email) VALUES ('$nama', '$rt', '$email')";
    mysqli_query($conn, $query);

    header("Location: ../pages/pengguna.php");
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<div class="content">
    <h2>Tambah Pengguna</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>RT:</label>
        <input type="text" name="rt" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Simpan</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
