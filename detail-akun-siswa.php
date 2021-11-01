<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE id = '$id'");
$siswa = $ambil->fetch_assoc();

$ambil = $koneksi->query("SELECT * FROM tb_login WHERE id_siswa = '$id'");
$login = $ambil->fetch_assoc();
?>

<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Hasil registrasi akun</h1>
	<div class="card mb-3 shadow" style="max-width: 550px;">
        <div class="row no-gutters align-items-center">
            <div class="col-md-4">
            <img src="media/default.svg" width="85%" height="85%">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <div class="h3 mb-2 card-title text-gray-800"><?= $siswa['nama']; ?></div>
                <i class="card-text mb-1">Nama pengguna: <?= $login['nama_pengguna'] ?></i> <br>
                <i class="card-text mb-1">Password: <?= $login['password'] ?></i>
            </div>
            </div>
        </div>
    </div>
	
</div>