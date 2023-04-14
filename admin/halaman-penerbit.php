<?php
session_start();

require "functions.php";

// mengambil data anggota
$pnb = mysqli_query($conn, "SELECT * FROM `penerbit` ");


// Tombol cari ditekan
if (isset($_GET["submit"])) {
    $pnb = cariPenerbit($_GET["search"]);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <head>
        <title>Perpustakaan | Data Anggota</title>
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <style>
            .card-body-icon {
                position: absolute;
                z-index: 0;
                top: 25px;
                right: 10px;
                opacity: 0.4;
                font-size: 90px;
            }
        </style>
    </head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "sidebar.php"; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include "topbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="font-weight: bold;">Data Penerbit Perpustakaan</h1>
                    </div>
                    <hr>

                    <!-- Content Row ini bagian yang harus diisi-->
                    <div class="row text-white">
                        <!-- Greeting -->

                        <a href="tambah-penerbit.php"><button type="button" class="btn btn-success mb-3">+ Tambah Penerbit</button></a>

                        <table class="table col-12 text-center justify-content-center">
                            <thead class="table-dark">
                                <td>No</td>
                                <td>Nama</td>
                                <td>Alamat</td>
                                <td>Terbitan Populer</td>
                                <td>No Telepon</td>
                                <td>Aksi</td>
                            </thead>
                            <?php $i = 1; ?>
                            <?php foreach ($pnb as $row) : ?>
                                <tbody class="table-striped">
                                    <td><?= $i; ?></td>
                                    <td><?= $row["nama"]; ?></td>
                                    <td><?= $row["alamat"]; ?></td>
                                    <td><?= $row["terbitan_populer"]; ?></td>
                                    <td><?= $row["no_telp"]; ?></td>
                                    <td>
                                        <a href="edit-penerbit.php?id= <?= $row["id"]; ?>"><button type="submit" class="btn btn-primary" style="margin-right: 5px;">Edit</button></a>
                                        <a href="hapus-penerbit.php?id= <?= $row["id"]; ?> "><button type="submit" class="btn btn-danger" onclick="return confirm('Yakin datanya mau dihapus?')">Hapus</button></a>
                                    </td>
                                </tbody>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </table>

                    </div>
                    <!-- End Content Row -->

                </div>
                <!-- End Page Content -->
                <?php include "footer.php"; ?>
            </div>
            <!-- End Content Wrapper -->

        </div>
        <!-- End Main Content -->
    </div>
    <!-- End Page Wrapper -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>