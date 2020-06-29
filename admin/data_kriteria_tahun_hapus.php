<?php
session_start();
include_once '../db/koneksi.php';

$id_tahun   = $_GET['id_tahun'];
$sql          = "DELETE FROM kriteriatahun WHERE id_tahun = '$id_tahun' ";
$query        = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
