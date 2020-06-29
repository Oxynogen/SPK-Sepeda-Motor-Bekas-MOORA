<?php
session_start();
include_once '../db/koneksi.php';

$id_motor   = $_GET['id_motor'];
$sql       = "DELETE FROM data_motor WHERE id_motor = '$id_motor' ";
$query     = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_motor.php\" </script>";
} else {
  echo "<script>alert ('Data Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_motor.php\" </script>";
}
 ?>
