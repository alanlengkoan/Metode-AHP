<?php
//untuk $koneksi
session_start();
include "koneksi.php";

//pemberian kode id secara otomatis
$carikode = mysqli_query($koneksi, "SELECT id_kriteria FROM tb_kriteria") or die(mysql_error());
$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {
  $nilaikode = substr($jumlah_data[0], 1);
  $kode = (int) $nilaikode;
  $kode = $jumlah_data + 1;
  $kode_otomatis = "krt-".str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {
  $kode_otomatis = "krt-001";
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

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" href="kriteria.php">Kriteria</a>
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
              Kriteria
            </div>

            <!--menu navbar-->
            <nav>
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="kriteria.php">Tabel Kriteria</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="kriteria_tambah.php">Tambah Kriteria</a>
                </li>
              </ul>
            </nav>

            <div class="card-body">
              <form class="" action="kriteria_tambah.php" method="post">
                <div class="form-group">
                  <label>ID Kriteria</label>
                  <input class="form-control" type="text" name="inpidkrt" value="<?php echo $kode_otomatis; ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Kode Kriteria</label>
                  <input class="form-control" type="text" name="inpkdkrt" value="">
                </div>
                <div class="form-group">
                  <label>Nama Kriteria</label>
                  <input class="form-control" type="text" name="inpnmkrt" value="">
                </div>
                <div class="form-group">
                  <input class="btn btn-danger" type="button" name="" value="Batal" onClick="javascript:history.back()">
                  <input class="btn btn-warning" type="reset" name="" value="Kosongkan">
                  <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
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

    <?php
    //proses tambah data
    if (isset($_POST['simpan'])) {
      $id_kriteria = $_POST['inpidkrt'];
      $kd_kriteria = $_POST['inpkdkrt'];
      $nm_kriteria = $_POST['inpnmkrt'];

      $sql   = "INSERT INTO tb_kriteria (id_kriteria, kd_kriteria, nama_kriteria)
                VALUES ('$id_kriteria', '$kd_kriteria', '$nm_kriteria')";
      $query = mysqli_query($koneksi, $sql);

      if ($query) {
        echo "<script>window.alert('Kriteria Berhasil ditambahkan');
              window.location=(href='kriteria.php')</script>";
      }
    }
     ?>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
