<?php 
session_start();
include 'koneksi.php';

if(isset($_POST['registrasi'])) {
  $requestUsername = mysqli_real_escape_string($koneksi, $_POST['nama_pengguna']);
  $requestPassword = $_POST['password'];

  $sql = "SELECT * FROM tb_pengguna WHERE nama_pengguna = '$requestUsername' AND password='$requestPassword'";
  $result = mysqli_query($koneksi, $sql);

  if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    
        if ($row['level'] == "Admin") {
            $_SESSION['username'] = $row['nama_pengguna'];
            echo "
            <script>
              alert('Login Berhasil. Halaman Admin');
              window.location = 'dashboard.php';
            </script>
            ";
        } elseif ($row['level'] == "Pengguna") {
            $_SESSION['username'] = $row['nama_pengguna'];
            echo "
            <script>
              alert('Login Berhasil. Halaman Pengguna');
              window.location = 'index.php';
            </script>
            ";
        }
  } else {
    echo "
    <script>
      alert('Nama pengguna tidak ditemukan, Silahkan coba lagi');
      window.location = 'login.php';
    </script>
    ";
  }
  mysqli_close($koneksi);
}
?>