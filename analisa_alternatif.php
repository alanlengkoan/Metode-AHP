<?php
session_start();
include "koneksi.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Icon -->
  <link href="icon/css/font-awesome.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>SPK AHP</title>
</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">SPK Metode AHP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="kriteria.php">Kriteria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alternatif.php">Alternatif</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="analisa_kriteria.php">Analisa Kriteria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="analisa_alternatif.php">Analisa Alternatif</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hasil_kriteria.php">Hasil Kriteria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hasil_alternatif.php">Hasil Alternatif</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="card bg-light mb-3">
            <div class="card-header text-center">
              Analisa Alternatif
            </div>

            <!--menu navbar-->
            <nav>
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="analisa_alternatif.php">Tabel Analisa Alternatif</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="analisa_alternatif_tambah.php">Tambah Analisa Alternatif</a>
                </li>
              </ul>
            </nav>

            <div class="card-body">
              <table class="table table-bordered table-striped table-sm">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Alternatif</th>
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">Nilai Perbandingan</th>
                    <th scope="col">Nama Alternatif</th>
                    <th rowspan="2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif");

                  $no = 1;
                  while ($row = mysqli_fetch_array($query)) {
                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td align="center">
                      <a href="analisa_alternatif_hapus.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-trash"></i> </a>
                    </td>
                  </tr>
                  <?php
                  $no++;
                  }
                   ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>

    </div>

    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <em>Copyright &copy; Alan Saputra Lengkoan - 2018</em>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
