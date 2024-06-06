<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_bus'];
$nama = $_POST['kode_bus'];
$nim = $_POST['nama_bus'];
$alamat = $_POST['kelas_bus'];
 $alamat1=$_POST['jumlah_kursi'];
// update data ke database
mysqli_query($koneksi,"update tb_bus set kode_bus='$nama', nama_bus='$nim', kelas_bus='$alamat', jumlah_kursi='$alamat1' where id_bus='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>