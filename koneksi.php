<?php
$namahost = "localhost";
$username = "root";
$password = "password_baru";
$database = "sikma";
$conn=mysqli_connect($namahost,$username,$password) or die("Failed");
mysqli_select_db($conn,$database) or die("Database not exist");
 ?>
