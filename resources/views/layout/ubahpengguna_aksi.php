<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_pengguna'];
$nama = $_POST['nama_pengguna'];
$nim = $_POST['email_pengguna'];
$alamat = $_POST['password'];
 $alamat1=$_POST['level'];
// update data ke database
mysqli_query($koneksi,"update tb_pengguna set nama_pengguna='$nama', email_pengguna='$nim', password='$alamat', level='$alamat1' where id_pengguna='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:dashboard.php");
 
?>