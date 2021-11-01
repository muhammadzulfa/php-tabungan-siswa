<?php
include 'koneksi.php';
// untuk keamanan
if(!isset($_SESSION['admin'])){
    header('location: index');
    return false;
}

$token = $_GET['token'];

$ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE token = '$token'");
$siswa = $ambil->fetch_assoc();

$ambil = $koneksi->query("SELECT * FROM tb_login WHERE id_siswa = '$siswa[id]'");
$login = $ambil->fetch_assoc();

if($siswa['id'] == $login['id_siswa']){
    header('location: m?page=daftar-siswa');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Tabungan Siswa Berbasis WEB</title>
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
    
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-12"><br><br><br>
                    <div class="card o-hidden border-0 my- col-lg-6 mx-auto">
                        <div class="col-md-12">
                            <div class="card shadow-lg">
                                <div class="card-header">
                                    <div class="text-center">
                                        <span class="h3">Registrasi | <span class="text-primary small">Tabungan Siswa</span></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if(isset($_POST['regis'])){
                                        $nama_pengguna = $_POST['nama_pengguna'];
                                        $password1 = $_POST['password1'];
                                        $password2 = $_POST['password2'];

                                        if($password1 !== $password2){
                                            echo "<div class='alert alert-danger'>Registrasi gagal periksa password anda</div>";
                                            echo "<meta http-equiv='refresh' content='1;url=registrasi-siswa?token=$token'>"; 
                                            return false;
                                        }

                                        $koneksi->query("INSERT INTO tb_login(id_siswa,nama_pengguna,password,level) VALUES('$siswa[id]','$nama_pengguna','$password2','siswa')");
                                        echo "<script>location='m?page=detail-akun-siswa&id=$siswa[id]';</script>";
                                    }
                                    ?>
                                    <form action="" method="post">
                                        <div class="form-grup mb-2">
                                            <label>Nama pengguna</label>
                                            <input type="text" class="form-control" name="nama_pengguna" required>
                                        </div>
                                        <div class="form-grup mb-4">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password1" required>
                                        </div>
                                        <div class="form-grup mb-4">
                                            <label>Konfirmasi password</label>
                                            <input type="password" class="form-control" name="password2" required>
                                        </div>
                                        <button type="submit" name="regis" class="btn btn-primary btn-block mb-2">Registrasi</button>
                                        <center class="text-primary small">Nama pengguna dan Password untuk login siswa, jadi harap diingat!!!</center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>