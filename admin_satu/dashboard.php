<?php
session_start();
include "../koneksi.php";

if (!isset($_SESSION['username'])) {
 echo "<script>alert('Login Dulu ya'); 
  location.href='./';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Admin Polkesma</title>

</head>
<body>
    <div class="body">
        <div class="title" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
           <a class="pulse nav-link" href="config/logout.php"><h4><i class="fas fa-sign-out-alt"></i>Logout</h4></a> 
           <a class="pulse nav-link" href="ubah_data.php"><h4 style="color: rgb(9, 180, 253);" class="ubah"><i class="fas fa-edit"></i>Ubah Data</h4></a> 
           <h1>HALAMAN ADMIN POLKESMA</h1> 
        </div>
        <div class="table container-fluid" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true" data-aos-offset="200">
            <table id="example" class="table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama mahasiswa</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Waktu Pengisian Aspirasi</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Domisili</th>
                        <th scope="col">Kategori Aspirasi</th>
                        <th scope="col">Pendapat/Masukkan</th>
                        <th scope="col">Kontak</th>
                        <th scope="col">Action</th>
                        <!-- <th scope="col">Action</th> -->
                    </tr>
                </thead>
                <?php

  $no=1;
  $tampildata = mysqli_query($con, " SELECT * FROM `data_aspirasi_mhs`");
  while($data = mysqli_fetch_array($tampildata)) {
    // $tampilan = $data['npm'];
    $tampilan = $data['npm'];
    $nama_mhs           =$data['nama_mhs'];
    $npm                =$data['npm'];
	$date               =$data['date'];
    $kelas              =$data['kelas'];
    $domisili           =$data['domisili'];
    $kategori_aspirasi  =$data['kategori_aspirasi'];
    $Pesan              =$data['Pesan'];
    $kontak             =$data['kontak']
    ?>
                <tbody>
                    <tr>
                        <th><?php echo $no++; ?></th>
                        <td><?php echo $nama_mhs; ?></td>
                        <th><?php echo $data['npm']; ?></th>
                        <td><?php echo $data[3]; ?></td>
                        <td><?php echo $data[4]; ?></td>
                        <td><?php echo $data[5]; ?></td>
                        <td><?php echo $data[6]; ?></td>
                        <td><?php echo $data[7]; ?></td>
                        <td><?php echo $data[8]; ?></td>
                        <!-- <td><a href="form-edit.php?npm=<?php echo$data['id'];?>">Edit data</a></td> -->
                        <td> <a href="config/hapus-data.php?npm=<?php echo $data['id'];?>"><i class="fas fa-trash"></i>Hapus data</a></td>
                    </tr>
                </tbody>
                <?php
   }
  ?>
            </table>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script type="text.javascript" src="assets/"></script>
    <script>
        AOS.init();
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>

</html>