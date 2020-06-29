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
          <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Proses Moora </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <form method="post">
                      <input type="submit" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"> Cari Alat Mining </button>
                   <!--   <input type="submit" name="proses" class="btn btn-info" value="Proses Sepeda Motor Bekas" > -->
                    </form>
                  </div>
                </div>
              </div>

              <?php include_once 'metode_hasil.php'; ?>

            </div>
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

<!-- begin:: modal pencarian -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Cari Alat Mining </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- begin:: form pencarian -->
        <form method="post">
          <div>
            <div class="form-group">
              <select id="kondisi" name="inpkondisi" class="form-control"  required>
              <option value="Baik">Baik</option>
              <option value="Sedang">Sedang</option>
              <option value="Buruk">Buruk</option>
              </select>
            </div>
          </div>
          <div>
            <div class="form-group">
              <input type="number" class="form-control" name="inptahun" placeholder="Tahun Motor">
            </div>
          </div>
          <div>
            <div class="form-group">
             <select class="form-control" name="inpmesin" required>
             <option value="110">110</option>
             <option value="125">125</option>
             <option value="150">150</option>
             <option value="250">250</option>
             </select>
            </div>
          </div>
          <div>
            <div class="form-group">
              <input type="number" class="form-control" name="inpharga" placeholder="Harga">
            </div>
          </div>
          <div>
            <div class="form-group">
              <input type="number" class="form-control" name="inpjarak" placeholder="Jarak Tempuh Motor">
            </div>
          </div>

          <input type="submit" name="proses" value="Proses" class="btn btn-success">
        </form>
        <!-- end:: form pencarian -->

      </div>
    </div>
  </div>
</div>
<!-- end:: modal pencarian -->



<?php include_once 'atribut/foot.php'; ?>

<?php
if (isset($_POST['proses'])) { 
  $kondisi = $_POST['inpkondisi'];
  $tahun   = $_POST['inptahun'];
  $mesin   = $_POST['inpmesin'];
  $harga   = $_POST['inpharga'];
  $jarak   = $_POST['inpjarak'];

  // $sql    = "SELECT * FROM data_motor ORDER BY ABS(kondisi - '$kondisi') AND ABS(tahun - '$tahun') AND ABS(mesin - '$mesin') AND ABS(harga - '$harga') AND ABS(jarak - '$jarak') LIMIT 5";
  $sql = "SELECT *  FROM data_motor WHERE ( kondisi = '$kondisi' AND tahun = '$tahun' ) OR mesin = '$mesin' AND ( harga <= '$harga' AND jarak <= '$jarak' ) LIMIT 5";
  $result = $konek->query($sql);
  $no     = 1;

  $data_post = [];
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $data_post[] = array(
      'id_alternatif' => $row['id_motor'],
      'id_motor'      => $row['id_motor'],
      'alternatif'    => $row['motor'],
      'kondisi'       => $row['kondisi'],
      'tahun'         => $row['tahun'],
      'mesin'         => $row['mesin'],
      'harga'         => $row['harga'],
      'jarak'         => $row['jarak']
    );                  
  }

  $query_k = $konek->query('SELECT * FROM moo_kriteria');
  $id_kriteria = [];
  while ($row_k = $query_k->fetch_array(MYSQLI_ASSOC)) {
    $id_kriteria[] = $row_k['id_kriteria'];
  }

  foreach ($data_post as $key => $value) {

    if ($value['kondisi'] == "Buruk") {
      $kondisi_hasil = 1;
    } else if ($value['kondisi'] == "Sedang") {
      $kondisi_hasil = 2;
    } else if ($value['kondisi'] == "Baik") {
      $kondisi_hasil = 3;
    } else {
      $kondisi_hasil = 0;
    }

    if ($value['tahun'] >= 2010 && $value['tahun'] <= 2012) {
      $tahun_hasil = 1;
    } else if ($value['tahun'] >= 2013 && $value['tahun'] <= 2014) {
      $tahun_hasil = 2;
    } else if ($value['tahun'] >= 2015) {
      $tahun_hasil = 3;
    } else {
      $tahun_hasil = 0;
    }

    if ($value['mesin'] <= 110) {
      $mesin_hasil = 1;
    } else if ($value['mesin'] <= 125) {
      $mesin_hasil = 2;
    } else if ($value['mesin'] <= 150) {
      $mesin_hasil = 3;
    } else if ($value['mesin'] <= 250) {
      $mesin_hasil = 4;
    } else {
      $mesin_hasil = 0;
    }

    if ($value['harga'] >= 2000000 && $value['harga'] <= 6000000) {
      $harga_hasil = 3;
    } else if ($value['harga'] >= 6000001 && $value['harga'] <= 10000000 ) {
      $harga_hasil = 2;
    } else if ($value['harga'] >= 10000001) {
      $harga_hasil = 1;
    }  else {
      $harga_hasil = 0;
    }

    if ($value['jarak'] >= 0 && $value['jarak'] <= 20000) {
      $jarak_hasil = 3;
    } else if ($value['jarak'] >= 20001 && $value['jarak'] <= 35000) {
      $jarak_hasil = 2;
    } else if ($value['jarak'] >= 35001) {
      $jarak_hasil = 1;
    } else {
      $listrik_hasil = 0;
    }

    $nilai = array(
      $kondisi_hasil,
      $tahun_hasil,
      $mesin_hasil,
      $harga_hasil,
      $jarak_hasil
    );

    $sql = "INSERT INTO moo_alternatif (id_alternatif, id_motor, alternatif, kondisi, tahun, mesin, harga, jarak) VALUES ('$value[id_alternatif]', '$value[id_motor]', '$value[alternatif]', '$value[kondisi]', '$value[tahun]', '$value[mesin]', '$value[harga]', '$value[jarak]')";
    $konek->query($sql);

    for ($i = 0; $i < count($id_kriteria); $i++) {
      $sql = "INSERT INTO moo_nilai (id_alternatif, id_kriteria, nilai) VALUES ('$value[id_alternatif]','$id_kriteria[$i]','$nilai[$i]')";
      $query = $konek->query($sql);
    }

  }

  if ($query) {
    echo "<script>alert('Berhasil !');</script>";
    echo "<script>window.location.href = \"metode_proses.php\"</script>";
  } else {
    echo "<script>alert('Gagal !');</script>";
  }               
} else if (isset($_POST['kosongkan'])) {
  
  $sql_k_moo_alternatif = "TRUNCATE TABLE moo_alternatif";
  $konek->query($sql_k_moo_alternatif);
  $sql_k_moo_nilai = "TRUNCATE TABLE moo_nilai";
  $konek->query($sql_k_moo_nilai);

  echo "<script>alert('Berhasil mengosongkan tabel!')</script>";
  echo "<script>window.location.href = \"metode_proses.php\"</script>";

}
?>