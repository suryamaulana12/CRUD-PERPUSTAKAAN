<?php
session_start();

require "functions.php";

// ambil data get di url
$id = isset($_GET['id']) ? $_GET['id'] : '';

if (hapusPenerbit($id) > 0) {
    echo "<script>
    alert('Data berhasil dihapus !');
    document.location.href = 'halaman-penerbit.php';
</script>";
} else {
    echo "<script>
    alert('Data gagal dihapus!');
    document.location.href = 'halaman-penerbit.php';
</script>";
}
