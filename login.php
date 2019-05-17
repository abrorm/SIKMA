<?php
include "setSession.php";
if (empty($_SESSION['nim'])&&empty($_SESSION['password'])) {
  header('Location: index.html');
}else {
  $_SESSION['nim']=$_POST['nim'];
  $_SESSION['password']=$_POST['password'];
  $namaAdmin = "adit";
  $pass = "12345";
  $namahost = "localhost";
  $username1 = "root";
  $password1 = "password_baru";
  $database = "sikma";
  $mysqli = new mysqli($namahost,$username1,$password1,$database);
  $rs = $mysqli->query("CALL SP_Login ('". $_SESSION['nim']."','".$_SESSION['password']."')" );
  $row = $rs->fetch_object();

  if ($row) {
    if ($row->type) {
      header("location:./Admin/index2.php");
    }else{
      header("location: index2.php");
    }

  }else {
    echo "Data tidak terdaftar";
    header('location:index.html');
  }
}
?>
