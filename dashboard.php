<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Tampilkan konten halaman dashboard
echo "Selamat datang, " . $_SESSION["username"] . "!";

// Logout link
echo '<br><a href="logout.php">Logout</a>';
?>