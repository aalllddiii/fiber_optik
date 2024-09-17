<?php

 include "../../koneksi.php";

  $getid = $_GET['npm'];

  $deletedata = mysqli_query($con,"DELETE FROM `data_aspirasi_mhs` WHERE  id='$getid' ");
  if ($deletedata){
      echo "Data berhasil di hapus";
  }else{
      echo "Data gagal dihapus";
  }
?>