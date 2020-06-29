<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
<li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="data_motor.php">
      <i class="fa fa-table"></i>
      <span>Data Sepeda Motor Bekas </span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="data_kriteria.php">
      <i class="fa fa-book"></i>
      <span>Pengaturan Perubahan Bobot Kriteria</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="metode_proses.php">
      <i class="fa fa-cog"></i>
      <span>Proses Moora</span></a>
  </li>
</div>

<div id="main">

</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "20%";
  document.getElementById("mySidebar").style.width = "20%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
</ul>
</body>
</html>
