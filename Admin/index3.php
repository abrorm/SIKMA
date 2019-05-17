
<?php
include "koneksi.php";
$e= null;
if (isset($_GET['e'])) {
  $e = $_GET['e'];
}
if (empty($e)){
  $data['id_kegiatan']=null;
  $title = "Tambah Kegiatan";
  $data['Nama_Kegiatan']=null;
  $data['nama_lso']=null;
  $data['tgl_mulai_daftar'] = null;
  $data['tgl_berakhir'] = null;
  $data['devisi'] = null;
  $data['deskripsi'] = null;

}else {
  $title = "Edit Kegiatan";
  $q = mysqli_query($conn,"SELECT * FROM kegiatan WHERE id_kegiatan = '$_GET[id_kegiatan]'");
  $data = mysqli_fetch_array($q);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $title;?></title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Sistem</span> Informasi Kegiatan Mahasiswa</h1>
      </div>
      <nav>
        <ul >
          <li class="current"><a href="index2.php">Home </a></li>
          <li><a href="tampil.php">lihat pendaftar </a></li>
          <li><a href="logout.php">logout</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="boxes">
    <div class="container">
      <h1><?php echo $title; ?> </h1>
      <form enctype="multipart/form-data" method="post" action="index4.php">
        <input type="hidden" name="e" value="<?php echo $data['id_kegiatan']; ?>">

        <table border="1">
          <tr>
            <td>ID Kegiatan</td>
            <td><input name="id_kegiatan" type="text" value="<?php echo $data['id_kegiatan']; ?>"></td>
          </tr>
          <tr>
            <td>Nama Kegiatan</td>
            <td><input name="Nama_Kegiatan" type="text" value="<?php echo $data['Nama_Kegiatan']; ?>"></td>
          </tr>
          <tr>
            <td>Nama LSO</td>
            <td><input name="nama_lso" type="text" value="<?php echo $data['nama_lso']; ?>"></td>
          </tr>
          <tr>
            <td>Tanggal_Mulai_Daftar</td>
            <td><input name="tgl_mulai_daftar" type="date" value="<?php echo $data['tgl_mulai_daftar']; ?>"></td>
          </tr>
          <tr>
            <td>Tanggal_Berakhir</td>
            <td><input name="tgl_berakhir" type="date" value="<?php echo $data['tgl_berakhir']; ?>"></td>
          </tr>
          <tr>
            <td>Deskripsi Kegiatan</td>
            <td><input name="deskripsi" type="text" value="<?php echo $data['deskripsi']; ?>"></td>
          </tr>
          <tr>
            <td>Devisi yang tersedia</td>
            <td><input name="devisi" type="text" value="<?php echo $data['devisi']; ?>"></td>
          </tr>
          <tr>
            <td>Masukkan Foto kegiatan</td>
            <td> <input name="uploadedfile" type="file"/> <br>
              <img id="gmbr" style="width:100px;height:100px" src="../images/<?php echo $data['namaFile'] ?>" ></td>
              <tr>
                <tr>
                  <td colspan="2"><input type="submit" value="Submit" /></td>
                </tr>
              </table>
            </form>

          </body>
    </div>

  </section>

  </html>

  <?php  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Some time in the past
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache"); ?>
