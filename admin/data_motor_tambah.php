<?php include_once 'atribut/head.php'; ?>

<?php
$sql    = "SELECT MAX(id_motor) AS maxid FROM data_motor";
$carkod = mysqli_query($konek, $sql);
$datkod = mysqli_fetch_array($carkod, MYSQLI_ASSOC);
if ($datkod) {
  $nilkod  = $datkod['maxid'];
  $kode    = $nilkod + 1;
  $kodeoto = $kode;
} else {
  $kodeoto = "1";
}
?>

<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: siderbar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: siderbar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">

      <?php include_once 'atribut/navbar.php'; ?>

      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- <div class="row"> -->
        <div class="col-xl-12  col-lg-8">
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h5 class="m-0 font-weight-bold text-info"> <b> Tambah Data Sepeda Motor Bekas </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post" name="converter" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">ID</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_motor" value="<?= $kodeoto ?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Motor</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="motor" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Harga (Rp)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="harga" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12" for="kondisi">Kondisi</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <select id="kondisi" name="kondisi" class="form-control"  required>
                    <option value="Baik">Baik</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Buruk">Buruk</option>
                  </select>
                </div>
              </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Tahun Motor</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="tahun" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Jarak Tempuh Motor</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="number" name="jarak" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Mesin Motor</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <select class="form-control" name="mesin" required>
                      <option value="110">110</option>
                      <option value="125">125</option>
                      <option value="150">150</option>
                      <option value="250">250</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                   <label class="control-label col-md-12 col-sm-12 col-xs-12" for="">Foto Motor</label>
                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <input type="file" class="form-control-file" name="foto" >
                   </div>
                 </div>
                
                <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                <a href="data_motor.php" class="btn btn-danger">Batal</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Page Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; 2019 Marcelino Derry Utomo</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php include_once 'atribut/foot.php'; ?>

</body>

</html>

<?php
if (isset($_POST['simpan'])) {

  $id_motor   = $_POST['id_motor'];
  $motor      = $_POST['motor'];
  $harga      = $_POST['harga'];
  $kondisi    = $_POST['kondisi'];
  $tahun      = $_POST['tahun'];
  $jarak      = $_POST['jarak'];
  $mesin      = $_POST['mesin'];
  
  $foto                   = $_FILES['foto']['name'];
  $ekstensi_diperbolehkan = array('png','jpg');
  $x                      = explode('.', $foto);
  $ekstensi               = strtolower(end($x));
  $file                   = $_FILES['foto']['tmp_name'];

  if (in_array($ekstensi, $ekstensi_diperbolehkan,) ===true) {
                move_uploaded_file($file,'images/'.$foto);
  }


  $sql_alat   = "SELECT * FROM data_motor WHERE motor = '$motor'";
  $query_alat = $konek->query($sql_alat);
  $cek_alat   = $query_alat->num_rows;

  if ($cek_alat > 0) {
    echo "<script>alert('Data Sudah Ada!') </script>";
    echo "<script>window.location.href = \"data_motor_tambah.php\" </script>";
  } else {
    
    $query  = "INSERT INTO data_motor (id_motor, motor, harga, kondisi, tahun, jarak, mesin, foto) VALUES ('$id_motor', '$motor','$harga','$kondisi','$tahun','$jarak', '$mesin', '$foto')";
    $tambah = $konek->query($query);
    if ($tambah == true) {
      echo "<script>alert('Data Berhasil Di Tambah') </script>";
      echo "<script>window.location.href = \"data_motor.php\" </script>";
    }
    else {
      echo "<script>alert('Data Gagal Di Tambah') </script>";
      echo "<script>window.location.href = \"data_motor.php\" </script>";
    } 
  }
}
?>