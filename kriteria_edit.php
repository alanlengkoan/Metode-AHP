<?php
//untuk $koneksi
session_start();
include "koneksi.php";

$id_krt = $_GET['id_kriteria'];
$query  = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE id_kriteria = '$id_krt'");
while ($data = mysqli_fetch_row($query)) {
  $kd_krt = $data[1];
  $nm_krt = $data[2];
}

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

    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="card bg-light mb-3">
            <div class="card-header text-center">
              Edit Kriteria
            </div>
            <div class="card-body">
              <form action="kriteria_proses_edit.php" method="post">
                <fieldset>
                  <div class="form-group">
                    <label>ID Kriteria</label>
                    <input class="form-control" type="text" name="inpidkrt" value=<?php echo $_GET['id_kriteria']; ?>>
                  </div>
                </fieldset>
                <div class="form-group">
                  <label>Kode Kriteria</label>
                  <input class="form-control" type="text" name="inpkdkrt" value=<?php echo "\"$kd_krt\""; ?>>
                </div>
                <div class="form-group">
                  <label>Nama Kriteria</label>
                  <input class="form-control" type="text" name="inpnmkrt" value=<?php echo "\"$nm_krt\""; ?>>
                </div>
                <div class="form-group">
                  <input class="btn btn-danger" type="button" name="" value="Batal" onClick="javascript:history.back()">
                  <input class="btn btn-success" type="submit" name="ubah" value="Ubah">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
