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
                    <h5 class="mt-2 font-weight-bold text-info"> <b> Data Motor </b></h5>
                  </div>
                  <div class="col-lg-6 col-xl-6" style="text-align: right;">
                    <a class="btn btn-info" href="data_motor_tambah.php">Tambah Data Motor</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead align="center">
                    <th>No</th>
                    <th>Nama Motor</th>
                    <th>Harga (Rp)</th>
                    <th>Kondisi Motor</th>
                    <th>Tahun</th>
                    <th>Jarak Tempuh (Km)</th>
                    <th>Kapasitas Mesin (cc)</th>
                    <th>Foto Motor</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    <?php
                      $query  = "SELECT * FROM data_motor";
                      $result = $konek->query($query);
                      while ($row=$result->fetch_array(MYSQLI_ASSOC)) { ?>
                      <tr>
                        <td align="center"><?php echo $row['id_motor']; ?></td>
                        <td align="center"><?php echo $row['motor']; ?></td>
                        <td align="center"><?php echo number_format($row['harga']); ?></td>
                        <td align="center"><?php echo $row['kondisi']; ?></td>
                        <td align="center"><?php echo $row['tahun']; ?></td>
                        <td align="center"><?php echo number_format($row['jarak']); ?></td>
                        <td align="center"><?php echo $row['mesin']; ?></td>
                        <td align="center"><img src="images/<?php echo $row['foto']; ?>" style="width: 50px; height: 50px;"></td>
                        <td align="center">
                          <a class="btn btn-info btn-icon-split"
                            href="data_motor_ubah.php?id_motor=<?php echo $row['id_motor'] ?>">
                            <span class="icon text-white">
                              <i class="fas fa-edit"></i>
                            </span>
                          </a>
                          <a class="btn btn-danger btn-icon-split"
                            href="data_motor_hapus.php?id_motor=<?php echo $row['id_motor'] ?>">
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