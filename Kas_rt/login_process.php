<?php
// Proses login

// Include file koneksi database
include_once 'db_config.php';

// Ambil data dari form
$username = $_POST['username'];
$password = md5($_POST['password']); // Menggunakan MD5 untuk mengenkripsi kata sandi

// Query untuk memeriksa apakah pengguna ada dalam database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // Login berhasil, arahkan pengguna ke halaman data_warga.php
    header("Location: data_warga.php");
    exit(); // Pastikan tidak ada kode PHP lain yang dieksekusi setelah ini
} else {
    // Login gagal, arahkan pengguna kembali ke halaman login dengan pesan error
    header("Location: login.php?error=1");
    exit(); // Pastikan tidak ada kode PHP lain yang dieksekusi setelah ini
}

mysqli_close($conn);
?>
