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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
            <a class="nav-link" href="analisa_alternatif.php">Analisa Alternatif</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="hasil_kriteria.php">Hasil Kriteria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hasil_alternatif.php">Hasil Alternatif</a>
          </li>
        </ul>
      </div>
    </nav>

    <?php
    error_reporting(E_ALL^(E_NOTICE|E_WARNING));
    $query1 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B01'");
    $query2 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B02'");
    $query3 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B03'");
    $query4 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B04'");
    $b1 = mysqli_fetch_array($query1);
    $b2 = mysqli_fetch_array($query2);
    $b3 = mysqli_fetch_array($query3);
    $b4 = mysqli_fetch_array($query4);
    ?>

    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="card bg-light mb-3">
            <div class="card-header">
              Tabel Perhitungan Hasil Kriteria
            </div>
            <div class="card-body">
              <form action="hasil_kriteria_akhir.php" method="post">
                <table class="table table-bordered table-striped table-sm">
                  <thead class="thead-light">
                    <tr>
                      <th>Kriteria</th>
                      <th scope="col"><?php echo $b1['kriteria1']; ?></th>
                      <th scope="col"><?php echo $b2['kriteria1']; ?></th>
                      <th scope="col"><?php echo $b3['kriteria1']; ?></th>
                      <th scope="col"><?php echo $b4['kriteria1']; ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th><?php echo $b1['kriteria1']; ?></th> <!-- Baris Umur -->
                      <td align="center"><?php echo $b1['nilai_banding']; ?></td>
                      <td>
                        <select class="form-control" name="nm_banding1">
                        <option></option>
                        <option value="1">1. Sama penting dengan</option>
                        <option value="2">2. Mendekati sedikit lebih penting dari</option>
                        <option value="3">3. Sedikit lebih penting dari</option>
                        <option value="4">4. Mendekati lebih penting dari</option>
                        <option value="5">5. Lebih penting dari</option>
                        <option value="6">6. Mendekati sangat penting dari</option>
                        <option value="7">7. Sangat penting dari</option>
                        <option value="8">8. Mendekati mutlak dari</option>
                        <option value="9">9. Mutlak sangat penting dari</option>
                      </select>
                      </td>
                      <td>
                        <select class="form-control" name="nm_banding2">
                        <option></option>
                        <option value="1">1. Sama penting dengan</option>
                        <option value="2">2. Mendekati sedikit lebih penting dari</option>
                        <option value="3">3. Sedikit lebih penting dari</option>
                        <option value="4">4. Mendekati lebih penting dari</option>
                        <option value="5">5. Lebih penting dari</option>
                        <option value="6">6. Mendekati sangat penting dari</option>
                        <option value="7">7. Sangat penting dari</option>
                        <option value="8">8. Mendekati mutlak dari</option>
                        <option value="9">9. Mutlak sangat penting dari</option>
                      </select>
                      </td>
                      <td>
                        <select class="form-control" name="nm_banding3">
                        <option></option>
                        <option value="1">1. Sama penting dengan</option>
                        <option value="2">2. Mendekati sedikit lebih penting dari</option>
                        <option value="3">3. Sedikit lebih penting dari</option>
                        <option value="4">4. Mendekati lebih penting dari</option>
                        <option value="5">5. Lebih penting dari</option>
                        <option value="6">6. Mendekati sangat penting dari</option>
                        <option value="7">7. Sangat penting dari</option>
                        <option value="8">8. Mendekati mutlak dari</option>
                        <option value="9">9. Mutlak sangat penting dari</option>
                      </select>
                      </td>
                    </tr>

                    <tr>
                      <th><?php echo $b2['kriteria1']; ?></th> <!-- Baris IPK -->
                      <td align="center"><font color="red">0</font></td>
                      <td align="center"><?php echo $b2['nilai_banding']; ?></td>
                      <td>
                        <select class="form-control" name="nm_banding4">
                        <option></option>
                        <option value="1">1. Sama penting dengan</option>
                        <option value="2">2. Mendekati sedikit lebih penting dari</option>
                        <option value="3">3. Sedikit lebih penting dari</option>
                        <option value="4">4. Mendekati lebih penting dari</option>
                        <option value="5">5. Lebih penting dari</option>
                        <option value="6">6. Mendekati sangat penting dari</option>
                        <option value="7">7. Sangat penting dari</option>
                        <option value="8">8. Mendekati mutlak dari</option>
                        <option value="9">9. Mutlak sangat penting dari</option>
                      </select>
                      </td>
                      <td>
                        <select class="form-control" name="nm_banding5">
                        <option></option>
                        <option value="1">1. Sama penting dengan</option>
                        <option value="2">2. Mendekati sedikit lebih penting dari</option>
                        <option value="3">3. Sedikit lebih penting dari</option>
                        <option value="4">4. Mendekati lebih penting dari</option>
                        <option value="5">5. Lebih penting dari</option>
                        <option value="6">6. Mendekati sangat penting dari</option>
                        <option value="7">7. Sangat penting dari</option>
                        <option value="8">8. Mendekati mutlak dari</option>
                        <option value="9">9. Mutlak sangat penting dari</option>
                      </select>
                      </td>
                    </tr>

                    <tr>
                      <th><?php echo $b3['kriteria1']; ?></th> <!-- baris Penghasilan Orangtua -->
                      <td align="center"><font color="red">0</font></td>
                      <td align="center"><font color="red">0</font></td>
                      <td align="center"><?php echo $b3['nilai_banding']; ?></td>
                      <td>
                        <select class="form-control" name="nm_banding6">
                        <option></option>
                        <option value="1">1. Sama penting dengan</option>
                        <option value="2">2. Mendekati sedikit lebih penting dari</option>
                        <option value="3">3. Sedikit lebih penting dari</option>
                        <option value="4">4. Mendekati lebih penting dari</option>
                        <option value="5">5. Lebih penting dari</option>
                        <option value="6">6. Mendekati sangat penting dari</option>
                        <option value="7">7. Sangat penting dari</option>
                        <option value="8">8. Mendekati mutlak dari</option>
                        <option value="9">9. Mutlak sangat penting dari</option>
                      </select>
                      </td>
                    </tr>

                    <tr>
                      <th><?php echo $b4['kriteria1']; ?></th> <!-- baris semester -->
                      <td align="center"><font color="red">0</font></td>
                      <td align="center"><font color="red">0</font></td>
                      <td align="center"><font color="red">0</font></td>
                      <td colspan="3" align="center"><?php echo $b4['nilai_banding']; ?></td>
                    </tr>
                  </tbody>
                </table>

                <div class="form-group">
                  <input class="btn btn-success" type="submit" name="simpan" value="Proses">
                </div>
              </form>

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
