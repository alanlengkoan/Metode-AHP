<?php
session_start();
include "koneksi.php";

$id_art = $_GET['id_alternatif'];
$query  = mysqli_query($koneksi, "DELETE FROM tb_perb_alternatif WHERE id_alternatif = '$id_art'");
if ($query) {
  echo "<script>alert('Hapus Data Dengan ID = ".$id_art." Berhasil') </script>";
  echo "<script>window.location.href = \"analisa_alternatif.php\" </script>";
} else {
  echo "Maaf Tidak Dapat Menghapus Data !";
}

 ?>
