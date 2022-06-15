<?php 
require "koneksi.php";

if
(
  ($_POST['nama_kabupaten']=="") or 
  ($_POST['ibukota_kabupaten']=="") or 
  ($_POST['luas_wilayah']=="")
)
{
  echo "<script language='javascript'> alert('Data Belum Lengkap!');
  window.open('form_kabupaten.php','_top');</script>"; 
}else{
  $Nama_kabupaten = $_POST['nama_kabupaten'];
$Ibukota_kabupaten = $_POST['ibukota_kabupaten'];
$Luas_wilayah = $_POST['luas_wilayah'];

$sql = "INSERT INTO kabupaten
(
  id_kabupaten,
  nama_kabupaten,
  ibukota_kabupaten,
  luas_wilayah
)
VALUES
(
  NULL,
  '$Nama_kabupaten',
  '$Ibukota_kabupaten',
  '$Luas_wilayah'
)";

$hasil=mysqli_query($koneksi,$sql);
}
?>