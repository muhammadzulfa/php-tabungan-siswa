<?php
// koneksi kedatabase
require('koneksi.php');
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF();
// membuat halaman baru
$pdf->AddPage();

$pdf->Image('media/Penguins.jpg',20,10,25,25);

$pdf->SetFont('Arial','B',22);
$pdf->Cell(210,5,'SEKOLAH MENENGAH KEJURUAN',0,0,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',18);
$pdf->Cell(210,7,'NEGERI 2 KANDANGAN TP.2019/2020',0,0,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','i',11);
$pdf->Cell(210,7,'Jalan Gambah Dalam Walangku No. 77 Kec. Kandangan Kab. Hulu Sungai',0,0,'C');
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','i',11);
$pdf->Cell(210,7,'Selatan Provinsi Kalimantan Selatan Kode Pos. 71215 No. Telp 0517-22156',0,0,'C');


$pdf->SetLineWidth(1);
$pdf->Line(10,41,200,41);
$pdf->SetLineWidth(0);
$pdf->Line(10,42,200,42);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);


$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'APLIKASI TABUNGAN SISWA BERBASIS WEB',0,1,'C');
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','',9);

$ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE id = '$_GET[id]'");
$siswa = $ambil->fetch_assoc();

$pdf->Cell(10);
$pdf->Cell(40,6,'NIS',0,0);
$pdf->Cell(40,6,": ".$siswa['nis'],0,1);
$pdf->Cell(10);
$pdf->Cell(40,6,'Nama',0,0);
$pdf->Cell(40,6,": ".$siswa['nama'],0,1);
$pdf->Cell(10);
$pdf->Cell(40,6,'Kelas',0,0);
$pdf->Cell(40,6,": ".$siswa['kelas']." ".$siswa['jurusan'],0,1);
$pdf->Cell(10);
$pdf->Cell(40,6,'Jenis kelamin',0,0);
$pdf->Cell(40,6,": ".$siswa['jk'],0,1);
$pdf->Cell(10);
$pdf->Cell(40,6,'Alamat',0,0);
$pdf->Cell(40,6,": ".$siswa['alamat'],0,1);
$pdf->Cell(10);
$pdf->Cell(40,6,'No.Telpon',0,0);
$pdf->Cell(40,6,": ".$siswa['telpon'],0,1);

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','',9);

$pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(45,6,'Tanggal',1,0,'C');
$pdf->Cell(45,6,'Setoran',1,0,'C');
$pdf->Cell(45,6,'Penarikan',1,0,'C');
$pdf->Cell(45,6,'Saldo',1,1,'C');

$ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_siswa = '$_GET[id]'");
$nomor = 1;
foreach($ambil as $transaksi){

$pdf->Cell(8,5,$nomor,1,0,'C');
$pdf->Cell(45,5,$transaksi['tanggal'],1,0,'C');
$pdf->Cell(45,5,number_format($transaksi['setoran'],2,".","."),1,0,'R');
$pdf->Cell(45,5,number_format($transaksi['penarikan'],2,".","."),1,0,'R');
$pdf->Cell(45,5,number_format($transaksi['saldo'],2,".","."),1,1,'R');

$nomor++;
}

$ambil = $koneksi->query("SELECT * FROM saldo WHERE id_siswa = '$_GET[id]'");
$saldo = $ambil->fetch_assoc();

$pdf->Cell(143,5,'Total saldo',1,0,'C');
$pdf->Cell(45,5,number_format($saldo['saldo'],2,".","."),1,1,'R');

$pdf->Output();
?>