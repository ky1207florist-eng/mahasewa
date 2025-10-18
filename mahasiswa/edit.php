<?php
include('../config/database.php');
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id"));
$jurusan = mysqli_query($conn, "SELECT * FROM jurusan WHERE deleted_at IS NULL");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jurusan_id = $_POST['jurusan_id'];
    mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', umur='$umur', jurusan_id='$jurusan_id' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
  <div class="container">
    <div class="card p-4 shadow-sm">
      <h2 class="text-center text-warning mb-4">Edit Mahasiswa</h2>
      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Umur</label>
          <input type="number" name="umur" class="form-control" value="<?= $data['umur'] ?>" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Jurusan</label>
          <select name="jurusan_id" class="form-select" required>
            <?php while ($j = mysqli_fetch_assoc($jurusan)) { ?>
              <option value="<?= $j['id'] ?>" <?= ($data['jurusan_id'] == $j['id']) ? 'selected' : '' ?>>
                <?= $j['nama'] ?>
              </option>
            <?php } ?>
          </select>
        </div>
        <div class="d-flex justify-content-between">
          <a href="index.php" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-warning">Update</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
