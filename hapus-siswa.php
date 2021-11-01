<?php
$id = $_GET['id'];
include 'koneksi.php';
$koneksi->query("DELETE FROM tb_siswa WHERE id = '$id'");
$koneksi->query("DELETE FROM tb_login WHERE id_siswa = '$id'");
$koneksi->query("DELETE FROM transaksi WHERE id_siswa = '$id'");
$koneksi->query("DELETE FROM saldo WHERE id_siswa = '$id'");
echo "<script>location='m?page=daftar-siswa&sukses=hapus-siswa';</script>";
?>