<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jumlah_poin = $_POST['jumlah_poin'];
    $keterangan = $_POST['keterangan'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO penukaran_poin (nama, jumlah_poin, keterangan, tanggal)
            VALUES ('$nama', '$jumlah_poin', '$keterangan', '$tanggal')";
    mysqli_query($conn, $query);

    header("Location: ../pages/penukaran_poin.php");
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<div class="content">
    <h2>Tambah Penukaran Poin</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>Jumlah Poin:</label>
        <input type="text" name="jumlah_poin" required>
        <label>Keterangan:</label>
        <input type="text" name="keterangan" required>
        <label>Tanggal:</label>
        <input type="date" name="tanggal" required>
        <button type="submit">Simpan</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
