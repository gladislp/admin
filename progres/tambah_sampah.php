<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $rt = $_POST['rt'];
    $tanggal = $_POST['tanggal'];
    $jenis_sampah = $_POST['jenis_sampah'];
    $jumlah = $_POST['jumlah'];

    $query = "INSERT INTO sampah (nama, rt, tanggal, jenis_sampah, jumlah)
            VALUES ('$nama', '$rt', '$tanggal', '$jenis_sampah', '$jumlah')";
    mysqli_query($conn, $query);

    header("Location: ../pages/sampah.php");
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<div class="content">
    <h2>Tambah Sampah</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <label>RT:</label>
        <input type="text" name="rt" required>
        <label>Tanggal:</label>
        <input type="date" name="tanggal" required>
        <label>Jenis Sampah:</label>
        <input type="text" name="jenis_sampah" required>
        <label>Jumlah (kg):</label>
        <input type="text" name="jumlah" required>
        <button type="submit">Simpan</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
