<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE id = '$id'");
$siswa = $ambil->fetch_assoc();

$ambil = $koneksi->query("SELECT * FROM saldo WHERE id_siswa = '$id'");
$saldo = $ambil->fetch_assoc();
?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Penarikan: <?= $siswa['nama'] ?></h1>
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
    <div class="card mb-4">
        <div class="card-body">
            <form action="" method="post">
                <div class="form-grup mb-4">
                    <label>Jumlah penarikan</label>
                    <input type="text" name="penarikan" required class="form-control" autofocus id="penarikan" onkeydown="return numbersonly(this, event);" onkeyup="javascript:input_rupiah(this);">
                </div>
                <a href="m?page=transaksi" class="btn btn-secondary btn-sm">Batal</a>
                <button type="submit" class="btn btn-danger" name="tarik">Tarik</button>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['tarik'])){
    $tanggal = date('d/m/Y');
    $pnrk = $_POST['penarikan'];
    $penarikan = str_replace(".", "", $pnrk);
    $saldokurang = $saldo['saldo'] - $penarikan;
    if(isset($saldo['id_siswa'])){
        $koneksi->query("INSERT INTO transaksi(id_siswa,tanggal,setoran,penarikan,saldo) VALUES('$id','$tanggal','0','$penarikan','$saldokurang')");
        $koneksi->query("UPDATE saldo SET saldo = '$saldokurang' WHERE id_siswa = '$id'");
    } else {
        echo "<div class='container'><div class='alert alert-danger'><button class='close' data-dismiss='alert'>×</button>Maaf, siswa tidak mempunyai saldo</div></div>";
        return false;
    }
    echo "<script>location='m?page=history&id=$id';</script>";
}
?>