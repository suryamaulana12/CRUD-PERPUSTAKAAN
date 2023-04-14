<?php
session_start();

if (!isset($_SESSION["signin"])) {
    header("Location: index.php");
    exit;
}
require "functions.php";

// ambil data get di url
$id = isset($_GET['id']) ? $_GET['id'] : '';

if (hapusPetugas($id) > 0) {
    echo "<script>
    alert('Data berhasil dihapus !');
    document.location.href = 'halaman-petugas.php';
</script>";
} else {
    echo "<script>
    alert('Data gagal dihapus!');
    document.location.href = 'halaman-petugas.php';
</script>";
}
