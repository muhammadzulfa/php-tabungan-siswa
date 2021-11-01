<?php
$ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_siswa = '$_SESSION[siswa]'");
$transaksi = $ambil->fetch_assoc();
?>

<header class="header_area">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <div class="menu_area h-100">
                    <nav class="navbar h-100 navbar-expand-lg align-items-center">
                        <a class="navbar-brand text-white" href="">TABUNGAN SISWA</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                            <ul class="navbar-nav animated" id="nav">
                                <?php if($title == 'Beranda | Tabungan Siswa Berbasis WEB'): ?>
                                <li class="nav-item active"><a class="nav-link" href="m?page=beranda">Beranda</a></li>
                                <?php else: ?>
                                <li class="nav-item"><a class="nav-link" href="m?page=beranda">Beranda</a></li>
                                <?php endif ?>

                                <?php if($title == 'Data siswa | Tabungan Siswa Berbasis WEB'): ?>
                                <li class="nav-item active"><a class="nav-link" href="m?page=data-siswa">Data siswa</a></li>
                                <?php else: ?>
                                <li class="nav-item"><a class="nav-link" href="m?page=data-siswa">Data siswa</a></li>
                                <?php endif ?>

                                <?php if(isset($transaksi['id_siswa'])): ?>
                                <?php if($title == 'Riwayat transaksi | Tabungan Siswa Berbasis WEB'): ?>
                                <li class="nav-item active"><a class="nav-link" href="m?page=riwayat-transaksi">Riwayat transaksi</a></li>
                                <?php else: ?>
                                <li class="nav-item"><a class="nav-link" href="m?page=riwayat-transaksi">Riwayat transaksi</a></li>
                                <?php endif ?>
                                <?php endif ?>

                                <?php if($title == 'Profil saya | Tabungan Siswa Berbasis WEB'): ?>
                                <li class="nav-item active"><a class="nav-link" href="m?page=profil-saya">Profil saya</a></li>
                                <?php else: ?>
                                <li class="nav-item"><a class="nav-link" href="m?page=profil-saya">Profil saya</a></li>
                                <?php endif ?>

                                <li class="nav-item"><a class="nav-link" href="../keluar">Keluar</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>