<?php
include "koneksi.php";

  	mysqli_query($conn,"INSERT INTO pendaftar VALUES ('$_POST[Nama]', 
	'$_POST[Nim]','$_POST[prodi]','$_POST[ttl]','$_POST[NoHp]','$_POST[Alamat]','$_POST[email]','$_POST[Password]',0)"); 

	header ("location: login.php");