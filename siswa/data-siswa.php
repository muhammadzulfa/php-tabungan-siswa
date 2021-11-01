<div class="mosh-breadcumb-area" style="background-image: url(img/core-img/breadcumb.png);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Data siswa</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="">
                    <div class="">
                        <div class="">
                            <div class="table-responsive table-hover small">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Jurusan</th>
                                            <th>Saldo</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $nomor = 1;
                                    $ambil = $koneksi->query("SELECT * FROM tb_siswa");
                                    foreach($ambil as $siswa):
                                        $ambil = $koneksi->query("SELECT * FROM saldo WHERE id_siswa = '$siswa[id]'");
                                        $saldo = $ambil->fetch_assoc();
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $nomor ?></td>
                                            <td><?= $siswa['nis'] ?></td>
                                            <td><?= $siswa['nama'] ?></td>
                                            <td><?= $siswa['kelas'] ?></td>
                                            <td><?= $siswa['jurusan'] ?></td>
                                            <td>
                                                <span class="btn mosh-btn">Rp <?= number_format($saldo['saldo'],2,".",".") ?></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                    $nomor++;
                                    endforeach
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>