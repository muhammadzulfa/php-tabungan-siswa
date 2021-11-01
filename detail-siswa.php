<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE id = '$id'");
$siswa = $ambil->fetch_assoc();
?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Detail siswa</h1>
    <div class="card">
        <div class="card-body">
            <div class="table-hover">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
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
            <a href="m?page=daftar-siswa" class="btn btn-secondary btn-sm">Kembali</a>
            <a href="m?page=detail-akun-siswa&id=<?= $id ?>" class="btn btn-primary btn-sm">Lihat akun</a>
        </div>
    </div>
</div>