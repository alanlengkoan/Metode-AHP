<?php
session_start();
include "koneksi.php";

//proses ubah data
if (isset($_POST['ubah'])) {
  $id_data   = $_POST['inpiddta'];
  $nama_data = $_POST['inpnmalter'];

  $sql   = "UPDATE tb_alternatif SET nama_alternatif = '$nama_data' WHERE id_data = '$id_data'";
  $query = mysqli_query($koneksi, $sql);

  if ($query) {
    echo "<script>alert('Ubah Data Dengan ID = ".$id_data." Berhasil') </script>";
    echo "<script>window.location.href = \"alternatif.php\" </script>";
  } else {
    echo "Maaf Tidak Dapat Mengubah Data !";
  }
}
 ?>
