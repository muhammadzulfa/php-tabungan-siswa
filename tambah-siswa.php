<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Tambah siswa</h1>
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <div class="form-grup mb-2">
                    <label>NIS</label>
                    <input type="text" name="nis" required class="form-control">
                </div>
                <div class="form-grup mb-2">
                    <label>Nama</label>
                    <input type="text" name="nama" required class="form-control">
                </div>
                <div class="form-grup mb-2">
                    <label>Kelas</label>
                    <input type="text" name="kelas" required class="form-control">
                </div>
                <div class="form-grup mb-2">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" required class="form-control">
                </div>
                <div class="form-grup mb-2">
                    <label>Jenis kelamin</label>
                    <select name="jk" id="jk" class="custom-select">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>
                <div class="form-grup mb-2">
                    <label>Alamat</label>
                    <textarea name="alamat" required cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-grup mb-4">
                    <label>No.Telpon</label>
                    <input type="text" name="telpon" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" name="tambahkan">Tambahkan</button>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['tambahkan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];
    $token = password_hash(time(), PASSWORD_DEFAULT);

    $koneksi->query("INSERT INTO tb_siswa(nis,nama,kelas,jurusan,jk,alamat,telpon,token) VALUES('$nis','$nama','$kelas','$jurusan','$jk','$alamat','$telpon','$token')");

    $ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE token = '$token'");
    $siswa = $ambil->fetch_assoc();

    echo "<script>location='registrasi-siswa?token=$siswa[token]';</script>";
}
?>