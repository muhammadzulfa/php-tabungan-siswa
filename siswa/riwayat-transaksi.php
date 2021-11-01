<div class="mosh-breadcumb-area" style="background-image: url(img/core-img/breadcumb.png);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="bradcumbContent">
                    <h2>Riwayat transaksi</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$ambil = $koneksi->query("SELECT * FROM saldo WHERE id_siswa = '$_SESSION[siswa]'");
$saldo = $ambil->fetch_assoc();
?>
<div class="container">
    <span class="btn mosh-btn">saldo saya rp <?= number_format($saldo['saldo'],2,",",".") ?></span>
</div>

<section class="contact-area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="contact-form-area">
                    <div class="table-responsive table-hover small">
                        <table class="table" width="100%" cellspacing="0">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Setoran</th>
                                <th>Penarikan</th>
                                <th>Saldo</th>
                            </tr>
                            <?php
                            $nomor = 1;
                            $ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_siswa = '$_SESSION[siswa]'");
                            foreach($ambil as $transaksi):
                            ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $transaksi['tanggal'] ?></td>
                                <td><?= "Rp ".number_format($transaksi['setoran'],02,",",".") ?></td>
                                <td><?= "Rp ".number_format($transaksi['penarikan'],02,",",".") ?></td>
                                <td><?= "Rp ".number_format($transaksi['saldo'],02,",",".") ?></td>
                            </tr>
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
</section>