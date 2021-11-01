<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Tabungan siswa</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<?php if($title == 'Beranda | Tabungan Siswa Berbasis WEB'): ?>
<li class="nav-item active">
<?php else: ?>
<li class="nav-item">
<?php endif ?>
  <a class="nav-link pb-0" href="m?page=beranda">
    <i class="fas fa-fw fa-home"></i>
    <span>Beranda</span></a>
</li>

<?php
$ambil = $koneksi->query("SELECT * FROM tb_siswa");
$siswa = $ambil->fetch_assoc();
if(isset($siswa['id'])):
?>

<?php if($title == 'Daftar siswa | Tabungan Siswa Berbasis WEB'): ?>
<li class="nav-item active">
<?php else: ?>
<li class="nav-item">
<?php endif ?>
  <a class="nav-link pb-0" href="m?page=daftar-siswa">
    <i class="fas fa-fw fa-user"></i>
    <span>Daftar siswa</span></a>
</li>
<?php endif ?>

<?php if($title == 'Tambah siswa | Tabungan Siswa Berbasis WEB'): ?>
<li class="nav-item active">
<?php else: ?>
<li class="nav-item">
<?php endif ?>
  <a class="nav-link pb-0" href="m?page=tambah-siswa">
    <i class="fas fa-fw fa-user-plus"></i>
    <span>Tambah siswa</span></a>
</li>

<?php if(isset($siswa['id'])): ?>
<?php if($title == 'Transaksi | Tabungan Siswa Berbasis WEB'): ?>
<li class="nav-item active">
<?php else: ?>
<li class="nav-item">
<?php endif ?>
  <a class="nav-link pb-0" href="m?page=transaksi">
    <i class="fas fa-fw fa-database"></i>
    <span>Transaksi</span></a>
</li>
<?php endif ?>

<!-- Divider -->
<!-- <hr class="sidebar-divider mt-3"> -->

<!-- Nav Item - Keluar -->
<li class="nav-item">
  <a class="nav-link" href="" data-toggle="modal" data-target="#logoutModal">
    <i class="fas fa-fw fa-sign-out-alt"></i>
    <span>Keluar</span></a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->