<?php 
require "koneksi.php";

if
(
  ($_POST['id_kec']=="") or
  ($_POST['nama_desa']=="") or 
  ($_POST['kepala_desa']=="") or 
  ($_POST['tahun_berdiri']=="")
)
{
  echo "<script language='javascript'> alert('Data Belum Lengkap!');
  window.open('form_desa.php','_top');</script>"; 
}else{
  $Id_kecamatan = $_POST['id_kec'];
  $Nama_desa = $_POST['nama_desa'];
  $Kepala_desa = $_POST['kepala_desa'];
  $Tahun_berdiri = $_POST['tahun_berdiri'];
var_dump($Id_kecamatan);
$sql = "INSERT INTO desa
(
  id_desa,
  nama_kecamatan,
  nama_desa,
  kepala_desa,
  tahun_berdiri
)
VALUES
(
  NULL,
  '$Id_kecamatan',
  '$Nama_desa',
  '$Kepala_desa',
  '$Tahun_berdiri'
)";
var_dump($sql);
$hasil=mysqli_query($koneksi,$sql);
var_dump($hasil);
if($hasil){
  echo "<script language='javascript'>alert('Proses simpan data Berhasil');
  window.open('data_desa.php','_top')</script>";
}else{
  echo "<script language='javascript'>alert('Proses simpan data Gagal');
  window.open('form_desa.php','_top')</script>";
}
}

?>