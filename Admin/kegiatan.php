<?php
  include "koneksi.php";
  $e;
  if (isset($_GET['e'])) {
      $e = $_GET['e'];
  }
  if (empty($e)){
    $title = "Tambah User";
    $data['username']=null;
    $data['password']=null;
    $data['level']=null;
  }else {
    $title = "Edit User";
    $q = mysqli_query($conn,"SELECT * FROM user WHERE username = '$_GET[username]'");
    $data = mysqli_fetch_array($q);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <h1><?php echo $title; ?> </h1>
    <form method="post" action="index4.php">
      <input type="hidden" name="e" value="<?php echo $data['username']; ?>">
      <table border="1">
        <tr>
          <td>Username</td>
          <td><input name="username" type="text" value="<?php echo $data['username']; ?>"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input name="password" type="text" value="<?php echo $data['password']; ?>"></td>
        </tr>
        <tr>
          <td>Level</td>
          <td><input name="level" type="text" value="<?php echo $data['level']; ?>"></td>
        </tr>

          <td colspan="2"><input type="submit" value="Submit" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>
