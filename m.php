<?php include 'koneksi.php' ?>
<?php include 'template/header1.php' ?>

<?php
if(isset($_GET['page'])){
	switch($_GET['page']){
	    case 'beranda': $title = 'Beranda | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
	    case 'daftar-siswa': $title = 'Daftar siswa | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
	    case 'detail-siswa': $title = 'Detail siswa | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
	    case 'edit-siswa': $title = 'Edit siswa | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
	    case 'tambah-siswa': $title = 'Tambah siswa | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
	    case 'transaksi': $title = 'Transaksi | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
	    case 'setoran': $title = 'Setoran | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
	    case 'penarikan': $title = 'Penarikan | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
	    case 'history': $title = 'History | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
		case 'detail-akun-siswa': $title = 'Detail akun | Tabungan Siswa Berbasis WEB'; echo '<title>'.$title.'</title>'; break;
	}   
}
?>

<?php include 'template/header2.php' ?>
<?php include 'template/sidebar.php' ?>
<?php include 'template/topbar.php' ?>

<?php
if(isset($_GET['page'])){
	switch($_GET['page']){
	    case 'beranda': include 'beranda.php'; break;
	    case 'daftar-siswa': include 'daftar-siswa.php'; break;
	    case 'detail-siswa': include 'detail-siswa.php'; break;
	    case 'edit-siswa': include 'edit-siswa.php'; break;
	    case 'tambah-siswa': include 'tambah-siswa.php'; break;
	    case 'transaksi': include 'transaksi.php'; break;
	    case 'setoran': include 'setoran.php'; break;
	    case 'penarikan': include 'penarikan.php'; break;
	    case 'history': include 'history.php'; break;
	    case 'detail-akun-siswa': include 'detail-akun-siswa.php'; break;
	}   
}
?>

<?php include 'template/footer.php' ?>