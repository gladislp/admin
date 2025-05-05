<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../includes/db.php';

$query = "SELECT * FROM pengguna";
$result = mysqli_query($conn, $query);
?>

<div class="main-content">
  <h2>Data Pengguna</h2>
  <table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>RT</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$no}</td>
                  <td>{$row['nama']}</td>
                  <td>{$row['rt']}</td>
                  <td>{$row['email']}</td>
                  <td>
                    <a href='../progres/update_pengguna.php?id={$row['id']}'>Edit</a> |
                    <a href='../progres/delete_pengguna.php?id={$row['id']}' onclick=\"return confirm('Yakin?')\">Hapus</a>
                  </td>
                </tr>";
          $no++;
      }
      ?>
    </tbody>
  </table>
  <br>
  <a href="../progres/tambah_pengguna.php" class="btn">Tambah</a>
  </div>

<?php include '../includes/footer.php'; ?>
