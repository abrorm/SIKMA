<html>
<head>
  <title>Daftar Akun</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
        Daftar Akun
        </span>
        <form class="login100-form validate-form p-b-33 p-t-5" action="simpan.php" method="post">

          <div class="wrap-input100 validate-input" data-validate = "Enter Nama">
            <input class="input100" type="text" name="Nama" placeholder="Nama">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter Nim">
            <input class="input100" type="text" name="Nim" placeholder="NIM">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter prodi">
            <select class="input100" name="prodi">
              <option value="TIF">Teknik Informatika</option>
              <option value="SI">Sistem Informasi</option>
              <option value="PTI">Pendidikan Teknologi Informasi</option>
              <option value="TEKKOM">Teknik Komputer</option>
              <option value="TI">Teknologi Informasi</option>
            </select>
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter Tanggal Lahir">
            <input class="input100" type="date" name="ttl" placeholder="Tanggal lahir">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter No. HP">
            <input class="input100" type="text" name="NoHp" placeholder="No. Hp">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter Alamat">
            <input class="input100" type="text" name="Alamat" placeholder="Alamat">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter Email">
            <input class="input100" type="email" name="email" placeholder="email">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="Password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn">
              Daftar
            </button>
          </div>
          <div > <center> <a href="index.html">kembali</a>

          </div>
        </div>
      </div>
    </div>

</body>
</html>
