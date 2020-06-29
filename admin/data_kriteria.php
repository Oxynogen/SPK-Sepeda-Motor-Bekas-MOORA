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
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Bilangan Fuzzy Tiap Kriteria </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <th> Kode </th>
                    <th> Nilai </th>
                    <th> Bilangan Fuzzy </th>
                  </thead>
                  <tbody>
                    <?php
                      $query  = "SELECT * FROM fuzzytiapkriteria";
                      $result = $konek->query($query);
                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
                      <tr>
                        <td align="center"><?php echo $row['kode']; ?></td>
                        <td align="center"><?php echo $row['nilai']; ?></td>
                        <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Jenis Dan Bobot Kriteria </b></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <th> Kode </th>
                    <th> Kriteria </th>
                    <th> Type </th>
                    <th> Bobot </th>
                    <th> Aksi </th>
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
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Nilai Untuk Kriteria Harga </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-info" href="data_kriteria_harga_tambah.php">Tambah</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <th> ID </th>
                    <th> Harga (Rp) </th>
                    <th> Bilangan Fuzzy </th>
                    <th> Nilai </th>
                    <th> Aksi </th>
                  </thead>
                  <tbody>
                    <?php
                      $query  = "SELECT * FROM kriteriaharga";
                      $result = $konek->query($query);
                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
                    <tr>
                      <td align="center"><?php echo $row['id_harga']; ?></td>
                      <td align="center"><?php echo $row['harga']; ?></td>
                      <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                      <td align="center"><?php echo $row['nilai']; ?></td>
                      <td align="center">
                        <a class="btn btn-info btn-sm" href="data_kriteria_harga_ubah.php?id_harga=<?php echo $row['id_harga'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-edit"></i>
                          </span>
                        </a>
                        <a class="btn btn-danger btn-sm" href="data_kriteria_harga_hapus.php?id_harga=<?php echo $row['id_harga'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-trash"></i>
                          </span>
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Nilai Untuk Kriteria Kondisi Motor </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-info" href="data_kriteria_kondisi_tambah.php">Tambah</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <th> ID </th>
                    <th> Kondisi Motor </th>
                    <th> Bilangan Fuzzy </th>
                    <th> Nilai </th>
                    <th> Aksi </th>
                  </thead>
                  <tbody>
                    <?php
                      $query  = "SELECT * FROM kriteriakondisi";
                      $result = $konek->query($query);
                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
                    <tr>
                      <td align="center"><?php echo $row['id_kondisi']; ?></td>
                      <td align="center"><?php echo $row['kondisi']; ?></td>
                      <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                      <td align="center"><?php echo $row['nilai']; ?></td>
                      <td align="center">
                        <a class="btn btn-info btn-sm" href="data_kriteria_kondisi_ubah.php?id_kondisi=<?php echo $row['id_kondisi'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-edit"></i>
                          </span>
                        </a>
                        <a class="btn btn-danger btn-sm" href="data_kriteria_kondisi_hapus.php?id_kondisi=<?php echo $row['id_kondisi'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-trash"></i>
                          </span>
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Nilai Untuk Kriteria Jarak Tempuh Motor </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-info" href="data_kriteria_jarak_tambah.php">Tambah</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <th> ID </th>
                    <th> Jarak Tempuh Motor (Km)</th>
                    <th> Bilangan Fuzzy </th>
                    <th> Nilai </th>
                    <th> Aksi </th>
                  </thead>
                  <tbody>
                    <?php
                      $query  = "SELECT * FROM kriteriajarak";
                      $result = $konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                          <td align="center"><?php echo $row['id_jarak']; ?></td>
                          <td align="center"><?php echo $row['jarak']; ?></td>
                          <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                          <td align="center"><?php echo $row['nilai']; ?></td>
                          <td align="center">
                            <a class="btn btn-info btn-sm" href="data_kriteria_jarak_ubah.php?id_jarak=<?php echo $row['id_jarak'] ?>">
                              <span class="icon text-white">
                                <i class="fas fa-edit"></i>
                              </span>
                            </a>
                            <a class="btn btn-danger btn-sm" href="data_kriteria_jarak_hapus.php?id_jarak=<?php echo $row['id_jarak'] ?>">
                              <span class="icon text-white">
                                <i class="fas fa-trash"></i>
                              </span>
                            </a>
                          </td>
                        </tr>
                      <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Nilai Untuk Kriteria Tahun Motor </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-info" href="data_kriteria_tahun_tambah.php">Tambah</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <th> ID </th>
                    <th> Tahun Motor </th>
                    <th> Bilangan Fuzzy </th>
                    <th> Nilai </th>
                    <th> Aksi </th>
                  </thead>
                  <tbody>
                    <?php

                      $query="SELECT * FROM kriteriatahun";
                      $result=$konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                    <tr>
                      <td align="center"><?php echo $row['id_tahun']; ?></td>
                      <td align="center"><?php echo $row['tahun']; ?></td>
                      <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                      <td align="center"><?php echo $row['nilai']; ?></td>
                      <td align="center">
                        <a class="btn btn-info btn-sm" href="data_kriteria_tahun_ubah.php?id_tahun=<?php echo $row['id_tahun'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-edit"></i>
                          </span>
                        </a>
                        <a class="btn btn-danger btn-sm" href="data_kriteria_tahun_hapus.php?id_tahun=<?php echo $row['id_tahun'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-trash"></i>
                          </span>
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Nilai Untuk Kriteria Kapasitas Mesin Motor </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-info" href="data_kriteria_mesin_tambah.php">Tambah</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" width="100%" cellspacing="0">
                  <thead align="center">
                    <th> ID </th>
                    <th> Kapasitas Mesin Motor (cc) </th>
                    <th> Bilangan Fuzzy </th>
                    <th> Nilai </th>
                    <th> Aksi </th>
                  </thead>
                  <tbody>
                    <?php

                      $query="SELECT * FROM kriteriamesin";
                      $result=$konek->query($query);

                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                    <tr>
                      <td align="center"><?php echo $row['id_mesin']; ?></td>
                      <td align="center"><?php echo $row['mesin']; ?></td>
                      <td align="center"><?php echo $row['bilanganfuzzy']; ?></td>
                      <td align="center"><?php echo $row['nilai']; ?></td>
                      <td align="center">
                        <a class="btn btn-info btn-sm" href="data_kriteria_mesin_ubah.php?id_mesin=<?php echo $row['id_mesin'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-edit"></i>
                          </span>
                        </a>
                        <a class="btn btn-danger btn-sm" href="data_kriteria_mesin_hapus.php?id_mesin=<?php echo $row['id_mesin'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-trash"></i>
                          </span>
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
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

<?php include_once 'atribut/foot.php'; ?>