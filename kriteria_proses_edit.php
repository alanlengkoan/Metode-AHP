<?php
session_start();
include "koneksi.php";

//proses ubah data
if (isset($_POST['ubah'])) {
  $id_kriteria = $_POST['inpidkrt'];
  $kd_kriteria = $_POST['inpkdkrt'];
  $nm_kriteria = $_POST['inpnmkrt'];

  $sql   = "UPDATE tb_kriteria SET kd_kriteria = '$kd_kriteria', nama_kriteria = '$nm_kriteria' WHERE id_kriteria = '$id_kriteria'";
  $query = mysqli_query($koneksi, $sql);

  if ($query) {
    echo "<script>alert('Ubah Data Dengan ID = ".$id_kriteria." Berhasil') </script>";
    echo "<script>window.location.href = \"kriteria.php\" </script>";
  } else {
    echo "Maaf Tidak Dapat Mengubah Data !";
  }
}
 ?>
