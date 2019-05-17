<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form class="" action="daftarkegiatan.php" method="get">
    <table>
      <tr>
        <td>pilihan devisi </td>
        <td>:</td>
        <td><input type="text" name="devisi" value=""></td>
      </tr>
      <tr>
        <td>alasan memilih devisi</td>
        <td>:</td>
        <td><input type="text area" name="alasan" value=""></td>
      </tr>
    </table>
      <input type="submit" name="Masuk" value="Masukkan">
      <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
  </form>
</body>
</html>
