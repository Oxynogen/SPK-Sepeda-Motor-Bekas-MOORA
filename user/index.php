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
          <a href="index.php">
          <div class="card shadow mb-4">
           <div class="card-body">
            <div class="row">
             <div class="col-lg-6 col-xl-6">
              <i class="fa fa-home">
               <h5 class=" mt-2 font-weight-bold text-dark"> <b> Dashboard</b>
                <h6 class="mt-2 text-dark">Halaman Awal Website</h6></h5></i>
                </div>
               </div>
              </div>
             <div class="card-body">
            </div>
           </div>
           </a>
          </div>
            <div class="col-xl-6 col-lg-6">
              <a href="data_motor.php">
             <div class="card shadow mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <i class="fa fa-table">
                    <h5 class="mt-2 font-weight-bold text-dark"> <b> Data Sepeda Motor Bekas  </b></h5>
                    <h6 class="mt-2 text-dark">Sebuah Tabel Berisi data Sepeda Motor Bekas  </h6></i>
                   </div>
                  </div>
                 </div>
                <div class="card-body">
               </div>
              </div>
              </a>
             </div>
            <div class="col-xl-6 col-lg-6">
              <a href="data_kriteria.php">
             <div class="card shadow mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <i class="fa fa-cog">
                    <h5 class=" mt-2 font-weight-bold text-dark"> <b> Pengaturan Nilai Bobot </b></h5>
                    <h6 class="mt-2 text-dark">Tempat Mengganti Nilai Bobot/Nilai Kepentingan</h6></i>
                   </div>
                  </div>
                 </div>
                <div class="card-body">
               </div>
              </div>
              </a>
             </div>
            <div class="col-xl-6 col-lg-6">
              <a href="metode_proses.php">
             <div class="card shadow mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <i class="fa fa-cogs">
                    <h5 class=" mt-2 font-weight-bold text-dark"> <b> Proses Perhitungan MOORA </b></h5>
                    <h6 class="mt-2 text-dark">Proses Pehitungan Daftar Rekomendasi Sepeda Motor Bekas</h6></i>
                   </div>
                  </div>
                 </div>
                <div class="card-body">
               </div>
              </div>
              </a>
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