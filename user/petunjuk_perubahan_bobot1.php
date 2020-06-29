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
          <div class="col-xl-12 col-lg-6">
            <div class="card shadow mb-12">
              <div class="card-header">
                <div class="col-xl-12">
                  <h5 class="text-center font-weight-bold text-info"> <b> Petunjuk Merubah Bobot Kriteria </b></h5>
                </div>
              </div>
              <div class="bg-secondary">
              <img class="rounded mx-auto d-block w-50" src="images/edit_bobot.png">
              

                </div>
                <p></p>
                <p class="text-center h3">Perubahan Nilai Bobot</p>
                <p class="text-center h5">Anda Dapat mengubahnya dari 0 sampai 25 atau lebih</p>
                <p></p>
                <div class="col">
                <a class="btn btn-danger btn-lg float-left" href="petunjuk_perubahan_bobot.php" role="button">Sebelumnya</a>
                <a class="btn btn-primary btn-lg float-right" href="petunjuk_perubahan_bobot2.php" role="button">Selanjutnya</a>
              </div>
              <p></p>
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