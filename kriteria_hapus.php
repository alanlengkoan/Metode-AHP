<?php
session_start();
include "koneksi.php";

$id_krt = $_GET['id_kriteria'];
$query  = mysqli_query($koneksi, "DELETE FROM tb_kriteria WHERE id_kriteria = '$id_krt'");
if ($query) {
  echo "<script>alert('Hapus Data Dengan ID = ".$id_krt." Berhasil') </script>";
  echo "<script>window.location.href = \"kriteria.php\" </script>";
} else {
  echo "Maaf Tidak Dapat Menghapus Data !";
}

 ?>
