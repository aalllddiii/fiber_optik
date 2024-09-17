<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Buat Ngatur Font -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Buat Styling -->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/popup.css" />

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Bagian Nasted Row -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 title="" class="h4 text-gray-900 mb-4"><strong>LOGIN</strong></h1>
              </div>
              <form method="POST" action="cek_login.php">
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Username" name="username">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user form-password" id="exampleLastName" placeholder="Password" name="password">
                    <input type="checkbox" class="form-checkbox"> Show password
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Login
                </button>
                <hr>
              </form>
              <div class="text-center">
                <a class="small" href="register.php">Belum Punya Akun? Daftar Dulu Yuk!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h3 style="color: white; text-align: center;">
        <strong>Penjelasan Acara BEM FIKTI</strong></h3>
              
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Bagian Nasted Row -->
        <div class="row">
          <div class="col-lg">
             <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">FOSC 21</h6>
                </div>
                <div class="card-body">
                  <h6>FIKTI Open Sport Competition (FOSC) yaitu kegiatan kompetisi tahunan di bidang olahraga yang diselenggarakan oleh BEM FIKTI Universitas Gunadarma.</h6>
                  <h6>Pilihan divisi:</h6>
                  <li>Acara</b></li>
                  <li>Media</li>
                  <li>Perlengkapan</li>
                  <li>Humas</li>
                  <li>Danus</li>
                  <li>Sponsorship</li>
                </div>
            </div>
          </div>
        </div>
      </div>
      
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Bagian Nasted Row -->
        <div class="row">
          <div class="col-lg">
             <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">FAF 3.0</h6>
                </div>
                <div class="card-body">
                  <h6>FIKTI Art Festival (FAF) 3.0 merupakan kegiatan tahunan di bidang seni dan budaya yang diselenggarakan oleh BEM FIKTI Universitas Gunadarma.</h6>
                  <h6>Pilihan divisi:</h6>
                  <li>Acara</b></li>
                  <li>Media</li>
                  <li>Perlengkapan</li>
                  <li>Danus</li>
                  <li>Sponsorship</li>
                </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Bagian Nasted Row -->
        <div class="row">
          <div class="col-lg">
             <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">TF 8.0</h6>
                </div>
                <div class="card-body">
                  <h6>TechnoFair adalah event seputar IT terbesar di Fakultas Ilmu Komputer & Teknologi Informasi Universitas Gunadarma yang diadakan oleh BEM FIKTI Universitas Gunadarma.</h6>
                  <h6>Pilihan divisi:</h6>
                  <li>Acara</b></li>
                  <li>Media</li>
                  <li>Humas</li>
                  <li>Danus</li>
                  <li>Perlengkapan</li>
                  <li>Sponsorship</li>
                </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Bagian Nasted Row -->
        <div class="row">
          <div class="col-lg">
             <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">HEROES VII</h6>
                </div>
                <div class="card-body">
                  <h6>HEROES adalah kegiatannya bakti sosial oleh Mahasiswa FIKTI UG yang bertujuan membantu masyarakat khusus atau sekolah yang masih minim pemahaman akan perkembangan teknologi terkini</h6>
                  <h6>Pilihan divisi:</h6>
                  <li>Acara</b></li>
                  <li>Media</li>
                  <li>Perlengkapan</li>
                  <li>Sponsorship</li>
                  <li>Danus</li>
                </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <div id="gagal" class="overlay">
    <div class="popup">
      <h2>Maaf</h2>
      <a class="close" href="#">&times;</a>
      <div class="content">
        Username atau Password Salah!
      </div>
    </div>
  </div>
  <div id="logout" class="overlay">
    <div class="popup">
      <h2>Sukses</h2>
      <a class="close" href="#">&times;</a>
      <div class="content">
        Berhasil Logout!
      </div>
    </div>
  </div>

  <!-- BS Core Js -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core Js-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Js Buat Keseluruhan -->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>
<!-- Show Passeord -->
<script type="text/javascript">
  $(document).ready(function() {
    $('.form-checkbox').click(function() {
      if ($(this).is(':checked')) {
        $('.form-password').attr('type', 'text');
      } else {
        $('.form-password').attr('type', 'password');
      }
    });
  });
</script>
</html>