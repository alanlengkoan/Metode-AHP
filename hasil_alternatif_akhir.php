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

  <!-- Icon -->
  <link href="icon/css/font-awesome.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css"  rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

    <hr>
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
      $qk1 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B01'");
      $qk2 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B02'");
      $qk3 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B03'");
      $qk4 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B04'");
      $qk5 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B05'");
      $bk1 = mysqli_fetch_array($qk1);
      $bk2 = mysqli_fetch_array($qk2);
      $bk3 = mysqli_fetch_array($qk3);
      $bk5 = mysqli_fetch_array($qk5);
      $bk4 = mysqli_fetch_array($qk4);

      // menghitung jumlah data pada table mhs untuk menentukan RC
			$data = mysqli_query($koneksi, "SELECT * FROM tb_alternatif ORDER BY id_data");
			$jml_data = mysqli_num_rows($data); //menentukan jumlah data yg ada pada tabel tbl_mhs
			if ($jml_data==1) {
				$rc = 0.00;
			}elseif ($jml_data==2) {
				$rc = 0.00;
			}elseif ($jml_data==3) {
				$rc = 0.58;
			}elseif ($jml_data==4) {
				$rc = 0.90;
			}elseif ($jml_data==5) {
				$rc = 1.12;
			}elseif ($jml_data==6) {
				$rc = 1.24;
			}elseif ($jml_data==7) {
				$rc = 1.32;
			}elseif ($jml_data==8) {
				$rc = 1.41;
			} elseif ($jml_data==9) {
				$rc = 1.45;
			} elseif ($jml_data==10) {
				$rc = 1.49;
			} elseif ($jml_data==11) {
				$rc = 1.51;
			}

      if (isset($_POST['simpan'])) {
      // nilai banding IPK
      $nb1 = $_POST['nb1'];
      $nb2 = $_POST['nb2'];
      $nb3 = $_POST['nb3'];
      $nb4 = $_POST['nb4'];
      $nb5 = $_POST['nb5'];

      $nb6 = $_POST['nb6'];
      $nb7 = $_POST['nb7'];
      $nb8 = $_POST['nb8'];
      $nb9 = $_POST['nb9'];
      $nb10 = $_POST['nb10'];
      // Nilai banding Penghsilan Ortu
      $nb11 = $_POST['nb11'];
      $nb12 = $_POST['nb12'];
      $nb13 = $_POST['nb13'];
      $nb14 = $_POST['nb14'];
      $nb15 = $_POST['nb15'];
      $nb16 = $_POST['nb16'];
      $nb17 = $_POST['nb17'];
      $nb18 = $_POST['nb18'];
      $nb19 = $_POST['nb19'];
      $nb20 = $_POST['nb20'];
      // Nilai Banding Tanggungan
      $nb21 = $_POST['nb21'];
      $nb22 = $_POST['nb22'];
      $nb23 = $_POST['nb23'];
      $nb24 = $_POST['nb24'];
      $nb25 = $_POST['nb25'];
      $nb26 = $_POST['nb26'];
      $nb27 = $_POST['nb27'];
      $nb28 = $_POST['nb28'];
      $nb29 = $_POST['nb29'];
      $nb30 = $_POST['nb30'];
      // Nilai Banding Semester
      $nb31 = $_POST['nb31'];
      $nb32 = $_POST['nb32'];
      $nb33 = $_POST['nb33'];
      $nb34 = $_POST['nb34'];
      $nb35 = $_POST['nb35'];
      $nb36 = $_POST['nb36'];
      $nb37 = $_POST['nb37'];
      $nb38 = $_POST['nb38'];
      $nb39 = $_POST['nb39'];
      $nb40 = $_POST['nb40'];
      }

      // isi Table IPK
      // baris pertama table ipk
      $ti11 = $b1['nb_db'];$ti12 = $nb1;$ti13 = $nb2;$ti14 = $nb3;$ti15 = $nb4;
      // baris ke dua tabel ipk
      $ti21 = round($b2['nb_db']/$ti12,3);$ti22 = $b2['nb_db'];$ti23 = $nb5;$ti24 = $nb6;$ti25 = $nb7;
      // baris ke tiga table ipk
      $ti31 = round($b3['nb_db']/$ti13,3);$ti32 = round($b3['nb_db']/$ti23,3);$ti33 = $b3['nb_db'];$ti34 = $nb8;$ti35 = $nb9;
      // baris ke empat table ipk
      $ti41 = round($b4['nb_db']/$ti14,3);$ti42 = round($b4['nb_db']/$ti24,3);$ti43 = round($b4['nb_db']/$ti34,3);$ti44 = $b4['nb_db'];$ti45 = $nb10;
      // baris ke lima table ipk
      $ti51 = round($b5['nb_db']/$ti15,3);$ti52 = round($b5['nb_db']/$ti25,3);$ti53 =
      round($b5['nb_db']/$ti35,3);$ti54 = round($b5['nb_db']/$ti45,3);$ti55 = $b5['nb_db'];

      // penJumlahan kolom ipk
      $jki61 = $ti11+$ti21+$ti31+$ti41+$ti51; // kolom aribut pertma
      $jki62 = $ti12+$ti22+$ti32+$ti42+$ti52; // kolom aribut kedua
      $jki63 = $ti13+$ti23+$ti33+$ti43+$ti53; // kolom aribut ketiga
      $jki64 = $ti14+$ti24+$ti34+$ti44+$ti54; // kolom aribut keempat
      $jki65 = $ti15+$ti25+$ti35+$ti45+$ti55; // kolom aribut ke lima

      // Matrik pembobotan hirarki untik semua Atribut ipk pembbotanKriteriaIpk
      $pibk11 = round($ti11/$jki61,3);$pibk12 = round($ti12/$jki62,3);$pibk13 = round($ti13/$jki63,3);$pibk14 =
      round($ti14/$jki64,3);$pibk15 = round($ti15/$jki65,3);
      // baris ke dua
      $pibk21 = round($ti21/$jki61,3);$pibk22 = round($ti22/$jki62,3);$pibk23 = round($ti23/$jki63,3);$pibk24 =
      round($ti24/$jki64,3);$pibk25 = round($ti25/$jki65,3);
      // baris ke 3
      $pibk31 = round($ti31/$jki61,3);$pibk32 = round($ti32/$jki62,3);$pibk33 = round($ti33/$jki63,3);$pibk34 =
      round($ti34/$jki64,3);$pibk35 = round($ti35/$jki65,3);
      // baris ke4
      $pibk41 = round($ti41/$jki61,3);$pibk42 = round($ti42/$jki62,3);$pibk43 = round($ti43/$jki63,3);$pibk44 =
      round($ti44/$jki64,3);$pibk45 = round($ti45/$jki65,3);
      // baris ke5
      $pibk51 = round($ti51/$jki61,3);$pibk52 = round($ti52/$jki62,3);$pibk53 = round($ti53/$jki63,3);$pibk54 =
      round($ti54/$jki64,3);$pibk55 = round($ti55/$jki65,3);

      // menghitinga jumlah baris
      $jbi16 = $pibk11+$pibk12+$pibk13+$pibk14+$pibk15; // baris ke 1 kolom ke 6
      $jbi26 = $pibk21+$pibk22+$pibk23+$pibk24+$pibk25; // baris ke 2 kolom ke 6
      $jbi36 = $pibk31+$pibk32+$pibk33+$pibk34+$pibk35; // baris ke 3 kolom ke 6
      $jbi46 = $pibk41+$pibk42+$pibk43+$pibk44+$pibk45; // baris ke 4 kolom ke 6
      $jbi56 = $pibk51+$pibk52+$pibk53+$pibk54+$pibk55; // baris ke 5 kolom ke 6

      // menghiting pw Ipk membagi jumlah di bagi kolom
      $pwi16 = round($jbi16/$jml_data,3);
      $pwi26 = round($jbi26/$jml_data,3);
      $pwi36 = round($jbi36/$jml_data,3);
      $pwi46 = round($jbi46/$jml_data,3);
      $pwi56 = round($jbi56/$jml_data,3);
      // menghiting nilai maksimum
      // jumlah kolom di kali Prioritas Kriteria/ Priority Weight
      $imaks = round(($jki61*$pwi16)+($jki62*$pwi26)+($jki63*$pwi36)+($jki64*$pwi46)+($jki65*$pwi56),3);
      $ici = round(($imaks-$jml_data)/($jml_data-1),3);
      $icr = round($ici/$rc,3);

      // isi Tabel Peng Ortu
      // baris 1
      $tp11 = $b1['nb_db'];$tp12 = $nb11;$tp13 = $nb12;$tp14 = $nb13;$tp15 = $nb14;
      // baris ke 2
      $tp21 = round($b2['nb_db']/$tp12,3);$tp22 = $b2['nb_db'];$tp23 = $nb15;$tp24 = $nb16;$tp25 = $nb17;
      // baris ke 3
      $tp31 = round($b3['nb_db']/$tp13,3);$tp32 = round($b3['nb_db']/$tp23,3);$tp33 = $b3['nb_db'];$tp34 = $nb18;$tp35 = $nb19;
      // baris ke 4
      $tp41 = round($b4['nb_db']/$tp14,3);$tp42 = round($b4['nb_db']/$tp24,3);$tp43 = round($b4['nb_db']/$tp34,3);$tp44 = $b4['nb_db'];$tp45 = $nb20;
      // baris ke 5
      $tp51 = round($b5['nb_db']/$tp15,3);$tp52 = round($b5['nb_db']/$tp25,3);$tp53 =
      round($b5['nb_db']/$tp35,3);$tp54 = round($b5['nb_db']/$tp45,3);$tp55 = $b5['nb_db'];

      // penJumlahan kolom peng ortu
      $jkp61 = $tp11+$tp21+$tp31+$tp41+$tp51; // kolom ke 6 baris ke 1
      $jkp62 = $tp12+$tp22+$tp32+$tp42+$tp52; // kolom ke 6 baris ke 2
      $jkp63 = $tp13+$tp23+$tp33+$tp43+$tp53; // kolom ke 6 baris ke 3
      $jkp64 = $tp14+$tp24+$tp34+$tp44+$tp54; // kolom ke 6 baris ke 4
      $jkp65 = $tp15+$tp25+$tp35+$tp45+$tp55; // kolom ke 6 baris ke 5

      // Matrik pembobotan hirarki untpk semua Atribut peng ortu pembbotanKriteriapeng ortu
      $ppbk11 = round($tp11/$jkp61,3);$ppbk12 = round($tp12/$jkp62,3);$ppbk13 =
      round($tp13/$jkp63,3);$ppbk14 = round($tp14/$jkp64,3);$ppbk15 = round($tp15/$jkp65,3);
      // baris ke 2
      $ppbk21 = round($tp21/$jkp61,3);$ppbk22 = round($tp22/$jkp62,3);$ppbk23 =
      round($tp23/$jkp63,3);$ppbk24 = round($tp24/$jkp64,3);$ppbk25 = round($tp25/$jkp65,3);
      // baris ke 3
      $ppbk31 = round($tp31/$jkp61,3);$ppbk32 = round($tp32/$jkp62,3);$ppbk33 =
      round($tp33/$jkp63,3);$ppbk34 = round($tp34/$jkp64,3);$ppbk35 = round($tp35/$jkp65,3);
      // baris ke4
      $ppbk41 = round($tp41/$jkp61,3);$ppbk42 = round($tp42/$jkp62,3);$ppbk43 =
      round($tp43/$jkp63,3);$ppbk44 = round($tp44/$jkp64,3);$ppbk45 = round($tp45/$jkp65,3);
      // baris ke5
      $ppbk51 = round($tp51/$jkp61,3);$ppbk52 = round($tp52/$jkp62,3);$ppbk53 =
      round($tp53/$jkp63,3);$ppbk54 = round($tp54/$jkp64,3);$ppbk55 = round($tp55/$jkp65,3);

      // menghitung jumlah baris
      $jbp16 = $ppbk11+$ppbk12+$ppbk13+$ppbk14+$ppbk15;
      $jbp26 = $ppbk21+$ppbk22+$ppbk23+$ppbk24+$ppbk25;
      $jbp36 = $ppbk31+$ppbk32+$ppbk33+$ppbk34+$ppbk35;
      $jbp46 = $ppbk41+$ppbk42+$ppbk43+$ppbk44+$ppbk45;
      $jbp56 = $ppbk51+$ppbk52+$ppbk53+$ppbk54+$ppbk55;

      // menghitpng pw peng ortu membagi jumlah baris di bagi jumlah data kolom alternatif pd database
      $pwp16 = round($jbp16/$jml_data,3);
      $pwp26 = round($jbp26/$jml_data,3);
      $pwp36 = round($jbp36/$jml_data,3);
      $pwp46 = round($jbp46/$jml_data,3);
      $pwp56 = round($jbp56/$jml_data,3);
      // menghitpng nilai maksimum
      // jumlah kolom di kali Prioritas Kriteria/ Priority Weight
      $pmaks = round(($jkp61*$pwp16)+($jkp62*$pwp26)+($jkp63*$pwp36)+($jkp64*$pwp46)+($jkp65*$pwp56),3);
      $pci = round(($pmaks-$jml_data)/($jml_data-1),3);
      $pcr = round($pci/$rc,3);


      // isi Tabel Tanggungan
      // baris ke 1
      $tt11 = $b1['nb_db'];$tt12 = $nb21;$tt13 = $nb22;$tt14 = $nb23;$tt15 = $nb24;
      // baris ke 2
      $tt21 = round($b2['nb_db']/$tt12,3);$tt22 = $b2['nb_db'];$tt23 = $nb25;$tt24 = $nb26;$tt25 = $nb27;
      // baris ke 3
      $tt31 = round($b3['nb_db']/$tt13,3);$tt32 = round($b3['nb_db']/$tt23,3);$tt33 = $b3['nb_db'];$tt34 = $nb28;$tt35 = $nb29;
      // baris ke 4
      $tt41 = round($b4['nb_db']/$tt14,3);$tt42 = round($b4['nb_db']/$tt24,3);$tt43 = round($b4['nb_db']/$tt34,3);$tt44 = $b4['nb_db'];$tt45 = $nb30;
      // baris ke 5
      $tt51 = round($b5['nb_db']/$tt15,3);$tt52 = round($b5['nb_db']/$tt25,3);$tt53 =
      round($b5['nb_db']/$tt35,3);$tt54 = round($b5['nb_db']/$tt45,3);$tt55 = $b5['nb_db'];

      // penJumlahan kolom tanggungan
      $jkt61 = $tt11+$tt21+$tt31+$tt41+$tt51; // kolom ke 6 baris ke 1
      $jkt62 = $tt12+$tt22+$tt32+$tt42+$tt52; // kolom ke 6 baris ke 2
      $jkt63 = $tt13+$tt23+$tt33+$tt43+$tt53; // kolom ke 6 baris ke 3
      $jkt64 = $tt14+$tt24+$tt34+$tt44+$tt54; // kolom ke 6 baris ke 4
      $jkt65 = $tt15+$tt25+$tt35+$tt45+$tt55; // kolom ke 6 baris ke 5

      // Matrik pembobotan hirarki untuk semua Atribut TANGGUNGAN pembbotanKriteriaUsia
      // baris ke 1
      $ptbk11 = round($tt11/$jkt61,3);$ptbk12 = round($tt12/$jkt62,3);$ptbk13 =
      round($tt13/$jkt63,3);$ptbk14 = round($tt14/$jkt64,3);$ptbk15 = round($tt15/$jkt65,3);
      // baris ke 2
      $ptbk21 = round($tt21/$jkt61,3);$ptbk22 = round($tt22/$jkt62,3);$ptbk23 =
      round($tt23/$jkt63,3);$ptbk24 = round($tt24/$jkt64,3);$ptbk25 = round($tt25/$jkt65,3);
      // baris ke 3
      $ptbk31 = round($tt31/$jkt61,3);$ptbk32 = round($tt32/$jkt62,3);$ptbk33 =
      round($tt33/$jkt63,3);$ptbk34 = round($tt34/$jkt64,3);$ptbk35 = round($tt35/$jkt65,3);
      // baris ke4
      $ptbk41 = round($tt41/$jkt61,3);$ptbk42 = round($tt42/$jkt62,3);$ptbk43 =
      round($tt43/$jkt63,3);$ptbk44 = round($tt44/$jkt64,3);$ptbk45 = round($tt45/$jkt65,3);
      // baris ke5
      $ptbk51 = round($tt51/$jkt61,3);$ptbk52 = round($tt52/$jkt62,3);$ptbk53 =
      round($tt53/$jkt63,3);$ptbk54 = round($tt54/$jkt64,3);$ptbk55 = round($tt55/$jkt65,3);

      // menghitunga jumlah baris
      $jbt16 = $ptbk11+$ptbk12+$ptbk13+$ptbk14+$ptbk15;
      $jbt26 = $ptbk21+$ptbk22+$ptbk23+$ptbk24+$ptbk25;
      $jbt36 = $ptbk31+$ptbk32+$ptbk33+$ptbk34+$ptbk35;
      $jbt46 = $ptbk41+$ptbk42+$ptbk43+$ptbk44+$ptbk45;
      $jbt56 = $ptbk51+$ptbk52+$ptbk53+$ptbk54+$ptbk55;

      // menghitung pw tanggungan membagi jumlah di bagi kolom
      $pwt16 = round($jbt16/$jml_data,3);
      $pwt26 = round($jbt26/$jml_data,3);
      $pwt36 = round($jbt36/$jml_data,3);
      $pwt46 = round($jbt46/$jml_data,3);
      $pwt56 = round($jbt56/$jml_data,3);
      // menghitung nilai maksimum
      // jumlah kolom di kali Prioritas Kriteria/ Priority Weight
      $umaks = round(($jkt61*$pwt16)+($jkt62*$pwt26)+($jkt63*$pwt36)+($jkt64*$pwt46)+($jkt65*$pwt56),3);
      // mencari nilai CI ((nilai max-n)/(n-1)) -> n = jumlah data atribut
      $tci = round(($umaks-$jml_data)/($jml_data-1),3);
      // mencari nilai CR (nilai CI/RC)
      $tcr = round($tci/$rc,3);

      // isi Table Semester
      $ts11 = $b1['nb_db'];$ts12 = $nb31;$ts13 = $nb32;$ts14 = $nb33;$ts15 = $nb34;
      $ts21 = round($b2['nb_db']/$ts12,3);$ts22 = $b2['nb_db'];$ts23 = $nb35;$ts24 = $nb36;$ts25 = $nb37;
      $ts31 = round($b3['nb_db']/$ts13,3);$ts32 = round($b3['nb_db']/$ts23,3);$ts33 = $b3['nb_db'];$ts34 = $nb38;$ts35 = $nb39;
      $ts41 = round($b4['nb_db']/$ts14,3);$ts42 = round($b4['nb_db']/$ts24,3);$ts43 = round($b4['nb_db']/$ts34,3);$ts44 = $b4['nb_db'];$ts45 = $nb40;
      $ts51 = round($b5['nb_db']/$ts15,3);$ts52 = round($b5['nb_db']/$ts25,3);$ts53 =
      round($b5['nb_db']/$ts35,3);$ts54 = round($b5['nb_db']/$ts45,3);$ts55 = $b5['nb_db'];

      // penJumlahan kolom semester
      $jks61 = $ts11+$ts21+$ts31+$ts41+$ts51;
      $jks62 = $ts12+$ts22+$ts32+$ts42+$ts52;
      $jks63 = $ts13+$ts23+$ts33+$ts43+$ts53;
      $jks64 = $ts14+$ts24+$ts34+$ts44+$ts54;
      $jks65 = $ts15+$ts25+$ts35+$ts45+$ts55;

      // Matrik pembobotan hirarki untsk semua Atribut semester pembbotanKriteriasemester
      $psbk11 = round($ts11/$jks61,3);$psbk12 = round($ts12/$jks62,3);$psbk13 =
      round($ts13/$jks63,3);$psbk14 = round($ts14/$jks64,3);$psbk15 = round($ts15/$jks65,3);
      // baris ke dua
      $psbk21 = round($ts21/$jks61,3);$psbk22 = round($ts22/$jks62,3);$psbk23 =
      round($ts23/$jks63,3);$psbk24 = round($ts24/$jks64,3);$psbk25 = round($ts25/$jks65,3);
      // baris ke 3
      $psbk31 = round($ts31/$jks61,3);$psbk32 = round($ts32/$jks62,3);$psbk33 =
      round($ts33/$jks63,3);$psbk34 = round($ts34/$jks64,3);$psbk35 = round($ts35/$jks65,3);
      // baris ke4
      $psbk41 = round($ts41/$jks61,3);$psbk42 = round($ts42/$jks62,3);$psbk43 =
      round($ts43/$jks63,3);$psbk44 = round($ts44/$jks64,3);$psbk45 = round($ts45/$jks65,3);
      // baris ke5
      $psbk51 = round($ts51/$jks61,3);$psbk52 = round($ts52/$jks62,3);$psbk53 =
      round($ts53/$jks63,3);$psbk54 = round($ts54/$jks64,3);$psbk55 = round($ts55/$jks65,3);

      // menghitung jumlah baris semester
      $jbs16 = $psbk11+$psbk12+$psbk13+$psbk14+$psbk15;
      $jbs26 = $psbk21+$psbk22+$psbk23+$psbk24+$psbk25;
      $jbs36 = $psbk31+$psbk32+$psbk33+$psbk34+$psbk35;
      $jbs46 = $psbk41+$psbk42+$psbk43+$psbk44+$psbk45;
      $jbs56 = $psbk51+$psbk52+$psbk53+$psbk54+$psbk55;

      // menghitsng pw semester membagi jumlah di bagi kolom
      $pws16 = round($jbs16/$jml_data,3);
      $pws26 = round($jbs26/$jml_data,3);
      $pws36 = round($jbs36/$jml_data,3);
      $pws46 = round($jbs46/$jml_data,3);
      $pws56 = round($jbs56/$jml_data,3);
      // menghitsng nilai maksimum
      // jumlah kolom di kali Prioritas Kriteria Priority Weight
      $smaks = round(($jks61*$pws16)+($jks62*$pws26)+($jks63*$pws36)+($jks64*$pws46)+($jks65*$pws56),3);
      $sci = round(($smaks-$jml_data)/($jml_data-1),3);
      $scr = round($sci/$rc,3);
    ?>

    <div class="container-fluid"> <!--awal container fluid-->

      <div class="row"> <!--awal row-->
        <div class="col-lg-10 offset-lg-1">
          <div class="card bg-light mn-3"> <!--awal card-->
            <div class="card-header">
              Tabel Perhitungan Hasil Alternatif
            </div>
            <div class="card-body">

              <div class="row">
                <div class="col-lg-10 offset-lg-1">
                  <div class="card bg-light mb-3">
                    <div class="card-header">
                      Hasil Alternatif Spesifikasi
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered table-striped table-sm">
                        <thead class="thead-light">
                          <tr align="center">
                            <th>SPESIFIKASI</th>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <th>P.Weight</th>
                            <th>CR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $ti11; ?></td>
                            <td><?php echo $ti12; ?></td>
                            <td><?php echo $ti13; ?></td>
                            <td><?php echo $ti14; ?></td>
                            <td><?php echo $ti15; ?></td>
                            <td><?php echo $pwi16; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $ti21; ?></td>
                            <td><?php echo $ti22; ?></td>
                            <td><?php echo $ti23; ?></td>
                            <td><?php echo $ti24; ?></td>
                            <td><?php echo $ti25; ?></td>
                            <td><?php echo $pwi26; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $ti31; ?></td>
                            <td><?php echo $ti32; ?></td>
                            <td><?php echo $ti33; ?></td>
                            <td><?php echo $ti34; ?></td>
                            <td><?php echo $ti35; ?></td>
                            <td><?php echo $pwi36; ?></td>
                            <th><font color="red"><?php echo $icr; ?></font></th>
                          </tr>
                          <tr>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $ti41; ?></td>
                            <td><?php echo $ti42; ?></td>
                            <td><?php echo $ti43; ?></td>
                            <td><?php echo $ti44; ?></td>
                            <td><?php echo $ti45; ?></td>
                            <td><?php echo $pwi46; ?></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $ti51; ?></td>
                            <td><?php echo $ti52; ?></td>
                            <td><?php echo $ti53; ?></td>
                            <td><?php echo $ti54; ?></td>
                            <td><?php echo $ti55; ?></td>
                            <td><?php echo $pwi56; ?></td>
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
                      Hasil Alternatif Budget
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered table-striped table-sm">
                        <thead class="thead-light">
                          <tr align="center">
                            <th>BUDGET</th>
                            <th><?php echo $b1['alternatif1']; ?></th>
                            <th><?php echo $b2['alternatif1']; ?></th>
                            <th><?php echo $b3['alternatif1']; ?></th>
                            <th><?php echo $b4['alternatif1']; ?></th>
                            <th><?php echo $b5['alternatif1']; ?></th>
                            <th>P.Weight</th>
                            <th>CR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $tp11; ?></td>
                            <td><?php echo $tp12; ?></td>
                            <td><?php echo $tp13; ?></td>
                            <td><?php echo $tp14; ?></td>
                            <td><?php echo $tp15; ?></td>
                            <td><?php echo $pwp16; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $tp21; ?></td>
                            <td><?php echo $tp22; ?></td>
                            <td><?php echo $tp23; ?></td>
                            <td><?php echo $tp24; ?></td>
                            <td><?php echo $tp25; ?></td>
                            <td><?php echo $pwp26; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $tp31; ?></td>
                            <td><?php echo $tp32; ?></td>
                            <td><?php echo $tp33; ?></td>
                            <td><?php echo $tp34; ?></td>
                            <td><?php echo $tp35; ?></td>
                            <td><?php echo $pwp36; ?></td>
                            <th><font color="red"><?php echo $pcr; ?></font></th>
                          </tr>
                          <tr>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $tp41; ?></td>
                            <td><?php echo $tp42; ?></td>
                            <td><?php echo $tp43; ?></td>
                            <td><?php echo $tp44; ?></td>
                            <td><?php echo $tp45; ?></td>
                            <td><?php echo $pwp46; ?></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $tp51; ?></td>
                            <td><?php echo $tp52; ?></td>
                            <td><?php echo $tp53; ?></td>
                            <td><?php echo $tp54; ?></td>
                            <td><?php echo $tp55; ?></td>
                            <td><?php echo $pwp56; ?></td>
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
                      Hasil Alternatif Baterai
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered table-striped table-sm">
                        <thead class="thead-light">
                          <tr align="center">
                            <th>BATERAI</th>
                            <th><?php echo $b1['alternatif1']; ?></th>
                            <th><?php echo $b2['alternatif1']; ?></th>
                            <th><?php echo $b3['alternatif1']; ?></th>
                            <th><?php echo $b4['alternatif1']; ?></th>
                            <th><?php echo $b5['alternatif1']; ?></th>
                            <th>P.Weight</th>
                            <th>CR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $tt11; ?></td>
                            <td><?php echo $tt12; ?></td>
                            <td><?php echo $tt13; ?></td>
                            <td><?php echo $tt14; ?></td>
                            <td><?php echo $tt15; ?></td>
                            <td><?php echo $pwt16; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $tt21; ?></td>
                            <td><?php echo $tt22; ?></td>
                            <td><?php echo $tt23; ?></td>
                            <td><?php echo $tt24; ?></td>
                            <td><?php echo $tt25; ?></td>
                            <td><?php echo $pwt26; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $tt31; ?></td>
                            <td><?php echo $tt32; ?></td>
                            <td><?php echo $tt33; ?></td>
                            <td><?php echo $tt34; ?></td>
                            <td><?php echo $tt35; ?></td>
                            <td><?php echo $pwt36; ?></td>
                            <th><font color="red"><?php echo $tcr; ?></font></th>
                          </tr>
                          <tr>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $tt41; ?></td>
                            <td><?php echo $tt42; ?></td>
                            <td><?php echo $tt43; ?></td>
                            <td><?php echo $tt44; ?></td>
                            <td><?php echo $tt45; ?></td>
                            <td><?php echo $pwt46; ?></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $tt51; ?></td>
                            <td><?php echo $tt52; ?></td>
                            <td><?php echo $tt53; ?></td>
                            <td><?php echo $tt54; ?></td>
                            <td><?php echo $tt55; ?></td>
                            <td><?php echo $pwt56; ?></td>
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
                      Hasil Alternatif Sistem Operasi
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered table-striped table-sm">
                        <thead class="thead-light">
                          <tr align="center">
                            <th>SISTEM OPERASI</th>
                            <th><?php echo $b1['alternatif1']; ?></th>
                            <th><?php echo $b2['alternatif1']; ?></th>
                            <th><?php echo $b3['alternatif1']; ?></th>
                            <th><?php echo $b4['alternatif1']; ?></th>
                            <th><?php echo $b5['alternatif1']; ?></th>
                            <th>P.Weight</th>
                            <th>CR</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $ts11; ?></td>
                            <td><?php echo $ts12; ?></td>
                            <td><?php echo $ts13; ?></td>
                            <td><?php echo $ts14; ?></td>
                            <td><?php echo $ts15; ?></td>
                            <td><?php echo $pws16; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $ts21; ?></td>
                            <td><?php echo $ts22; ?></td>
                            <td><?php echo $ts23; ?></td>
                            <td><?php echo $ts24; ?></td>
                            <td><?php echo $ts25; ?></td>
                            <td><?php echo $pws26; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $ts31; ?></td>
                            <td><?php echo $ts32; ?></td>
                            <td><?php echo $ts33; ?></td>
                            <td><?php echo $ts34; ?></td>
                            <td><?php echo $ts35; ?></td>
                            <td><?php echo $pws36; ?></td>
                            <th><font color="red"><?php echo $scr; ?></font></th>
                          </tr>
                          <tr>
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $ts41; ?></td>
                            <td><?php echo $ts42; ?></td>
                            <td><?php echo $ts43; ?></td>
                            <td><?php echo $ts44; ?></td>
                            <td><?php echo $ts45; ?></td>
                            <td><?php echo $pws46; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $ts51; ?></td>
                            <td><?php echo $ts52; ?></td>
                            <td><?php echo $ts53; ?></td>
                            <td><?php echo $ts54; ?></td>
                            <td><?php echo $ts55; ?></td>
                            <td><?php echo $pws56; ?></td>
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
                      Atribut
                    </div>
                    <div class="card-body">
                      <?php
                      $query = mysqli_query($koneksi, "SELECT * FROM pw_kriteria ORDER BY id DESC LIMIT 1");
                      $q_pw  = mysqli_fetch_array($query);
                      ?>
                      <table class="table table-bordered table-striped table-sm">
                        <tbody>
                          <tr>
                            <th rowspan="2"></th>
                            <th colspan="4"><center>ATRIBUTE</center></th>
                            <th rowspan="3">Alt. Weight Evaluation</th>
                          </tr>
                          <tr align="center">
                            <th><?php echo $bk1['kriteria1']; ?></th>
                            <th><?php echo $bk2['kriteria1']; ?></th>
                            <th><?php echo $bk3['kriteria1']; ?></th>
                            <th><?php echo $bk4['kriteria1']; ?></th>
                          </tr>
                          <tr align="center">
                            <th><center>Atribute Weight</center></th>
                            <td><?php echo $q_pw['pw1']; ?></td>
                            <td><?php echo $q_pw['pw2']; ?></td>
                            <td><?php echo $q_pw['pw3']; ?></td>
                            <td><?php echo $q_pw['pw4']; ?></td>
                          </tr>
                          <tr>
                            <th><center>Alternatif</center></th>
                            <th colspan="4"></th>
                            <th></th>
                          </tr>

                          <tr align="center">
                            <td><?php echo $b1['alternatif1']; ?></td>
                            <td><?php echo $pwi16; ?></td>
                            <td><?php echo $pwp16; ?></td>
                            <td><?php echo $pwt16; ?></td>
                            <td><?php echo $pws16; ?></td>
                            <td><?php echo round(($q_pw['pw1']*$pwi16)+($q_pw['pw2']*$pwp16)+($q_pw['pw3']*$pwt16)+($q_pw['pw4']*$pws16),3); ?></td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b2['alternatif1']; ?></td>
                            <td><?php echo $pwi26; ?></td>
                            <td><?php echo $pwp26; ?></td>
                            <td><?php echo $pwt26; ?></td>
                            <td><?php echo $pws26; ?></td>
                            <td><?php echo round(($q_pw['pw1']*$pwi26)+($q_pw['pw2']*$pwp26)+($q_pw['pw3']*$pwt26)+($q_pw['pw4']*$pws26),3); ?></td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b3['alternatif1']; ?></td>
                            <td><?php echo $pwi36; ?></td>
                            <td><?php echo $pwp36; ?></td>
                            <td><?php echo $pwt36; ?></td>
                            <td><?php echo $pws36; ?></td>
                            <td><?php echo round(($q_pw['pw1']*$pwi36)+($q_pw['pw2']*$pwp36)+($q_pw['pw3']*$pwt36)+($q_pw['pw4']*$pws36),3); ?></td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b4['alternatif1']; ?></td>
                            <td><?php echo $pwi46; ?></td>
                            <td><?php echo $pwp46; ?></td>
                            <td><?php echo $pwt46; ?></td>
                            <td><?php echo $pws46; ?></td>
                            <td><?php echo round(($q_pw['pw1']*$pwi46)+($q_pw['pw2']*$pwp46)+($q_pw['pw3']*$pwt46)+($q_pw['pw4']*$pws46),3); ?></td>
                          </tr>
                          <tr align="center">
                            <td><?php echo $b5['alternatif1']; ?></td>
                            <td><?php echo $pwi56; ?></td>
                            <td><?php echo $pwp56; ?></td>
                            <td><?php echo $pwt56; ?></td>
                            <td><?php echo $pws56; ?></td>
                            <td><?php echo round(($q_pw['pw1']*$pwi56)+($q_pw['pw2']*$pwp56)+($q_pw['pw3']*$pwt56)+($q_pw['pw4']*$pws56),3); ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

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
