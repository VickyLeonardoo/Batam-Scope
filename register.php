<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">


</head>
<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>

<body class="box">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h4 class="h4  mb-3">Daftar Akun</h4>

                  </div>
                  <form id="registration" class="user" method="POST" action="simpan_masyarakat.php">
                    <div class="form-group">

                      <input type="text" name="nik" autocomplete="off" class="form-control form-control-user"
                        placeholder="Masukkan NIK" id="nik" required oninvalid="this.setCustomValidity('Masukkan Username Anda')" 
                        oninput="this.setCustomValidity('')"  />
                    </div>
                    <div class="form-group">
                      <input type="text" name="nama" autocomplete="off" class="form-control form-control-user" placeholder="Nama" required oninvalid="this.setCustomValidity('Masukkan Nama Lengkap Anda')" oninput="this.setCustomValidity('')" />
                    </div>
                    <div class="form-group">
                      <input placeholder="Tanggal Lahir" autocomplete="off" name="tgl_lahir" class="form-control form-control-user" type="text" onfocus="(this.type='date')" id="date" required oninvalid="this.setCustomValidity('Masukkan Tanggal Kejadian')" oninput="this.setCustomValidity('')" />

                    </div>
                    <div class="form-group">
                      <input type="text" name="alamat" autocomplete="off" class="form-control form-control-user" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('Masukkan Alamat Anda')" oninput="this.setCustomValidity('')" />
                    </div>
                    <div class="form-group">
                      <input type="text" id="username" name="username" autocomplete="off" 
                      class="form-control form-control-user" placeholder="Masukkan Username" 
                      required oninvalid="this.setCustomValidity('Masukkan Username Anda')" 
                      oninput="this.setCustomValidity('')"  minlength="8" />
                    </div>
                    <div class="form-group">
                      <input type="text" name="email" autocomplete="off" class="form-control form-control-user" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Masukkan Email Anda')" oninput="this.setCustomValidity('')" />
                    </div>
                    <div class="form-group">
                      <input type="text" name="no_telp" autocomplete="off" class="form-control form-control-user" placeholder="Masukkan Nomor Telepon" required oninvalid="this.setCustomValidity('Masukkan Nomor Telepon Anda')" oninput="this.setCustomValidity('')" />
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" autocomplete="off" class="form-control form-control-user" placeholder="Masukkan Password" required oninvalid="this.setCustomValidity('Masukkan Password Anda')" oninput="this.setCustomValidity('')" />
                    </div>
                    <div class="form-group cols-sm-6">

                    </div>
                    <div class="form-group">

                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Daftar!">

                    </a>
                    <hr>

                  </form>
                  <div class="text-center">
                    Sudah Punya Akun?
                    <a class="small" href="index.php">Silahkan Login</a>
                  </div>

                  <hr>


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
  <script src="register.js"></script>

  <script>

  </script>

</body>

</html>