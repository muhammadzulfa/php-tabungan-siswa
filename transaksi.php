<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar siswa</h1>
    <div class="row">
        <div class="col-lg">
            <form action="" method="post">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive table-hover">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Jurusan</th>
                                        <th>Kelola</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    $ambil = $koneksi->query("SELECT * FROM tb_siswa");
                                    foreach ($ambil as $siswa):
                                        $ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_siswa = '$siswa[id]'");
                                        $transaksi = $ambil->fetch_assoc();
                                    ?>
                                    <tr>
                                        <th><?= $nomor; ?></th>
                                        <td><?= $siswa["nis"]; ?></td> 
                                        <td><?= $siswa['nama'] ?></td>
                                        <td><?= $siswa['kelas'] ?></td>
                                        <td><?= $siswa['jurusan'] ?></td>
                                        <td>
                                            <a href="m?page=setoran&id=<?= $siswa['id'] ?>" class="btn btn-success btn-sm">Setoran</a>
                                            <a href="m?page=penarikan&id=<?= $siswa['id'] ?>" class="btn btn-danger btn-sm">Penarikan</a>
                                            <?php if(isset($transaksi['id_siswa'])): ?>
                                            <a href="m?page=history&id=<?= $siswa['id'] ?>" class="btn btn-info btn-sm" title="History"><i class="fa fa-history"></i></a>
                                            <a href="cetak_pdf?id=<?= $siswa['id'] ?>" class="btn btn-warning btn-sm" title="Cetak pdf"><i class="fa fa-print"></i></a>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                    <?php $nomor++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>