<?php
include_once "../koneksi.php";
include_once "../sesi.php";
$username = $_SESSION['username'];
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$npm = mysqli_real_escape_string($conn, $_POST['npm']);
$kelas = mysqli_real_escape_string($conn, $_POST['kelas']);
$jurusan = mysqli_real_escape_string($conn, $_POST['jurusan']);
$domisili = mysqli_real_escape_string($conn, $_POST['domisili']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$id_line = mysqli_real_escape_string($conn, $_POST['id_line']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);
//$pilihan1 = $_POST['pilihan1'];
$divisi1_1 = mysqli_real_escape_string($conn, $_POST['divisi1_1']);
$divisi1_2 = mysqli_real_escape_string($conn, $_POST['divisi1_2']);
//$pilihan2 = $_POST['pilihan2'];
$divisi2_1 = mysqli_real_escape_string($conn, $_POST['divisi2_1']);
$divisi2_2 = mysqli_real_escape_string($conn, $_POST['divisi2_2']);
$upload = $_FILES['upload']['name'];
$motivasi = mysqli_real_escape_string($conn, $_POST['motivasi']);
$motivasi1 = mysqli_real_escape_string($conn, $_POST['motivasi1']);
$tambahan_file = mysqli_real_escape_string($conn, $_POST['tambahan_file']);
$hpd = $_FILES['hpd']['name'];

//pilihan1='$pilihan1',divisi1_1='$divisi1_1',divisi1_2='$divisi1_2',

mysqli_query($conn, "UPDATE user SET nama='$nama',npm='$npm',kelas='$kelas',jurusan='$jurusan',domisili='$domisili',alamat='$alamat',id_line='$id_line',no_hp='$no_hp',divisi1_1='$divisi1_1',divisi1_2='$divisi1_2',divisi2_1='$divisi2_1',divisi2_2='$divisi2_2',motivasi='$motivasi',motivasi1='$motivasi1',tambahan_file='$tambahan_file' WHERE username='$username'");

if($upload){
$nama_file = $_FILES['upload']['name'];
$ukuran_file = $_FILES['upload']['size'];
$tipe_file = $_FILES['upload']['type'];
$tmp_file = $_FILES['upload']['tmp_name'];

$nama_acak = round(microtime(true)) . '.' . end($nama_file);
$nama_baru = $nama_acak.$username.'.'.$nama_file;
$path = "images/".$nama_baru;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 5000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 5MB
    // Jika ukuran file kurang dari sama dengan 5MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $cek = mysqli_query($conn, "UPDATE user SET upload='$nama_baru' WHERE username='$username'");
     // Eksekusi/ Jalankan query dari variabel $query
      
     // if($cek){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
      //  header("location: biodata.php#sukses"); // Redirectke halaman index.php
       // exit;
     // }else{
        // Jika Gagal, Lakukan :
       // header("location: biodata.php#erdatabase");
       // exit;
     // }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      header("location: biodata.php#gagal");
      exit;
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    header("location: biodata.php#ukuran");
    exit;
  }
  }else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  header("location: biodata.php#jenis");
  exit;
  }
}

if($hpd){
  $nama_file = $_FILES['hpd']['name'];
  $ukuran_file = $_FILES['hpd']['size'];
  $tipe_file = $_FILES['hpd']['type'];
  $tmp_file = $_FILES['hpd']['tmp_name'];
  
  $nama_acak = round(microtime(true)) . '.' . end($nama_file);
  $nama_baru = $nama_acak.$username.'.'.$nama_file;
  $path = "hpd/".$nama_baru;
  if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file <= 5000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 5MB
      // Jika ukuran file kurang dari sama dengan 5MB, lakukan :
      // Proses upload
      if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
        // Jika gambar berhasil diupload, Lakukan :  
        // Proses simpan ke Database
        $cek = mysqli_query($conn, "UPDATE user SET hpd='$nama_baru' WHERE username='$username'");
       // Eksekusi/ Jalankan query dari variabel $query
        
        if($cek){ // Cek jika proses simpan ke database sukses atau tidak
          // Jika Sukses, Lakukan :
          header("location: biodata.php#sukses"); // Redirectke halaman index.php
          exit;
        }else{
          // Jika Gagal, Lakukan :
          header("location: biodata.php#erdatabase");
          exit;
        }
      }else{
        // Jika gambar gagal diupload, Lakukan :
        header("location: biodata.php#gagal");
        exit;
      }
    }else{
      // Jika ukuran file lebih dari 1MB, lakukan :
      header("location: biodata.php#ukuran");
      exit;
    }
  }else{
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    header("location: biodata.php#jenis");
    exit;
  }
}else{
  header("location: biodata.php#sukses");
  exit;
}

?>