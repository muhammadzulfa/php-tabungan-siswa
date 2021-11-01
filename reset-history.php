<?php
$id = $_GET['id'];
include 'koneksi.php';
$koneksi->query("DELETE FROM transaksi WHERE id_siswa = '$id'");
$koneksi->query("DELETE FROM saldo WHERE id_siswa = '$id'");
echo "<script>location='m?page=history&id=$id';</script>";
?>