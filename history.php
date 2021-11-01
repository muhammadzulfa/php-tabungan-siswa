<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE id = '$id'");
$siswa = $ambil->fetch_assoc();

$ambil = $koneksi->query("SELECT * FROM saldo WHERE id_siswa = '$id'");
$saldo = $ambil->fetch_assoc();
?>

<div class="container-fluid">
    <h1 class="h4 mb-2 text-gray-800">History</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive table-hover">
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
                        <th>Saldo</th>
                        <td class="text-success"><?= "Rp ".number_format($saldo['saldo'],2,".",".") ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg">
            <?php include 'pesan.php'; ?>
            <form action="" method="post">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive table-hover">
                            <table class="table" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Setoran</th>
                                        <th>Penarikan</th>
                                        <th>Saldo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    $ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_siswa = '$id'");
                                    foreach ($ambil as $transaksi):
                                    ?>
                                    <tr>
                                        <th><?= $nomor; ?></th>
                                        <td><?= $transaksi["tanggal"]; ?></td> 
                                        <td><?= "Rp ".number_format($transaksi['setoran'],2,".",".") ?></td>
                                        <td><?= "Rp ".number_format($transaksi['penarikan'],2,".",".") ?></td>
                                        <td><?= "Rp ".number_format($transaksi['saldo'],2,".",".") ?></td>
                                    </tr>
                                    <?php $nomor++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
            <a href="m?page=transaksi" class="btn btn-secondary btn-sm">Kembali</a>
            <?php
            $ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_siswa = '$id'");
            $transaksi = $ambil->fetch_assoc();

            if(isset($transaksi['id_siswa'])):
            ?>
            <a href="reset-history?id=<?= $id ?>" onclick="return confirm('Semua history akan dihapus termasuk saldo')" class="btn btn-danger"><i class="fa fa-history"></i> Reset history</a>
            <?php endif ?>
        </div>
    </div>
</div>