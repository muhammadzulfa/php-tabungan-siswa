<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Daftar siswa</h1>
    <div class="row">
        <div class="col-lg">
            <?php include 'pesan.php'; ?>
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
                                    ?>
                                    <tr>
                                        <th><?= $nomor; ?></th>
                                        <td><?= $siswa["nis"]; ?></td> 
                                        <td><?= $siswa['nama'] ?></td>
                                        <td><?= $siswa['kelas'] ?></td>
                                        <td><?= $siswa['jurusan'] ?></td>
                                        <td>
                                            <a href="m?page=detail-siswa&id=<?= $siswa['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                                            <a href="m?page=edit-siswa&id=<?= $siswa['id'] ?>" class="btn btn-success btn-sm"><i class="fa fa-pen"></i></a>
                                            <a onclick="return confirm('Anda yakin ingin menghapus data siswa ini')" href="hapus-siswa.php?id=<?= $siswa['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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