<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$transportasi = $_POST['id_bus'];
$asal = $_POST['id_terminal'];
$berangkat = $_POST['tanggal_berangkat'];
$tiba = $_POST['tanggal_tiba'];
$waktu = $_POST['waktu_berangkat'];
$waktu1 = $_POST['waktu_tiba'];
$harga = $_POST['harga'];
$tujuan = $_POST['tujuan'];

// menginput data ke database
mysqli_query($koneksi,"insert into tb_rute values('','$transportasi','$asal','$berangkat','$tiba','$waktu','$waktu1','$harga','$tujuan')");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>