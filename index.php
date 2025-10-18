<?php include('config/database.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard UTS Pemrograman Web II</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    /* === Gaya Dasar Halaman === */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #e0f2fe, #f8fafc);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      animation: fadeIn 1s ease-in-out;
    }

    h1 {
      font-weight: 600;
      color: #0d6efd;
      margin-bottom: 50px;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
      font-size: 1.8rem;
      animation: fadeDown 1s ease-out;
    }

    /* === Container Kotak === */
    .box-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 40px;
      flex-wrap: wrap;
      animation: fadeUp 1s ease-out;
    }

    /* === Kotak Menu === */
    .menu-box {
      width: 220px;
      height: 220px;
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      transition: all 0.3s ease;
      text-decoration: none;
      position: relative;
      overflow: hidden;
    }

    .menu-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(13,110,253,0.25);
    }

    .menu-box img {
      width: 60px;
      margin-bottom: 15px;
      transition: transform 0.3s ease;
    }

    .menu-box:hover img {
      transform: scale(1.1);
    }

    .menu-box h3 {
      font-size: 1.1rem;
      font-weight: 500;
      color: #0d6efd;
      text-align: center;
      margin: 0;
    }

    footer {
      position: fixed;
      bottom: 15px;
      text-align: center;
      color: #6c757d;
      font-size: 0.85rem;
    }

    /* === Animasi Halus === */
    @keyframes fadeIn {
      from {opacity: 0;}
      to {opacity: 1;}
    }

    @keyframes fadeUp {
      from {opacity: 0; transform: translateY(30px);}
      to {opacity: 1; transform: translateY(0);}
    }

    @keyframes fadeDown {
      from {opacity: 0; transform: translateY(-20px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</head>
<body>
  <div class="text-center">
    
  </div>

  <div class="box-container">
    <!-- Kotak Tambahkan Jurusan -->
    <a href="jurusan/index.php" class="menu-box">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" alt="Jurusan">
      <h3>Tambahkan<br>Jurusan</h3>
    </a>

    <!-- Kotak Tambahkan Mahasiswa -->
    <a href="mahasiswa/index.php" class="menu-box">
      <img src="https://cdn-icons-png.flaticon.com/512/201/201818.png" alt="Mahasiswa">
      <h3>Tambahkan<br>Mahasiswa</h3>
    </a>
  </div>

  <footer>
    © 2025 UTS Pemrograman Web II — PHP Native CRUD - Iky_Still_Learning
  </footer>
</body>
</html>
