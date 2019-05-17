<?php
   include "koneksi.php";
   mysqli_query($conn,"DELETE FROM kegiatan WHERE id_kegiatan = '$_GET[id_kegiatan]'");
   header("location:index2.php"); 
 ?>
