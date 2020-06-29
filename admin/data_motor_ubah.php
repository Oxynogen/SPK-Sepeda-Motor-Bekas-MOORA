<?php include_once 'atribut/head.php'; ?>

<?php
$id_motor     = $_GET['id_motor'];
$sql        = "SELECT * FROM data_motor WHERE id_motor= '$id_motor'";
$query      = mysqli_query($konek, $sql);
$row        = mysqli_fetch_array($query);
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
              <h5 class="m-0 font-weight-bold text-info"> <b> Ubah Data Alat Mining </b></h5>
            </div>
            <div class="card-body">
              <form class="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">ID</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="id_motor" value="<?php echo $row['id_motor']; ?>"
                      readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama Sepeda Motor</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="motor" value="<?php echo $row['motor']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Harga (Rp)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="harga" value="<?php echo $row['harga']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Kondisi Motor</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <select id="kondisi" name="kondisi" class="form-control" value="<?php echo $row['kondisi']; ?>"  required>
                    <option value="Baik">Baik</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Buruk">Buruk</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Tahun Motor</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="tahun" value="<?php echo $row['tahun']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Jarak Tempuh Motor (Km)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input class="form-control" type="text" name="jarak" value="<?php echo $row['jarak']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-12 col-sm-12 col-xs-12">Kapasitas Mesin Motor (cc)</label>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <select id="kondisi" name="mesin" class="form-control" value="<?php echo $row['mesin']; ?>" required>
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
                    <input type="file" class="form-control-file" name="foto_lama" >
                   </div>
                 </div>
                <!-- Button -->
                <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
                <a href="data_alat_mining.php">
                  <button type="button" name="button" class="btn btn-danger">Batal</button>
                </a>
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

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>

<?php
//proses Input
if (isset($_POST['simpan'])) {
  $id_motor    = $_POST['id_motor'];
  $motor = $_POST['motor'];
  $harga      = $_POST['harga'];
  $kondisi  = $_POST['kondisi'];
  $tahun    = $_POST['tahun'];
  $jarak = $_POST['jarak'];
  $mesin = $_POST['mesin'];

  $foto                   = $_FILES['foto']['name'];
  $ekstensi_diperbolehkan = array('png','jpg');
  $x                      = explode('.', $foto);
  $ekstensi               = strtolower(end($x));
  $file                   = $_FILES['foto']['tmp_name'];

  if (in_array($ekstensi, $ekstensi_diperbolehkan,) ===true) {
                unlink("images/", $foto);
                move_uploaded_file($file,'images/'.$foto);
  }



  $query = "UPDATE data_motor SET motor = '$motor', harga = '$harga', kondisi = '$kondisi', tahun = '$tahun', jarak = '$jarak', mesin ='$mesin', foto= '$foto' WHERE id_motor = '$id_motor'";
  $simpan = $konek->query($query);
  if ($simpan === true) {
    echo "<script>alert('Data Berhasil Di Ubah') </script>";
    echo "<script>window.location.href = \"data_motor.php\" </script>";
  }
  else {
    echo "<script>alert('Data Gagal Di Ubah') </script>";
    echo "<script>window.location.href = \"data_motor.php\" </script>";
  }
}
 ?>