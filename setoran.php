<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE id = '$id'");
$siswa = $ambil->fetch_assoc();

$ambil = $koneksi->query("SELECT * FROM saldo WHERE id_siswa = '$id'");
$saldo = $ambil->fetch_assoc();
?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Setoran: <?= $siswa['nama'] ?></h1>
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
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <div class="form-grup mb-4">
                    <label>Jumlah setoran</label>
                    <input type="text" name="setoran" required class="form-control" autofocus id="setoran" onkeydown="return numbersonly(this, event);" onkeyup="javascript:input_rupiah(this);">
                </div>
                <a href="m?page=transaksi" class="btn btn-secondary btn-sm">Batal</a>
                <button type="submit" class="btn btn-success" name="setor">Setor</button>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['setor'])){
    $tanggal = date('d/m/Y');
    $str = $_POST['setoran'];
    $setoran = str_replace(".", "", $str);
    $saldotambah = $saldo['saldo'] + $setoran;
    $koneksi->query("INSERT INTO transaksi(id_siswa,tanggal,setoran,penarikan,saldo) VALUES('$id','$tanggal','$setoran','0','$saldotambah')");
    if(isset($saldo['id_siswa'])){
        $koneksi->query("UPDATE saldo SET saldo = '$saldotambah' WHERE id_siswa = '$id'");
    } else {
        $koneksi->query("INSERT INTO saldo(id_siswa,saldo) VALUES('$id','$setoran')");
    }
    echo "<script>location='m?page=history&id=$id';</script>";
}
?>