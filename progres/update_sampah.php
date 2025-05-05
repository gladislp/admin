<?php
include '../includes/db.php';

// Ambil data sampaj yang mau diedit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM sampah WHERE id = '$id'");
    $data = mysqli_fetch_assoc($result);
}

// Kalau form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $rt = $_POST['rt'];
    $tanggal = $_POST['tanggal'];
    $jenis_sampah = $_POST['jenis_sampah'];
    $jumlah = $_POST['jumlah'];

    $query = "UPDATE sampah SET nama='$nama', rt='$rt', tanggal='$tanggal', jenis_sampah='$jumlah_sampah', jumlah='$jumlah' WHERE id='$id'";
    mysqli_query($conn, $query);

    header("Location: ../pages/sampah.php");
    exit;

}
?>

<?php include '../includes/header.php'; ?>

<div class="content">
    <h2>Edit Sampah</h2>
    <form method="POST" action="update_sampah.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br>
        <label>RT:</label>
        <input type="text" name="rt" value="<?php echo $data['rt']; ?>" required><br>
        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" required><br>
        <label>Jenis Sampah:</label>
        <input type="text" name="jenis_sampah" value="<?php echo $data['jenis_sampah']; ?>" required><br>
        <label>Jumlah (kg):</label>
        <input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>" required><br>
        <button type="submit">Simpan</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
