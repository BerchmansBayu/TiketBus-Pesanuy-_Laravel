<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['kode_terminal'];
$nim = $_POST['nama_terminal'];
$alamat = $_POST['kota'];

// menginput data ke database
mysqli_query($koneksi,"insert into tb_terminal values('','$nama','$nim','$alamat')");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>