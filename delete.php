<?php
include_once("koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM data WHERE id=$id");

header("Location: admin/index.php");
exit;
