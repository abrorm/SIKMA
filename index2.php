<?php
session_start();
$id_kegiatan;
if(empty($_SESSION['username']) && empty($_SESSION['password'])){
  header('Location:index.html');
}else{
  include "koneksi.php";
  $q = $conn->query("SELECT * FROM kegiatan ");

  ?>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Sistem Informasi Kegiatan Mahasiswa">
    <meta name="keywords" content="Kegiatan, Informasi, Kampus">
    <meta name="author" content="Aditya Yusril fikri">
    <title>SIKMA | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>

    <?php include "header.php" ?>
    <section id="showcase">
      <div class="container">
        <h1>Sistem Informasi Kegiatan Mahasiswa </h1>
        <p>SIKMA Merupakan Layanan Informasi yang Memberikan Informasi Terbaru terkait Kegiatan Mahasiswa yang ada di Fakultas Ilmu Komputer </p>
      </div>
    </section>
    <section id="boxes">
      <div class="container">
        <?php   while ($hasil = mysqli_fetch_array($q)) { ?>
          <div class = "box">
            <img src="./images/<?php echo $hasil['namaFile'] ?>" style="width:250px;height:300px;">
            <br>
            <?php
            echo" $hasil[Nama_Kegiatan] <br> <a href='index4.php?id_kegiatan_cek=$hasil[id_kegiatan]'>Lihat</a>";
            ?>
          </div>
        <?php } ?>
      </section>

      <?php include "footer.php" ?>
      </script>
    </body>
    </html>
  <?php } ?>
