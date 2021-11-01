<?php include '../koneksi.php' ?>
<?php include 'template/header1.php' ?>

<?php
if(isset($_GET['page'])){
	switch($_GET['page']){
        case 'beranda': $title = 'Beranda | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
        case 'data-siswa': $title = 'Data siswa | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
        case 'riwayat-transaksi': $title = 'Riwayat transaksi | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
        case 'profil-saya': $title = 'Profil saya | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
    }
}
?>

<?php include 'template/header2.php' ?>
<?php include 'template/topbar.php' ?>

<?php
if(isset($_GET['page'])){
	switch($_GET['page']){
	    case 'beranda': include 'beranda.php'; break;
	    case 'data-siswa': include 'data-siswa.php'; break;
	    case 'riwayat-transaksi': include 'riwayat-transaksi.php'; break;
	    case 'profil-saya': include 'profil-saya.php'; break;
	}   
}
?>

<?php include 'template/footer.php' ?>