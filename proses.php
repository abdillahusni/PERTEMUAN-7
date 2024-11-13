<?php
if (!isset($_GET['barang']) and !isset($_GET['action'])) {
    header('location:../../index.php');
} elseif ($_GET['modul'] == "barang") {
    include "../../koneksi.php";
    if ($_GET['action'] == "tambah") {
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $stok_barang = $_POST['stok_barang'];
        $kategori = $_POST['kategori'];
        $query = "INSERT INTO barang (nama_barang, Harga, Stok_Barang, Kategori) VALUES (
  '$nama_barang',
  '$harga',
  '$stok_barang',
  '$kategori'
  )";
        $mysqli->query($query);
        header('location:../../index.php?modul=barang');
    } elseif ($_GET['action'] == "update") {
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $stok_barang = $_POST['stok_barang'];
        $kategori = $_POST['kategori'];
        $query = "UPDATE barang SET 
        nama_barang='$nama_barang',
        harga='$harga',
        stok_barang='$stok_barang',
        kategori='$kategori'
        where id='$_GET[id]'
        ";
        $mysqli->query($query);
        header('location:../../index.php?modul=barang');
    } elseif ($_GET['action'] == "delete") {
        $query = "DELETE FROM barang WHERE id='$_GET[id]'";
        $mysqli->query($query);
        header('location:../../index.php?modul=barang');
    } else {
        header('location:../../index.php');
    }
}
