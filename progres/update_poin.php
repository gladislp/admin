<?php
include '../includes/db.php';

// Ambil data poin yang mau diedit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM poin WHERE id = '$id'");
    $data = mysqli_fetch_assoc($result);
}

// Kalau form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $poin = $_POST['poin'];
    $tanggal = $_POST['tanggal'];

    $query = "UPDATE poin SET nama='$nama', poin='$poin', tanggal='$tanggal' WHERE id='$id'";
    mysqli_query($conn, $query);

    header("Location: ../pages/poin.php");
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<div class="content">
    <h2>Edit Poin</h2>
    <form method="POST" action="update_poin.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br>
        <label>Jumlah Poin:</label>
        <input type="text" name="poin" value="<?php echo $data['poin']; ?>" required><br>
        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" required><br>
        <button type="submit">Simpan</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
