<?php
session_start();
include_once '../db/koneksi.php';

$id_mesin   = $_GET['id_mesin'];
$sql        = "DELETE FROM kriteriamesin WHERE id_mesin = '$id_mesin' ";
$query      = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
