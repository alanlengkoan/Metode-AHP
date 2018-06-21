<?php
//untuk $koneksi
session_start();
include "koneksi.php";

//pemberian kode id secara otomatis
$carikode = mysqli_query($koneksi, "SELECT id_kriteria FROM tb_perb_kriteria") or die(mysql_error());
$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {
  $nilaikode = substr($jumlah_data[0], 1);
  $kode = (int) $nilaikode;
  $kode = $jumlah_data + 1;
  $kode_otomatis = "B".str_pad($kode, 2, "0", STR_PAD_LEFT);
} else {
  $kode_otomatis = "B01";
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
            <a class="nav-link" href="kriteria.php">Kriteria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alternatif.php">Alternatif</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="analisa_kriteria.php">Analisa Kriteria</a>
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
          <div class="card bg-light">
            <div class="card-header text-center">
              Analisa Kriteria
            </div>

            <!--menu navbar-->
            <nav>
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link" href="analisa_kriteria.php">Tabel Analisa Kriteria</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="analisa_kriteria_tambah.php">Tambah Analisa Kriteria</a>
                </li>
              </ul>
            </nav>

            <div class="card-body">
              <form action="analisa_kriteria_tambah.php" method="post">
                <div class="form-group">
                  <label>ID Perbandingan</label>
                  <input class="form-control" type="text" name="inpidkrt" value="<?php echo $kode_otomatis; ?> " readonly>
                </div>
                <div class="form-group">
                  <label>Nama Kriteria</label>
                  <select class="form-control" name="inpnmkrt">
                    <option>- Pilih Nama Kriteria -</option>
                    <?php
                    $hasil = mysqli_query($koneksi, "SELECT * FROM tb_kriteria");
                    while ($row = mysqli_fetch_array($hasil)) {
                      echo "<option value='".$row['nama_kriteria']."'>".$row['nama_kriteria']."</option>";
                    }
                     ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Perbandingan</label>
                  <select class="form-control" name="inpperb">
                    <option>- Pilih Perbandingan -</option>
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
                </div>
                <div class="form-group">
                  <label>Nama Kriteria</label>
                  <select class="form-control" name="inpnmkrt2">
                    <option>- Pilih Nama Kriteria -</option>
                    <?php
                    $hasil = mysqli_query($koneksi, "SELECT * FROM tb_kriteria");
                    while ($row = mysqli_fetch_array($hasil)) {
                      echo "<option value='".$row['nama_kriteria']."'>".$row['nama_kriteria']."</option>";
                    }
                     ?>
                  </select>
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
      $nm_banding  = $_POST['inpperb'];
      $kriteria1   = $_POST['inpnmkrt'];
      $kriteria2   = $_POST['inpnmkrt2'];

      if ($nm_banding==1) {
        $nilai = 1;
        $nama = "1. Sama penting dengan";
      } elseif ($nm_banding==2) {
        $nilai = 2;
        $nama = "2. Mendekati sedikit lebih penting dari";
      } elseif ($nm_banding==3) {
        $nilai = 3;
        $nama = "3. Sedikit lebih penting dari";
      } elseif ($nm_banding==4) {
        $nilai = 4;
        $nama = "4. Mendekati lebih penting dari";
      } elseif ($nm_banding==5) {
        $nilai = 5;
        $nama = "5. Lebih penting dari";
      } elseif ($nm_banding==6) {
        $nilai = 6;
        $nama = "6. Mendekati sangat penting dari";
      } elseif ($nm_banding==7) {
        $nilai = 7;
        $nama = "7. Sangat penting dari";
      } elseif ($nm_banding==8) {
        $nilai = 8;
        $nilai = "8. Mendekati mutlak dari";
      } elseif ($nm_banding==9) {
        $nilai = 9;
        $nama = "9. Mutlak sangat penting dari";
      }

      $sql   = "INSERT INTO tb_perb_kriteria (id_kriteria, nilai_banding, kriteria1, nm_banding, kriteria2)
                VALUES ('$id_kriteria', '$nilai', '$kriteria1', '$nama', '$kriteria2')";
      $query = mysqli_query($koneksi, $sql);

      if ($query) {
        echo "<script>window.alert('Kriteria Berhasil ditambahkan');
              window.location=(href='analisa_kriteria.php')</script>";
      }
    }
     ?>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
