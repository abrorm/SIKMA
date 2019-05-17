<?php
session_start();
  include "koneksi.php";
  $alasan =$_GET['alasan'];
  $devisi=$_GET['devisi'];
  $k=$conn->query("INSERT INTO `form_pendaftar`( `pilihan_devisi`, `alasan_memilih_divis`, `nim`, `id_kegiatan`) VALUES ('{$devisi}','{$alasan}','{$_SESSION['nim']}','{$_GET['id']}')") or die("1");
  header("location: index2.php");
 ?>
