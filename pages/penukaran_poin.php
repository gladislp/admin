<?php
include '../includes/header.php';
include '../includes/sidebar.php';
include '../includes/db.php';

$query = "SELECT * FROM penukaran_poin";
$result = mysqli_query($conn, $query);
?>

<div class="main-content">
  <h2>Data Penukaran Poin</h2>
  <table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Jumlah Poin</th>
        <th>Keterangan</th>
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
                  <td>{$row['tanggal']}</td>
                  <td>{$row['jumlah_poin']}</td>
                  <td>{$row['keterangan']}</td>
                  <td>
                    <a href='../progres/update_penukaranpoin.php?id={$row['id']}'>Edit</a> |
                    <a href='../progres/delete_penukaranpoin.php?id={$row['id']}' onclick=\"return confirm('Yakin?')\">Hapus</a>
                  </td>
                </tr>";
          $no++;
      }
      ?>
    </tbody>
  </table>
  <br>
  <a href="../progres/tambah_penukaranpoin.php">Tambah</a>
</div>

<?php include '../includes/footer.php'; ?>
