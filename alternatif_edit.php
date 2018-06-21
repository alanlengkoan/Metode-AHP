<?php
//untuk $koneksi
session_start();
include "koneksi.php";

$id_dta = $_GET['id_data'];
$query  = mysqli_query($koneksi, "SELECT * FROM tb_alternatif WHERE id_data = '$id_dta'");
while ($data = mysqli_fetch_row($query)) {
  $nm_altr = $data[1];
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
          <div class="card bg-light">
            <div class="card-header text-center">
              Edit Alternatif
            </div>
            <div class="card-body">
              <form action="alternatif_proses_edit.php" method="post">
                <div class="form-group">
                  <label>ID Data</label>
                  <input class="form-control" type="text" name="inpiddta" value=<?php echo $_GET['id_data']; ?> readonly> </td>
                </div>
                <div class="form-group">
                  <label>Nama Alternatif</label>
                  <input class="form-control" type="text" name="inpnmalter" value=<?php echo "\"$nm_altr\""; ?>>
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
