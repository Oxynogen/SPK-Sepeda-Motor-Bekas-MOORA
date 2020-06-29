<?php include_once 'atribut/head.php'; ?>

<!-- Page Wrapper -->
<div id="wrapper">
  <!-- begin:: siderbar -->
  <?php include_once 'atribut/sidebar.php'; ?>
  <!-- end:: siderbar -->

  <div id="content-wrapper" class="d-flex flex-column">
    <!-- begin:: main content -->
    <div id="content">
      
      <?php include_once 'atribut/navbar.php'; ?>

      <!-- begin:: content -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Jenis Dan Bobot Kriteria </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-info" href="petunjuk_perubahan_bobot.php">Petunjuk Penggunaan Perubahan Nilai Bobot Kriteria</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <!-- <th>ID</th> -->
                    <th> Kode </th>
                    <th> Kriteria </th>
                    <th> Type </th>
                    <th> Bobot </th>
                    <th> Ubah bobot </th>
                  </thead>
                  <tbody>
                    <?php
                      $query="SELECT * FROM moo_kriteria";
                      $result=$konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                    <tr>
                      <td align="center"><?php echo $row['kode']; ?></td>
                      <td align="center"><?php echo $row['kriteria']; ?></td>
                      <td align="center"><?php echo $row['type']; ?></td>
                      <td align="center"><?php echo $row['bobot']; ?></td>
                      <td align="center">
                      <a class="btn btn-info btn-sm" href="data_kriteria_bobot_ubah.php?id_kriteria=<?php echo $row['id_kriteria'] ?>">
                        <span class="icon text-white">
                          <i class="fas fa-edit"></i>
                        </span>
                      </a>
                      </td>
                    </tr>
                    <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      <!-- end:: content -->
<!-- begin:: content -->



      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Normalisasi Nilai Bobot </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <!-- <th>ID</th> -->
                   
                      <th></th>
                      <th>K1</th>
                      <th>K2</th>
                      <th>K3</th>
                      <th>K4</th>
                      <th>K5</th>
                      <th>Jumlah</th>
                  </thead>
                  <tbody>
                    <th>Nilai Bobot</th>
<!-- membuat array kriteria -->
<?php
$sqlnormalisasi = "SELECT * FROM moo_kriteria";
$result = $konek->query($sqlnormalisasi);

$kriteria=array();
while ($sqlnormalisasi = $result->fetch_assoc()) {
    $kriteria[$sqlnormalisasi['id_kriteria']]=array($sqlnormalisasi['kode'],$sqlnormalisasi['bobot']);
    }
?> 
<!-- end membuat array kriteria -->
<!-- menampilkan nilai kriteria dari array yang telah dibuat -->
<?php 
$bobot=array();
foreach($kriteria as $k=>$vk ){
    $bobot[$k]=$vk[1];
    echo  "<th>".$bobot[$k]."</th>";
    $jml_bobot=array_sum($bobot);
}
?>
<th><?php echo $jml_bobot; ?></th>
    </tr>
<tr>
  <th>Hasil Normalisasi</th>
<?php 
$w=array();  
foreach($bobot as $k=>$b){
    $w[$k]=$b/$jml_bobot;
echo  "<th>".round($w[$k], 3)."</th>";
}
$jml_normal_bobot=array_sum($w);
?>
<th><?php echo $jml_normal_bobot; ?></th>
    </tr>
<!-- menampilkan nilai kriteria dari array yang telah dibuat -->



                  </tbody>
                </table>
              </div>
            </div>
          </div>
      <!-- end:: content -->


    </div>
    <!-- end:: main content -->
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