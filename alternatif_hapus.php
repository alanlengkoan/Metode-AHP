<?php
session_start();
include "koneksi.php";

$id_dta = $_GET['id_data'];
$query  = mysqli_query($koneksi, "DELETE FROM tb_alternatif WHERE id_data = '$id_dta'");
if ($query) {
  echo "<script>alert('Hapus Data Dengan ID = ".$id_dta." Berhasil') </script>";
  echo "<script>window.location.href = \"alternatif.php\" </script>";
} else {
  echo "Maaf Tidak Dapat Menghapus Data !";
}

 ?>
