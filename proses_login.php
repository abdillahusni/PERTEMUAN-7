<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; // Password yang dimasukkan oleh pengguna

    $sql = "SELECT password FROM user WHERE username ='$username'";
    $result = $mysqli->query($sql);
    $hashed_password_from_database=$result->fetch_assoc()["password"];

    // Ambil data pengguna dari database
    // ...

    // Periksa password
    if (password_verify($password, $hashed_password_from_database)) {
        // Password cocok, inisialisasi session
        session_start();
        $_SESSION["username"] = $username;

        // Redirect ke halaman utama atau dashboard
        header("Location: dashboard.php");
    } else {
        // Password tidak cocok, tampilkan pesan kesalahan
        echo "Username atau password salah. Coba lagi.";
    }
}
?>