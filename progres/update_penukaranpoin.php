<?php
include '../includes/db.php';

// Ambil data penukaran poin yang mau diedit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM penukaran_poin WHERE id = '$id'");
    $data = mysqli_fetch_assoc($result);
}

// Kalau form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jumlah_poin = $_POST['jumlah_poin'];
    $keterangan = $_POST['keterangan'];
    $tanggal = $_POST['tanggal'];

    $query = "UPDATE penukaran_poin SET nama='$nama', jumlah_poin='$jumlah_poin', keterangan='$keterangan', tanggal='$tanggal' WHERE id='$id'";
    mysqli_query($conn, $query);

    header("Location: ../pages/penukaran_poin.php");
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<div class="content">
    <h2>Edit Penukaran Poin</h2>
    <form method="POST" action="update_penukaranpoin.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br>
        <label>Jumlah Poin:</label>
        <input type="text" name="jumlah_poin" value="<?php echo $data['jumlah_poin']; ?>" required><br>
        <label>keterangan:</label>
        <input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>" required><br>
        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" required><br>
        <button type="submit">Simpan</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
