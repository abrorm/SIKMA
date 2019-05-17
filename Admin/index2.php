<?php session_start() ?>
<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="../css/style2.css">

  <title>SIKMA | Home </title>
</head>
<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Sistem</span>Informasi Kegiatan Mahasiswa</h1>
      </div>
      <nav>
        <ul>
          <li class="current"><a href="index2.php">Home </a></li>
          <li ><a href="tampil.php">lihat pendaftar </a></li>
          <li><a href="../logout.php">Logout </a></li>
        </ul>
      </nav>
    </header>

    <section id="boxes">
      <div class="container">
        <?php
        include "koneksi.php";

        $q = mysqli_query($conn,"SELECT * FROM kegiatan");
        echo '<form action="index3.php" method="POST"> <input type="submit" value="Tambah Kegiatan"> </form>';

        echo '<table border="1">
        <th>id Kegiatan</th>
        <th>Nama Kegiatan</th>
        <th>Nama LSO</th>
        <th>Tanggal Mulai Daftar</th>
        <th>Tanggal Berakhir</th>
        <th>Aksi</th>';

        while ($hasil = mysqli_fetch_array($q)){
          echo "
          <tr><td><a href='../index4.php?id_kegiatan_cek=$hasil[id_kegiatan]'>$hasil[id_kegiatan]</a></td>
          <td>$hasil[Nama_Kegiatan]</td>
          <td>$hasil[nama_lso]</td>
          <td>$hasil[tgl_mulai_daftar]</td>
          <td>$hasil[tgl_berakhir]</td>
          <td>
          <a href='index3.php?id_kegiatan=$hasil[id_kegiatan]&e=1&r=hash(\"crc32\", rand())'>Edit</a>
          <a href='hapus.php?id_kegiatan=$hasil[id_kegiatan]&e=1'>hapus</a>
          </td>
          </tr>";

        }
        echo "</table>";
        ?>
      </div>
    </section>
  </body>
