<div class="mosh-breadcumb-area" style="background-image: url(img/core-img/breadcumb.png);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Profil saya</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE id = '$_SESSION[siswa]'");
$siswa = $ambil->fetch_assoc();
?>

<section class="contact-area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="contact-form-area">
                    <div class="table-responsive table-hover small">
                        <table class="table" width="100%" cellspacing="0">
                            <tr>
                                <th>NIS</th>
                                <td><?= $siswa['nis'] ?></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td><?= $siswa['nama'] ?></td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td><?= $siswa['kelas'] ?></td>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <td><?= $siswa['jurusan'] ?></td>
                            </tr>
                            <tr>
                                <th>Jenis kelamin</th>
                                <td><?= $siswa['jk'] ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><?= $siswa['alamat'] ?></td>
                            </tr>
                            <tr>
                                <th>No.Telpon</th>
                                <td><?= $siswa['telpon'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>