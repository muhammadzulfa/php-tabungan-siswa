<?php
$siswa = mysqli_query($koneksi,"SELECT * FROM tb_siswa");
$admin = mysqli_query($koneksi,"SELECT * FROM tb_login WHERE level = 'admin'");
?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Beranda</h1>
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah siswa</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= mysqli_num_rows($siswa) ?> siswa</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= mysqli_num_rows($admin) ?> admin</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>