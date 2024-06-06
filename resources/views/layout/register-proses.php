<?php 
include 'koneksi.php';

if(isset($_POST['registrasi'])) {
    $username = $_POST['nama_pengguna'];
    $email = $_POST['email_pengguna'];
    $password = $_POST["password"];
    $level = $_POST['level'];

    $sql = "INSERT INTO tb_pengguna (id_pengguna, nama_pengguna, email_pengguna, password,level) VALUES(NULL, '$username', '$email', '$password','$level')";

    if(empty($email) || empty($username) || empty($password) || empty($level)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'registrasi.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Registrasi Berhasil Silahkan login');
                window.location = 'login.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'registrasi.php';
            </script>
        ";
    }
}

?>
