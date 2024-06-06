<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_rute'];
$transportasi = $_POST['id_bus'];
$asal = $_POST['id_terminal'];
$berangkat = $_POST['tanggal_berangkat'];
$tiba = $_POST['tanggal_tiba'];
$waktu = $_POST['waktu_berangkat'];
$waktu1 = $_POST['waktu_tiba'];
$harga = $_POST['harga'];
$tujuan = $_POST['tujuan'];

// menginput data ke database
mysqli_query($koneksi,"update tb_rute set id_bus='$transportasi', id_terminal='$asal', tanggal_berangkat='$berangkat', tanggal_tiba='$tiba', waktu_berangkat='$waktu', waktu_tiba='$waktu1', harga='$harga', tujuan='$tujuan' where id_rute='$id'");
 
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>