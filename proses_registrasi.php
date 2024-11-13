<?php

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    $mysqli->query($sql);
    
    header("Location: login.php");
}
?>