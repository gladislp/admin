<?php
include '../includes/db.php';

// Ambil data admin yang mau diedit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM `admin` WHERE id = '$id'");
    $data = mysqli_fetch_assoc($result);
}

// Kalau form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $rt = $_POST['rt'];
    $email = $_POST['email'];

    $query = "UPDATE `admin` SET nama='$nama', email='$email' WHERE id='$id'";
    mysqli_query($conn, $query);

    header("Location: ../pages/pusat_admin.php");
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<div class="content">
    <h2>Edit Admin</h2>
    <form method="POST" action="update_admin.php">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br>
        <label>RT:</label>
        <input type="email" name="email" value="<?php echo $data['email']; ?>" required><br>
        <button type="submit">Simpan</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
