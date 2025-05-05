<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $poin = $_POST['poin'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO poin (nama, poin, tanggal)
            VALUES ('$nama', '$poin', '$tanggal')";
    mysqli_query($conn, $query);

    header("Location: ../pages/poin.php");
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<div class="content">
    <h2>Tambah Poin</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Jumlah Poin:</label>
        <input type="text" name="poin" required>
        <label>Tanggal:</label>
        <input type="date" name="tanggal" required>
        <button type="submit">Simpan</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
