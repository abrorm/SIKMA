<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include "koneksi.php";
    $e = $_POST['e'];
    $admin="adit";
    if (empty($e)) {

      mysqli_query($conn,"INSERT INTO kegiatan VALUES ('$_POST[id_kegiatan]', '$_POST[nama_lso]','$_POST[tgl_berakhir]','$_POST[tgl_mulai_daftar]','$_POST[deskripsi]','$_POST[devisi]','$admin','$_POST[Nama_Kegiatan]','$_FILES[uploadedfile][name]')") or die("2");

    } else {

      mysqli_query($conn,"UPDATE kegiatan SET nama_lso = '$_POST[nama_lso]', tgl_berakhir='$_POST[tgl_berakhir]' , tgl_mulai_daftar='$_POST[tgl_mulai_daftar]' , deskripsi='$_POST[deskripsi]' , devisi='$_POST[devisi]' ,Nama_Kegiatan='$_POST[Nama_Kegiatan]',namaFile='{$_FILES["uploadedfile"]["name"]}' WHERE id_kegiatan = '$_POST[id_kegiatan]' ") or die("1");

    }

    $target_path = "C:/xampp/htdocs/SIKMA/images/";
    $target_path = $target_path . basename($_FILES['uploadedfile']['name']);
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)) {

    } else {
      echo "There was an error uploading the file, please try again!";
    }
    header("location:index2.php");
    ?>
  </body>
</html>
