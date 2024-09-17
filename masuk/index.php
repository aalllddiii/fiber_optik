<!DOCTYPE html>
<html lang="en">
<?php

include_once "../koneksi.php";
include_once "../sesi.php";

?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Oprec Volunteer BEM FIKTI</title>

  <!-- Custom fonts -->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles -->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/popup.css" />

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <!--<i class="fas fa-laugh-wink"></i>-->
        </div>
        <div class="mx-3"><br><small>OPREC VOLUNTEER BEM FIKTI 2020</small></div>
      </a>

      <br>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <div class="sidebar-heading">
        <!--Menu-->
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-address-card"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#close">
          <i class="fas fa-address-book"></i>
          <span>Form Pendaftaran</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="kelulusan.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Kelulusan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang, <?php echo $nama ?></span>
                <img class="img-profile rounded-circle" src="images/<?php echo $upload ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

          </div>

          <!-- Content Row -->
          <div class="row">


          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->

            <!-- Project Card Example -->

            <!-- Color System -->

            <div class="col-lg">

              <!-- Illustrations -->

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Timeline Pendaftaran Open Recruitment Volunteer 2020 / 2021</h6>
                </div>
                <div class="card-body">
                  <li>13 - 20 November 2020 - <b>Pendaftaran</b></li>
                  <li>23 - 26 November 2020 - <b>Wawancara</b></li>
                  <li>Tempat Wawancara : Platform Cloud Meeting Online & Waktu Wawancara : 09.00 - 16.00 WIB</li>
                  <li>30 November 2020 - <b>Pengumuman</b></li>
                </div>
              </div>
              <br>

              <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">-->
              <!--  <h1 class="h3 mb-0 text-gray-800">Penjelasan Acara BEM FIKTI</h1>-->
              <!--</div>-->

              <!--<div class="card shadow mb-4">-->
              <!--  <div class="card-header py-3">-->
              <!--    <h6 class="m-0 font-weight-bold text-primary">FOSC 21</h6>-->
              <!--  </div>-->
              <!--  <div class="card-body">-->
              <!--    <h6>FIKTI Open Sport Competition (FOSC) yaitu kompetisi olahraga multi cabang olahraga (cabor) tahunan-->
              <!--      yang diselenggarakan oleh BEM FIKTI Universitas Gunadarma. Dalam keadaan pandemi ini maka FOSC 2021 akan dilaksanakan secara online.</h6>-->
              <!--    <h6>Pilihan divisi:</h6>-->
              <!--    <li>Acara</b></li>-->
              <!--    <li>Media</li>-->
              <!--    <li>Perlengkapan</li>-->
              <!--    <li>Humas</li>-->
              <!--    <li>Danus</li>-->
              <!--    <li>Sponsorship</li>-->
              <!--  </div>-->
              <!--</div>-->

              <!--<div class="card shadow mb-4">-->
              <!--  <div class="card-header py-3">-->
              <!--    <h6 class="m-0 font-weight-bold text-primary">FAF 3.0</h6>-->
              <!--  </div>-->
              <!--  <div class="card-body">-->
              <!--    <h6>FIKTI Art Festival (FAF) 3.0 merupakan sebuah program kerja tahunan dari BEM FIKTI UG yang dilaksanakan oleh Bidang Minat-->
              <!--      Bakat khususnya bagian Departemen Seni dan Budaya. FIKTI Art Festival (FAF) 3.0 yang bertemakan "Be a Natural with Aesthetic"-->
              <!--      ini memiliki rangkaian kegiatan dalam bentuk lomba dan konser. Diantaranya lomba yang akan dilaksanakan adalah comic strip,-->
              <!--      cover song, dan tari tradisonal x tari modern. </h6>-->
              <!--    <h6>Pilihan divisi:</h6>-->
              <!--    <li>Acara</b></li>-->
              <!--    <li>Media</li>-->
              <!--    <li>Perlengkapan</li>-->
              <!--    <li>Danus</li>-->
              <!--    <li>Sponsorship</li>-->
              <!--  </div>-->
              <!--</div>-->

              <!--<div class="card shadow mb-4">-->
              <!--  <div class="card-header py-3">-->
              <!--    <h6 class="m-0 font-weight-bold text-primary">TF 8.0</h6>-->
              <!--  </div>-->
              <!--  <div class="card-body">-->
              <!--    <h6>TechnoFair adalah event IT terbesar di Fakultas Ilmu Komputer & Teknologi Informasi Universitas Gunadarma.-->
              <!--      TechnoFair tahun ini mengangkat tema “Enliven the Spirit of Technological Innovation Through Digital Culture” dengan-->
              <!--      rangkaian acara yang tediri dari webinar, kompetisi, workshop dan talkshow yang akan dilaksanakan secara daring</h6>-->
              <!--    <h6>Pilihan divisi:</h6>-->
              <!--    <li>Acara</b></li>-->
              <!--    <li>Media</li>-->
              <!--    <li>Humas</li>-->
              <!--    <li>Danus</li>-->
              <!--    <li>Humas</li>-->
              <!--    <li>Perlengkapan</li>-->
              <!--    <li>Sponsorship</li>-->
              <!--  </div>-->
              <!--</div>-->

              <!--<div class="card shadow mb-4">-->
              <!--  <div class="card-header py-3">-->
              <!--    <h6 class="m-0 font-weight-bold text-primary">HEROES VII</h6>-->
              <!--  </div>-->
              <!--  <div class="card-body">-->
              <!--    <h6>Hero of Education and Social (HEROES) VII adalah kegiatan bakti sosial yang dilaksanakan oleh Mahasiswa FIKTI UG di wilayah-->
              <!--      yang memiliki suatu permasalahan dalam keseharian. Acara ini mempunyai rangkaian kegiatan seperti melakukan pengajaran teknologi-->
              <!--      dan protokol kesehatan Covid-19 yang sesuai kepada kepala sekolah, para guru, para siswa dan masyarakat sekitar, serta kerja bakti.</h6>-->
              <!--    <h6>Pilihan divisi:</h6>-->
              <!--    <li>Acara</b></li>-->
              <!--    <li>Media</li>-->
              <!--    <li>Perlengkapan</li>-->
              <!--    <li>Sponsorship</li>-->
              <!--    <li>Konsumsi</li>-->
              <!--  </div>-->
              <!--</div>-->

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Download Surat Pernyataan Volunteer di bawah ini:</h6>
                </div>
                <div class="card-body">
                  <li><a href="../assets/surat_pernyataan_volunteer.pdf" download>Surat Pernyataan Volunteer</a></li>
                  *Isi surat pernyataan ini dengan tulis tangan.<br>
                  *Diserahkan pada saat melakukan wawancara dalam bentuk scan/foto.
                </div>
              </div>

              <!-- Approach -->

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Perhatian</h6>
                </div>
                <div class="card-body">


                  <b>*HEROES VII dan FAF 3.0 TIDAK MEMILIKI DIVISI HUMAS</b>
                </div>
              </div>

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Apa sih Tugas di Setiap Divisi itu?</h6>
                </div>
                <div class="card-body">
                  <ol>
                    <li>Acara: Divisi yang bertugas dalam hal mengurus, menyusun dan mengatur rangkaian kegiatan acara.</li>
                    <li>Danus: Divisi yang bertanggung jawab dalam penghimpunan dana yang akan digunakan untuk keperluan acara.</li>
                    <li>Humas: Divisi yang bertanggung jawab untuk mengatur dan mempublikasikan segala keperluan acara, penyebaran informasi, mengatur koordinasi panitia dan membangun hubungan antara mahasiswa dengan panitia.</li>
                    <li>Perlengkapan: Divisi yang bertugas dalam hal menyiapkan perlengkapan yang dibutuhkan selama acara ber langsung.</li>
                    <li>Media & Creative: Divisi yang bertugas dalam hal dokumentasi, design dan ide kreatif bernuansa seni.</li>
                    <li>Sponsor: Divisi yang bertugas dalam hal sponsorship.</li>
                  </ol>
                </div>
              </div>



              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Punya Pertanyaan?</h6>
                </div>
                <div class="card-body">
                  <b>Silahkan Hubungi Kontak di bawah : </b>
                  <ul>
                    <li>Instagram BEM FIKTI <a href="https://www.instagram.com/ug_bemfikti/" target="_blank" rel="nofollow" title="IG BEM FIKTI">: KLIK DI SINI </a></li>
                    <li>Contact Person Line : miftah_maulana4</li>
                    <li>Contact Person WhatsApp : 081294532794</li>
                  </ul>
                </div>
              </div>


            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span title="Farhan">Copyright &copy; Maintained by Biro PTI 2020 / 2021 </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik Logout Untuk Melanjutkan!</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- PopUp -->
  <div id="welcome" class="overlay">
    <div class="popup">
      <h2>Selamat datang!</h2>
      <a class="close" href="#">&times;</a>
      <div class="content">

      </div>
    </div>
  </div>
  <div id="close" class="overlay">
    <div class="popup">
      <h2>Maaf</h2>
      <a class="close" href="#">&times;</a>
      <div class="content">
        Pendaftaran telah ditutup!
      </div>
    </div>
  </div>
  <div id="lulus" class="overlay">
    <div class="popup">
      <h2>Oops..</h2>
      <a class="close" href="#">&times;</a>
      <div class="content">
        Informasi kelulusan akan diumumkan pada tanggal 30 November 2020.
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../assets/js/demo/chart-area-demo.js"></script>
  <script src="../assets/js/demo/chart-pie-demo.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics
  <script async src="https://www.googletagmanager.com/gtag/js?id=1GXJKR09BD"></script>
  <script type="text/javascript">
    document.getElementById("buttonformdaftar").addEventListener("click", myFunction);

    function myFunction() {
      alert("Maaf pendaftaran telah ditutup.");
    }
  </script> -->

</body>

</html>