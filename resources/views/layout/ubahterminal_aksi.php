<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_terminal'];
$nama = $_POST['kode_terminal'];
$nim = $_POST['nama_terminal'];
$alamat = $_POST['kota'];
// update data ke database
mysqli_query($koneksi,"update tb_terminal set kode_terminal='$nama', nama_terminal='$nim', kota='$alamat' where id_terminal='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>