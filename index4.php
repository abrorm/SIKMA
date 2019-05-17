<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>SIKMA | Desakripsi Kegiatan </title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<header>
  <h1>Selamat Datang</h1>
</header>
<body>
  <section id="showcase">
    <div class="container">
      <?php
      include "koneksi.php";
      $q = $conn->query("SELECT * FROM kegiatan where id_kegiatan = '$_GET[id_kegiatan_cek]'");
      $data = mysqli_fetch_assoc($q);
      ?>
      <img src="./images/<?php echo $data['namaFile'] ?>" style="width:250px;height:300px;">
      <table>
        <tr>
          <td> Nama Kegiatan </td>
          <td> : </td>
          <td> <?php  echo $data['Nama_Kegiatan'];?></td>
        </tr>
        <tr>
          <td> Desakripsi Kegiatan </td>
          <td> : </td>
          <td> <?php  echo $data['deskripsi']; ?></td>
        </tr>
        <tr>
          <td> LSO Penyelenggara </td>
          <td> : </td>
          <td> <?php  echo $data['nama_lso'];?></td>
        </tr>
        <tr>
          <td> Tanggal Mulai </td>
          <td> : </td>
          <td> <?php  echo $data['tgl_mulai_daftar'];?></td>
        </tr>
        <tr>
          <td> Tanggal Berakhir </td>
          <td> : </td>
          <td> <?php  echo $data['tgl_berakhir'];?></td>
        </tr>
        <tr>
          <td> Devisi Yang Tersedia </td>
          <td> : </td>
          <td> <?php  echo $data['devisi'];?></td>
        </tr>
      </table>
      <?php
      $k=$conn->query("SELECT * FROM form_pendaftar WHERE id_kegiatan='$data[id_kegiatan]' and nim = '$_SESSION[nim]' ");
      if ($k->num_rows==0 ) { ?>
        <form class="" action="daftar.php" method="post">
          <input type="submit" name="daftar" value="daftar">
          <input type="hidden" name="id" value="<?php echo $data['id_kegiatan']; ?>">
        </form>
        <?php
      }else {
        echo "Anda sudah daftar";
      } ?>
    </div>
  </section>
</body>
</html>
