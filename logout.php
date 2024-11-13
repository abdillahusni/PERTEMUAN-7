<?php
session_start();

// Hapus session
session_unset();
session_destroy();

// Redirect ke halaman login
header("Location: login.php");
?>