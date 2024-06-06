<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_bus where id_bus='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>