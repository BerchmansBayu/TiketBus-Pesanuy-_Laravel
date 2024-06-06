<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['kode_bus'];
$nim = $_POST['nama_bus'];
$alamat = $_POST['kelas_bus'];
$alamat1 = $_POST['jumlah_kursi'];
// menginput data ke database
mysqli_query($koneksi,"insert into tb_bus values('','$nama','$nim','$alamat','$alamat1')");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>