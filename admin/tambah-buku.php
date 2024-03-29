  <?php
  session_start();

  require 'functions.php';

  // apakah tombol submit sudah ditekan apa belum
  if (isset($_POST["submit"])) {
    if (tambahBuku($_POST) > 0) {
      echo "<script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'halaman-buku.php';
    </script>";
    } else {
      echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'halaman-buku.php';
      </script>";
    }
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
      <title>Perpustakaan | Dashboard</title>
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

            <!-- Content Row ini bagian yang harus diisi-->
            <div class="row  justify-content-center">
              <!-- Greeting -->
              <div class="col-12 ">
                <h2 style="font-weight: bold;  margin-top: 80px; text-align: center; margin-top: 30px; margin-bottom: 40px;">TAMBAH DATA DUKU</h2>

                <form action="" method="post" enctype="multipart/form-data">

                  <div class="input-group mb-4">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-book"></i></span>
                    <input type="text" class="form-control" placeholder="Masukan Judul Buku" aria-label="judul" aria-describedby="basic-addon1" name="judul" required>
                  </div>

                  <div class="input-group mb-4">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Masukan Nama Pengarang" aria-label="pengarang" aria-describedby="basic-addon1" name="pengarang" required>
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-landmark"></i></span>
                    <input type="text" class="form-control" placeholder="Masukan Penerbit" aria-label="penerbit" aria-describedby="basic-addon1" name="penerbit" required>
                  </div>

                  <label for="">Genre Buku :</label>
                  <div style="margin-left: 25px;">
                    <div class="input-group mb-2">
                      <input class="form-check-input" type="checkbox" value="Romantis" name="genre" id="flexCheckDefault">
                      <label class=" form-check-label" for="flexCheckDefault" romantis>
                        Romantis
                      </label>
                    </div>

                    <div class="input-group mb-2">
                      <input class="form-check-input" type="checkbox" value="Pendidikan" name="genre" id="flexCheckDefaultt">
                      <label class="form-check-label" for="flexCheckDefaultt" Pendidikan>
                        Pendidikan
                      </label>
                    </div>

                    <div class="input-group mb-2">
                      <input class="form-check-input" type="checkbox" value="Misteri" name="genre" id="misteri">
                      <label class="form-check-label" for="misteri" misteri>
                        Misteri
                      </label>
                    </div>
                  </div>
                  <label for="" style="font-size: 15px; color: red;">Pilih salah satu *</label>


                  <div class="input-group mb-4">
                    <input type="date" class="form-control" placeholder="Masukan link Buku" aria-label="link" aria-describedby="basic-addon1" name="tahun_terbit">
                  </div>

                  <div class="mb-4">
                    <label for="formFile" class="form-label">Masukan gambar Buku :</label>
                    <input class="form-control" type="file" id="formFile" name="gambar">
                  </div>

                  <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
                  <a href="halaman-buku.php" class="btn btn-danger">Kembali</a>
                </form>



              </div>
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