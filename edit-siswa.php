<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE id = '$id'");
$siswa = $ambil->fetch_assoc();
?>

<div class="container-fluid"> 
    <h1 class="h3 mb-2 text-gray-800">Edit siswa</h1>
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <div class="form-grup mb-2">
                    <label>NIS</label>
                    <input type="text" name="nis" value="<?= $siswa['nis'] ?>" required class="form-control">
                </div>
                <div class="form-grup mb-2">
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?= $siswa['nama'] ?>" required class="form-control">
                </div>
                <div class="form-grup mb-2">
                    <label>Kelas</label>
                    <input type="text" name="kelas" value="<?= $siswa['kelas'] ?>" required class="form-control">
                </div>
                <div class="form-grup mb-2">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" value="<?= $siswa['jurusan'] ?>" required class="form-control">
                </div>
                <div class="form-grup mb-2">
                    <label>Jenis kelamin</label>
                    <select name="jk" id="jk" class="custom-select">
                        <?php if($siswa['jk'] == 'Laki-laki'): ?>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                        <?php else: ?>
                        <option>Perempuan</option>
                        <option>Laki-laki</option>
                        <?php endif ?>
                    </select>
                </div>
                <div class="form-grup mb-2">
                    <label>Alamat</label>
                    <textarea name="alamat" required cols="30" rows="5" class="form-control"><?= $siswa['alamat'] ?></textarea>
                </div>
                <div class="form-grup mb-4">
                    <label>No.Telpon</label>
                    <input type="text" name="telpon" value="<?= $siswa['telpon'] ?>" required class="form-control">
                </div>
                <a href="m?page=daftar-siswa" class="btn btn-secondary btn-sm">Batal</a>
                <button type="submit" class="btn btn-primary btn-sm" name="edit">Edit siswa</button>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['edit'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];

    $koneksi->query("UPDATE tb_siswa SET nis = '$nis', nama = '$nama', kelas = '$kelas', jurusan = '$jurusan', jk = '$jk', alamat = '$alamat', telpon = '$telpon' WHERE id = '$id'");
    echo "<script>location='m?page=daftar-siswa&sukses=edit-siswa';</script>";
}
?>