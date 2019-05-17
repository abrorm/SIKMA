<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Sistem Informasi Kegiatan Mahasiswa">
  <meta name="keywords" content="Kegiatan, Informasi, Kampus">
  <meta name="author" content="Aditya Yusril fikri">
  <title>SIKMA | Welcome</title>
  <link rel="stylesheet" href="../css/style.css">
  <title></title>
</head>
<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Sistem</span> Informasi Kegiatan Mahasiswa</h1>
      </div>
      <nav>
        <ul >
          <li ><a href="index2.php">Home </a></li>
          <li class="current"><a href="tampil.php">Lihat pendaftar </a></li>
          <li><form class="" action="../logout.php" method="post">
            <input type="submit" name="logout" value="Logout">
          </form></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="boxes">
    <div class="container">
      <?php
      include "koneksi.php";
      $q=$conn->query("SELECT * FROM form_pendaftar ");

      echo '<table border="1">
      <th>pendaftar</th>
      <th>pilihan_devisi</th>
      <th>alasan_memilih_divis</th>';

      while ($hasil = mysqli_fetch_array($q)){
        echo "
        <tr>
        <td>$hasil[nim]</td>
        <td>$hasil[pilihan_devisi]</td>
        <td>$hasil[alasan_memilih_divis]</td>
        </tr>";

      }
      echo "</table>";
      ?>
    </div>
  </section>

  <section id="boxes">

  </section>


</body>
</html>
