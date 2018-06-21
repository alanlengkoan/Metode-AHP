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
            <a class="nav-link" href="hasil_kriteria.php">Hasil Kriteria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="hasil_alternatif.php">Hasil Alternatif</a>
          </li>
        </ul>
      </div>
    </nav>

    <?php
      error_reporting(E_ALL^(E_NOTICE|E_WARNING));
      $query1 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A01'");
      $query2 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A02'");
      $query3 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A03'");
      $query4 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A04'");
      $query5 = mysqli_query($koneksi, "SELECT * FROM tb_perb_alternatif where id_alternatif='A05'");
      $b1 = mysqli_fetch_array($query1);
      $b2 = mysqli_fetch_array($query2);
      $b3 = mysqli_fetch_array($query3);
      $b4 = mysqli_fetch_array($query4);
      $b5 = mysqli_fetch_array($query5);
    ?>

    <div class="container-fluid"> <!--awal container fluid-->

      <div class="row"> <!--awal row-->
        <div class="col-lg-10 offset-lg-1">
          <div class="card bg-light mn-3"> <!--awal card-->
            <div class="card-header">
              Tabel Perhitungan Hasil Alternatif
            </div>
            <div class="card-body">
              <form action="hasil_alternatif_akhir.php" method="post">
                <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                    <div class="card bg-light mb-3">
                      <div class="card-header">
                        Hitung Alternatif Spesifikasi
                      </div>
                      <div class="card-body">
                        <table class="table table-bordered table-striped table-sm">
                          <thead class="thead-light">
                            <tr align="center">
                              <th>Alt</th>
                              <td><?php echo $b1['alternatif1']; ?></td>
                              <td><?php echo $b2['alternatif1']; ?></td>
                              <td><?php echo $b3['alternatif1']; ?></td>
                              <td><?php echo $b4['alternatif1']; ?></td>
                              <td><?php echo $b5['alternatif1']; ?></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr align="center">
                              <td><?php echo $b1['alternatif1']; ?></td>
                              <td><?php echo $b1['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb1">
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
                                <select class="form-control" name="nb2">
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
                                <select class="form-control" name="nb3">
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
                                <select class="form-control" name="nb4">
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
                            <tr align="center">
                              <td><?php echo $b2['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b2['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb5">
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
                                <select class="form-control" name="nb6">
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
                                <select class="form-control" name="nb7">
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
                            <tr align="center">
                              <td><?php echo $b3['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb8">
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
                                <select class="form-control" name="nb9">
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
                            <tr align="center">
                              <td><?php echo $b4['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb10">
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
                            <tr align="center">
                              <td><?php echo $b5['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                    <div class="card bg-light mb-3">
                      <div class="card-header">
                        Hitung Alternatif Budget
                      </div>
                      <div class="card-body">
                        <table class="table table-bordered table-striped table-sm">
                          <thead class="thead-light">
                            <tr align="center">
                              <th scope="col">Alt</th>
                              <td scope="col"><?php echo $b1['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b2['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b3['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b4['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b5['alternatif1']; ?></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr align="center">
                              <td><?php echo $b1['alternatif1']; ?></td>
                              <td><?php echo $b1['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb11">
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
                                <select class="form-control" name="nb12">
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
                                <select class="form-control" name="nb13">
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
                                <select class="form-control" name="nb14">
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
                            <tr align="center">
                              <td><?php echo $b2['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b2['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb15">
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
                                <select class="form-control" name="nb16">
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
                                <select class="form-control" name="nb17">
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
                            <tr align="center">
                              <td><?php echo $b3['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb18">
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
                                <select class="form-control" name="nb19">
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
                            <tr align="center">
                              <td><?php echo $b4['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb20">
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
                            <tr align="center">
                              <td><?php echo $b5['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                    <div class="card bg-light mb-3">
                      <div class="card-header">
                        Hitung Alternatif Baterai
                      </div>
                      <div class="card-body">
                        <table class="table table-bordered table-striped table-sm">
                          <thead class="thead-light">
                            <tr align="center">
                              <th scope="col">Alt</th>
                              <td scope="col"><?php echo $b1['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b2['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b3['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b4['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b5['alternatif1']; ?></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr align="center">
                              <td><?php echo $b1['alternatif1']; ?></td>
                              <td><?php echo $b1['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb21">
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
                                <select class="form-control" name="nb22">
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
                                <select class="form-control" name="nb23">
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
                                <select class="form-control" name="nb24">
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
                            <tr align="center">
                              <td><?php echo $b2['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b2['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb25">
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
                                <select class="form-control" name="nb26">
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
                                <select class="form-control" name="nb27">
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
                            <tr align="center">
                              <td><?php echo $b3['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb28">
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
                                <select class="form-control" name="nb29">
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
                            <tr align="center">
                              <td><?php echo $b4['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb30">
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
                            <tr align="center">
                              <td><?php echo $b5['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                    <div class="card bg-light mb-3">
                      <div class="card-header">
                        Hitung Alternatif Sistem Operasi
                      </div>
                      <div class="card-body">
                        <table class="table table-bordered table-striped table-sm">
                          <thead class="thead-light">
                            <tr align="center">
                              <th scope="col">Alt</th>
                              <td scope="col"><?php echo $b1['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b2['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b3['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b4['alternatif1']; ?></td>
                              <td scope="col"><?php echo $b5['alternatif1']; ?></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr align="center">
                              <td><?php echo $b1['alternatif1']; ?></td>
                              <td><?php echo $b1['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb31">
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
                                <select class="form-control" name="nb32">
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
                                <select class="form-control" name="nb33">
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
                                <select class="form-control" name="nb34">
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
                            <tr align="center">
                              <td><?php echo $b2['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b2['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb35">
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
                                <select class="form-control" name="nb36">
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
                                <select class="form-control" name="nb37">
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
                            <tr align="center">
                              <td><?php echo $b3['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb38">
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
                                <select class="form-control" name="nb39">
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
                            <tr align="center">
                              <td><?php echo $b4['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                              <td>
                                <select class="form-control" name="nb40">
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
                            <tr align="center">
                              <td><?php echo $b5['alternatif1']; ?></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><font color="red">0</font></td>
                              <td><?php echo $b3['nb_db']; ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                    <div class="form-group">
                      <input class="btn btn-success" type="submit" name="simpan" value="Proses">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div> <!--akhir card-->
        </div>

      </div> <!--akhir row-->

    </div> <!--akhir container fluid-->

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
