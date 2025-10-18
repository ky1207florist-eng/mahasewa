<?php
include('../config/database.php');

$query = "SELECT m.id, m.nama, m.umur, j.nama AS jurusan, m.created_at 
          FROM mahasiswa m
          JOIN jurusan j ON m.jurusan_id = j.id
          WHERE m.deleted_at IS NULL";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #e0f2fe, #f8fafc);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      max-width: 800px; /* Lebar maksimal agar tidak terlalu lebar */
      width: 100%;
    }

    .card {
      border: none;
      border-radius: 16px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      background: #ffffff;
      padding: 30px;
      animation: fadeIn 0.8s ease-in-out;
    }

    h2 {
      font-weight: 600;
      color: #0d6efd;
      text-align: center;
      margin-bottom: 30px;
    }

    table {
      font-size: 0.95rem;
      border-radius: 10px;
      overflow: hidden;
    }

    table thead {
      background-color: #0d6efd;
      color: white;
    }

    table tr:hover {
      background-color: #f1f5f9;
      transition: 0.2s ease;
    }

    .btn {
      border-radius: 10px;
      font-size: 0.9rem;
      padding: 6px 12px;
    }

    .btn-success {
      background-color: #198754;
      border: none;
    }

    .btn-success:hover {
      background-color: #157347;
    }

    .btn-secondary {
      background-color: #6c757d;
      border: none;
    }

    .d-flex {
      gap: 10px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <h2>Data Mahasiswa</h2>
      <div class="d-flex justify-content-between mb-3">
        <a href="create.php" class="btn btn-success">+ Tambah Mahasiswa</a>
        <a href="../index.php" class="btn btn-secondary">← Kembali</a>
      </div>

      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Jurusan</th>
              <th>Umur</th>
              <th>Dibuat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jurusan'] ?></td>
                <td><?= $row['umur'] ?></td>
                <td><?= date('d M Y', strtotime($row['created_at'])) ?></td>
                <td>
                  <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
