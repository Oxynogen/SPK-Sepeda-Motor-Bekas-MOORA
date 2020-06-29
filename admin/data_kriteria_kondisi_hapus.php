<?php
session_start();
include_once '../db/koneksi.php';

$id_kondisi  = $_GET['id_kondisi'];
$sql           = "DELETE FROM kriteriakondisi WHERE id_kondisi = '$id_kondisi' ";
$query         = mysqli_query($konek, $sql);
if ($query) {
  echo "<script>alert('Data Kriteria Berhasil Di Hapus') </script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
} else {
  echo "<script>alert ('Data Kriteria Belum Terhapus')</script>";
  echo "<script>window.location.href = \"data_kriteria.php\" </script>";
}
 ?>
