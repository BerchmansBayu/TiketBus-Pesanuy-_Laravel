<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url

 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_pesanan");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>