<?php
include('../config/database.php');
$jurusan = mysqli_query($conn, "SELECT * FROM jurusan WHERE deleted_at IS NULL");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jurusan_id = $_POST['jurusan_id'];

    mysqli_query($conn, "INSERT INTO mahasiswa (nama, umur, jurusan_id) VALUES ('$nama', '$umur', '$jurusan_id')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
  <div class="container">
    <div class="card p-4 shadow-sm">
      <h2 class="text-center text-success mb-4">Tambah Mahasiswa</h2>
      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Umur</label>
          <input type="number" name="umur" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Jurusan</label>
          <select name="jurusan_id" class="form-select" required>
            <option value="">-- Pilih Jurusan --</option>
            <?php while ($j = mysqli_fetch_assoc($jurusan)) { ?>
              <option value="<?= $j['id'] ?>"><?= $j['nama'] ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="d-flex justify-content-between">
          <a href="index.php" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
