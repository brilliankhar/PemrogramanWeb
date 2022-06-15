<?php 
require "koneksi.php";

if
(
  ($_POST['nama_kecamatan']=="") or 
  ($_POST['jumlah_desa']=="") or 
  ($_POST['id_kab']=="")
)
{
  echo "<script language='javascript'> alert('Data Belum Lengkap!');
  window.open('form_kecamatan.php','_top');</script>"; 
}else{
  $Nama_kecamatan = $_POST['nama_kecamatan'];
  $Jumlah_desa = $_POST['jumlah_desa'];
  $Id_kabupaten = $_POST['id_kab'];

$sql = "INSERT INTO kecamatan
(
  id_kec,
  nama_kecamatan,
  jumlah_desa,
  nama_kabupaten
)
VALUES
(
  NULL,
  '$Nama_kecamatan',
  '$Jumlah_desa',
  '$Id_kabupaten'
)";

$hasil=mysqli_query($koneksi,$sql);
if($hasil){
  echo "<script language='javascript'>alert('Proses simpan data Berhasil');
  window.open('data_kecamatan.php','_top')</script>";
}else{
  echo "<script language='javascript'>alert('Proses simpan data Gagal');
  window.open('form_kecamatan.php','_top')</script>";
}
}

?>